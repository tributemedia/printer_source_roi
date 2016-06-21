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

// if ($step2 != 'yes') {
//   header('Location: ' . $page_url);
//   exit;
// }
include 'post-vars.php';
//include 'hs-submit.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Objectif Lune - PlanetPress Partners</title>
  <link rel="Shortcut Icon" href="images/-favicon.ico" />
  <meta name="keywords" content="">
  <meta name="description" content="">
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/Forms.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body id="results">
  
  <div id="wrapper">
    <h4 style="width:100%;">your estimated savings</h4>
    <p>Based on the information you've provided about your business and processes, we've estimated the following savings.</p>
    <div style="width:49%; float:left; margin-right:2%;">
      <h3>Purchase</h3>
      <div style="height:150px; background: linear-gradient(to top left, #3E4543, #677070); padding:6px; font-size:14px; font-weight:bold; color:white;">
        Daily Savings: <span id="calcDailySavings" style="font-size:18px;"><?php print $purchase_day_savings; ?></span><br />
        Monthly Savings: <span id="calcMonthlySavings" style="font-size:18px;"><?php print $purchase_mon_savings; ?></span><br />
        Yearly Savings: <span id="calcYearlySavings" style="font-size:18px;"><?php print $purchase_yrly_savings; ?></span><br /><br />
        Full ROI in <span id="calcROIinMonths" style="font-size:18px;"><?php print $roi_in_mos; ?></span> months!<br />
      </div>
    </div>
    <div style="width:49%; float:left;">
      <h3>Lease</h3>
      <div style="height:150px; background: linear-gradient(to top left, #3E4543, #677070); padding:6px; font-size:14px; font-weight:bold; color:white;">
        Monthly Lease Cost: <span id="calcLeaseMonthlyCost" style="font-size:18px;"><?php print $lease_mon_cost; ?></span><br />
        Monthly Savings: <span id="calcLeaseMonthlySavings" style="font-size:18px;"><?php print $lease_mon_savings; ?></span>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col s12">
      <form name="results" action="complete.php" method="post">
        <div class="form-field">
	    		<input class="first-name" type="hidden" name="first_name" value=<?php echo '"'
	    		 . $first_name . '"'; ?>>
	    	</div>
        <div class="form-field">
	    		<input class="last-name" type="hidden" name="last_name" value=<?php echo '"'
	    		 . $last_name . '"'; ?>>
	    	</div>
	    	<div class="form-field">
	    		<input class="email" type="hidden" name="email" value=<?php echo '"' . $email . '"'; ?>>
	    	</div>
        <div class="form-field">
	    		<input class="company" type="hidden" name="company" value=<?php echo '"' . $company . '"'; ?>>
	    	</div>
	    	<div class="input-field">
	    	  <select name="persona">
	    	    <option value="" disabled selected>Choose your option</option>
	    			<?php 
	    			foreach ($personas as $key => $persona) {
	    				echo '<option value="' . $key . '">' . $persona . '</option>';
	    			}
	    			?>
	    	  </select>
	    	  <label>Which statement fits you best?</label>
	    	</div>
        <p>
	    		<input type="checkbox" id="blog" class="contact" name="blog" />
	    		<label for="blog">Subscribe to our blog.</label>
	    	</p>
        <div class="button-wrapper">
      	  <button id="submit-button" class="waves-effect waves-light btn-large" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
	  $(document).ready(function() {
	  	$('select').material_select();
	  });
	</script>
</body>
<html>  