<br><br>
	<center>
		<div class=view_main style="border-style:solid;  border-color:#E0E3E2;">
		<?php
			
		echo form_open(base_url().'user/call');								
						
						$phonenumber = array(
												'name' => 'phonenumber',
												'id'	 => 'phonenumber',
												'value'	 => '',
												'size'   => '50'
											);
						
		
		?>
		
					
			<table>
				<tr>
					<td>
						<font color =  #FFFFFF  size = 3>
						Enter 10 Digits Phonenumber:
					</font>
					</td>
					<td>
						<?php echo form_input($phonenumber); ?>
					</td>
					<td>
						<?php echo form_submit(array('name' => 'submit_name', 'id' => 'submit_id', ), 'Search'); ?>
					</td>
				</tr>
			</table>
					
				
			
		
		
		<?php echo form_close(); ?>
		</div>
	</center>
	<div align = center>
	<font color="#AA0000" face="Arial">
		<?php echo validation_errors(); ?>
	</font> 
</div>
<br><br>