<?php 
function _adminLayout($filename,$data=null)
{
	   $obj=& get_instance();
	   $obj->load->view("common/header");
	   $obj->load->view($filename,$data);
	   $obj->load->view("common/footer");
}
function _vendorLayout($filename,$data=null)
{
	   $obj=& get_instance();
	   $obj->load->view("common/header");
	   $obj->load->view($filename,$data);
	   $obj->load->view("common/footer");
}
function _userLayout($filename,$data=null)
{
	   $obj=& get_instance();
	   $obj->load->view("common/header");
	   $obj->load->view($filename,$data);
	   $obj->load->view("common/footer");
}

?>