  <div class="header">
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '<img src="'.base_url().'template/images/head.png" />'; ?>
  </div>
  <div class = "logout">
  	<?php echo '<a href="'.base_url().'record/log_out">'."<font color=#333333 face=Arial size=4>"."Logout"."</font>".'</a>' ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo "<font color=#63200A face=Arial size=4>"."<b>". $this->session->userdata('username')."</b>"."</font>" ?>
  </div>
  <div class = "call">
  	<?php echo '<img src="'.base_url().'template/images/call.png" />'; ?>
  </div>
