<?php 
include"lib/head.php";

?>
 <body class="animated-content">
        
        <?php include"lib/header.php"; ?>

        <div id="wrapper">
            <div id="layout-static">
                <?php include"lib/sidebar.php"; ?>
				
				
				
				
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li><a href="index.html">Home</a></li>
<li><a href="#">Advanced Forms</a></li>
<li class="active"><a href="ui-forms.html">Form Components</a></li>

                            </ol>
							
							
                            <div class="container-fluid">
                                
<div data-widget-group="group1">

	<div class="panel panel-default" >
		<div class="panel-heading">
			<h2>Basic Form Elements</h2>
			
		</div>
		<div class="panel-editbox" data-widget-controls=""></div>
		<div class="panel-body">
		
			<form method="post" enctype="multipart/form-data" class="form-horizontal row-border">
			
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Input with Placeholder</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" placeholder="Placeholder">
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Select Box</label>
					<div class="col-sm-8">
						<select class="form-control" id="source">
							<optgroup label="Alaskan/Hawaiian Time Zone">
								<option value="AK">Alaska</option>
								<option value="HI">Hawaii</option>
							</optgroup>
							<optgroup label="Pacific Time Zone">
								<option value="CA">California</option>
								<option value="NV">Nevada</option>
								<option value="OR">Oregon</option>
								<option value="WA">Washington</option>
							</optgroup>
							
						</select>
					</div>
				</div>
				
				

				<div class="form-group">
					<label class="col-sm-2 control-label">Disabled Dropdown</label>
					<div class="col-sm-8">
						<select class="form-control"  placeholder="Disabled Dropdown">
							<option>Alaska</option>
							<option>Lorem ipsum dolor.</option>
							<option>Amet, impedit aperiam?</option>
							<option>Nemo, alias, quasi?</option>
							<option>Inventore, expedita.</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Multi-select Box</label>
					<div class="col-sm-8">
						<select class="form-control" multiple>
							<option>Lorem ipsum dolor.</option>
							<option>Amet, impedit aperiam?</option>
							<option>Nemo, alias, quasi?</option>
							<option>Inventore, expedita.</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Inline Radio</label>
					<div class="col-sm-8">
						<label class="radio-inline icheck">
							<input type="radio" id="inlineradio1" value="option1" name="optionsRadiosInline" > Option 1
						</label>
						<label class="radio-inline icheck">
							<input type="radio" id="inlineradio2" value="option2" name="optionsRadiosInline" > Option 2
						</label>
						<label class="radio-inline icheck">
							<input type="radio" id="inlineradio3" value="option3" name="optionsRadiosInline" > Option 3
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Radio</label>
					<div class="col-sm-8">

						<label class="radio icheck">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							Option one is this and that
						</label>

						<label class="radio icheck">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Option two can be something else
						</label>

					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Inline Checkbox</label>
					<div class="col-sm-8">
						<label class="checkbox-inline icheck">
							<input type="checkbox" id="inlinecheckbox1" value="option1"> Option 1
						</label>
						<label class="checkbox-inline icheck">
							<input type="checkbox" id="inlinecheckbox2" value="option2"> Option 2
						</label>
						<label class="checkbox-inline icheck">
							<input type="checkbox" id="inlinecheckbox3" value="option3"> Option 3
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Checkbox</label>
					<div class="col-sm-8">

							<label class="checkbox icheck">
								<input type="checkbox" value="">
								Option one is this and that
							</label>
							
							<label class="checkbox icheck">
								<input type="checkbox" value="">
								Option two can be something else
							</label>

					</div>
				</div>
				
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Textarea</label>
					<div class="col-sm-8">
						<textarea class="form-control"></textarea>
					</div>
				</div>
				
				
				
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Image Upload Widgets</label>
					<div class="col-sm-5">
						<div class="fileinput fileinput-new" style="width: 100%;" data-provides="fileinput">
							<div class="fileinput-preview thumbnail mb20" data-trigger="fileinput" style="width: 100%; height: 150px;"></div>
							<div>
								<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								<span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="alert alert-info">Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.</div>
					</div>
				</div>
				
				
			</form>
			
		</div>
		
		
		
		
		
		<div class="panel-footer">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<button class="btn-primary btn" type="submit" name="save" >Submit</button>
					
				</div>
			</div>
		</div>
	</div>


</div>


                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
					
					
<?php include"lib/footer.php"; ?>

    <!-- End loading page level scripts-->

    </body>
</html>