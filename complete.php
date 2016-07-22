<?php

$step1 = 'yes';
$step2 = 'yes';
$finished = 'yes';
$page_name = 'ROI-Results';
$page_url = 'http://calculator.printersource.com/printer_source_roi/results.php';
$persona = $_POST['persona'];
$blog_subscription = $_POST['blog'] == 'on' ? 'Yes' : 'No';

include 'post-vars.php';
//include 'hs-submit.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Digital Proof of Delivery ROI Calculator</title>
    <meta content="" name="description">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="site-header wrapper row">
      <div class="container">
        <div class="logo col s12 m5"><img src="images/logo.png"></div>
        <div class="telephone col s12 m7">CALL 1-800-788-5101</div>
      </div>
    </div>
    
    <div id="pre-loader">
      <img src="images/preloader.gif" />
    </div>
    
    <div class="site-footer wrapper row">
      <div class="container">
        <div class="information col s12">
          <div class="copyright col s12 m6">&copy; 2016 Printer Source, Inc.</div>
          <div class="link col s12 m6"><a href="http://wwww.printersource.com">Back to home</a></div>
        </div>
      </div>
    </div>

    <!-- Start of Async HubSpot Analytics Code -->
    <script type="text/javascript">
      (function(d,s,i,r) {
        if (d.getElementById(i)){return;}
        var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
        n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/481308.js';
        e.parentNode.insertBefore(n, e);
      })(document,"script","hs-analytics",300000);
    </script>
    <!-- End of Async HubSpot Analytics Code -->
    <script type="text/javascript">
      window.setTimeout(function() {
      window.location.href='http://offers.printersource.com/thank-you-roi-calculator';
      }, 5000);
    </script>
  </body>
</html>