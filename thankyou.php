<?php
$results = $_POST;
// foreach ($results as $key => $result) {
//   echo $key . '=>' . $result . '<br />';
// }

$personas['persona_1'] = 'Business Owner';
$personas['persona_2'] = 'IT Manager or Director';
$personas['persona_3'] = 'CFO';
$step1 = 'yes';
$step2 = $_POST['second'];
$finished = 'no';
$page_name = 'ROI-Data';
$page_url = 'http://calculator.printersource.com/printer_source_roi/ROI-Calculator.php';
$num_drivers = $results['num_drivers'];
$avg_deliveries = $results['del_per_day'];
$purchase_day_savings = $results['pur_day_savings'];
$purchase_mon_savings = $results['pur_mon_savings'];
$purchase_yrly_savings = $results['pur_yrly_savings'];
$roi_in_mos = $results['full_roi'];
$lease_mon_cost = $results['lease_mon_cost'];
$lease_mon_savings = $results['lease_mon_savings'];

if ($step2 != 'yes') {
  header('Location: ' . $page_url);
  exit;
}
include 'post-vars.php';
include 'hs-submit.php';
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