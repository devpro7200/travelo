<?php 
$config = array(
                 'vendorAdminForm' => array(
                                    array(
                                            'field' => 'user_name',
                                            'label' => 'Username',
                                            'rules' => 'required'
                                         ),
									array(
                                            'field' => 'user_name',
                                            'label' => 'Username',
                                            'rules' => 'callback_username_check'
                                         ),
									 array(
                                            'field' => 'name',
                                            'label' => 'name',
                                            'rules' => 'required'
                                         ),	 	 
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'email',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'email',
                                            'rules' => 'callback_email_check'
                                         ),
									array(
                                            'field' => 'phone',
                                            'label' => 'phone',
                                            'rules' => 'required'
                                         ),	
									array(
                                            'field' => 'address',
                                            'label' => 'address',
                                            'rules' => 'required'
                                         ),		  
										 
                                    )
                                     
               );
			   
	//$this->form_validation->set_rules('email', 'Email', 'callback_vendor_email_check');			   