<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
		  if($userType==2)
		  {
			 redirect(site_url()."/vendor"); 
		  }
		 else if($userType==3)
		  {
			 redirect(site_url()."/user"); 
		  }
		}
		$this->load->helper("layout_helper");
	} 
	/*
	
	*/
	public function index()
	{
		_adminLayout("dashboard");
	}
	/*
	
	*/
	public function generalSetting()
	{
		_adminLayout("generalSetting");
	}

	/*
	*/
	
	public function vendorList()
	{
		
		_adminLayout("vendorList");
	}
	/*
	
	*/
	public function addVendor()
	{
		
		_adminLayout("addVendor");
	}
	/*
	*/
	public function deleteVendor()
	{
		
	}
	/**/
	public function updaterVendor()
	{
		
		
	}
	/**/
	public function hotelList()
	{
		_adminLayout("hotelList");
	}
	/*  */
	public function vendorHotel()
	{
		
		
	}
	/**/
	public function hotelRoom()
	{
		
	}
	/**/
	public function room()
	{
		
		
	}
	/**/
	public function userList()
	{
		
		_adminLayout("userList");
	}
	

}//end class
