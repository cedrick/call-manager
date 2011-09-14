  <div class="header">
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '<img src="'.base_url().'template/images/head.png" />'; ?>
  </div>
 
  	 <div class = "logout"><?php echo '<a href="'.base_url().'record/log_out">'."<font color=#FFFFFF  size=4>"."Logout"."</font>".'</a>' ?> </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <div class = "name"><?php  echo "<font color=#FFFFFF face=Arial size=4>"."<b>". $this->session->userdata('username')."</b>"."</font>" ?></div>
 
  <div class = "call">
  	<?php echo '<img src="'.base_url().'template/images/call.png" />'; ?>
  </div>
