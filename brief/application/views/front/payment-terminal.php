<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
<title>technosavvyllc</title>
<link rel="shortcut icon" href="https://technosavvyllc.com/images/favicon.png" />
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/owl.carousel.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/style.css" />
<link rel="stylesheet" href="<?php echo base_url('assets/front/')?>css/responsive.css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<link rel="stylesheet" href="<?php echo base_url('assets/front/alertify/css/')?>alertify.rtl.css">
<link rel="stylesheet" href="<?php echo base_url('assets/front/alertify/css/')?>themes/default.rtl.css">


</head>
<script>
  var base_url = '<?php echo base_url();?>';
<!-- Facebook Pixel Code -->

  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '395124417741391');
  fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=395124417741391&ev=PageView&noscript=1"
/>
</noscript>
<!-- End Facebook Pixel Code -->

</script>
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
            <!--<div class="form-group" >-->
            <!--<select id="getstr_plan" name="getstr_plan">-->
            <!--    <option value="">Select A Plan</option>-->
            <!--    <option value="White Labelling">White Labelling</option>-->
            <!--    <option value="Resource Outsourcing">Resource Outsourcing</option>-->
               
            <!--</select>-->
            <!--<span id="getstr_plan_err"></span>-->
            <!--</div>-->
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
          <h3><a href="tel:+16092815203"><span>Call us at :</span>+1 (609) 281 5203</a></h3>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-7 ">
          <h3><a href="mailto:info@technosavvyllc.com"><span>Email us at :</span> info@technosavvyllc.com</a></h3>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-12 no_padding"> 
            <!--<a data-toggle="modal" data-target="#myModal2" href="javascript:void(0)"><button>GET STARTED</button></a> -->
            <a id="myModal2open1" href="javascript:void(0)"><button>GET STARTED</button></a>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="min-banner"> 
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12 center">
        <!--<p>Affordable & Reliable</p>-->
        <h1>Payment Terminal</h1>
        <!--<p>For Digital Services.</p>-->
        <!--<div class="col-md-4 col-sm-4 col-xs-12 center"> -->
        <!--    <a  data-toggle="modal" data-target="#myModal2" href="javascript:void(0)">-->
        <!--        <button>SIGNUP NOW</button>-->
        <!--    </a> -->
        <!--</div>-->
      </div>
    </div>
  </div>
