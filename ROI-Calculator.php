<?php

$step1 = $_POST['front'];
$step2 = 'no';
$finished = 'no';
$page_name = 'Contact-Information';
$page_url = 'http://calculator.printersource.com/printer_source_roi/info.php';
$percent = 'no score';
$tooltip1 = 'How many deliveries, on average, do you make per truck per driver daily?';
$tooltip2 = 'What is the average value of each delivery?';
$tooltip3 = 'How many delivery trucks do you run, on average, per day?';
$tooltip4 = 'What is the annual salary for the administratvie staff that supports the proof of delivery process?';
$tooltip5 = 'What does it cost, on average, to produce the delivery documents? Please include paper, consumables and maintenance.';
$tooltip6 = 'What are the monthly total costs to operate your scanning center? Please include hardware, maintenance and staff.';
$tooltip7 = 'How much time does it take an individual to make changes or process a delivery note upon its return?';
$tooltip8 = 'How much time does it take to find, reprocess and manage lost delivery notes?';
$tooltip9 = 'As a percent, how many delivery notes are misplaced daily or monthly?';
$tooltip10 = 'What percentage of your daily deliveries have issues (Dirty) and need attention?';
$tooltip11 = 'On avergae, how long does it take to manage each issue associated to dirty deliveries?';
$tooltip12 = 'How much time does it take for someone to match the proof of delivery to the cooresponding invoice?';
$tooltip13 = 'How many days of DSO can be saved with a real time electronic proof of delivery system?';
$tooltip14 = 'As a perrcent, how many proof of delivery\'s are lost or misplaced daily or monthly?';
$tooltip15 = 'When a POD is lost, what is the ratio of customer non-payment on them?';

