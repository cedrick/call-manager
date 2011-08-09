<br><br>
	<center>
		<div class=view_main style="border-style:solid; border-color:#A7C198;">
		<?php
			
		echo form_open(base_url().'user/call');								
						
						$phonenumber = array(
												'name' => 'phonenumber',
												'id'	 => 'phonenumber',
												'value'	 => '',
												'size'   => '50'
											);
						
		
		?>
		
					<font color = #63200A face = arial>
						Enter 10 Digits Phonenumber:
					</font>
				
					<?php echo form_input($phonenumber); ?>
				<div class = "button_search">
					<?php echo form_submit(array('name' => 'submit_name', 'id' => 'submit_id', ), 'Search'); ?>
				</div>	
		
		
		<?php echo form_close(); ?>
		</div>
	</center>
	<div align = center>
	<font color="#AA0000" face="Arial">
		<?php echo validation_errors(); ?>
	</font> 
</div>
<br><br>