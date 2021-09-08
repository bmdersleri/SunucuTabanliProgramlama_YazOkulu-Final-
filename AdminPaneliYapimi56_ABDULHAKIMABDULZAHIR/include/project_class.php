<?php 

class project{
	
	public $baseurl= "http://127.0.0.1/uni/";
	public $admindir="manage";	
	public $prifix ="uni_";
	public $admin  ="admin";
	public $slider = "slider";
	public $home     = "home";
	public $about     = "about";
	public $gallery   = "gallery";
	public $media     = "media";
	public $contact   ="contact";
	public $logo      ="logo";
	
	public function base_url()
	{
		
		return $this->baseurl;
	}
	
	public function admin_url(){
		
		return $this->baseurl.$this->admindir.'/';
	}
	
}


?>