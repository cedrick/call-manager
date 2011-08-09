<br><br>
<font face = arial>
<?php 
	

	$dropdown_calldispo = array('' => '');
	if($call_disposition) {
		$temp = array();
		foreach ($call_disposition->result() as $row) {
			$dropdown_calldispo = $dropdown_calldispo + array($row->id => $row->dispo);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	$dropdown_callorigin = array('' => '');
	if($call_origin) {
		$temp = array();
		foreach ($call_origin->result() as $row) {
			$dropdown_callorigin = $dropdown_callorigin + array($row->origin => $row->origin);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	$dropdown_callsource = array('' => '');
	if($call_source) {
		$temp = array();
		foreach ($call_source->result() as $row) {
			$dropdown_callsource = $dropdown_callsource + array($row->source => $row->source);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	$dropdown_callpromo = array('' => '');
	if($call_promo) {
		$temp = array();
		foreach ($call_promo->result() as $row) {
			$dropdown_callpromo = $dropdown_callpromo + array($row->promo => $row->promo);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	$dropdown_callwebdispo = array('' => '');
	if($call_webdispo) {
		$temp = array();
		foreach ($call_webdispo->result() as $row) {
			$dropdown_callwebdispo = $dropdown_callwebdispo + array($row->webdispo => $row->webdispo);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	$dropdown_callutility = array('' => '');
	if($call_utility) {
		$temp = array();
		foreach ($call_utility->result() as $row) {
			$dropdown_callutility = $dropdown_callutility + array($row->utility => $row->utility);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	if($call_search) {
		$row = $call_search->row();
	}
?>
<?php $attributes = array('class' => 'workgroup', 'id' => 'workgroup','name' => 'workgroup'); ?>
<?php echo form_open(base_url().'user/call_view_search',$attributes);?>
   <?php
				
			 	$first_name = array(
										'name' => 'first_name',
										'id'	 => 'first_name',
										'value'	 => isset($_POST['first_name']) ? $_POST['first_name'] : (isset($row->firstname) ? $row->firstname : '')
									   );
									   
				$last_name = array(
										'name' => 'last_name',
										'id'	 => 'last_name',
										'value'	 => isset($_POST['last_name']) ? $_POST['last_name'] : (isset($row->lastname) ? $row->lastname : '')
									   );	   
				$email = array(
								'name' => 'email',
								'id'	 => 'email',
								'value'	 => isset($_POST['email']) ? $_POST['email'] : (isset($row->email) ? $row->email : '')
							  );
							 
				$acct1 = array(
								'name' => 'acct1',
								'id'	 => 'acct1',
								'value'	 => isset($_POST['acct1']) ? $_POST['acct1'] : (isset($row->account1) ? $row->account1 : '')
							  );
				
				$acct2 = array(
									'name' => 'acct2',
									'id'	 => 'acct2',
									'value'	 => isset($_POST['acct2']) ? $_POST['acct2'] : (isset($row->account2) ? $row->account2 : '')
								  );
			
				$acct3 = array(
									'name' => 'acct3',
									'id'	 => 'acct3',
									'value'	 =>isset($_POST['acct3']) ? $_POST['acct3'] : (isset($row->account3) ? $row->account3 : '')
								  );
				$acct4 = array(
									'name' => 'acct4',
									'id'	 => 'acct4',
									'value'	 => isset($_POST['acct4']) ? $_POST['acct4'] : (isset($row->account4) ? $row->account4 : '')
								  );
				$acct5 = array(
									'name' => 'acct5',
									'id'	 => 'acct5',
									'value'	 => isset($_POST['acct5']) ? $_POST['acct5'] : (isset($row->account5) ? $row->account5 : '')
								  );
				$work_group = array(
						    'name'        => 'wg',
						    'id'          => 'wg',
						    'value'       => 'sale',
						    'checked'     => FALSE,
						    'style'       => 'margin:10px',
						    );
						    
				$work_group = array(
						    'name'        => 'wg',
						    'id'          => 'wg',
						    'value'       => 'renewal',
						    'checked'     => FALSE,
						    'style'       => 'margin:10px',
						    );
			
				
				$work_group= array(
						    'name'        => 'wg',
						    'id'          => 'wg',
						    'value'       => 'spanish',
						    'checked'     => FALSE,
						    'style'       => 'margin:10px',
						    );
			
				$work_group = array(
						    'name'        => 'wg',
						    'id'          => 'wg',
						    'value'       => 'payment',
						    'checked'     => FALSE,
						    'style'       => 'margin:10px',
						    );
				$action_js = 'onClick="document.forms[\'workgroup\'].submit();"';
			
				$call_record_id = array (
										'name' => 'call_record_id',
										'id'	 => 'call_record_id',
										'value'	 => isset($_POST['call_record_id']) ? $_POST['call_record_id'] : (isset($row->call_record_id) ? $row->call_record_id: '')
									 );
				
				$question_yes = array(
						    'name'        => 'question',
						    'id'          => 'question',
						    'value'       => 'yes',
						    'checked'     => isset($_POST['question']) ? $_POST['question']== 'yes' ? TRUE : FALSE : (isset($row->web_enrollment) && $row->web_enrollment == 'yes' ? TRUE : FALSE),
						    'style'       => 'margin:10px',
						    );
						    
				$question_no = array(
						    'name'        => 'question',
						    'id'          => 'question',
						    'value'       => 'no',
						    'checked'     => isset($_POST['question']) ? $_POST['question']== 'no' ? TRUE : FALSE : (isset($row->web_enrollment) && $row->web_enrollment == 'no' ? TRUE : FALSE),
						    'style'       => 'margin:10px',
						    );
			
				
				$remarks = array(
				              'name'        => 'remarks',
				              'id'          => 'remarks',
				              'value'       => isset($_POST['remarks']) ? $_POST['remarks'] : (isset($row->remarks) ? $row->remarks : ''),
				              'maxlength'   => '',
				              'size'        => '50',
				              'style'       => 'width:50%',

				            );

echo '<table width=800 border=0 align=center cellspacing=1 bgcolor= #AFC7C7>';
	echo'<tr>';
		echo'<td>';
		echo'</td>';
		echo'<td>';
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<tr></tr>';
		echo'<tr></tr>';
		echo'<tr></tr>';
		echo'<tr></tr>';
		echo'<tr></tr>';
		echo'<tr></tr>';
		echo'<tr></tr>';
		echo'<tr></tr>';
		echo'<tr>';
		echo '<td>';
			echo "Phone Number:";
		echo'</td>';
		echo '<td>';
			echo $phonenumber;
		echo'</td>';
		echo'</tr>';
		echo'<td>';
			echo"Last&nbsp;Call&nbsp;Date:";
		echo'</td>';
		echo'<td>';
			echo isset($row->last_call) ? $row->last_call : '';
		echo'</td>';
		echo'<td>';
		echo'</td>';
		echo'<td>';
			echo"Account1:";
		echo'</td>';
		echo'<td>';
			echo form_input($acct1); 
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"First&nbsp;Name:";
		echo'</td>';
		echo'<td>';
			echo form_input($first_name); 
		echo'</td>';
		echo'<td>';
		echo'</td>';
		echo'<td>';
			echo"Account2:";
		echo'</td>';
		echo'<td>';
			echo form_input($acct2);
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"Last&nbsp;Name:";
		echo'</td>';
		echo'<td>';
			echo form_input($last_name);
		echo'</td>';
		echo'<td>';
		echo'</td>';
		echo'<td>';
			echo"Account3:";
		echo'</td>';
		echo'<td>';
			echo form_input($acct3); 
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"Utility:";
		echo'</td>';
		echo'<td>';
			 echo form_dropdown('utility',$dropdown_callutility);
		echo'</td>';
		echo'<td>';
		echo'</td>';
		echo'<td>';
			echo"Account4:";
		echo'</td>';
		echo'<td>';
			echo form_input($acct4);
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"Email:";
		echo'</td>';
		echo'<td>';
			echo form_input($email);
		echo'</td>';
		echo'<td>';
		echo'</td>';
		echo'<td>';
			echo"Account5:";
		echo'</td>';
		echo'<td>';
			echo form_input($acct5);
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"Workgroup:";
		echo'</td>';
		echo'<td>';
			$sale = FALSE;
			$spanish = FALSE;
			$renewal = FALSE;
			$payment = FALSE;
			if(isset($_POST['work_group'])) {
				switch ($_POST['work_group']) {
					case 'sale':
						$sale = TRUE;
						break;
					case 'spanish':
						$spanish = TRUE;
						break;
					case 'renewal':
						$renewal = TRUE;
						break;
					case 'payment':
						$payment = TRUE;
						break;
				}
				
			} elseif (isset($row->workgroup)) {
				switch ($row->workgroup) {
					case 'sale':
						$sale = TRUE;
						break;
					case 'spanish':
						$spanish = TRUE;
						break;
					case 'renewal':
						$renewal = TRUE;
						break;
					case 'payment':
						$payment = TRUE;
						break;
				}
			}
			echo "New&nbsp;Sales:";echo form_radio('work_group','sale',$sale,$action_js);echo"&nbsp;&nbsp;&nbsp;Spanish:";echo form_radio('work_group', 'spanish',$spanish,$action_js);
		echo'<td></td>';
		echo'<td>';
			echo"Call&nbsp;Disposition:";
		echo'</td>';
		echo'<td>';
			echo form_dropdown('call_dispo',$dropdown_calldispo);
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
		echo'</td>';
		echo'<td>';
			echo"Renewal:";echo form_radio('work_group', 'renewal', $renewal,$action_js);echo"&nbsp;&nbsp;&nbsp;Payment:";echo form_radio('work_group','payment',$payment,$action_js);
		echo'<td></td>';
		echo'<td>';
			echo"Call&nbsp;Recorded&nbsp;ID:";
		echo'</td>';
		echo'<td>';
			echo form_input($call_record_id); 
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"Call&nbsp;Origin:";
		echo'</td>';
		echo'<td>';
			echo form_dropdown('call_origin',$dropdown_callorigin);
		echo'</td>';
		echo'<td></td>';
		echo'<td>';
			echo"Web&nbsp;Enrollment?";
		echo'</td>';
		echo'<td>';
			echo"Yes:";echo form_radio($question_yes);echo"&nbsp;&nbsp;&nbsp;No:";echo form_radio($question_no);
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"Promo&nbsp;Offered:";
		echo'</td>';
		echo'<td>';
			echo form_dropdown('promo_offered',$dropdown_callpromo);
		echo'</td>';
		echo'<td></td>';
		echo'<td>';
			echo"Web&nbsp;Disposition:";
		echo'</td>';
		echo'<td>';
			echo form_dropdown('web_dispo',$dropdown_callwebdispo);
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"Source:";
		echo'</td>';
		echo'<td>';
			echo form_dropdown('call_source',$dropdown_callsource); 
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"Remarks:";
		echo'</td>';
	echo'</tr>';
echo'</table>';
echo'<table width=800 border=0 align=center cellspacing=1 bgcolor=	#fbf7bb>';
	echo '<tr>';
		echo'<td>';
			echo form_textarea($remarks);
		echo'</td>';
	echo '</tr>';
	echo '<tr>';
		echo'<td>';
			echo form_submit(array('name' => 'save', 'id' => 'save', ),'Save All');
		echo'</td>';
		echo '<td align="center"><a href="'.base_url().'user/call/">Cancell<a></td>';
	echo '</tr>';
echo'</table>';
echo form_close();
 ?>
</font>
<br><br>

