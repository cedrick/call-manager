<br><br>
<font face = arial>
<?php 
	$phonenumber = $this->uri->segment(3);

	$dropdown_calldispo = array('' => '');
	if($dropdown['call_disposition']) {
		$temp = array();
		foreach ($dropdown['call_disposition']->result() as $row) {
			$dropdown_calldispo = $dropdown_calldispo + array($row->dispo => $row->dispo);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	$dropdown_callorigin = array('' => '');
	if($dropdown['call_origin']) {
		$temp = array();
		foreach ($dropdown['call_origin']->result() as $row) {
			$dropdown_callorigin = $dropdown_callorigin + array($row->origin => $row->origin);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	$dropdown_callsource = array('' => '');
	if($dropdown['call_source']) {
		$temp = array();
		foreach ($dropdown['call_source']->result() as $row) {
			$dropdown_callsource = $dropdown_callsource + array($row->source => $row->source);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	$dropdown_callpromo = array('' => '');
	if($dropdown['call_promo']) {
		$temp = array();
		foreach ($dropdown['call_promo']->result() as $row) {
			$dropdown_callpromo = $dropdown_callpromo + array($row->promo => $row->promo);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	$dropdown_callwebdispo = array('' => '');
	if($dropdown['call_webdispo']) {
		$temp = array();
		foreach ($dropdown['call_webdispo']->result() as $row) {
			$dropdown_callwebdispo = $dropdown_callwebdispo + array($row->webdispo => $row->webdispo);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	$dropdown_callutility = array('' => '');
	if($dropdown['call_utility']) {
		$temp = array();
		foreach ($dropdown['call_utility']->result() as $row) {
			$dropdown_callutility = $dropdown_callutility + array($row->utility => $row->utility);
			//$dropdown_calldispo = $dropdown_calldispo + $temp;
		}
	}
	
	if($dropdown['call_search']) {
		$row = $dropdown['call_search']->row();
	}
?>
<?php $attributes = array('class' => 'workgroup', 'id' => 'workgroup','name' => 'workgroup'); ?>
<?php echo form_open(base_url().'record/reload/' . $this->uri->segment(3),$attributes);?>
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
						    'value'       => 'Sale',
						    'checked'     => FALSE,
						    'style'       => 'margin:10px',
						    );
						    
				$work_group = array(
						    'name'        => 'wg',
						    'id'          => 'wg',
						    'value'       => 'Renewal',
						    'checked'     => FALSE,
						    'style'       => 'margin:10px',
						    );
			
				
				$work_group= array(
						    'name'        => 'wg',
						    'id'          => 'wg',
						    'value'       => 'Spanish',
						    'checked'     => FALSE,
						    'style'       => 'margin:10px',
						    );
			
				$work_group = array(
						    'name'        => 'wg',
						    'id'          => 'wg',
						    'value'       => 'Payment',
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
				              'size'        => '100',
				              'style'       => 'width:97%',

				            );
				       
			$utility_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
			$acct_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
			$wg_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
			$origin_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
			$offered_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
			$source_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
			$dispo_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
			$id_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
			$web_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
			if(isset($_POST['work_group'])) {
				switch ($_POST['work_group']) {
					case 'New Sales':
						$utility_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$acct_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$wg_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$origin_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$offered_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$source_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$dispo_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$id_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$web_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						break;
					case 'Spanish':
						$utility_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$acct_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$wg_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$origin_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$offered_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$source_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$dispo_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$id_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$web_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						break;
					case 'Renewal':
						$utility_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$acct_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$wg_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$origin_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$offered_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$source_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$dispo_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$id_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$web_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						break;
					case 'Payment':
						$utility_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						$acct_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$wg_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						$origin_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$offered_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						$source_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						$dispo_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$id_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$web_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						break;
				}
				
			} elseif (isset($row->workgroup)) {
				switch ($row->workgroup) {
						case 'New Sales':
						$utility_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$acct_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$wg_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$origin_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$offered_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$source_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$dispo_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$id_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$web_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						break;
					case 'Spanish':
						$utility_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$acct_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$wg_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$origin_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$offered_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$source_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$dispo_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$id_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$web_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						break;
					case 'Renewal':
						$utility_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$acct_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$wg_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$origin_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$offered_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$source_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$dispo_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$id_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$web_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						break;
					case 'Payment':
						$utility_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						$acct_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$wg_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						$origin_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$offered_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						$source_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						$dispo_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$id_txtbg = '<FONT style="BACKGROUND-COLOR:#80A86B">';
						$web_txtbg = '<FONT style="BACKGROUND-COLOR:#E8FCB3">';
						break;
				}
			}

	echo '<table border=0 width=800  cellpadding=1 cellspacing=1 style="background-color:#E8FCB3;border:2px solid #A6C197;" align = center>';
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
		echo $acct_txtbg;
			echo form_input($acct1);
		echo '</font>'; 
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
		echo $utility_txtbg;
			echo"Utility:";
		echo '</font>';
		echo'</td>';
		echo'<td>';
			 echo form_dropdown('utility',$dropdown_callutility, isset($_POST['utility']) ? $_POST['utility']:(isset($row->utility) ? $row->utility:''));
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
		echo $wg_txtbg;
			echo"Workgroup:";
		echo '</font>';
		echo'</td>';
		echo'<td>';
			$sale = FALSE;
			$spanish = FALSE;
			$renewal = FALSE;
			$payment = FALSE;
			if(isset($_POST['work_group'])) {
				switch ($_POST['work_group']) {
					case 'New Sales':
						$sale = TRUE;
						break;
					case 'Spanish':
						$spanish = TRUE;
						break;
					case 'Renewal':
						$renewal = TRUE;
						break;
					case 'Payment':
						$payment = TRUE;
						break;
				}
				
			} elseif (isset($row->workgroup)) {
				switch ($row->workgroup) {
					case 'New Sales':
						$sale = TRUE;
						break;
					case 'Spanish':
						$spanish = TRUE;
						break;
					case 'Renewal':
						$renewal = TRUE;
						break;
					case 'Payment':
						$payment = TRUE;
						break;
				}
			}
			echo "New&nbsp;Sales:";echo form_radio('work_group','New Sales',$sale,$action_js);echo"&nbsp;&nbsp;&nbsp;Spanish:";echo form_radio('work_group','Spanish',$spanish,$action_js);
		echo'<td></td>';
		echo'<td>';
		echo $dispo_txtbg;
			echo"Call&nbsp;Disposition:";
		echo '</font>';
		echo'</td>';
		echo'<td>';
			echo form_dropdown('call_dispo',$dropdown_calldispo, isset($_POST['call_dispo']) ? $_POST['call_dispo']:(isset($row->call_dispo) ? $row->call_dispo:''));
			// echo $row->dispo;
			//echo form_dropdown('call_dispo',$dropdown_calldispo, isset($_POST['call_dispo']) ? $_POST['call_dispo']:'');
		
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
		echo'</td>';
		echo'<td>';
			echo"Renewal:";echo form_radio('work_group','Renewal', $renewal,$action_js);echo"&nbsp;&nbsp;&nbsp;Payment:";echo form_radio('work_group','Payment',$payment,$action_js);
		echo'<td></td>';
		echo'<td>';
		echo $id_txtbg;
			echo"Call&nbsp;Recorded&nbsp;ID:";
		echo '</font>';
		echo'</td>';
		echo'<td>';
			echo form_input($call_record_id); 
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
		echo $origin_txtbg;
			echo"Call&nbsp;Origin:";
		echo '</font>';
		echo'</td>';
		echo'<td>';
			echo form_dropdown('call_origin',$dropdown_callorigin, isset($_POST['call_origin']) ? $_POST['call_origin']:(isset($row->call_origin) ? $row->call_origin:''));
		echo'</td>';
		echo'<td></td>';
		echo'<td>';
		echo $web_txtbg;
			echo"Web&nbsp;Enrollment?";
		echo '</font>';
		echo'</td>';
		echo'<td>';
			echo"Yes:";echo form_radio($question_yes);echo"&nbsp;&nbsp;&nbsp;No:";echo form_radio($question_no);
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
		echo $offered_txtbg;
			echo"Promo&nbsp;Offered:";
		echo '</font>';
		echo'</td>';
		echo'<td>';
			echo form_dropdown('promo_offered',$dropdown_callpromo, isset($_POST['promo_offered']) ? $_POST['promo_offered']:(isset($row->promo_offered) ? $row->promo_offered:''));
		echo'</td>';
		echo'<td></td>';
		echo'<td>';
			echo"Web&nbsp;Disposition:";
		echo'</td>';
		echo'<td>';
			echo form_dropdown('web_dispo',$dropdown_callwebdispo, isset($_POST['web_dispo']) ? $_POST['web_dispo']:(isset($row->web_dispo) ? $row->web_dispo:''));
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
		echo $source_txtbg;
			echo"Source:";
		echo '</font>';
		echo'</td>';
		echo'<td>';
			echo form_dropdown('source',$dropdown_callsource, isset($_POST['source']) ? $_POST['source']:(isset($row->source) ? $row->source:'')); 
		echo'</td>';
	echo'</tr>';
	echo'<tr>';
		echo'<td>';
			echo"Remarks:";
		echo'</td>';
	echo'</tr>';
echo'</table>';
echo '<table border=0 width=800  cellpadding=1 cellspacing=1 style="background-color:#cfcdcd;border:2px solid #A6C197;" align = center>';
	echo '<tr>';
		echo'<td>';
			echo"Remarks:";
		echo'</td>';
		echo'<td>';
			echo form_textarea($remarks);
		echo'</td>';
	echo '</tr>';
	echo '<tr>';
		echo'<td>';
			echo form_submit(array('name' => 'save', 'id' => 'save', ),'Save All');
		echo'</td>';
		echo'<td></td>';
		echo'<td></td>';
		echo'<td></td>';
		echo'<td></td>';
		echo '<td align="center"><a href="'.base_url().'user/call/">Cancel<a></td>';
	echo '</tr>';
echo'</table>';
echo '<table border=0 width=800  cellpadding=1 cellspacing=1 style="background-color:#000000;border:2px solid #A6C197;" align = center>';
	echo '<tr>';
		echo '<td>';
			echo '<font color = #FF0000 face = arial>';
			echo validation_errors();
			echo '</font>';
		echo '</td>';
	echo '</tr>';
echo '</table>';
echo form_close();
 ?>
</font>
<br><br>

