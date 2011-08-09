<?php

	echo form_open(base_url() . 'user/register');
	$username = array(
										'name' => 'username',
										'id'	 => 'username',
										'value'	 => ''
									);
									
	$agent_id = array(
										'name' => 'agent-id',
										'id'	 => 'agent-id',
										'value'	 => ''
									);
									
									
	 $password = array(
										 'name' => 'password',
										 'id'	 => 'password',
										 'value'	 => ''
										);
									
	 $password_conf = array(
											'name' => 'password_conf',
											'id'	 => 'password_conf',
											'value'	 => ''
										);
									

?>
<div class="login" style="margin-left:400px;">
<ul style="list-style:none;">
<div class="top" align="center" style="border-style:solid; border-color:#A7C198; background-color: #7B7A79; height:20px; width:366px;"><font color="#FFFFFF" face="Arial">User Registration</font></div>
<div class="logback" style="border-style:solid; border-color:#A7C198; background-color:#E8FCB3; height:220px;width:366px;">
<div class="welcome" align = center>
  <font color=#666666 face="Arial">
    Welcome to NorthStar Solutions INC. Web-Based Call Manager.To Register, please input your username and password. 
  </font>
</div>
<br />
<table align="center">

  <tr>
      <td>
        <label><font face="Arial">Username:</font></label>
      </td>
      <td>
        <li>
            <div>
              <?php echo form_input($username); ?>
            </div>
         </li>
      </td>
  </tr>
   <tr>
      <td>
        <label><font face="Arial">Agent ID:</font></label>
      </td>
      <td>
        <li>
            <div>
              <?php echo form_input($agent_id); ?>
            </div>
         </li>
      </td>
  </tr>
  <tr>
    <td>
      <label><font face="Arial">Password:</font></label>
    </td>
      <td>
       <li>
          <div>
            <?php echo form_password($password); ?>
          </div>
        </li>
      </td>
  </tr>
  <tr>
  	<td>
    	 <label><font face="Arial">Confirm&nbsp;Password:</font></label>
    </td>
    <td>
      <li>
          <div>
            <?php echo form_password($password_conf); ?>
          </div>
        </li>
    </td>
  </tr>
  <tr>
    <td>  
       <li>
        <div>
          <?php echo form_submit(array('name' => 'submit_name', 'id' => 'submit_id', ), 'Register'); ?>
        </div>
     	</li>
     </td>
   </tr>
</table>
</div>
</ul>
</div>
<br />
<div align="center"> 
 <font color="#AA0000" face="Arial">
  <?php echo validation_errors(); ?>
  <?php echo $this->session->flashdata('insertdata'); ?>
 </font>    
</div>
<?php echo form_close(); ?>
<br /><br />