<?php
include "ini.php";
?>
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script> 
<!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
  <![endif]-->
  <!--[if lt IE 9]><script src="../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<!--header-->
<?php
include "header.php";
?>
<!--content-->
<div class="global error-indent">
    <div class="err-box">
        <div class="container">
            <div class="row">
                <div class="error-box clearfix">
                    <div class="col-lg-8 col-md-8 col-sm-8 errorBox">
                        <p class="title">404 Error</p>
                        <p class="description">sorry,page not found</p>
                        <p>The page you are looking for might have been removed,had its name changed, or is temporarily unavailable.Please try using our search box below to look for information on the website.</p>
                        <form id="search-404" class="search" action="search.php" method="GET" accept-charset="utf-8">
                            <input type="text" name="s" value="Search" onfocus="if (this.value == 'Search') {this.value=''}" onblur="if (this.value == '') {this.value='Search'}">
                            <a href="#" onClick="document.getElementById('search-404').submit()"><img src="img/magnify.png" alt=""></a>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 center">
                        <figure><img src="img/error.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>