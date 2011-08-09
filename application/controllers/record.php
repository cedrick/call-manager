<?php
Class Record extends CI_Controller
{
	function Record()
	{
		parent::__construct();
		$this->view_data['base_url'] = base_url();
		$this->load->model('User_model');
	}

	function new_record($username = NULL,$agent_id = NULL,$phonenumber = NULL,$first_name = NULL,$last_name = NULL,$utility = NULL,$email = NULL,$acct1 = NULL,$acct2 = NULL,$acct3 = NULL,$acct4 = NULL,$acct5= NULL,$work_group = NULL,$promo_offered = NULL,$source = NULL,$call_dispo = NULL,$call_record_id = NULL,$call_origin = NULL,$question = NULL,$web_dispo = NULL,$remarks = NULL)
	{
		if($this->session->userdata('username') != '')
		{
			$this->load->library('form_validation');
		
			$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
			if(isset($_POST['work_group']) && $_POST['work_group'] =='New Sales' &&  isset($_POST['save'])  && $_POST['save']=='Save All')
			{
				$this->form_validation->set_rules('first_name','First Name','trim|xss_clean');
				$this->form_validation->set_rules('last_name','Last Name','trim||xss_clean');
				$this->form_validation->set_rules('utility','Utility','trim|xss_clean|required');
				$this->form_validation->set_rules('email','Email','trim|xss_clean');
				$this->form_validation->set_rules('acct1','Account1','trim|xss_clean|required');
				$this->form_validation->set_rules('acct2','Account2','trim|xss_clean');
				$this->form_validation->set_rules('acct3','Account3','trim|xss_clean');
				$this->form_validation->set_rules('acct4','Account4','trim|xss_clean');
				$this->form_validation->set_rules('acct5','Account5','trim|xss_clean');
				$this->form_validation->set_rules('call_origin','Call Origin','trim|xss_clean|required');
				$this->form_validation->set_rules('promo_offered','Promo Offered','trim||xss_clean|required');
				$this->form_validation->set_rules('source','Source','trim|xss_clean|required');
				$this->form_validation->set_rules('call_dispo','Call Disposition','trim||xss_clean|required');
				$this->form_validation->set_rules('call_record_id','Call Record ID','trim|xss_clean|required');
				$this->form_validation->set_rules('question','Web Enrollment','trim|xss_clean|required');
				$this->form_validation->set_rules('web_dispo','Web Disposition','trim|xss_clean');
				$this->form_validation->set_rules('remarks','Remarks','trim|xss_clean');
				$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
			}
			elseif(isset($_POST['work_group']) && $_POST['work_group'] =='Renewal' &&  isset($_POST['save']) && $_POST['save']=='Save All' )
			{
				$this->form_validation->set_rules('first_name','First Name','trim|xss_clean');
				$this->form_validation->set_rules('last_name','Last Name','trim||xss_clean');
				$this->form_validation->set_rules('utility','Utility','trim|xss_clean|required');
				$this->form_validation->set_rules('email','Email','trim|xss_clean');
				$this->form_validation->set_rules('acct1','Account1','trim|xss_clean|required');
				$this->form_validation->set_rules('acct2','Account2','trim|xss_clean');
				$this->form_validation->set_rules('acct3','Account3','trim|xss_clean');
				$this->form_validation->set_rules('acct4','Account4','trim|xss_clean');
				$this->form_validation->set_rules('acct5','Account5','trim|xss_clean');
				$this->form_validation->set_rules('call_origin','Call Origin','trim|xss_clean|required');
				$this->form_validation->set_rules('promo_offered','Promo Offered','trim||xss_clean|required');
				$this->form_validation->set_rules('source','Source','trim|xss_clean|required');
				$this->form_validation->set_rules('call_dispo','Call Disposition','trim||xss_clean|required');
				$this->form_validation->set_rules('call_record_id','Call Record ID','trim|xss_clean|required');
				$this->form_validation->set_rules('question','Web Enrollment','trim|xss_clean|required');
				$this->form_validation->set_rules('web_dispo','Web Disposition','trim|xss_clean');
				$this->form_validation->set_rules('remarks','Remarks','trim|xss_clean');
				$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
			}elseif(isset($_POST['work_group'])&& $_POST['work_group'] =='Spanish' &&  isset($_POST['save']) && $_POST['save']=='Save All')
			{
				$this->form_validation->set_rules('first_name','First Name','trim|xss_clean');
				$this->form_validation->set_rules('last_name','Last Name','trim||xss_clean');
				$this->form_validation->set_rules('utility','Utility','trim|xss_clean|required');
				$this->form_validation->set_rules('email','Email','trim|xss_clean');
				$this->form_validation->set_rules('acct1','Account1','trim|xss_clean|required');
				$this->form_validation->set_rules('acct2','Account2','trim|xss_clean');
				$this->form_validation->set_rules('acct3','Account3','trim|xss_clean');
				$this->form_validation->set_rules('acct4','Account4','trim|xss_clean');
				$this->form_validation->set_rules('acct5','Account5','trim|xss_clean');
				$this->form_validation->set_rules('call_origin','Call Origin','trim|xss_clean|required');
				$this->form_validation->set_rules('promo_offered','Promo Offered','trim||xss_clean|required');
				$this->form_validation->set_rules('source','Source','trim|xss_clean|required');
				$this->form_validation->set_rules('call_dispo','Call Disposition','trim||xss_clean|required');
				$this->form_validation->set_rules('call_record_id','Call Record ID','trim|xss_clean|required');
				$this->form_validation->set_rules('question','Web Enrollment','trim|xss_clean');
				$this->form_validation->set_rules('web_dispo','Web Disposition','trim|xss_clean');
				$this->form_validation->set_rules('remarks','Remarks','trim|xss_clean');
				$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
			}elseif(isset($_POST['work_group']) && $_POST['work_group'] =='Payment' &&  isset($_POST['save']) && $_POST['save']== 'Save All')
			{
				$this->form_validation->set_rules('first_name','First Name','trim|xss_clean');
				$this->form_validation->set_rules('last_name','Last Name','trim||xss_clean');
				$this->form_validation->set_rules('utility','Utility','trim|xss_clean');
				$this->form_validation->set_rules('email','Email','trim|xss_clean');
				$this->form_validation->set_rules('acct1','Account1','trim|xss_clean|required');
				$this->form_validation->set_rules('acct2','Account2','trim|xss_clean');
				$this->form_validation->set_rules('acct3','Account3','trim|xss_clean');
				$this->form_validation->set_rules('acct4','Account4','trim|xss_clean');
				$this->form_validation->set_rules('acct5','Account5','trim|xss_clean');
				$this->form_validation->set_rules('call_origin','Call Origin','trim|xss_clean|required');
				$this->form_validation->set_rules('promo_offered','Promo Offered','trim||xss_clean');
				$this->form_validation->set_rules('source','Source','trim|xss_clean');
				$this->form_validation->set_rules('call_dispo','Call Disposition','trim||xss_clean|required');
				$this->form_validation->set_rules('call_record_id','Call Record ID','trim|xss_clean|required');
				$this->form_validation->set_rules('question','Web Enrollment','trim|xss_clean');
				$this->form_validation->set_rules('web_dispo','Web Disposition','trim|xss_clean');
				$this->form_validation->set_rules('remarks','Remarks','trim|xss_clean');
				$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
			}
		
			$phonenumber = $this->uri->segment(3);
			
		if($this->form_validation->run() == FALSE)
		{
			$wg = $this->input->post('work_group') ? $this->input->post('work_group') : NULL;
			$this->load->view('master_view', array('page' => 'new_view', 'data' => $this->load_dropdowns($phonenumber,$wg)));
		} else {
						
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
						$source = $this->input->post('source');
						$call_dispo = $this->input->post('call_dispo');
						$call_record_id = $this->input->post('call_record_id');
						$call_origin = $this->input->post('call_origin');
						$question = $this->input->post('question');
						$web_dispo = $this->input->post('web_dispo');
						$remarks = $this->input->post('remarks');
						$msg = NULL;
						
						
			if (isset($_POST['save']) && $_POST['save'] == 'Save All') {
				//save data
				$this->User_model->insert($username,$agent_id,$phonenumber,$first_name,$last_name,$utility,$email,$acct1,$acct2,$acct3,$acct4,$acct5,$work_group,$promo_offered,$source,$call_dispo,$call_record_id,$call_origin,$question,$web_dispo,$remarks);
				$msg = "The Record was Already Saved";
				
				//then redirect
				//redirect('/record/reload/'.$phonenumber, 'refresh');
			}
			$this->load->view('master_view', array('page' => 'new_view','msg' => $msg, 'data' => $this->load_dropdowns($phonenumber, $this->input->post('work_group'))));
		}
	}else
				{
					redirect('/user/login/', 'refresh');
				}
	}
	
	function reload($username = NULL,$agent_id = NULL,$phonenumber = NULL,$first_name = NULL,$last_name = NULL,$utility = NULL,$email = NULL,$acct1 = NULL,$acct2 = NULL,$acct3 = NULL,$acct4 = NULL,$acct5= NULL,$work_group = NULL,$promo_offered = NULL,$source = NULL,$call_dispo = NULL,$call_record_id = NULL,$call_origin = NULL,$question = NULL,$web_dispo = NULL,$remarks = NULL)
	{
		
	if($this->session->userdata('username') != '')
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
		if(isset($_POST['work_group']) && $_POST['work_group'] =='New Sales'  &&  isset($_POST['save'])  && $_POST['save']=='Save All' )
				{
					$this->form_validation->set_rules('first_name','First Name','trim|xss_clean');
					$this->form_validation->set_rules('last_name','Last Name','trim||xss_clean');
					$this->form_validation->set_rules('utility','Utility','trim|xss_clean|required');
					$this->form_validation->set_rules('email','Email','trim|xss_clean');
					$this->form_validation->set_rules('acct1','Account1','trim|xss_clean|required');
					$this->form_validation->set_rules('acct2','Account2','trim|xss_clean');
					$this->form_validation->set_rules('acct3','Account3','trim|xss_clean');
					$this->form_validation->set_rules('acct4','Account4','trim|xss_clean');
					$this->form_validation->set_rules('acct5','Account5','trim|xss_clean');
					$this->form_validation->set_rules('call_origin','Call Origin','trim|xss_clean|required');
					$this->form_validation->set_rules('promo_offered','Promo Offered','trim||xss_clean|required');
					$this->form_validation->set_rules('source','Source','trim|xss_clean|required');
					$this->form_validation->set_rules('call_dispo','Call Disposition','trim||xss_clean|required');
					$this->form_validation->set_rules('call_record_id','Call Record ID','trim|xss_clean|required');
					$this->form_validation->set_rules('question','Web Enrollment','trim|xss_clean|required');
					$this->form_validation->set_rules('web_dispo','Web Disposition','trim|xss_clean');
					$this->form_validation->set_rules('remarks','Remarks','trim|xss_clean');
					$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
				}elseif(isset($_POST['work_group']) && $_POST['work_group'] =='Renewal' &&  isset($_POST['save'])  && $_POST['save']=='Save All' )
				{
					$this->form_validation->set_rules('first_name','First Name','trim|xss_clean');
					$this->form_validation->set_rules('last_name','Last Name','trim||xss_clean');
					$this->form_validation->set_rules('utility','Utility','trim|xss_clean|required');
					$this->form_validation->set_rules('email','Email','trim|xss_clean');
					$this->form_validation->set_rules('acct1','Account1','trim|xss_clean|required');
					$this->form_validation->set_rules('acct2','Account2','trim|xss_clean');
					$this->form_validation->set_rules('acct3','Account3','trim|xss_clean');
					$this->form_validation->set_rules('acct4','Account4','trim|xss_clean');
					$this->form_validation->set_rules('acct5','Account5','trim|xss_clean');
					$this->form_validation->set_rules('call_origin','Call Origin','trim|xss_clean|required');
					$this->form_validation->set_rules('promo_offered','Promo Offered','trim||xss_clean|required');
					$this->form_validation->set_rules('source','Source','trim|xss_clean|required');
					$this->form_validation->set_rules('call_dispo','Call Disposition','trim||xss_clean|required');
					$this->form_validation->set_rules('call_record_id','Call Record ID','trim|xss_clean|required');
					$this->form_validation->set_rules('question','Web Enrollment','trim|xss_clean|required');
					$this->form_validation->set_rules('web_dispo','Web Disposition','trim|xss_clean');
					$this->form_validation->set_rules('remarks','Remarks','trim|xss_clean');
					$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
				}elseif(isset($_POST['work_group'])&& $_POST['work_group'] =='Spanish' &&  isset($_POST['save']) && $_POST['save']=='Save All')
				{
					$this->form_validation->set_rules('first_name','First Name','trim|xss_clean');
					$this->form_validation->set_rules('last_name','Last Name','trim||xss_clean');
					$this->form_validation->set_rules('utility','Utility','trim|xss_clean|required');
					$this->form_validation->set_rules('email','Email','trim|xss_clean');
					$this->form_validation->set_rules('acct1','Account1','trim|xss_clean|required');
					$this->form_validation->set_rules('acct2','Account2','trim|xss_clean');
					$this->form_validation->set_rules('acct3','Account3','trim|xss_clean');
					$this->form_validation->set_rules('acct4','Account4','trim|xss_clean');
					$this->form_validation->set_rules('acct5','Account5','trim|xss_clean');
					$this->form_validation->set_rules('call_origin','Call Origin','trim|xss_clean|required');
					$this->form_validation->set_rules('promo_offered','Promo Offered','trim||xss_clean|required');
					$this->form_validation->set_rules('source','Source','trim|xss_clean|required');
					$this->form_validation->set_rules('call_dispo','Call Disposition','trim||xss_clean|required');
					$this->form_validation->set_rules('call_record_id','Call Record ID','trim|xss_clean|required');
					$this->form_validation->set_rules('question','Web Enrollment','trim|xss_clean');
					$this->form_validation->set_rules('web_dispo','Web Disposition','trim|xss_clean');
					$this->form_validation->set_rules('remarks','Remarks','trim|xss_clean');
					$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
				}elseif(isset($_POST['work_group']) && $_POST['work_group'] =='Payment' &&  isset($_POST['save']) && $_POST['save']== 'Save All')
				{
					
					$this->form_validation->set_rules('first_name','First Name','trim|xss_clean');
					$this->form_validation->set_rules('last_name','Last Name','trim||xss_clean');
					$this->form_validation->set_rules('utility','Utility','trim|xss_clean');
					$this->form_validation->set_rules('email','Email','trim|xss_clean');
					$this->form_validation->set_rules('acct1','Account1','trim|xss_clean|required');
					$this->form_validation->set_rules('acct2','Account2','trim|xss_clean');
					$this->form_validation->set_rules('acct3','Account3','trim|xss_clean');
					$this->form_validation->set_rules('acct4','Account4','trim|xss_clean');
					$this->form_validation->set_rules('acct5','Account5','trim|xss_clean');
					$this->form_validation->set_rules('call_origin','Call Origin','trim|xss_clean|required');
					$this->form_validation->set_rules('promo_offered','Promo Offered','trim||xss_clean');
					$this->form_validation->set_rules('source','Source','trim|xss_clean');
					$this->form_validation->set_rules('call_dispo','Call Disposition','trim||xss_clean|required');
					$this->form_validation->set_rules('call_record_id','Call Record ID','trim|xss_clean|required');
					$this->form_validation->set_rules('question','Web Enrollment','trim|xss_clean');
					$this->form_validation->set_rules('web_dispo','Web Disposition','trim|xss_clean');
					$this->form_validation->set_rules('remarks','Remarks','trim|xss_clean');
					$this->form_validation->set_rules('work_group','Workgroup','trim|required|xss_clean');
				}
			
			$phonenumber = $this->uri->segment(3);
			
			$info = $this->User_model->search($phonenumber);
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('master_view', array('page' => 'reload_view', 'data' => array('info' => $info, 'dropdown' => $this->load_dropdowns($phonenumber,$this->input->post('work_group')))));
			} else {
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
							$source = $this->input->post('source');
							$call_dispo = $this->input->post('call_dispo');
							$call_record_id = $this->input->post('call_record_id');
							$call_origin = $this->input->post('call_origin');
							$question = $this->input->post('question');
							$web_dispo = $this->input->post('web_dispo');
							$remarks = $this->input->post('remarks');
							$msg = NULL;
							
				
				if (isset($_POST['save']) && $_POST['save'] == 'Save All') {
					//save data
					$this->User_model->insert($username,$agent_id,$phonenumber,$first_name,$last_name,$utility,$email,$acct1,$acct2,$acct3,$acct4,$acct5,$work_group,$promo_offered,$source,$call_dispo,$call_record_id,$call_origin,$question,$web_dispo,$remarks);
					$msg = "The Record was Already Saved";
					//then redirect
					//redirect('/record/reload/'.$phonenumber, 'refresh');
				}
					$this->load->view('master_view', array('page' => 'new_view','msg' => $msg , 'data' => $this->load_dropdowns($phonenumber, $this->input->post('work_group'))));
			}
		}else
				{
					redirect('/user/login/', 'refresh');
				}
	}
	
	private function load_dropdowns($phonenumber, $workgroup = NULL)
	{
		if($this->session->userdata('username') != '')
		{
		    //$workgroup = ($workgroup == 0 ? NULL : $workgroup);
			$call_dispo = $this->User_model->get_call_dispo($workgroup);
			$call_origin = $this->User_model->get_call_origin();
			$call_source = $this->User_model->get_call_source();
			$call_promo = $this->User_model->get_call_promo();
			$call_webdispo = $this->User_model->get_call_webdispo();
			$call_utility = $this->User_model->get_call_utility();
			$call_search = $this->User_model->search($phonenumber);
			$data = array(
				'call_disposition' => $call_dispo,
	   			'call_origin' => $call_origin,
	   			'call_source' => $call_source,
	   			'call_promo' => $call_promo,
	   			'call_webdispo' => $call_webdispo,
	   			'call_utility' => $call_utility,
	   			'phonenumber' => $phonenumber,
	   			'call_search' => $call_search
			);
			
			return $data;
		}else
				{
					redirect('/user/login/', 'refresh');
				}
	}
	
	function log_out()
		{
			$this->session->sess_destroy('username');
				redirect('/user/login/', 'refresh');
		}
		
	
}