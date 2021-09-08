input_credit_card = function(jQinp)
{
    var format_and_pos = function(input, char, backspace)
    {
        var start = 0;
        var end = 0;
        var pos = 0;
        var value = input.value;

        if (char !== false)
        {
            start = input.selectionStart;
            end = input.selectionEnd;

            if (backspace && start > 0) // handle backspace onkeydown
            {
                start--;

                if (value[start] == " ")
                { start--; }
            }
            // To be able to replace the selection if there is one
            value = value.substring(0, start) + char + value.substring(end);

            pos = start + char.length; // caret position
        }

        var d = 0; // digit count
        var dd = 0; // total
        var gi = 0; // group index
        var newV = "";
        var groups = /^\D*3[47]/.test(value) ? // check for American Express
            [4, 6, 5] : [4, 4, 4, 4];

        for (var i = 0; i < value.length; i++)
        {
            if (/\D/.test(value[i]))
            {
                if (start > i)
                { pos--; }
            }
            else
            {
                if (d === groups[gi])
                {
                    newV += " ";
                    d = 0;
                    gi++;

                    if (start >= i)
                    { pos++; }
                }
                newV += value[i];
                d++;
                dd++;
            }
            if (d === groups[gi] && groups.length === gi + 1) // max length
            { break; }
        }
        input.value = newV;

        if (char !== false)
        { input.setSelectionRange(pos, pos); }
    };

    jQinp.keypress(function(e)
    {
        var code = e.charCode || e.keyCode || e.which;

        // Check for tab and arrow keys (needed in Firefox)
        if (code !== 9 && (code < 37 || code > 40) &&
            // and CTRL+C / CTRL+V
            !(e.ctrlKey && (code === 99 || code === 118)))
        {
            e.preventDefault();

            var char = String.fromCharCode(code);

            // if the character is non-digit
            // -> return false (the character is not inserted)

            if (/\D/.test(char))
            { return false; }

            format_and_pos(this, char);
        }
    }).
    keydown(function(e) // backspace doesn't fire the keypress event
    {
        if (e.keyCode === 8 || e.keyCode === 46) // backspace or delete
        {
            e.preventDefault();
            format_and_pos(this, '', this.selectionStart === this.selectionEnd);
        }
    }).
    on('paste', function()
    {
        // A timeout is needed to get the new value pasted
        setTimeout(function()
        { format_and_pos(jQinp[0], ''); }, 50);
    }).
    blur(function() // reformat onblur just in case (optional)
    {
        format_and_pos(this, false);
    });
};

input_credit_card($('#credit-card'));