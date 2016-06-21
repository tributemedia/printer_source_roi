<?php

$step1 = 'yes';
$step2 = 'yes';
$finished = 'yes';
$page_name = 'ROI-Results';
$page_url = 'http://calculator.printersource.com/printer_source_roi/results.php';
$persona = $_POST['persona'];
$blog_subscription = $_POST['blog'] == 'on' ? 'Yes' : 'No';

include 'post-vars.php';
//header('Location: https://www.tributemedia.com/thank-you-self-assessment');
//include 'hs-submit.php';
exit;
?>
