<?php
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Objectif Lune - PlanetPress Partners</title>
  <link rel="Shortcut Icon" href="images/-favicon.ico" />
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/Forms.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body id="calculator" onload="reCalc();">
  <div id="wrapper">
    <!-- <div id="header"><img src="images/OL-Black-Banner800.png" width="800" height="40" alt="" /></div> -->
    <!-- <div id="menu">
      <ul>
        <li><a href="home.html">HOME</a></li>
        <li><a href="business.html"> BUSINESS</a></li>
        <li><a href="#">PRODUCTS</a>
          <ul>
            <li><a href="products-connect.html">CONNECT</a></li>
            <li><a href="products-classic.html">CLASSIC</a></li>
            <li><a href="products-cbn.html">EDI / CAPTURE</a></li>
            <li><a href="products-mobile.html">MOBILE</a></li>
          </ul>
        </li>
        <li><a href="#"> MARKETING </a>
          <ul>
            <li><a href="marketing-connect.html">CONNECT</a></li>
            <li><a href="marketing-classic.html">CLASSIC</a></li>
            <li><a href="marketing-CBN.html">EDI / CAPTURE</a></li>
            <li><a href="marketing-mobile.html">MOBILE</a></li>
            <li><a href="marketing-applications.html">APPLICATIONS</a></li>
          </ul>
        </li>
        <li><a href="videos.html">VIDEOS </a></li>
        <li><a href="presentations.html">PRESENTATIONS </a></li>
        <li><a href="training.html"> TRAINING </a></li>
      </ul>
    </div> --> <!-- #menu -->
    <!-- <img src="images/OL-Partner-Banner-Header-2015.gif" alt="" width="800" height="241" /> -->
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
          <form action="submit.php" method="post" name="calculator">
            <table width="100%" border="0" cellspacing="5" cellpadding="5">
              <tbody>
                <tr>
                  <td>Delivery Average Value</td>
                  <td style="text-align:right;">$
                    
                    <input type="number" name="number" id="deliveryAvgVal" class="input" onchange="reCalc();" value="250" />
                  
                  </td>
                </tr>
                <tr>
                  <td>Number of Drivers</td>
                  <td style="text-align:right;">
                    <input type="number" name="number3" id="numberOfDrivers" class="input" onchange="reCalc();" value="50" />
                  </td>
                </tr>
                <tr>
                  <td>Average Deliveries a Day Per Driver</td>
                  <td style="text-align:right;">
                    <input type="number" name="number4" id="avgDeliveriesPerDay" class="input" onchange="reCalc();" value="5" />
                  </td>
                </tr>
                <tr>
                  <td>Yearly Administration Salary</td>
                  <td style="text-align:right;">$
                    <input type="number" name="number2" id="yearlyAdminSalary" class="input" onchange="reCalc();" value="45000" />
                  </td>
                </tr>
                <tr>
                  <td style="font-weight:bold;">Business Size</td>
                  <td style="text-align:right;">
                    <input type="text" name="number5" id="calcBusinessSize" class="calculated" />
                  </td>
                </tr>
              </tbody>
            </table>
            <h4>Costs of Printing &amp; Scanning              </h4>
            <table width="100%" border="0" cellpadding="5" cellspacing="5">
              <tbody>
                <tr>
                  <td></td>
                  <td style="text-align:right;">Cost</td>
                  <td style="text-align:right;">Savings Daily</td>
                </tr>
                <tr>
                  <td>Printing (per delivery)</td>
                  <td style="text-align:right;">$
                    <input type="number" name="number6" id="printingService" class="input" onchange="reCalc();" value=".5" />
                  </td>
                  <td style="text-align:right;">
                    <input name="textfield6" type="text" id="calcReducedPrintingService" class="calculated" />
                  </td>
                </tr>
                <tr>
                  <td>Scanning (monthly)</td>
                  <td style="text-align:right;">$
                    <input type="number" name="number6" id="scanService" class="input" onchange="reCalc();" value="1500" />
                  </td>
                  <td style="text-align:right;">
                    <input name="textfield6" type="text" id="calcReducedScanService" class="calculated" />
                  </td>
                </tr>
              </tbody>
            </table>
            <p>&nbsp;</p>
            <h4>Monthly Cost of Running a Scan Center</h4>
            <table width="100%" border="0" cellspacing="5" cellpadding="5">
              <tbody>
                <tr>
                  <td width="41%"></td>
                  <td width="33%" style="text-align:right;">Minutes / Percentage</td>
                  <td width="26%" style="text-align:right;">Savings Daily</td>
                </tr>
                <tr>
                  <td>Time to key Delivery Note</td>
                  <td style="text-align:right;">
                    <div align="left">
                      <input type="number" name="number8" id="keyDeliveryNote" class="input" onchange="reCalc();" value="3" /> Mins.
                    </div>
                  </td>
                  <td style="text-align:right;"><input name="textfield" type="text" id="calcReducedKeyDeliveryNote" class="calculated" />
                  </td>
                </tr>
                <tr>
                  <td>% of Delivery Notes Misplaced</td>
                  <td style="text-align:right;">
                    <div align="left">
                      <input type="number" name="number10" id="misplacedDeliveryNotes" class="input" onchange="reCalc();" value="5" /> %
                    </div>
                  </td>
                  <td style="text-align:right;"></td>
                </tr>
                <tr>
                  <td>Time to Manage Misplaced Note</td>
                  <td style="text-align:right;">
                    <div align="left">
                      <input type="number" name="number9" id="manageMisplacedDelivery" class="input" onchange="reCalc();" value="30" /> Mins.
                    </div>
                  </td>
                  <td style="text-align:right;">
                    <input name="textfield2" type="text" id="calcReducedManageMisplacedDelivery" class="calculated" />
                  </td>
                </tr>
                <tr>
                  <td>% of Dirty Deliveries</td>
                  <td style="text-align:right;">
                    <div align="left">
                      <input type="number" name="number11" id="dirtyVsClean" class="input" onchange="reCalc();" value="10" /> %
                    </div>
                  </td>
                  <td style="text-align:right;"></td>
                </tr>
                <tr>
                  <td>Time to Manage Dirty Delivery</td>
                  <td style="text-align:right;">
                    <div align="left">
                      <input type="number" name="number12" id="manageDirtyDelivery" class="input" onchange="reCalc();" value="30" /> Mins.
                    </div>
                  </td>
                  <td style="text-align:right;">
                    <input name="textfield5" type="text" id="calcReducedManageDirtyDelivery" class="calculated" />
                  </td>
                </tr>
                <tr>
                  <td>Time to Match POD &amp; Invoice</td>
                  <td style="text-align:right;">
                    <div align="left">
                      <input type="number" name="number13" id="matchPODInvoiceManually" class="input" onchange="reCalc();" value="1" /> Mins.
                    </div>
                  </td>
                  <td style="text-align:right;">
                    <input name="textfield7" type="text" id="calcReducedMatchPODInvoiceManually" class="calculated" />
                  </td>
                </tr>
              </tbody>
            </table>
            <h4>Financial Costs</h4>
            <table width="100%" border="0" cellpadding="5" cellspacing="5">
              <tbody>
                <tr>
                  <td width="41%"></td>
                  <td width="32%" style="text-align:right;">Days / Percentage</td>
                  <td width="27%" style="text-align:right;">Savings Daily</td>
                </tr>
                <tr>
                  <td>Reduction in DSO Saved </td>
                  <td style="text-align:right;">
                    <div align="left">
                      <input type="number" name="number14" id="reductionDSOSaved" class="input" onchange="reCalc();" value="5" /> Days
                    </div>
                  </td>
                  <td style="text-align:right;">
                    <input name="textfield8" type="text" id="calcReductionDSOSaved" class="calculated" />
                  </td>
                </tr>
                <tr>
                  <td>% of POD's Lost Daily</td>
                  <td style="text-align:right;">
                    <div align="left">
                      <input type="number" name="number14" id="numberOfPODsLostDaily" class="input" onchange="reCalc();" value="1" /> %
                    </div>
                  </td>
                  <td style="text-align:right;"></td>
                </tr>
                <tr>
                  <td>Non-Payment on Lost POD's </td>
                  <td style="text-align:right;">
                    <div align="left">
                      <input type="number" name="number14" id="nonPaymentLostPOD" class="input" onchange="reCalc();" value="5" /> %
                    </div>
                  </td>
                  <td style="text-align:right;">
                    <input name="textfield8" type="text" id="calcNonPaymentLostPOD" class="calculated" />
                  </td>
                </tr>
              </tbody>
            </table>
            <h4>System Costs</h4>
            <table width="100%" border="0" cellpadding="5" cellspacing="5">
              <tbody>
                <tr>
                  <td>PlanetPress Connect Licenses</td>
                  <td>&nbsp;</td>
                  <td style="text-align:right;">
                    <input type="number" name="number15" id="ppConnect" class="input" onchange="reCalc();" value="2" />
                  </td>
                </tr>
                <tr>
                  <td>Cost of Tablets (each)</td>
                  <td>
                    <input type="checkbox" id="chkTablets" onclick="toggleNeeded(this, 'numberOfTablets');" /> not needed</td>
                  <td style="text-align:right;">$ 
                    <input type="number" name="number15" id="numberOfTablets" class="input" onchange="reCalc();" value="350" />
                  </td>
                </tr>
                <tr>
                  <td>Internet Service per Tablet (monthly)</td>
                  <td>
                    <input type="checkbox" id="chkInternet" onclick="toggleNeeded(this, 'internetService');" /> not needed
                  </td>
                  <td style="text-align:right;">$
                    <input type="number" name="number15" id="internetService" class="input" onchange="reCalc();" value="60" />
                  </td>
                </tr>
              </tbody>
            </table>
            <input type="submit" value="Next">
          </form>
                    
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
      </div>

    </div> <!-- #content -->
  </div> <!-- #wrapper -->

  <!-- <div id="footer">
    <table width="100%" border="0" cellspacing="5" cellpadding="5">
      <tbody>
        <tr>
          <td width="8%"><img src="images/OL-Icon-50-LR.png" width="50" height="50" alt="" /></td>
          <td width="92%"> <strong> OBJECTIF LUNE LLC. &copy; USA  2015 </strong> | <a href="http://www.objectiflune.com" target="_blank">www.objectiflune.com</a> | 300 Broadacres Drive 4th Floor | Bloomfield NJ, 07003 | 973.780.0100</td>
        </tr>
      </tbody>
    </table>
  </div> --> <!-- #footer -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>