if ($step1 != 'yes') {
  header('Location: ' . $page_url);
  exit;
}
include 'post-vars.php';
include 'hs-submit.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Digital Proof of Delivery ROI Calculator</title>
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
<body id="calculator" onload="reCalc();">
  
  <div class="site-header wrapper row">
    <div class="container">
      <div class="logo col s12 m5"><img src="images/logo.png"></div>
      <div class="telephone col s12 m7">CALL 1-800-788-5101</div>
    </div>
  </div>
  
  <div id="wrapper">
    <div id="content">
      <div id="left">
        <div class="post">
          <h5>CAPTURE ON-THE-GO ROI SAVINGS CALCULATOR</h5>
          <h4>Business statistics</h4>
          <script language="javascript">
            function toggleNeeded(checkbox, inputFieldName) {
              var inputField = document.getElementById(inputFieldName);
              if (checkbox.checked) {
                inputField.value = 0;
                inputField.disabled = true;
              } else {
                inputField.disabled = false;
              }
              reCalc();
            }

            function reCalc() {
              var nWorkingHours = 2087;
              var nHourlyRate = 0; //calculated later
              var nInterestRate = .0325;
              var nThreeYearLeaseRate = .033;
              var nNumberOfDeliveries = 0; //calculated later
              var nPPConnect = 0; //calculated later
              var nPSCost = 100000;
              var nCare = 0; //calculated later
              var nCOTGLicense = 0; //calculated later
              var nTotalCost = 0; //calculated later
              var nLeaseMonthlyCost = 0; //calculated later
              var nTotalSaving = 0; //calculated later
              var nMonthlySaving = 0; //calculated later
              var nLeaseISPcost = 0; //calculated later
              var nReducedPrintingService = 0; //calculated later
              var nReducedScanService = 0; //calculated later
              var nReducedKeyDeliveryNote = 0; //calculated later
              var nReducedManageMisplacedDelivery = 0; //calculated later
              var nReducedManageDirtyDelivery = 0; //calculated later
              var nReducedMatchPODInvoiceManually = 0; //calculated later
              var nReductionDSOSaved = 0; //calculated later
              var nNonPaymentLostPOD = 0; //calculated later
              var deliveryAvgVal = document.getElementById("deliveryAvgVal");
              var yearlyAdminSalary = document.getElementById("yearlyAdminSalary");
              var numberOfDrivers = document.getElementById("numberOfDrivers");
              var avgDeliveriesPerDay = document.getElementById("avgDeliveriesPerDay");
              var calcBusinessSize = document.getElementById("calcBusinessSize");
              var printingService = document.getElementById("printingService");
              var calcReducedPrintingService = document.getElementById("calcReducedPrintingService");
              var scanService = document.getElementById("scanService");
              var calcReducedScanService = document.getElementById("calcReducedScanService");
              var keyDeliveryNote = document.getElementById("keyDeliveryNote");
              var calcReducedKeyDeliveryNote = document.getElementById("calcReducedKeyDeliveryNote");
              var manageMisplacedDelivery = document.getElementById("manageMisplacedDelivery");
              var calcReducedManageMisplacedDelivery = document.getElementById("calcReducedManageMisplacedDelivery");
              var misplacedDeliveryNotes = document.getElementById("misplacedDeliveryNotes");
              var calcReducedMisplacedDeliveryNotes = document.getElementById("calcReducedMisplacedDeliveryNotes");
              var dirtyVsClean = document.getElementById("dirtyVsClean");
              var calcReducedDirtyVsClean = document.getElementById("calcReducedDirtyVsClean");
              var manageDirtyDelivery = document.getElementById("manageDirtyDelivery");
              var calcReducedManageDirtyDelivery = document.getElementById("calcReducedManageDirtyDelivery");
              var matchPODInvoiceManually = document.getElementById("matchPODInvoiceManually");
              var calcReducedMatchPODInvoiceManually = document.getElementById("calcReducedMatchPODInvoiceManually");
              var reductionDSOSaved = document.getElementById("reductionDSOSaved");
              var calcReductionDSOSaved = document.getElementById("calcReductionDSOSaved");
              var numberOfPODsLostDaily = document.getElementById("numberOfPODsLostDaily");
              var calcPODsLostDaily = document.getElementById("calcPODsLostDaily");
              var nonPaymentLostPOD = document.getElementById("nonPaymentLostPOD");
              var calcNonPaymentLostPOD = document.getElementById("calcNonPaymentLostPOD");
              var ppConnect = document.getElementById("ppConnect");
              var numberOfTablets = document.getElementById("numberOfTablets");
              var internetService = document.getElementById("internetService");
              var calcLeaseMonthlyCost = document.getElementById("calcLeaseMonthlyCost");
              var calcLeaseMonthlySavings = document.getElementById("calcLeaseMonthlySavings");
              var calcROIinMonths = document.getElementById("calcROIinMonths");
              var calcDailySavings = document.getElementById("calcDailySavings");
              var calcMonthlySavings = document.getElementById("calcMonthlySavings");
              var calcYearlySavings = document.getElementById("calcYearlySavings");
              var leaseMonCost = document.getElementById("leaseMonCost");
              var leaseMonSavings = document.getElementById("leaseMonSavings");
              var fullRoi = document.getElementById("fullRoi");
              var purchaseDaySavings = document.getElementById("purchaseDaySavings");
              var purchaseMonSavings = document.getElementById("purchaseMonSavings");
              var purchaseYrSavings = document.getElementById("purchaseYrSavings");

              calcBusinessSize.value = formatCurrency(deliveryAvgVal.value * numberOfDrivers.value * avgDeliveriesPerDay.value * 20 * 12);
              nHourlyRate = yearlyAdminSalary.value / nWorkingHours;
              nNumberOfDeliveries = numberOfDrivers.value * avgDeliveriesPerDay.value;
              nReducedPrintingService = nNumberOfDeliveries * printingService.value;
              nReducedScanService = scanService.value / 20;
              nReducedKeyDeliveryNote = nNumberOfDeliveries * keyDeliveryNote.value / 60 * nHourlyRate;
              nReducedManageMisplacedDelivery = nNumberOfDeliveries * manageMisplacedDelivery.value / 60 * nHourlyRate * (misplacedDeliveryNotes.value/100);
              nReducedManageDirtyDelivery = nNumberOfDeliveries * (dirtyVsClean.value/100) * manageDirtyDelivery.value / 60 * nHourlyRate;
              nReducedMatchPODInvoiceManually = nNumberOfDeliveries * matchPODInvoiceManually.value / 60 * nHourlyRate;
              nReductionDSOSaved = deliveryAvgVal.value * nNumberOfDeliveries * nInterestRate / 365 * reductionDSOSaved.value;
              nNonPaymentLostPOD = nNumberOfDeliveries * (numberOfPODsLostDaily.value/100) * deliveryAvgVal.value * (nonPaymentLostPOD.value/100);
              calcReducedPrintingService.value = formatCurrency(nReducedPrintingService);
              calcReducedScanService.value = formatCurrency(nReducedScanService);
              calcReducedKeyDeliveryNote.value = formatCurrency(nReducedKeyDeliveryNote);
              calcReducedManageMisplacedDelivery.value = formatCurrency(nReducedManageMisplacedDelivery);
              //calcReducedMisplacedDeliveryNotes.value = 0;
              //calcReducedDirtyVsClean.value = 0;
              calcReducedManageDirtyDelivery.value = formatCurrency(nReducedManageDirtyDelivery);
              calcReducedMatchPODInvoiceManually.value = formatCurrency(nReducedMatchPODInvoiceManually);
              calcReductionDSOSaved.value = formatCurrency(nReductionDSOSaved);
              //calcPODsLostDaily.value = 0;
              calcNonPaymentLostPOD.value = formatCurrency(nNonPaymentLostPOD);
              nPPConnect = ppConnect.value * 10850;
              nCare = nPPConnect * .2;
              nCOTGLicense = numberOfDrivers.value * 300;
              nTotalCost = nPPConnect + nPSCost + (numberOfDrivers.value * numberOfTablets.value) + (numberOfDrivers.value * internetService.value * 12);
              nTotalSaving = nReducedPrintingService + nReducedScanService + nReducedKeyDeliveryNote + nReducedManageMisplacedDelivery + nReducedManageDirtyDelivery + nReducedMatchPODInvoiceManually + nReductionDSOSaved + nNonPaymentLostPOD;
              nMonthlySaving = nTotalSaving * 20;
              calcDailySavings.innerHTML = formatCurrency(nTotalSaving);
              calcMonthlySavings.innerHTML = formatCurrency(nMonthlySaving);
              calcYearlySavings.innerHTML = formatCurrency(nMonthlySaving * 12);
              nLeaseMonthlyCost = ((nCare + nCOTGLicense) * 3 + nPPConnect + nPSCost + (numberOfDrivers.value * numberOfTablets.value)) * nThreeYearLeaseRate;
              calcLeaseMonthlyCost.innerHTML = formatCurrency(nLeaseMonthlyCost);
              nLeaseISPcost = internetService.value * numberOfDrivers.value;
              calcLeaseMonthlySavings.innerHTML = formatCurrency(nMonthlySaving - nLeaseMonthlyCost - nLeaseISPcost);
              calcROIinMonths.innerHTML = (nTotalCost / (nMonthlySaving * 12) * 365 / 30).toFixed(0);
              leaseMonSavings.value = formatCurrency(nMonthlySaving - nLeaseMonthlyCost - nLeaseISPcost);
              leaseMonCost.value = formatCurrency(nLeaseMonthlyCost);
              fullRoi.value = (nTotalCost / (nMonthlySaving * 12) * 365 / 30).toFixed(0);
              purchaseDaySavings.value = formatCurrency(nTotalSaving);
              purchaseMonSavings.value = formatCurrency(nMonthlySaving);
              purchaseYrSavings.value = formatCurrency(nMonthlySaving * 12);
              calcOlCare.value = formatCurrency(nCare);
              calcCotgLicense.value = formatCurrency(nCOTGLicense);
            }

            function formatCurrency(number) {
              var n = number,
                  c = 0,
                  d = ".",
                  t = ",",
                  s = n < 0 ? "-" : "",
                  i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
                  j = (j = i.length) > 3 ? j % 3 : 0;
              return s + "$" + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
            }

            function addAndFormat(number, totalVar) {
              totalVar += number;
              return formatCurrency(number);
            }
          </script>
          <form action="thankyou.php" method="post" name="calculator">
            <div class="form-field">
              <input type="hidden" name="second" value="yes" />
            </div>
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
            <div class="row">
              <div class="col s6 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip2;?>">Value Per Delivery (Average)</div>
              <div class="col s6 input-field">
                <span class="prefix">$</span>
                <input type="number" name="del_avg_val" id="deliveryAvgVal" class="input" onchange="reCalc();" value="375" />
              </div>
            </div>
            <div class="row">
              <div class="col s6 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip3;?>">Number of Trucks</div>
              <div class="col s6 input-field">
                <input type="number" name="num_drivers" id="numberOfDrivers" class="input" onchange="reCalc();" value="50" />
              </div>
            </div>
            <div class="row">
              <div class="col s6 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip1;?>">Deliveries Per Day (Average)</div>
              <div class="col s6 input-field">
                <input type="number" name="del_per_day" id="avgDeliveriesPerDay" class="input" onchange="reCalc();" value="15" />
              </div>
            </div>
            <div class="row">
              <div class="col s6 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip4;?>">Administratve Salary (Annual Average)</div>
              <div class="col s6 input-field">
                <span class="prefix">$</span>
                <input type="number" name="annual_admin_salary" id="yearlyAdminSalary" class="input" onchange="reCalc();" value="45000" />
              </div>
            </div>
            <div class="row hide">
              <div class="col s6">Business Size</div>
              <div class="col s6 input-field">
                <input type="text" name="calc_bus_size" id="calcBusinessSize" class="calculated" />
              </div>
            </div>
            <h4>Costs of Printing &amp; Scanning</h4>
            <div class="row">
              <div class="col-header col s8" style="text-align:right;">Cost</div>
              <div class="col-header col s4" style="text-align:right;">Savings Daily</div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip5;?>">Printing Cost (per delivery document)</div>
              <div class="col s4 input-field">
                <span class="prefix">$</span>
                <input type="number" name="printing_service" id="printingService" class="input" onchange="reCalc();" value=".25" />
              </div>
              <div class="col s4 input-field">
                <input name="calc_printing_savings" type="text" id="calcReducedPrintingService" class="calculated" />
              </div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip6;?>">Scanning Cost (monthly)</div>
              <div class="col s4 input-field">
                <span class="prefix">$</span>
                <input type="number" name="scan_service" id="scanService" class="input" onchange="reCalc();" value="1500" />
              </div>
              <div class="col s4 input-field">
                <input name="calc_scan_savings" type="text" id="calcReducedScanService" class="calculated" />
              </div>
            </div>
            <h4>Monthly Cost of Running a Scan Center</h4>
            <div class="row">
              <div class="col-header col s8" style="text-align:right;">Minutes / Percentage</div>
              <div class="col-header col s4" style="text-align:right;">Savings Daily</div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip7;?>">Time to Key Delivery Note</div>
              <div class="col s4 input-field">
                <input type="number" name="key_del_note" id="keyDeliveryNote" class="input suffix" onchange="reCalc();" value="1" />
                <span class="suffix">Mins.</span>
              </div>
              <div class="col s4 input-field">
                <input name="calc_key_del_note_savings" type="text" id="calcReducedKeyDeliveryNote" class="calculated" />
              </div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip9;?>">Delivery Notes Misplaced (%)</div>
              <div class="col s4 input-field">
                <input type="number" name="misplaced_del_notes" id="misplacedDeliveryNotes" class="input suffix" onchange="reCalc();" value="1" />
                <span class="suffix">%</span>
              </div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip8;?>">Time to Manage Misplaced Delivery Note</div>
              <div class="col s4 input-field">
                <input type="number" name="manage_misplaced_del_notes" id="manageMisplacedDelivery" class="input suffix" onchange="reCalc();" value="15" />
                <span class="suffix">Mins.</span>
              </div>
              <div class="col s4 input-field">
                <input name="calc_man_misplaced_del_note_savings" type="text" id="calcReducedManageMisplacedDelivery" class="calculated" />
              </div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip10;?>">Dirty Deliveries (%)</div>
              <div class="col s4 input-field">
                <input type="number" name="dirty_vs_clean" id="dirtyVsClean" class="input suffix" onchange="reCalc();" value="10" />
                <span class="suffix">%</span>
              </div>
              <div class="col s4"></div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip11;?>">Dirty Deliveries (Time)</div>
              <div class="col s4 input-field">
                <input type="number" name="man_dirty_del" id="manageDirtyDelivery" class="input suffix" onchange="reCalc();" value="15" />
                <span class="suffix">Mins.</span>
              </div>
              <div class="col s4 input-field">
                <input name="calc_man_dirty_del_savings" type="text" id="calcReducedManageDirtyDelivery" class="calculated" />
              </div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip12;?>">Time to Match Proof of Delivery to Invoice</div>
              <div class="col s4 input-field">
                <input type="number" name="match_pod_invoice" id="matchPODInvoiceManually" class="input suffix" onchange="reCalc();" value="1" />
                <span class="suffix">Mins.</span>
              </div>
              <div class="col s4 input-field">
                <input name="calc_match_pod_invoice_savings" type="text" id="calcReducedMatchPODInvoiceManually" class="calculated" />
              </div>
            </div>
            <h4>Financial Costs</h4>
            <div class="row">
              <div class="col-header col s8" style="text-align:right;">Days / Percentage</div>
              <div class="col-header col s4" style="text-align:right;">Savings Daily</div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip13;?>">Reduction in Days Sales Outstanding (DSO)</div>
              <div class="col s4 input-field">
                <input type="number" name="red_dso_saved" id="reductionDSOSaved" class="input suffix" onchange="reCalc();" value="5" />
                <span class="suffix">Days</span>
              </div>
              <div class="col s4 input-field">
                <input name="calc_red_dso_saved" type="text" id="calcReductionDSOSaved" class="calculated" />
              </div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip14;?>">Lost POD's Daily (%)</div>
              <div class="col s4 input-field">
                <input type="number" name="num_pod_lost" id="numberOfPODsLostDaily" class="input suffix" onchange="reCalc();" value="1" />
                <span class="suffix">%</span>
              </div>
            </div>
            <div class="row">
              <div class="col s4 tooltipped" data-position="bottom" data-tooltip="<?php print $tooltip15;?>">Non-Payment on Lost POD's (%)</div>
              <div class="col s4 input-field">
                <input type="number" name="non_pay_lost_pod" id="nonPaymentLostPOD" class="input suffix" onchange="reCalc();" value="5" />
                <span class="suffix">%</span>
              </div>
              <div class="col s4 input-field">
                <input name="calc_non_pay_lost_pod" type="text" id="calcNonPaymentLostPOD" class="calculated" />
              </div>
            </div>
            <h4>System Costs</h4>
            <div class="row">
              <div class="col s4">PlanetPress Connect Licenses</div>
              <div class="col s4 offset-s4 input-field">
                <input type="number" name="pp_connect" id="ppConnect" class="input" onchange="reCalc();" value="2" />
              </div>
            </div>
            <div class="row">
              <div class="col s4">Cost of Tablets (each)</div>
              <div class="col s4">
                <p>
                  <input type="checkbox" id="chkTablets" onclick="toggleNeeded(this, 'numberOfTablets');" />
                  <label for="chkTablets">not needed<br><sapn style="font-size:12px;">(check if you already own tablets)</span></label>
                </p>
              </div>
              <div class="col s4 input-field">
                <span class="prefix">$</span> 
                <input type="number" name="num_tablets" id="numberOfTablets" class="input" onchange="reCalc();" value="350" />
              </div>
            </div>
            <div class="row">
              <div class="col s4">Internet Service per Tablet (monthly)</div>
              <div class="col s4">
                <p>
                  <input type="checkbox" id="chkInternet" onclick="toggleNeeded(this, 'internetService');" />
                  <label for="chkInternet">not needed</label>
                </p>
              </div>
              <div class="col s4 input-field">
                <span class="prefix">$</span>
                <input type="number" name="internet_service" id="internetService" class="input" onchange="reCalc();" value="60" />
              </div>
            </div>
            <div class="row">
              <div class="row">
                <div class="col s4">OL Care</div>
                <div class="col s4 offset-s4 input-field">
                  <input name="calc_ol_care" type="text" id="calcOlCare" class="calculated" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="row">
                <div class="col s4">COTG License</div>
                <div class="col s4 offset-s4 input-field">
                  <input name="calc_cotg_license" type="text" id="calcCotgLicense" class="calculated" />
                </div>
              </div>
            </div>
            
            <!-- Hidden form fields for collecting estimated savings to post to HubSpot. -->
            
            <div class="form-field">
              <input type="hidden" name="pur_day_savings" id="purchaseDaySavings" />
            </div>
            <div class="form-field">
              <input type="hidden" name="pur_mon_savings" id="purchaseMonSavings" />
            </div>
            <div class="form-field">
              <input type="hidden" name="pur_yrly_savings" id="purchaseYrSavings" />
            </div>
            <div class="form-field">
              <input type="hidden" name="full_roi" id="fullRoi" />
            </div>
            <div class="form-field">
              <input type="hidden" name="lease_mon_cost" id="leaseMonCost" />
            </div>
            <div class="form-field">
              <input type="hidden" name="lease_mon_savings" id="leaseMonSavings" />
            </div>
            
            <div style="display:none;">
            <h4 style="width:100%;">your estimated savings</h4>
            <p>Based on the information you've provided about your business and processes, we've estimated the following savings.</p>
            <div style="width:49%; float:left; margin-right:2%;">
              <h3>Purchase</h3>
              <div style="height:150px; background: linear-gradient(to top left, #3E4543, #677070); padding:6px; font-size:14px; font-weight:bold; color:white;">
                Daily Savings: <span id="calcDailySavings" style="font-size:18px;"></span><br />
                Monthly Savings: <span id="calcMonthlySavings" style="font-size:18px;"></span><br />
                Yearly Savings: <span id="calcYearlySavings" style="font-size:18px;"></span><br /><br />
                Full ROI in <span id="calcROIinMonths" style="font-size:18px;"></span> months!<br />
              </div>
            </div>

            <div style="width:49%; float:left;">
              <h3>Lease</h3>
              <div style="height:150px; background: linear-gradient(to top left, #3E4543, #677070); padding:6px; font-size:14px; font-weight:bold; color:white;">
                Monthly Lease Cost: <span id="calcLeaseMonthlyCost" style="font-size:18px;"></span><br />
                Monthly Savings: <span id="calcLeaseMonthlySavings" style="font-size:18px;"></span>
              </div>
            </div></div>
            <div class="button-wrapper">
 		  			  <button class="waves-effect waves-light btn-large" type="submit">Get Your Results</button>
            </div>
          </form>
    </div> <!-- #content -->
  </div>
</div>
</div> <!-- #wrapper -->
  
  <div class="site-footer wrapper row">
    <div class="container">
      <div class="information col s12">
        <div class="copyright col s12 m6">&copy; 2016 Printer Source, Inc.</div>
        <div class="link col s12 m6"><a href="http://wwww.printersource.com">Back to home</a></div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>