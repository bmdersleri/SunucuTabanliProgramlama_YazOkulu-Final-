<?php
$contact_name = null;
$contact_mail = null;
$contact_phone = null;
$contact_subject = null;
$contact_message = null;
if(post('submit')){
	$contact_name = post('name');
	$contact_mail = post('mail');
	$contact_phone = post('phone');
	$contact_subject = post('subject');
	$contact_message = post('message');

	if(!$contact_name || !$contact_mail || !$contact_phone || !$contact_subject || !$contact_message){
		$error = lang('error-msg-empty');
	}else{
		if(filter_var($contact_mail, FILTER_VALIDATE_EMAIL)){
			$query = query("insert into contact_us (name,mail,phone,subject,message,status)values('$contact_name','$contact_mail','$contact_phone','$contact_subject','$contact_message','NOT READ')");
			if($query){
				$error = lang('success-msg-contact');
			}else{
				$error = lang('error-msg-db');
			}
		}else{
			$error = lang('error-msg-mail');
		}
	}
}

$h1 = lang('contacts');
$desc = lang('contact-location').":".trim(lang('company-address')) . " " 
. lang('phoneandfax').":".lang('company-phone') . " " 
.lang('company-phone2').":".lang('company-phone2') . " " 
.lang('company-mail');


require view('contact');
