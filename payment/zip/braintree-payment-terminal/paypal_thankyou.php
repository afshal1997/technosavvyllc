<?php
/******************************************************************************
#                     PHP BrainTree Payment Terminal v1.0
#******************************************************************************
#      Author:     Convergine.com
#      Email:      info@convergine.com
#      Website:    https://www.convergine.com
#
#
#      Version:    1.0
#      Copyright:  (c) 2013 - Convergine.com
#
#*******************************************************************************/
	
	//REQUIRE CONFIGURATION FILE
	require("includes/config.php"); //important file. Don't forget to edit it!

	//REQUIRE SITE HEADER TEMPLATE		
	require "includes/site.header.php"; 
?>
<div align="center" class="wrapper">
    <div class="form_container">
    	<h1>Thank you!</h1>
            <div id="accordion">
                <p>Thank you for your payment. You will receive confirmation email from us shortly.<br /><br />
                    <a href="index.php">Back To Terminal</a></p>
            </div>
    </div>
</div>
<?php require "includes/site.footer.php"; ?>