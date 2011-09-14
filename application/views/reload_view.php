
<?php 

if(isset($msg))
{
echo $msg;
	echo "<script type='text/javascript'>";
		echo "alert('$msg');";
		echo "window.location = 'http://spas12/campaigns/ae-inbound/call-manager/';";
echo "</script>"; 
}
?>
<script type="text/javascript">
$(document).ready(function(){
	//$("#but").click(function(){

		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		//$( "#box" ).dialog( "destroy" );

		//$( "#box" ).dialog({
			//modal: true,
			//buttons: {
				//Ok: function() {
					//$( this ).dialog( "close" );
				//}
			//}
		//});
	//});
//});
</script> 

<br>
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
				              'style'       => 'width:110%',

				            );
				            
				       
			$utility_txtbg ='style="BACKGROUND-COLOR:#FFFFFF"';
			$acct_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
			$wg_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
			$origin_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
			$offered_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
			$source_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
			$dispo_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
			$id_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
			$web_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
			if(isset($_POST['work_group'])) {
				switch ($_POST['work_group']) {
					case 'New Sales':
						$utility_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$acct_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$wg_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$origin_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$offered_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$source_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$dispo_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$id_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$web_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						break;
					case 'Spanish':
						$utility_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$acct_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$wg_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$origin_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$offered_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$source_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$dispo_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$id_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$web_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
						break;
					case 'Renewal':
						$utility_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$acct_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$wg_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$origin_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$offered_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$source_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$dispo_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$id_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$web_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						break;
					case 'Payment':
						$utility_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
						$acct_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$wg_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
						$origin_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$offered_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
						$source_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
						$dispo_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$id_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$web_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
						break;
				}
				
			} elseif (isset($row->workgroup)) {
				switch ($row->workgroup) {
						case 'New Sales':
						$utility_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$acct_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$wg_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$origin_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$offered_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$source_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$dispo_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$id_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$web_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						break;
					case 'Spanish':
						$utility_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$acct_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$wg_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$origin_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$offered_txtbg =' style="BACKGROUND-COLOR:#80A86B"';
						$source_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$dispo_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$id_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$web_txtbg = ' style="BACKGROUND-COLOR:#FFFFFF"';
						break;
					case 'Renewal':
						$utility_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$acct_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$wg_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$origin_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$offered_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$source_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$dispo_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$id_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$web_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						break;
					case 'Payment':
						$utility_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
						$acct_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$wg_txtbg = ' style="BACKGROUND-COLOR:#FFFFFF"';
						$origin_txtbg = ' style="BACKGROUND-COLOR:#80A86B"';
						$offered_txtbg = ' style="BACKGROUND-COLOR:#FFFFFF"';
						$source_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
						$dispo_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$id_txtbg = 'style="BACKGROUND-COLOR:#80A86B"';
						$web_txtbg = 'style="BACKGROUND-COLOR:#FFFFFF"';
						break;
				}
			}
	?>
  
<div id="box">
	 <font color = #FF0000 face = arial>
			<?php echo validation_errors(); ?>
	</font>
	
</div> 				
<div class = "sec_a"><font color="#ABADAC" face = "Arial Black" size = "3">&nbsp;&nbsp;&nbsp;Personal Information</font></div>
<div class= "grp_a">
	<table align ="center">
		<tr>
			<td>
				Phone Number:
			</td>
			<td>
				<?php echo $phonenumber; ?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td <?php echo $wg_txtbg; ?>>
				
				Workgroup:
			</td>
			<td>
							<?php 
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
								
							?>
			</td>
		</tr>
		<tr>
			<td>
				Last Call Date:
			</td>
			<td>
				<?php echo isset($row->last_call) ? $row->last_call : ''; ?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
				<?php echo"Renewal:";echo form_radio('work_group','Renewal', $renewal,$action_js);echo"&nbsp;&nbsp;&nbsp;Payment:";echo form_radio('work_group','Payment',$payment,$action_js); ?>
			</td>
		</tr>
		<tr>
			<td>
				First Name:
			</td>
			<td>
				<?php echo form_input($first_name);  ?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td <?php echo $utility_txtbg; ?>>
				Utility:
			</td>
			<td>
				<?php echo form_dropdown('utility',$dropdown_callutility, isset($_POST['utility']) ? $_POST['utility']:(isset($row->utility) ? $row->utility:'')); ?>
			</td>
		</tr>	
		<tr>
			<td>
				Last Name:
			</td>
			<td>
				<?php echo form_input($last_name); ?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td <?php echo $origin_txtbg;?>>
				Call Origin:
			</td>
			
			<td>
				<?php echo form_dropdown('call_origin',$dropdown_callorigin, isset($_POST['call_origin']) ? $_POST['call_origin']:(isset($row->call_origin) ? $row->call_origin:''));?>		
			</td>
		</tr>	
		<tr>
			<td>
				Email:
			</td>
			<td>
				<?php echo form_input($email); ?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td <?php echo $offered_txtbg;?>>
				Promo Offered:
			</td>
			
			<td>
				<?php echo form_dropdown('promo_offered',$dropdown_callpromo, isset($_POST['promo_offered']) ? $_POST['promo_offered']:(isset($row->promo_offered) ? $row->promo_offered:''));?>
			</td>
			
		</tr>
		<tr>
			<td>
				
			</td>
			<td>
				
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
						
			
		</tr>				
	</table>
</div>
<br>
<div class = "sec_b"><font color="#ABADAC" face = "Arial Black" size = "3">&nbsp;&nbsp;&nbsp;Account Information</font></div>
<div class= "grp_b">
	<table align ="center">
		<tr>
			<td <?php echo $acct_txtbg; ?>>
				Account1:
			</td>
			<td>
				<?php echo form_input($acct1);  ?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td <?php echo $dispo_txtbg; ?>>
				Call Disposition:
			</td>
			<td>
				<?php echo form_dropdown('call_dispo',$dropdown_calldispo, isset($_POST['call_dispo']) ? $_POST['call_dispo']:(isset($row->call_dispo) ? $row->call_dispo:''));?>
			</td>
		</tr>
		<tr>
			<td>
				Account2:
			</td>
			<td>
				<?php echo form_input($acct2);  ?>
			</td>
				<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td <?php echo $id_txtbg; ?>>
				Call Recorded ID:
			</td>
			<td>
				<?php echo form_input($call_record_id); ?>
			</td>
		</tr>
		<tr>
			<td>
				Account3:
			</td>
			<td>
				<?php echo form_input($acct3);  ?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td <?php echo $web_txtbg;?>>
				Web Enrollment?
			</td>
			<td>
				<?php echo"Yes:";echo form_radio($question_yes);echo"&nbsp;&nbsp;&nbsp;No:";echo form_radio($question_no);?>
			</td>
		</tr>	
		<tr>
			<td>
				Account4:
			</td>
			<td>
				<?php echo form_input($acct4);  ?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
				Web Disposition:
			</td>
			<td>
				<?php echo form_dropdown('web_dispo',$dropdown_callwebdispo, isset($_POST['web_dispo']) ? $_POST['web_dispo']:(isset($row->web_dispo) ? $row->web_dispo:'')); ?>
			</td>
		</tr>	
		<tr>
			<td>
				Account5:
			</td>
			<td>
				<?php echo form_input($acct5);  ?>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>
			<td>
			</td>			
			<td <?php echo $source_txtbg;?>>
				Source:
			</td>
			
			<td>
				<?php echo form_dropdown('source',$dropdown_callsource, isset($_POST['source']) ? $_POST['source']:(isset($row->source) ? $row->source:''));?>
			</td>
			
			
		</tr>	
	</table>
</div>
<br>
<div class = "sec_c"><font color="#ABADAC" face = "Arial Black" size = "3">&nbsp;&nbsp;&nbsp;Remarks/Notes</font></div>
<div class = "grp_c">
	<table align ="center">
		<tr>
			<td>
				
			</td>
			<td>
				<?php echo form_textarea($remarks); ?>
			</td>	
		</tr>	
		<tr>
			<td>
			</td>
			<td>
				<div id ="but">
					<?php echo form_submit(array('name' => 'save', 'id' => 'save', ),'Save All'); ?>
				</div>
			</td>
			<td>
				<div class = "cancel">
						&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '<a href="'.base_url().'user/call/"><font color=#070707  size=2>Cancel</font><a>';?>
				</div>
			</td>
			
		</tr>		
	
	</table>

</div>
<br>

<?php echo form_close(); ?>
<br>
