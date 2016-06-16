<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta content="" name="description">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <div id="assessment-wrapper">
      <div class="assessment-inner">
        
        <div id="header">  
          <div class="title-wrapper">
            <div class="main-title"><h1>Calculate Your ROI</h1></div>
          </div>
          
          <div class="pager-wrapper">
            <div class="pager container">
              <div class="inner">
                <span class="one active">1</span><span class="two">2</span><span class="three">3</span>
              </div>
            </div>
          </div>
        </div>
          
        <div id="section-one" class="section">
          <div class="section-inner container">
            <div class="section-title"><h2>Let's Get Started</h2></div>
            
            <div class="row">
              <div class="col s12 m6 section-text">
                <div class="inner">
                  <p>Congratulations on taking the first step toward a better web presence. These questions are designed to help you take an honest look at 15 pieces of the web strategy puzzle.</p> 
                  <div class='assessment-image-wrapper image-start center-align'><div class='the-image'></div></div>
                  <p>Once you discover how you're doing, you'll have the opportunity to get some (FREE!) help from our experts.</p> <p>Get started by filling out the form here.</p>
                </div>
              </div>
              
              <div class="col s12 m6">
                <div class="inner">
                  <form action="ROI-Calculator.php" method="post" name="info">
                    <div class="form-field">
                      <input type="hidden" name="front" value="yes" />
                    </div>
                    <div class="form-field">
						      		<span class="label">First Name:</span><span class="form-required" title="This field is required.">*</span><input class="validate" type="text" name="first_name" required />
						      	</div>
                    <div class="form-field"><span class="label">Last Name:</span><span class="form-required" title="This field is required.">*</span>
						      		<input class="validate" type="text" name="last_name" required />
						      	</div>
						      	<div class="form-field"><span class="label">Email:</span><span class="form-required" title="This field is required.">*</span>
						      		<input class="validate" type="email" name="email" required />
						      	</div>
                    <div class="form-field"><span class="label">Company:</span><span class="form-required" title="This field is required.">*</span>
						      		<input class="validate" type="text" name="company" required />
						      	</div>
                    <div class="form-field"><span class="label">Company URL:</span><span class="form-required" title="This field is required.">*</span>
						      		<input class="validate" type="text" name="company_url" required />
						      	</div>
                    <div class="button-wrapper">
 		  			      	  <button class="waves-effect waves-light btn-large" type="submit">Answer The 15 Questions</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
    			</div>
        </div>
        
        <div id="footer">
          <div id="attribution-line" class="attribution-wrapper wrapper">
            <div id="attribution-container" class="container">
              <div class="inner row">
                <div id="copyright-line" class="col s12 m6 center-on-mobile">
                  <div class="inner">
                    <div class="back-to-home"><a href="http://www.tributemedia.com">BACK TO HOME</a></div>
                    &copy; <?php echo date("Y"); ?> Tribute Media || 208.489.0123 <br /> 136 E. Idaho Ave. Ste. 100, Meridian, ID 83642
                  </div>
                </div>
                <div id="powered-by" class="col s12 m6 right-align center-on-mobile">
                  <div class="inner">
                   <ul class="right-align center-on-mobile" id="social-links">
                     <li><a class="twitter" href="https://twitter.com/tributemedia" target="_blank"><span class="inner">Twitter</span></a></li>
                     <li><a class="facebook" href="https://www.facebook.com/tributemediaboise" target="_blank"><span class="inner">Facebook</span></a></li>
                     <li><a class="linkedin" href="https://www.linkedin.com/company/tribute-media" target="_blank"><span class="inner">LinkedIn</span></a></li>
                     <li><a class="contact" href="https://www.tributemedia.com/contact"><span class="inner"><span class="inner">Contact</span></span></a></li>
                   </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    	</div>
    </div>
  
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
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
  </body>
</html> 