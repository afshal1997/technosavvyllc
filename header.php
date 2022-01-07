<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#" lang="en">
<?php
$base_url = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$arr = explode("/", $self);
$with_ext = $arr['1'];
$arr2 = explode(".", $with_ext);
$page = $arr2['0'];

?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Language" content="en" />

    <meta http-equiv="Expires" content="0" />
    <meta name="description" content="" />
    <meta name="keywords" content="Business Consulting Solutions, IT Services, digital transformation consulting" />
    <meta name="author" Content="Techno Savvy LLC" />
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favico.png" />
    <link rel="icon" type="image/png" href="./assets/images/favico.png" sizes="32x32" />
    <title>Techno Savvy | Providing Sound Successful Solutions to All</title>
    <meta property="og:url" content="index.html">
    <link rel="canonical" href="index.html">

    <meta name="template" content="content-page" />
    <script type="text/javascript" src="content/dam/web/en/global-resource/designs/js/fix-urls.js"></script>
    <link href="bootstrapcdn/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="clientlibs/clientlibs/granite/jquery-ui.css" type="text/css">
    <link rel="stylesheet" href="clientlibs/web/clientlibs/clientlib-commons.css" type="text/css">
    <link rel="stylesheet" href="clientlibs/web/clientlibs/clientlib-base.css" type="text/css">
    <script type="text/javascript" src="clientlibs/web/clientlibs/clientlib-dependencies.js"></script>
    <link href="content/dam/web/en/global-resource/designs/css/commonstylesNew.css" rel="stylesheet" />
    <link id="favicon" href="./assets/images/favicon.png" rel="shortcut icon" />
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <!-- Parallax -->
    <link href="./assets/parallax/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



</head>