</div>
<section>
    <div class="brief-form">
        <div class="container">
            <div class="form-div">
                <h2>Payment Terminal</h2>
                <div class="muble-respofie">
                    <div class="col-md-3 col-sm-6 col-xs-12 no-spas">
                      <div class="col-md-3 col-xs-9 col-sm-4 no-spas">
                        <div class="custom-nave active-num"> 
                            <span class="num"><i class="fa fa-check"></i></span>
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-9 col-xs-8 no-spas">
                        <div class="side-bar">
                          <h3>SIGN UP <span>Step One</span></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 no-spas">
                      <div class="col-md-3 col-xs-9 col-sm-4 no-spas">
                        <div class="custom-nave active-num"> 
                            <span class="num"><i class="fa fa-check"></i></span>
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-9 col-xs-8 no-spas">
                        <div class="side-bar">
                          <h3>Project Details <span>Step Two</span></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 no-spas">
                      <div class="col-md-3 col-xs-9 col-sm-4 no-spas">
                        <div class="custom-nave active-num"> 
                            <span class="num"><i class="fa fa-check"></i></span>
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-9 col-xs-8 no-spas">
                        <div class="side-bar">
                          <h3>Order Preview <span>Step Three</span></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 no-spas">
                      <div class="col-md-3 col-xs-9 col-sm-4 no-spas">
                        <div class="custom-nave active-num"> 
                            <span class="num">4</span>
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-9 col-xs-8 no-spas">
                        <div class="side-bar">
                          <h3>Secure Payment <span>Step four</span></h3>
                        </div>
                      </div>
                    </div>
                </div>
                <form action="<?php echo base_url('/')?>OrderPreview">
                    <h3>Payment Information</h3>
                    <div class="form-group row">
                    <label for="description" class="col-sm-4 col-form-label">Description</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="description">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="amount" class="col-sm-4 col-form-label">Amount: USD</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="amount">
                    </div>
                    </div>
                    <h3>Billing Information</h3>
                    <div class="form-group row">
                    <label for="fname" class="col-sm-4 col-form-label">First Name:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="fname">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="lname" class="col-sm-4 col-form-label">Last Name:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="lname">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label">Address:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="address">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="city" class="col-sm-4 col-form-label">City:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="city">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="country" class="col-sm-4 col-form-label">Country:</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="country">
                        <option value="">Please Select</option>
                        <option value="US" selected="">United States</option>
                        <option value="CA">Canada</option>
                        <option value="UK">United Kingdom</option>
                        <option value="AU">Australia</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda
                        </option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegovina
                        </option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brazil</option>
                        <option value="BN">Brunei Darussalam
                        </option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African
                            Republic
                        </option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island
                        </option>
                        <option value="CC">Cocos (Keeling)
                            Islands
                        </option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, The Democratic
                            Republic of the
                        </option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote D`Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic
                        </option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea
                        </option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands
                            (Malvinas)
                        </option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia
                        </option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran (Islamic Republic
                            Of)
                        </option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea North</option>
                        <option value="KR">Korea South</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands
                        </option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="NA">Namibia</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles
                        </option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestine Autonomous
                        </option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea
                        </option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation
                        </option>
                        <option value="RW">Rwanda</option>
                        <option value="VC">Saint Vincent and the
                            Grenadines
                        </option>
                        <option value="MP">Saipan</option>
                        <option value="SM">San Marino</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovak Republic</option>
                        <option value="SI">Slovenia</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="KN">St. Kitts/Nevis</option>
                        <option value="LC">St. Lucia</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TW">Taiwan</option>
                        <option value="TI">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago
                        </option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos
                            Islands
                        </option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates
                        </option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands
                            (British)
                        </option>
                        <option value="VI">Virgin Islands (U.S.)
                        </option>
                        <option value="WF">Wallis and Futuna
                            Islands
                        </option>
                        <option value="YE">Yemen</option>
                        <option value="YU">Yugoslavia</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="state" class="col-sm-4 col-form-label">State/Province: </label>
                    <div class="col-sm-8">
                        <select class="form-control" id="state">
                            <option value="">Please Select</option>
                            <optgroup label="Australian Provinces">
                                <option value="-AU-NSW">New South
                                    Wales
                                </option>
                                <option value="-AU-QLD">Queensland
                                </option>
                                <option value="-AU-SA">South
                                    Australia
                                </option>
                                <option value="-AU-TAS">Tasmania
                                </option>
                                <option value="-AU-VIC">Victoria
                                </option>
                                <option value="-AU-WA">Western
                                    Australia
                                </option>
                                <option value="-AU-ACT">Australian
                                    Capital Territory
                                </option>
                                <option value="-AU-NT">Northern
                                    Territory
                                </option>
                            </optgroup>
                            <optgroup label="Canadian Provinces">
                                <option value="AB">Alberta</option>
                                <option value="BC">British Columbia
                                </option>
                                <option value="MB">Manitoba</option>
                                <option value="NB">New Brunswick</option>
                                <option value="NF">Newfoundland</option>
                                <option value="NT">Northwest
                                    Territories
                                </option>
                                <option value="NS">Nova Scotia</option>
                                <option value="NVT">Nunavut</option>
                                <option value="ON">Ontario</option>
                                <option value="PE">Prince Edward Island
                                </option>
                                <option value="QC">Quebec</option>
                                <option value="SK">Saskatchewan</option>
                                <option value="YK">Yukon</option>
                            </optgroup>
                            <optgroup label="US States">
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="BVI">British Virgin
                                    Islands
                                </option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="GU">Guam</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MP">Mariana Islands
                                </option>
                                <option value="MPI">Mariana Islands
                                    (Pacific)
                                </option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina
                                </option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina
                                </option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="USVI">VI U.S. Virgin
                                    Islands
                                </option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="DC">Washington, D.C.
                                </option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <!-- FOR STRIPE UK -->
                            <optgroup label="England">
                                <option>Bedfordshire</option>
                                <option>Berkshire</option>
                                <option>Bristol</option>
                                <option>Buckinghamshire
                                </option>
                                <option>Cambridgeshire
                                </option>
                                <option>Cheshire</option>
                                <option>City of London
                                </option>
                                <option>Cornwall</option>
                                <option>Cumbria</option>
                                <option>Derbyshire</option>
                                <option>Devon</option>
                                <option>Dorset</option>
                                <option>Durham</option>
                                <option>East Riding
                                    of Yorkshire
                                </option>
                                <option>East Sussex</option>
                                <option>Essex</option>
                                <option>Gloucestershire
                                </option>
                                <option>Greater London
                                </option>
                                <option>Greater
                                    Manchester
                                </option>
                                <option>Hampshire</option>
                                <option>Herefordshire</option>
                                <option>Hertfordshire</option>
                                <option>Isle of Wight</option>
                                <option>Kent</option>
                                <option>Lancashire</option>
                                <option>Leicestershire
                                </option>
                                <option>Lincolnshire</option>
                                <option>Merseyside</option>
                                <option>Norfolk</option>
                                <option>North Yorkshire
                                </option>
                                <option>Northamptonshire
                                </option>
                                <option>Northumberland
                                </option>
                                <option>Nottinghamshire
                                </option>
                                <option>Oxfordshire</option>
                                <option>Rutland</option>
                                <option>Shropshire</option>
                                <option>Somerset</option>
                                <option>South Yorkshire
                                </option>
                                <option>Staffordshire</option>
                                <option>Suffolk</option>
                                <option>Surrey</option>
                                <option>Tyne and Wear</option>
                                <option>Warwickshire</option>
                                <option>West Midlands</option>
                                <option>West Sussex</option>
                                <option>West Yorkshire
                                </option>
                                <option>Wiltshire</option>
                                <option>Worcestershire
                                </option>
                            </optgroup>
                            <optgroup label="Scotland">
                                <option>Aberdeenshire</option>
                                <option>Angus</option>
                                <option>Argyllshire</option>
                                <option>Ayrshire</option>
                                <option>Banffshire</option>
                                <option>Berwickshire</option>
                                <option>Buteshire</option>
                                <option>Cromartyshire</option>
                                <option>Caithness</option>
                                <option>Clackmannanshire
                                </option>
                                <option>Dumfriesshire</option>
                                <option>Dunbartonshire
                                </option>
                                <option>East Lothian</option>
                                <option>Fife</option>
                                <option>Inverness-shire
                                </option>
                                <option>Kincardineshire
                                </option>
                                <option>Kinross</option>
                                <option>
                                    Kirkcudbrightshire
                                </option>
                                <option>Lanarkshire</option>
                                <option>Midlothian</option>
                                <option>Morayshire</option>
                                <option>Nairnshire</option>
                                <option>Orkney</option>
                                <option>Peeblesshire</option>
                                <option>Perthshire</option>
                                <option>Renfrewshire</option>
                                <option>Ross-shire</option>
                                <option>Roxburghshire</option>
                                <option>Selkirkshire</option>
                                <option>Shetland</option>
                                <option>Stirlingshire</option>
                                <option>Sutherland</option>
                                <option>West Lothian</option>
                                <option>Wigtownshire</option>
                            </optgroup>
                            <optgroup label="Wales">
                                <option>Anglesey</option>
                                <option>Brecknockshire
                                </option>
                                <option>Caernarfonshire
                                </option>
                                <option>Carmarthenshire
                                </option>
                                <option>Cardiganshire</option>
                                <option>Denbighshire</option>
                                <option>Flintshire</option>
                                <option>Glamorgan</option>
                                <option>Merioneth</option>
                                <option>Monmouthshire</option>
                                <option>Montgomeryshire
                                </option>
                                <option>Pembrokeshire</option>
                                <option>Radnorshire</option>
                            </optgroup>
                            <optgroup label="Northern Ireland">
                                <option>Antrim</option>
                                <option>Armagh</option>
                                <option>Down</option>
                                <option>Fermanagh</option>
                                <option>Londonderry</option>
                                <option>Tyrone</option>
                            </optgroup>
                            <!-- FOR STRIPE UK END-->
                            <option value="N/A">Other</option>
                        
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="zip" class="col-sm-4 col-form-label">ZIP/Postal Code:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="zip">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" id="email">
                    </div>
                    </div>
                    <h3>Credit Card Information</h3>
                    <div class="form-group row radio-tn">
                        <label for="ihave" class="col-sm-4 col-form-label">I have:</label>
                        <div class="col-sm-8">
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline1"><img src="assets/front/images/ico_visa.jpg" alt="brand-02" class="img-fluid lazyload"/></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2"><img src="assets/front/images/ico_mc.jpg" alt="brand-02" class="img-fluid lazyload"/></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline3"><img src="assets/front/images/ico_amex.jpg" alt="brand-02" class="img-fluid lazyload"/></label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline4"><img src="assets/front/images/ico_disc.jpg" alt="brand-02" class="img-fluid lazyload"/></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="cardnum" class="col-sm-4 col-form-label">Card Number:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="cardnum">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="nameoncard" class="col-sm-4 col-form-label">Name on Card:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nameoncard">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="expiredate" class="col-sm-4 col-form-label">Expiration Date:</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="expiremonth">
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" id="expireyear">
                            <option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="cvv" class="col-sm-4 col-form-label">CVV:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="cvv">
                    </div>
                    </div>
                    <div class="form-group row chkbox-tn">
                        <label for="terms" class="col-sm-4 col-form-label">Terms & Conditions:</label>
                        <div class="col-sm-8">
                            <input type="checkbox" class="custom-control-input" id="terms">
                            <label class="custom-control-label" for="terms"> I accept <a href="#">Terms & Conditions</a></label>
                        </div>
                    </div>
                    <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary btn-gen-tn">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
  <div class="prodly">
    <div class="container">

        <h3>We Proudly Serve</h3>
        <div class="owl-carousel owl-theme">
          <div class="item"><img src="assets/front/images/brand-2.png" alt="brand-02" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand-6.png" alt="brand-06" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/beetech.png" alt="beetech" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/cmg.png" alt="CMG" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/digitized.png" alt="digitized" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/elumin-Agency.png" alt="elumin-Agency" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/froggy.png" alt="froggy" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/Intrepid.png" alt="Intrepid" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/karter.png" alt="karter" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/magnetic.png" alt="magnetic" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/manson.png" alt="manson" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/rank-genix.png" alt="rank-genix" class="img-fluid lazyload"/></div>
          <div class="item"><img src="assets/front/images/brand/Traffic-Digital.png" alt="Traffic Digital" class="img-fluid lazyload"/></div>
      </div>
    </div>
  </div>
</section>
<!--new Testimonials-->
<section>
  <div class="sixth-section">
    <div class="container">
      <h2>Testimonials</h2>
        <div class=" center-box">
          <div class="six-inner">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <div class="six-sec-box underline-from-left">
                    <center>
                  <p><h4><b>Reliable, Knowledgeable and Will deliver as promised</b></h4><br> "I have had a great time working with the team. These folks make an effort to understand the scope of the project and go above and beyond to deliver in a timeline mannerI have had a great time working with the team. These folks make an effort to understand the scope of the project and go above and beyond to deliver in a timeline manner."</p>
                  <h6>Preet Bansal</h6>
                  <p>Founder at Intrepid Marketing</p>
                  </center>
                </div>
              </div>
              
              <div class="item">
                <div class="six-sec-box six-sec-box02 underline-from-left">
                  <center>
                  <p><h4><b>We haven't heard the word "No" yetWe haven't heard the word "No" yet.</b></h4><br>"The Team at Techno Savvy is effective and affordable. They have completed or are currently working on 4 separate projects for our company. Website builds, API integrations, Animated Videos and even outsourced administration. At this point we can only offer positive feedback on the speed, quality and cost. We completely recommend then for your next project."</p>
                  <h6>Jeremy Ashcraft  </h6>
                  <p>Employeer at Karter Scientific Labware Manufacturing Co</p>
                  </center>
                </div>
              </div>
              
              <div class="item">
                <div class="six-sec-box underline-from-left">
                  <center>
                  <p><h4><b>THE BEST!</b></h4><br>I love working with Techno Savvy.They’re the best! Great quality, great pricing & a great team! The relationship we’ve built is phenomenal. They’ve helped my agency scale and are always there for me and my businesses best interest. I cannot thank them enough. These guys are legit!</p>
                  <h6>Edward Martinez</h6>
                  <p>CEO Digitized Media LLC</p>
                  </center>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="seventh-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h6>free consultation</h6>
          <h5>Let’s Discuss How We Can Partner</h5>
          <div class="border-line"></div>
          <h4>Our experts will understand your business requirements and will develop services and pricing strategy for your agency.</h4>
         <a data-toggle="modal" data-target="#myModal4" href="javascript:void(0)">
          <button>Schedule a Call</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<section>
  <div class="news-letter" id="news">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
          <div class="news-letter-frist">
            <form id="helpproj_form" method="post" action="<?php echo base_url('/')?>#helpproj_form" enctype="multipart/form-data">
            <h4 class="lift">need help with a project?</h4>
            <div class="col-sm-12" style="margin-bottom:20px;">
                <div class="col-sm-6 no-space-xs">
                  <h6>your name*</h6>
                  <input value="<?php echo (!empty($response['errors']['helpproj_name']))?set_value('helpproj_name'):''; ?>" name="helpproj_name" type="text" placeholder="">
                  <?php if(!empty($response['errors']['helpproj_name'])){ echo $response['errors']['helpproj_name']; }?>
                </div>
                <div class="col-sm-6 no-space-xs">
                  <h6>your email*</h6>
                  <input value="<?php echo (!empty($response['errors']['helpproj_email']))?set_value('helpproj_email'):''; ?>" name="helpproj_email" type="text" placeholder="">
                  <?php if(!empty($response['errors']['helpproj_email'])){ echo $response['errors']['helpproj_email']; }?>
                </div>
            </div>
            <div class="col-sm-12" style="margin-bottom:20px;">
                <div class="col-sm-6 no-space-xs">
                  <h6>phone*</h6>
                  <input value="<?php echo (!empty($response['errors']['helpproj_phone']))?set_value('helpproj_phone'):''; ?>" name="helpproj_phone" type="text" placeholder="">
                  <?php if(!empty($response['errors']['helpproj_phone'])){ echo $response['errors']['helpproj_phone']; }?>
                </div>
                <div class="col-sm-6 no-space-xs">
                  <h6>website*</h6>
                  <input value="<?php echo (!empty($response['errors']['helpproj_website']))?set_value('helpproj_website'):''; ?>" name="helpproj_website" type="text" placeholder="">
                  <?php if(!empty($response['errors']['helpproj_website'])){ echo $response['errors']['helpproj_website']; }?>
                </div>
            </div>
            <div class="col-sm-12" style="margin-bottom:20px;">
                <div class="col-sm-12 no-space-xs">
                  <h6>how can we help*</h6>
                  <textarea name="helpproj_helpmsg"><?php echo (!empty($response['errors']['helpproj_helpmsg']))?set_value('helpproj_helpmsg'):''; ?></textarea>
                  <?php if(!empty($response['errors']['helpproj_helpmsg'])){ echo $response['errors']['helpproj_helpmsg']; }?>
                </div>
            </div>
            
            <div class="col-sm-12" style="margin-bottom:20px;">
                <div class="col-sm-6 no-space-xs">
                  <div class="upload">
                    
                      <input id="helpproj_file" name="helpproj_file" type="file" >
                    
                    <h3>Upload  file</h3>
                  </div>
                  <?php if(!empty($response['errors']['helpproj_file'])){ echo $response['errors']['helpproj_file']; }?>
                </div>
                
                <div class="col-sm-6 no-space-xs">
                    <span style="color:white; font-size:18px;" id="nameoffile"></span>
                </div>
                
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="col-sm-4 no-space-xs"><button type="submit">submit</button></div>
                <div class="col-md-8 col-sm-6 no-space-xs"></div>
            </div>
            
            </form>
          </div>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 padding-left">
          <div class="news-letter-second">
            <h4 >Newsletter Signup</h4>
            <p>You want free tips sent directly to your inbox? Industry insider information? Submit your email below and we'll put on our weekly newsletter.</p>
            <form id="nslf_form">
            <input name="nslf_form_email" type="text" placeholder="enter your email">
            <span id="nslf_form_email_err"></span>
            <button type="submit">submit</button>
            </form>
            <p>Your email is 100% safe and will never be sold to third parties.</p>
            <h5>get in touch</h5>
            <ul>
              <li><a href="https://www.facebook.com/Techno Savvy/" target="_blank"><img src="<?php echo base_url('assets/front/')?>images/fb-icon.png" class="img-responsive"></a></li>
              <li><a href=" https://twitter.com/Techno Savvy" target="_blank"><img src="<?php echo base_url('assets/front/')?>images/tw-icon.png" class="img-responsive"></a></li>
              <li><a href="https://www.linkedin.com/Techno Savvy/" target="_blank"><img src="<?php echo base_url('assets/front/')?>images/linkedin-icon.png" class="img-responsive"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="footer-information">
            <div class="col-sm-4">
              <div class="footer-information01"> <img src="<?php echo base_url('assets/front/')?>images/logo.png" class="img-responsive">
                <p>Techno Savvy is a project of Technado Private Limited – Fastest growing IT Exporters in Pakistan. We are offering Design, Development and Digital Marketing Services worldwide</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="footer-information02">
                <h6>Quick Link</h6>
                <ul>
                  <li><a href="#" target="_blank">-	 home</a></li>
                  <li><a href="https://technosavvyllc.com/about-us" target="_blank">-		About Us</a></li>
                  <li><a href="https://technosavvyllc.com/plans" target="_blank">- 	Plans</a></li>
                  <li><a href="https://technosavvyllc.com/portfolio" target="_blank">-		Portfolio</a></li>
                  <li><a href="https://technosavvyllc.com/contact-us" target="_blank">-		Contact Us</a></li>
                  <li><a href="https://technosavvyllc.com/blog/" target="_blank">-	Blogs</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="footer-information02">
                <h6>Services</h6>
                <ul>
                  <li><a href="#options">-		White Labeling</a></li>
                  <li><a href="#options">-		Resource Outsourcing</a></li>
                  <!--<li><a href="#options">-		Referral Program </a></li>-->
                </ul>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="footer-information02">
                <h6>Legal</h6>
                <ul>
                  <li><a href="https://technosavvyllc.com/terms">-	Terms of Service</a></li>
                  <li><a href="#">-	Security Policy</a></li>
                  <li><a href="https://technosavvyllc.com/privacy-policy">-	Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="cust-pic">
            <div class="footer-information03">
              <h5>Global Operations</h5>
            </div>
            <div class="col-sm-3">
              <div class="footer-information04"> <img src="<?php echo base_url('assets/front/')?>images/jersey.png" class="img-responsive">
                <h6>United States of America </h6>
                <p>309 Fellowship Road, East Gate Center, Suite 200, Mt Laurel Township, NJ 08054</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="footer-information04"> <img src="<?php echo base_url('assets/front/')?>images/kingdom.png" class="img-responsive">
                <h6>United Kingdom</h6>
                <p>21 Hatton Garden, Farringdon, London, ECIN Uk.</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="footer-information04"> <img src="<?php echo base_url('assets/front/')?>images/c3.png" class="img-responsive">
                <h6>pakistan</h6>
                <p>Suit no. 10 & 11, Ground Floor, Business Avenue, Main Shahra-e-Faisal, Karachi, Pakistan</p>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="footer-information04"> <img src="<?php echo base_url('assets/front/')?>images/dubai.png" class="img-responsive">
                <h6>UAE</h6>
                <p>36 D2, Ajman Free Zone, Ajman UAE</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right">
      <div class="container">
        <div class="row">
          
          <div class="col-xs-12 col-sm-5 col-md-2 col-lg-2 no_span">
            <h5>Call us at : <span><a href="tel: +16092815203">+1 (609) 281 5203</a></span></h5>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <h4>Email us at : <a href="mailto:info@technosavvyllc.com ">info@technosavvyllc.com </a></h4>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-6 col-lg-6">
            <h6>Copyright 2020 Techno Savvy in Pakistan – Powered by Technado</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo base_url('assets/front/')?>js/jquery.min.js"></script> 
<script src="<?php echo base_url('assets/front/')?>js/owl.carousel.min.js"></script> 
<script src="<?php echo base_url('assets/front/')?>js/bootstrap.min.js"></script> 
<script src="<?php echo base_url('assets/front/alertify/')?>alertify.js"></script>
<script src="<?php echo base_url('assets/front/')?>js/custom.js"></script> 
<script src="<?php echo base_url('assets/front/')?>js/forms.js"></script> 
<!-- WhatsHelp.io widget -->

<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+923322948059", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->


<!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1de49d62-da4d-4b39-ac05-b0cef7ec9218"> </script>
<!-- End of  Zendesk Widget script -->



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128955330-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128955330-3');
</script>






</body>
</html>
