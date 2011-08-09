<script type="text/javascript">
$(document).ready(function()
	{
	$('.left, .content input, .content textarea, .content select').focus(function(){
	$(this).parents('.content').addClass("over");
		}).blur(function(){
	$(this).parents('.content').removeClass("over");
	});
	});
</script> 
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
				              'style'       => 'width:300%',

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
   				
<div style="float:left; margin-right:20px; margin-top:-1px;">
	<div class="content">
		<div class="row">
			<div class="left">Phone Number:</div>
			<div class="right"><?php echo $phonenumber; ?></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Last Call Date:</div>
			<div class="right"><?php echo isset($row->last_call) ? $row->last_call : ''; ?></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">First Name:</div>
			<div class="right"><?php echo form_input($first_name); ?></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Last Name</div>
			<div class="right"><?php echo form_input($last_name); ?></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Email:</div>
			<div class="right"><?php echo form_input($email); ?></div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!- Other rows here -->
<div style="float:right; margin-right:20px; margin-top:-2px;">
	<div class="content">
			<div class="row" <?php echo $wg_txtbg; ?>>
			<div class="left">
						Workgroup:
			</div>
			<div class="right">
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
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="row" <?php echo $wg_txtbg; ?>>
			<div class="left"></div>
			<div class="right"><?php echo"Renewal:";echo form_radio('work_group','Renewal', $renewal,$action_js);echo"&nbsp;&nbsp;&nbsp;Payment:";echo form_radio('work_group','Payment',$payment,$action_js); ?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row" <?php echo $utility_txtbg; ?>>
			<div class="left">Utility:</div>
			<div class="right">
				<?php echo form_dropdown('utility',$dropdown_callutility, isset($_POST['utility']) ? $_POST['utility']:(isset($row->utility) ? $row->utility:'')); ?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row" <?php echo $origin_txtbg;?>>
			<div class="left">Call Origin:</div>
			<div class="right"><?php echo form_dropdown('call_origin',$dropdown_callorigin, isset($_POST['call_origin']) ? $_POST['call_origin']:(isset($row->call_origin) ? $row->call_origin:''));?></div>
			<div class="clear"></div>
		</div>
		<div class="row" <?php echo $offered_txtbg;?>>
			<div class="left">Promo Offered:</div>
			<div class="right"><?php echo form_dropdown('promo_offered',$dropdown_callpromo, isset($_POST['promo_offered']) ? $_POST['promo_offered']:(isset($row->promo_offered) ? $row->promo_offered:''));?></div>
			<div class="clear"></div>
		</div>
		<div class="row" <?php echo $source_txtbg;?>>
			<div class="left">Source:</div>
			<div class="right"><?php echo form_dropdown('source',$dropdown_callsource, isset($_POST['source']) ? $_POST['source']:(isset($row->source) ? $row->source:'')); 
			 ?></div>
			<div class="clear"></div>
			</div>
	</div>
</div>
<!- Other rows here -->
<div style="float:left; margin-right:20px;">
	<div class="content">
		<div class="row"<?php echo $acct_txtbg; ?>>
			<div class="left">Account1:</div>
			<div class="right"><?php 
									echo form_input($acct1);
						 		?>
			 </div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Account2:</div>
			<div class="right"><?php echo form_input($acct2);?></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Account3:</div>
			<div class="right"><?php echo form_input($acct3);  ?></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Account4:</div>
			<div class="right"><?php echo form_input($acct4); ?></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Account5:</div>
			<div class="right">
				<?php echo form_input($acct5);?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!- Other rows here -->
<div style="float:left; margin-right:20px; margin-top:-2px;">
	<div class="content" >
		<div class="row" <?php echo $dispo_txtbg; ?>>
			<div class="left">Call Disposition:</div>
			<div class="right"><?php echo form_dropdown('call_dispo',$dropdown_calldispo, isset($_POST['call_dispo']) ? $_POST['call_dispo']:(isset($row->call_dispo) ? $row->call_dispo:''));?></div>
			<div class="clear"></div>
		</div>
		<div class="row" <?php echo $id_txtbg; ?>>
			<div class="left">Call Recorded ID:</div>
			<div class="right"><?php echo form_input($call_record_id); ?></div>
			<div class="clear"></div>
		</div>
		<div class="row" <?php echo $web_txtbg;?>>
			<div class="left">Web Enrollment?</div>
			<div class="right"><?php echo"Yes:";echo form_radio($question_yes);echo"&nbsp;&nbsp;&nbsp;No:";echo form_radio($question_no);?></div>
			<div class="clear"></div>
		</div>
		<div class="row">
			<div class="left">Web Disposition:</div>
			<div class="right"><?php echo form_dropdown('web_dispo',$dropdown_callwebdispo, isset($_POST['web_dispo']) ? $_POST['web_dispo']:(isset($row->web_dispo) ? $row->web_dispo:'')); ?></div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!- Other rows here -->
<div style="float:left; margin-left:-630px;">
	<div class="remarks" style="background-color:#ECE9D8">
		<div class="left">Remarks:</div>
		<div class="right"><?php echo form_textarea($remarks); ?></div>
		<div class="clear"></div>
	</div>
	<div class="button" style="float:left; margin-left:160px;" >
		<div class="left"><?php echo form_submit(array('name' => 'save', 'id' => 'save', ),'Save All'); ?></div>
		<div class="right"><font size = "4"><?php echo '<a href="'.base_url().'user/call/">Cancel<a>';?></font></div>
		<div class="clear"></div>
	</div>
	<div class="button" style="float:left; margin-left:160px;" >
			<font color = #FF0000 face = arial>
			<?php echo validation_errors(); ?>
			</font>
		<div class="clear"></div>
	</div>
	</div>
</div>
<?php echo form_close(); ?>

