
<?php
class User extends CI_Controller
{
	function User()
	{
		parent::__construct();
		$this->view_data['base_url'] = base_url();
		$this->load->model('User_model');
	}

	function index()  
	{
		redirect('user/login/', 'refresh');
   	}
	
	function login()
	{
	 if($this->session->userdata('username') == '')
	 {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|xss_clean|required');
		$this->form_validation->set_rules('password','Password','trim||xss_clean|required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('master_view', array('page' => 'view_login', 'data' => NULL) );
		}else 
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
		if($this->User_model->set_login($username,$password)){
							//$category = $this->User_model->get_category();
							//$data = array(
															//'category' => $category
														//);
							redirect('/user/call/', 'refresh');
						}
						else
						{
							echo "<font color=#AA0000 face=Arial>Login Error!</font>";
							redirect('/user/login/', 'refresh');
						}
		
		}
	 }else
				{
					redirect('/user/call/', 'refresh');
				}
	}
   	
	
function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','trim|xss_clean|required|callback_username_not_exist');
		$this->form_validation->set_rules('agent-id','Agent ID','trim|xss_clean|required');
		$this->form_validation->set_rules('password','Password','trim|xss_clean|required');
		$this->form_validation->set_rules('password_conf','Confirm Password','trim||xss_clean|required|matches[password]');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('master_view', array('page' => 'view_register', 'data' => NULL) );
		}else 
		{
			$username = $this->input->post('username');
			$agent_id= $this->input->post('agent-id');
			$password = $this->input->post('password');
		if($this->User_model->set_register($username,$password,$agent_id))
						{
							$this->session->set_flashdata('insertdata', 'The data was inserted');
							$this->load->view('master_view', array('page' => 'view_register', 'data' => NULL));
						}else
						{
							return FALSE;
						}
			
		}
	 
		
	}
	
	function username_not_exist($username)
		{
			$this->form_validation->set_message('username_not_exist','That username already exist choose another username');
			if($this->User_model->check_exist_username($username))
			{
				return FALSE;
			}else
			{
				return TRUE;
			}
		}
	
   	function call()
	{
		if($this->session->userdata('username') != '')
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('phonenumber','PhoneNumber','trim|required|numeric|xss_clean|max_length[10]|');
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('master_view', array('page' => 'view_main', 'data' => NULL));
			}else
			{
				$phonenumber = $this->input->post('phonenumber');
	
				//check if there's an existing record(s)
				$exist = $this->User_model->search($phonenumber);
				
				if($exist ==  FALSE) { 			//if no record found, redirect to create new record
					redirect('/record/new_record/'.$phonenumber,'refresh');				
				} else {						//if record found, load data
					$record = $exist->row();
					
					redirect('/record/reload/'.$phonenumber, 'refresh');
				}
				
				
				//$this->session->set_userdata('phonenumber',$phonenumber);
				//redirect('/user/call_view_search/','refresh');
			}
		}else
				{
					redirect('/user/login/', 'refresh');
				}
	}
	 
	function call_view_search()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name','first_name','trim|xss_clean');
		$this->form_validation->set_rules('last_name','last_name','trim||xss_clean');
		$this->form_validation->set_rules('utility ','utility','trim|xss_clean');
		$this->form_validation->set_rules('email ','email','trim|xss_clean');
		$this->form_validation->set_rules('acct1','acct1','trim|xss_clean');
		$this->form_validation->set_rules('acct2','acct2','trim|xss_clean');
		$this->form_validation->set_rules('acct3','acct3','trim|xss_clean');
		$this->form_validation->set_rules('acct4','acct4','trim|xss_clean');
		$this->form_validation->set_rules('acct5','acct5','trim|xss_clean');
		$this->form_validation->set_rules('call_origin','call_origin','trim|xss_clean');
		$this->form_validation->set_rules('promo_offered ','promo_offered','trim||xss_clean');
		$this->form_validation->set_rules('source','source','trim|xss_clean');
		$this->form_validation->set_rules('call_dispo ','call_dispo','trim||xss_clean');
		$this->form_validation->set_rules('record_id','call_record_id','trim|xss_clean');
		$this->form_validation->set_rules('question','question','trim|xss_clean');
		$this->form_validation->set_rules('web_dispo','web_dispo','trim|xss_clean');
		$this->form_validation->set_rules('remarks','remarks','trim|xss_clean');
		$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
			
		if($this->form_validation->run() == FALSE)
		{
			$phonenumber = $this->session->userdata('phonenumber');
			$call_search = $this->User_model->search($phonenumber);
			$data = array('call_disposition' => NULL,
   								  'call_origin' => NULL,
   								  'call_source' => NULL,
   								  'call_promo' => NULL,
   								  'call_webdispo' => NULL,
   								  'call_utility' => NULL,
   								  'phonenumber' => $phonenumber,
   								  'call_search' => $call_search);
			$this->load->view('master_view', array('page' => 'view_search', 'data' => $data));
		}else
		{

			$call_dispo = $this->User_model->get_call_dispo($this->input->post('work_group'));
			$call_origin = $this->User_model->get_call_origin();
			$call_source = $this->User_model->get_call_source();
			$call_promo = $this->User_model->get_call_promo();
			$call_webdispo = $this->User_model->get_call_webdispo();
			$call_utility = $this->User_model->get_call_utility();
			$phonenumber = $this->session->userdata('phonenumber');
			$call_search = $this->User_model->search($phonenumber);

			$data = array('call_disposition' => $call_dispo, 'call_origin' => $call_origin,
		   							'call_source' => $call_source,'call_promo' =>$call_promo,
		   							'call_webdispo' =>$call_webdispo,'call_utility' =>$call_utility,
		   							'phonenumber' =>$phonenumber,'call_search'=>$call_search);

			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$utility = $this->input->post('utility');
			$email = $this->input->post('email');
			$acct1 = $this->input->post('acct1');
			$acct2 = $this->input->post('acct2');
			$acct3 = $this->input->post('acct3');
			$acct4 = $this->input->post('acct4');
			$acct5 = $this->input->post('acct5');
			$work_group = $this->input->post('work_group');
			$promo_offered = $this->input->post('promo_offered');
			$source = $this->input->post('call_source');
			$call_dispo = $this->input->post('call_dispo');
			$call_record_id = $this->input->post('call_record_id');
			$call_origin = $this->input->post('call_origin');
			$question = $this->input->post('question');
			$web_dispo = $this->input->post('web_dispo');
			$remarks = $this->input->post('remarks');

			$this->load->view('master_view', array('page' => 'view_search', 'data' => $data ));
			if(isset($_POST['save']))
			{
				$this->session->set_userdata('first_name',$first_name);
				$this->session->set_userdata('last_name',$last_name);
				$this->session->set_userdata('utility',$utility);
				$this->session->set_userdata('email',$email);
				$this->session->set_userdata('acct1',$acct1);
				$this->session->set_userdata('acct2',$acct2);
				$this->session->set_userdata('acct3',$acct3);
				$this->session->set_userdata('acct4',$acct4);
				$this->session->set_userdata('acct5',$acct5);
				$this->session->set_userdata('work_group',$work_group);
				$this->session->set_userdata('promo_offered',$promo_offered);
				$this->session->set_userdata('source',$source);
				$this->session->set_userdata('call_dispo',$call_dispo);
				$this->session->set_userdata('call_record_id',$call_record_id);
				$this->session->set_userdata('call_origin',$call_origin);
				$this->session->set_userdata('question',$question);
				$this->session->set_userdata('web_dispo',$web_dispo);
				$this->session->set_userdata('remarks',$remarks);
				redirect('/user/call_insert/', 'refresh');
			}
		}

	}
	 
	function call_insert($phonenumber = NULL,$first_name = NULL,$last_name = NULL,$utility = NULL,$email = NULL,$acct1 = NULL,$acct2 = NULL,$acct3 = NULL,$acct4 = NULL,$acct5= NULL,$work_group = NULL,$promo_offered = NULL,$source = NULL,$call_dispo = NULL,$call_record_id = NULL,$call_origin = NULL,$question = NULL,$web_dispo = NULL,$remarks = NULL)
	{

			
		$call_dispo = $this->User_model->get_call_dispo($this->input->post('work_group'));
		$call_origin = $this->User_model->get_call_origin();
		$call_source = $this->User_model->get_call_source();
		$call_promo = $this->User_model->get_call_promo();
		$call_webdispo = $this->User_model->get_call_webdispo();
		$call_utility = $this->User_model->get_call_utility();
		$phonenumber = $this->session->userdata('phonenumber');
		$call_search = $this->User_model->search($phonenumber);
		 
		$data = array('call_disposition' => $call_dispo, 'call_origin' => $call_origin,
			   							'call_source' => $call_source,'call_promo' =>$call_promo,
			   							'call_webdispo' =>$call_webdispo,'call_utility' =>$call_utility,
			   							'phonenumber' =>$phonenumber,'call_search'=>$call_search);

		$phonenumber = $this->session->userdata('phonenumber');
		$first_name =$this->session->userdata('first_name');
		$last_name = $this->session->userdata('last_name');
		$utility = $this->session->userdata('utility');
		$email = $this->session->userdata('email');
		$acct1 = $this->session->userdata('acct1');
		$acct2 = $this->session->userdata('acct2');
		$acct3 = $this->session->userdata('acct3');
		$acct4 = $this->session->userdata('acct4');
		$acct5 =$this->session->userdata('acct5');
		$work_group = $this->session->userdata('work_group');
		$promo_offered = $this->session->userdata('promo_offered');
		$source = $this->session->userdata('source');
		$call_dispo = $this->session->userdata('call_dispo');
		$call_record_id = $this->session->userdata('call_record_id');
		$call_origin = $this->session->userdata('call_origin');
		$question = $this->session->userdata('question');
		$web_dispo = $this->session->userdata('web_dispo');
		$remarks = $this->session->userdata('remarks');
		if($this->User_model->insert($phonenumber,$first_name,$last_name,$utility,$email,$acct1,$acct2,$acct3,$acct4,$acct5,$work_group,$promo_offered,$source,$call_dispo,$call_record_id,$call_origin,$question,$web_dispo,$remarks)){
				
			$call_dispo = $this->User_model->get_call_dispo($this->input->post('work_group'));
			$call_origin = $this->User_model->get_call_origin();
			$call_source = $this->User_model->get_call_source();
			$call_promo = $this->User_model->get_call_promo();
			$call_webdispo = $this->User_model->get_call_webdispo();
			$call_utility = $this->User_model->get_call_utility();
			$phonenumber = $this->session->userdata('phonenumber');
			$call_search = $this->User_model->search($phonenumber);
			 
			$data = array('call_disposition' => $call_dispo, 'call_origin' => $call_origin,
			   							'call_source' => $call_source,'call_promo' =>$call_promo,
			   							'call_webdispo' =>$call_webdispo,'call_utility' =>$call_utility,
			   							'phonenumber' =>$phonenumber,'call_search'=>$call_search);	
				
			$this->load->view('master_view', array('page' => 'view_search', 'data' => $data));
				

		}else{
				
		}


	}
}



?>