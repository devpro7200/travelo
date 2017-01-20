<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function Auth()
	{
	 parent::__construct();
	}
	public function index()
	{
		$authInfo=$this->session->all_userdata();
		if(is_array($authInfo) && array_key_exists("auth",$authInfo))
		{
			if($authInfo['auth'])
			{
				$userType=$authInfo['userType'];
				if($userType==1)
				{
				 redirect(site_url()."/admin/");	
				}
				else if($userType==2)
				{
				 redirect(site_url()."/vendor/");	
				}
				else if($userType==3)
				{
				 redirect(site_url()."/user/");	
				}
			}
			else 
			{
				$this->load->view("login");
			}
		}
		
		else 
		{
		    $this->load->view("login");
		}
    }	
    /*
      @it's used check weather the enter user exist or not if exist then make them login
    */	
	public function login()
	{
      
	  
	  $username=$this->input->post("username");
      $password=$this->input->post("password");	  
	  $this->load->model("login_model","auth");
	  if($this->auth->userExists($username,$password))
	  {
		  $userdata = array(
					   'username'  => $this->auth->userName,
					   'password'  => $this->auth->userPassword,
					   'userType'  =>$this->auth->userType,
					   'auth' => TRUE
				   );
		  $this->session->set_userdata($userdata); 
		  if($this->auth->userType==1)
		  {
		  redirect(site_url()."/admin/");
		  }
		  else if($this->auth->userType==2)
		  {
		  redirect(site_url()."/vendor/");
		  }
		  else if($this->auth->userType==3)
		  {
		  redirect(site_url()."/user/");
		  }
	  }
	  else 
	  {
		  $msg='<h5 style="color:red">Sorry entered username/password is wrong</h5>';
		  $this->session->set_flashdata('res',$msg);
		  redirect(site_url()."/auth/");
	  }
	}
	public function logout(){
		$userdata = array(
                   'username'  =>'',
                   'password'     =>'',
                   'auth' =>''
               );
        $this->session->unset_userdata($userdata);
		//$this->session->sess_destroy();
		$msg='<h5 style="color:green">you are successfully logged out</h5>';
		$this->session->set_flashdata('res',$msg);
		redirect(site_url()."/auth");
		$this->session->sess_destroy();
	}//end method
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */