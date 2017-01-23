<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('auth'))
		{
			redirect(site_url()."/auth/");
		}
		else if($this->session->userdata('auth')) 
		{
		  $userType=$this->session->userdata("userType");
		  if($userType==1)
		  {
			 redirect(site_url()."/admin"); 
		  }
		 else if($userType==2)
		  {
			 redirect(site_url()."/vendor"); 
		  }
		}
		$this->load->helper("layout_helper");
	} 
	/*
	
	*/
	public function index()
	{
		_userLayout("dashboard");
	}
	/*
	
	*/
	public function viewProfile()
	{
		_userLayout("profile");
	}
	

}//end class
