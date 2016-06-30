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
header('Location: http://offers.printersource.com/thank-you-roi-calculator');
include 'hs-submit.php';
exit;
?>
