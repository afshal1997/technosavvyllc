<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
<title>Techno Savvy</title>
<link rel="shortcut icon" href="https://technosavvyllc.com/assets/images/home/icon.png" />
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/owl.carousel.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/style.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/responsive.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo base_url('assets/front/alertify/css/')?>alertify.rtl.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/alertify/css/')?>themes/default.rtl.css">

</head>
<body>
<div id="myModal4" class="modal fade mymodal in" role="dialog">
  <div class="custom-mudal4">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body"> 
        <form id="consl_form">
            <img src="<?php echo base_url('assets/front/')?>images/logo.png" class="img-responsive center-block">
            <h4>Schedule a Call</h4>
            <button type="button" class="close" data-dismiss="modal">X</button>
            <div class="form-group">
                <input type="text" name="consl_name" placeholder="Name">
                <span id="consl_name_err"></span>
            </div>
            <div class="form-group">
                <input type="email" name="consl_email"  placeholder="Email Address">
                <span id="consl_email_err"></span>
            </div>
            <div class="form-group">
                <input type="tel" name="consl_number" placeholder="Phone Number">
                <span id="consl_number_err"></span>
            </div>
            <div class="form-group">
                <input type="text" name="consl_company"  placeholder="Company Name">
                <span id="consl_company_err"></span>
            </div>
            <div class="form-group">
                <input type="date" name="consl_startdate" placeholder="Schedule Date">
                <span id="consl_startdate_err"></span>
            </div>
            <div class="form-group">
                <input type="time" name="consl_scheduletime"  placeholder="Schedule Time">
                <span id="consl_scheduletime_err"></span>
            </div>
            <div class="form-group">
                <textarea name="consl_message" placeholder="Message"></textarea>
                <span id="consl_message_err"></span>
            </div>
            <div class="sub">
                <button type="submit">Apply Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myModal2" class="modal fade mymodal in" role="dialog">
  <div class="custom-mudal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body"> 
        <form id="getstr_form">
            <img src="<?php echo base_url('assets/front/')?>images/logo.png" class="img-responsive center-block">
            <h4>Sign Up</h4>
                <button type="button" class="close" data-dismiss="modal">X</button>
            <div class="form-group">
                <input type="text" name="getstr_name" placeholder="Name">
                <span id="getstr_name_err"></span>
            </div>
            <div class="form-group">
                <input type="email" name="getstr_email" placeholder="Email Address">
                <span id="getstr_email_err"></span>
            </div>
            <div class="form-group">
                <input name="getstr_number" placeholder="Phone Number">
                <span id="getstr_number_err"></span>
            </div>
            <div class="form-group">
                <input type="text" name="getstr_company" placeholder="Company Name">
                <span id="getstr_company_err"></span>
            </div>
            <div class="form-group">
                <textarea name="getstr_message" placeholder="Message"></textarea>
                <span id="getstr_message_err"></span>
            </div>
            <div class="sub">
                <button>Submit</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<header>
  <div class="top-bar">
    <div class="container"> 
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 "><img src="<?php echo base_url('assets/front/')?>images/logo.png" class="img-responsive" /></div>
        <div class="col-md-2 col-sm-2 col-md-offset-1  col-xs-5 no_padding">
          <h3><a href="tel:+16097759538"><span>Call us at :</span>+1 (609) 775 9538</a></h3>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-7 ">
          <h3><a href="mailto:info@technosavvyllc.com"><span>Email us at :</span> info@technosavvyllc.com</a></h3>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12 no_padding">
            <a id="myModal2open1" href="javascript:void(0)"><button>GET STARTED</button></a>
        </div>
      </div>
    </div>
  </div>
</header>