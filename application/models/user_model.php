<?php
class User_model extends CI_Model
{
	function user_model()
	{
		parent::__construct();
	}

	function choose_workgroup()
	{
			
	}

	function get_call_dispo($workgroup)
	{
		return $this->db->get_where('call_dispositions', array('workgroup' => $workgroup));
	}

	function get_call_origin()
	{
		return $this->db->query("SELECT * FROM call_origin");
	}
	function get_call_source()
	{
		return $this->db->query("SELECT * FROM source");
	}
	function get_call_promo()
	{
		return $this->db->query("SELECT * FROM promo_offered");
	}
	function get_call_webdispo()
	{
		return $this->db->query("SELECT * FROM web_dispo");
	}
	function get_call_utility()
	{
		return $this->db->query("SELECT * FROM call_utility");
	}
	function insert($username,$agent_id,$phonenumber,$first_name,$last_name,$utility,$email,$acct1,$acct2,$acct3,$acct4,$acct5,$work_group,$promo_offered,$source,$call_dispo,$call_record_id,$call_origin,$question,$web_dispo,$remarks)
	{
		$agent_id = $this->session->userdata('agent-id');
		$username = $this->session->userdata('username');
		$query_str =  "INSERT INTO mng_calldetail (agent_id,agent_name,phone,last_call,firstname,lastname,utility,email,workgroup,call_origin,promo_offered,source,remarks,account1,account2,account3,account4,account5,call_dispo,call_record_id,web_enrollment,web_dispo,last_update) Values (?,?,?,NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())";
		if($this->db->query($query_str,array($agent_id,$username,$phonenumber,$first_name,$last_name,$utility,$email,$work_group,$call_origin,$promo_offered,$source,$remarks,$acct1,$acct2,$acct3,$acct4,$acct5,$call_dispo,$call_record_id,$question,$web_dispo))){
			return TRUE;
		}
		else
		{
			return FALSE;
		}

	}

	function search($phonenumber)
	{
		$exist = $this->db->query("SELECT * FROM mng_calldetail where phone = '$phonenumber' order by last_update desc LIMIT 0, 1");
		
		if($exist->num_rows() > 0) {
			return $exist;
		}
		
		return FALSE;
	}
	
	function get_workgroup($phonenumber)
	{
		$exist = $this->db->query("SELECT * FROM mng_calldetail where phone = '$phonenumber' order by last_update desc LIMIT 0, 1");
		
		if($exist->num_rows() > 0) {
			$result = $exist->row();
			
			$workgroup = $result->workgroup;
			
			return $workgroup;
		}
		
		return FALSE;
		
	}
	
	function set_login($username,$password)
	{
			$key = "Codeigniter";
			$password = md5($password.$key);
			$query_str = "SELECT * FROM call_login WHERE username='$username' and password='$password'";
			$result = $this->db->query($query_str,array($username,$password));
			if($result->num_rows()==1){
				
				foreach($result->result() as $row)
				{
					$agent_id = $row->agent_id;
				}
			  $this->session->set_userdata('agent-id',$agent_id);
			  $this->session->set_userdata('username',$username);
				return TRUE;
			}
			else
			{
				return FALSE;
			}	
	}
	
	function set_register($username,$password,$agent_id)
	{
			$key = "Codeigniter";
			$password = md5($password.$key);
			$query_str =  "INSERT INTO  call_login (username,password,agent_id) Values (?,?,?)";
			if($this->db->query($query_str,array($username,$password,$agent_id))){
					return TRUE;
				}
				else
				{
					return FALSE;
				}
	}
	
	function check_exist_username($username)
		{
			$query_str = "SELECT username from call_login where username = ?";
			$result = $this->db->query($query_str,$username);
			if($result->num_rows() > 0)
			{
				return TRUE;
			}else
			{
				return FALSE;
			}
		}

}
?>