<body class="page basepage basicpage <?php echo $page ?>">
    <div id="preloader"><img src="./assets/images/loader/techno-savvy-Loading.gif" /></div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="./assets/images/home/logo.svg">
                    <h2 class="modal-title" id="exampleModalLabel">get a Quote</h2>
                    <p> Let's get started on your project! Fill out the form below and our team will contact you promptly! </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="formvalues">
                        <div class="form-group">
                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Name *">
                            <span id="full_name_err" style="color:red"></span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control email" name="email" id="email" placeholder="Email Address *">
                            <span id="email_err" style="color:red"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control phone" name="phone" id="phone" placeholder="Phone Address *">
                            <span id="phone_err" style="color:red"></span>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control company" name="company" id="company" placeholder="Company *">
                            <span id="company_err" style="color:red"></span>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control message" id="message-text" name="message" placeholder="Message*"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submitForm" class="btn btn-primary btn btn-shutter-more text-uppercase fontweight600">Submit
                        Now
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div>
        <div class="root responsivegrid">
            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                <div class="pagedetails parbase aem-GridColumn aem-GridColumn--default--12"></div>
                <div class="header aem-GridColumn aem-GridColumn--default--12">
                    <header>
                        <nav class="navbar navbar-default navbar-fixed-top scrollbg-show " role="navigation">
                            <div class="container mt45">
                                <div class="navbar-header page-scroll">
                                    <a class="navbar-brand" href="/">
                                        <img src="./assets/images/home/logo.svg" width="250">
                                    </a>
                                </div>
                                <div class="header-menu hidden-tab">
                                    <ul class="nav navbar-nav navbar-right top-nav">
                                        <li>
                                            <img src="./assets/images/home/ph.png" />
                                            <a href="tel:+1 (929) 209-0208" title="+1 (929) 209-0208">+1 (929) 209-0208</a>
                                        </li>
                                        <li>
                                            <img src="./assets/images/home/enveloe.png" />
                                            <a href="mailto:info@technosavvyllc.com" title="info@technosavvyllc.com">info@technosavvyllc.com</a>
                                        </li>
                                        <li class="social-head"><a href="https://www.facebook.com/TechnoSavvyllc"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-head"><a href="https://www.instagram.com/technosavvyllc/"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="progressbar">
                                <div class="width"></div>
                            </div>
                        </nav>
                    </header>
                </div>
                <div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">
                    <div class="xf-content-height">
                        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                            <div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
                                <link href="content/dam/web/burger-menu/en/css/burger-menu.css" rel="stylesheet">
                                <div class="burger-search-wrapper navbar-fixed-top">
                                    <div class="container">
                                        <div class="hamburger-menu">
                                            <div class="menu-bg"></div>
                                            <div class="circle"></div>
                                            <div class="menu">
                                                <div class="fix-menu hidden-sm hidden-xs">
                                                    <div class="col-md-9 col-sm-12 col-xs-12 automate" style="background:transparent; ">
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-12 col-xs-12 menuItems" style="background-image: none;background-color:#0a0a0a; ">
                                                    <a href="/Techno Savvy">
                                                        <img src="./assets/images/home/logo.svg" alt="Techno Savvy" class="img-responsive logo-inner">
                                                    </a>
                                                    <ul class="list-unstyled">
                                                        <li class="" title="Home">
                                                            <a href="/" title="Home" class="" target="_self">
                                                                Home<span class="un-line hidden-sm hidden-xs hidden-tab"></span>
                                                            </a>
                                                        </li>
                                                        <li class="" title="About Us"><a href="about.php" title="About Us" class="" target="_self">
                                                                Our Story<span class="un-line hidden-sm hidden-xs hidden-tab"></span>
                                                            </a>
                                                        </li>
                                                        <li class="smalltext" title="Digital Marketing">
                                                            <a href="digital-marketing.php" title="Digital Marketing" class="hover-menu-hide" target="_self">
                                                                Digital Marketing
                                                                <span class="un-line hidden-sm hidden-xs hidden-tab"></span>
                                                            </a>
                                                        </li>
                                                        <li class="smalltext" title="Creative Services">
                                                            <a href="creative-services.php" title="Creative Services" class="hover-menu-hide" target="_self">
                                                                Creative Services <span class="un-line hidden-sm hidden-xs hidden-tab"></span>
                                                            </a>
                                                        </li>
                                                        <li class="smalltext" title="Development Solution">
                                                            <a href="developmentsolutions.php" title="Development Solution" class="hover-menu-hide" target="_self">
                                                                Development Solution <span class="un-line hidden-sm hidden-xs hidden-tab"></span>
                                                            </a>
                                                        </li>
                                                        <li class="smalltext last-sma-text" title="Enterprise Solutions">
                                                            <a href="enterprisesolutions.php" title="Enterprise Solutions" class="hover-menu-hide" target="_self">
                                                                Enterprise Solutions
                                                                <span class="un-line hidden-sm hidden-xs hidden-tab"></span>
                                                            </a>
                                                        </li>
                                                        <li class="" title="Portfolio">
                                                            <a href="portfolios.php" title="Portfolio" class="" target="_self">
                                                                Portfolio<span class="un-line hidden-sm hidden-xs hidden-tab"></span>
                                                            </a>
                                                        </li>
                                                        <li class="" title="Contact">
                                                            <a href="javascript:void(0)" title="Contact" class="contct-btn">
                                                                Contact<span class="un-line hidden-sm hidden-xs hidden-tab"></span>
                                                            </a>
                                                        </li>
                                                        <li class="social-icons" title="Facebook">
                                                            <a href="https://www.facebook.com/TechnoSavvyllc" title="Facebook" class="" target="_blank">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>

                                                        <li class="social-icons" title="Instagram">
                                                            <a href="https://www.instagram.com/technosavvyllc/" title="Instagram" class="" target="_blank">
                                                                <i class="fa fa-instagram"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="burger">
                                                <div class="icon-bar1"></div>
                                                <div class="icon-bar2"></div>
                                                <div class="icon-bar3"></div>
                                                <div class="icon-bar4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript" src="content/dam/web/burger-menu/en/js/burger-menu.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12" id="fullpage">