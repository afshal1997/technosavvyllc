<html>
<head>
</head>
<body>
<table background="" bgcolor="#095b4f" width="100%" style="padding:20px 0 20px 0; border:4px solid #1DC7EA;" cellspacing="0" border="0" align="center" cellpadding="0">
  <tbody>
    <tr>
      <td><table width="500" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-radius: 5px; font-family: Arial, Helvetica, sans-serif">
          <tbody>
            <tr>
              <td style="padding-top:20px; text-align:center;"><img style="max-width:100%; " src="<?php echo base_url('uploads/settings/email_logo.png');?>"></td>
            </tr>
            <tr>
              <td style="margin-top:100px;"></td>
            </tr>
            <tr>
              <td valign="top" style="color:#404041;line-height:16px;padding:25px 20px 0px 20px"><p> </p>
                <h3 align="center" style="margin-top: -12px;background-color: #FFF;clear: both;width:100%px;margin-right: auto;margin-left: auto;padding-left: 15px;padding-right: 15px; font-family: arial,sans-serif;">
                <span style="color:#001441; font-size:25px;"><?php echo !empty($subject)?$subject:''?></span> </h3>
                </section>
                <p style="text-align:center;"><?php echo !empty($body)?$body:''?></p><br/><br/></td>
            </tr>	
            <tr>
               <td></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
</body>
</html>