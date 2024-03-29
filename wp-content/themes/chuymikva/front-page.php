<?php
			/*
				Template Name: html2wp-front-page
			*/

			?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png"/>
    <title>Expunge.io</title>
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/contact-buttons.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
<?php  wp_head();  ?>
</head>
<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>
<!--NAVIGATION BEGINS HERE-->
<nav id="mainNav" class="navbar navbar-fixed-top navbar-custom">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand logo-size" href="#page-top"><img src="img/expungeiowhite.png"></a>
    </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li class="hidden">
          <a href="#page-top"></a>
        </li>
        <li class="page-scroll">
          <a href="#page-top">Home</a>
        </li>
        <li class="page-scroll">
          <a href="#about">About</a>
        </li>
        <li class="page-scroll">
          <a href="#legal">LEGAL AID</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">FAQs</a>
        </li>
        <li>
          <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">Did you know?</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse div close -->
  </div><!-- /.container-fluid close div -->
</nav><!--NAVIGATION ENDS HERE-->
<header> <!-- Header -->
  <div class="container" id="maincontent" tabindex="-1">
    <div class="row">
      <div class="col-lg-12">
        <img class="img-responsive logo" src="img/expunge.iologo1.png" alt=""></img>
          <div class="intro-text" id="fancy">
            <h1 class="name">Erase your Illinois juvenile record!</h1>
            <span class="skills">If you were arrested in IL when you were under 18, you may have a juvenile record. <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal" class="btn btn-lg btn-warning button-hover">Learn More!</a></span>
          </div>
          <br>
          <a href="#" class="btn btn-lg btn-warning button-hover" id="btn">Find out if you`re eligible</a>
          <!-- Button trigger modal -->

<!-- Modal -->
          <div class="row">
            <div class="col-md-12 text-center">
              <a href="#" class="btn btn-lg btn-info button-hover" id="btn-bk">Back</a>
              <br><br>
              <div id="bank" class="disclaimer text-center">
                <h1 id="disclaimer-h1">Disclaimer</h1>
                <span class="skills">Information on this site <span style="color:#0cc;"><strong><em>does not constitute legal advice nor does it serve as a subsititute for legal advice from a licensed attorney.</em></strong></span>. If you're unsure about any questions, you can speak with a Legal Aid (for free!) by clicking <a href="#legal">Legal Aid</a> at the top of the page.<br><br>
                  By using expunge.io, you agree to the<button class="btn-link" data-toggle="modal" data-target="#privacy-policy">privacy policy</button>and<button class="btn-link" data-toggle="modal" data-target="#terms-of-use">terms of use</button> 
                </span><br><br>
                <a href="#" class="btn btn-warning" id ="understand">Ok, I understand. Let`s get started.</a>
              </div><!-- closes Disclaimer div-->
              <!--ARREST QUESTIONS FADEIN-->
              <div id="container">
                <a href="#" class="btn btn-lg btn-info button-hover" id="btn-back">Back</a>
                <h1 class="old-h1">How old were you when you were arrested?</h1>
                <a href="#portfolioModal5" class="btn btn-info" data-toggle="modal">16 & under</a>
                <a href="#" id="seventeen" class="btn btn-success">17</a>
                <a href="#portfolioModal6" class="btn btn-danger" data-toggle="modal">18 & over</a>
                <br><br>
                <a type="button" class="btn btn-default" data-toggle="modal" data-target="#mySecondModal">I`m not sure</a>
              </div> 
              <!-- END OF ARREST QUESTIONS -->
              <!-- RESULTS FADEIN BEGINNING -->
              
              <div id="resultss" class="text-center">
                <a href="#" class="btn btn-lg btn-info button-hover" id="btn-backItUpTwo">Back</a>
                  <h2>
                    When were you arrested?
                  </h2>
                <a href="#portfolioModal5" class="btn btn-info" data-toggle="modal">2014 or After</a>
                <a type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                  2010-2013
                </a>
                <a href="#portfolioModal6" class="btn btn-danger" data-toggle="modal">2009 & Earlier</a>
                <br><br>
                <a type="button" class="btn btn-default" data-toggle="modal" data-target="#mySecondModal">I`m not sure</a>
              </div><!-- END OF RESULTS FADEIN-->
              
            </div><!-- closes col-md-12 tag-->
          </div><!--Closes row tag-->
      </div> <!-- closes col-lg-12 div-->
    </div><!-- closes row div-->
  </div><!-- closes header container div-->
</header><!-- END OF HEADER-->

<!--ABOUT SECTION-->
<section style ="height:1000px;" class="success" id="about"> <!-- I use inline styling very rarely!!!-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>About</h2>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <h4>This is a resource for people with juvenile records in Illinois.</h4>
        <br>
        <p><span><em class="about-text">A juvenile record can be a barrier to employment, education, and housing.</em></span> Luckily, juvenile records can be erased through the expungement process. However, while the majority of juvenile records can be erased, few people know about or take advantage of the opportunity. Expunge.io seeks to clarify juvenile expungement, with the hope of more people getting their records erased!</p>
        <hr>
      </div>
      <div class="container text-center" style="padding-bottom: 20px;">
          <a href="#portfolioModal1" class="portfolio-link" id="learn-button" data-toggle="modal">
            <button class="learn-more btn btn-lg btn-warning button-hover">Learn More</button>
          </a>
      </div>
      <h3 style="color:#fff" class="text-center" id="video-title">
              Myths vs Reality
      </h3>
      <div class="col-lg-8 col-lg-offset-2 text-center">
        <style>.embed-container {position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
        <div class='embed-container'>
          <iframe src="https://player.vimeo.com/video/222452006" width="640" height="360" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<!--END OF ABOUT SECTION-->

<!-- FREE LEGAL AID SECTION -->
<section class="legal" id="legal">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h3 class="legal-aid-media">Free Legal Aid!</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 camille">
        <img class="img-responsive" src=""></img>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Questions?</h2>
          <p class="about-text">
            Stop by the Juvenile Expungement Help Desk or just give us a call!! Attorneys or law students are at the help desk every day and would be happy to meet with you in person or speak with you by phone.
          </p><br><br>
          <p class="about-text">Juvenile Expungement Help Desk<br>
            1100 S. Hamilton Ave, Ground Floor<br>
            Monday - Friday from 9:00 AM - 4:00 PM (no appointment needed!)<br>
          </p>
          <p>
            <a style="color: #fff;" href="tel:(312) 229-6049">
              (312) 229-6049
            </a><br><br>
            This is a free service & the lawyers and law students are eager to help you!
          </p>
          <p>
            <a href="https://www.google.com/maps/@41.8676037,-87.6802915,3a,75y,260.83h,84.91t/data=!3m6!1e1!3m4!1s8QxanbMDUOBmR2CmwNSeEA!2e0!7i13312!8i6656" class="btn btn-lg btn-warning button-hover">Get Directions Now</a>
          </p>
      </div> <!-- ENDS COL-LG-12 CLASS -->
    </div>  <!-- ENDS ROW -->
  </div>
</section>
<!--END FREE LEGAL AID SECTION -->
<!--FOOTER SECTION -->
<footer class="text-center">
  <div class="footer-above">
    <div class="container">
      <div class="row">
        <div class="footer-col col-md-12">
          <h3>History of Expunge.io</h3>
          <p class="footer-links">
            Expunge.io was designed and developed by <a href="https://twitter.com/cthydng">Cathy Deng</a>, with help from Sharlyn Grace from the <a href="https://www.facebook.com/JuvenileExpungementHelpDesk">LAF juvenile expungement help desk</a>. Rene Paccha provided the Spanish translation. The idea for a digital resource came from the <a href="http://www.mikvachallenge.org/programs/youth-policy-making/juvenile-justice-council/">Juvenile Justice Council</a> of the <a href="http://www.mikvachallenge.org/">Mikva Challenge</a>, a group of young advocates on a mission to improve the juvenile justice system. A big thanks to Smart Chicago Collaborative for initially getting us all connected & for hosting the site.
            If you're interested in adapting Expunge.io in another state, please reach out! All of the code for this project is on GitHub & open to reuse.
            Privacy Policy & Terms of Use.
          </p>
        </div> <!-- END OF FOOTER-COL -->
      </div>
    </div>
  </div>
</footer>
<!-- END OF FOOTER -->
<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
  <a class="btn btn-primary" href="#page-top">
    <i class="fa fa-chevron-up"></i>
  </a>
</div>
    
<!--BOOTSTRAP MODALS-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body text-center">
        <p>
          Based on your answers, it's unclear if you were arrested as a juvenile or as an adult
        </p>
        <p>
          You will need to get your arrest record (rap sheet) to know for sure. You can get in touch with legal help to find out!
        </p>
        <div class="form-style-5">
        <div id="wufoo-z1qurfjk1buq7uw">
          Fill out my <a href="https://juvenileexpungementhelpdesk.wufoo.com/forms/z1qurfjk1buq7uw">online form</a>.
        </div>
        <script type="text/javascript">var z1qurfjk1buq7uw;(function(d, t) {
           var s = d.createElement(t), options = {
             'userName':'juvenileexpungementhelpdesk',
             'formHash':'z1qurfjk1buq7uw',
             'autoResize':false,
             'height':'420',
             'async':true,
             'host':'wufoo.com',
             'header':'show',
             'ssl':true};
           s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
           s.onload = s.onreadystatechange = function() {
             var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
             try { z1qurfjk1buq7uw = new WufooForm();z1qurfjk1buq7uw.initialize(options);z1qurfjk1buq7uw.display(); } catch (e) {}};
           var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
         })(document, 'script');</script>
        </div>
      </div>
      <div class="modal-footer">
        <div class="text-center">
         <button type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="mySecondModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
        <p>
          Juvenile records in Cook County (including Chicago): <br>Contact the Juvenile Expungement Help Desk at (312) 229-6359 and a lawyer will be able to help you.
        </p>
        <p>
          To get information about an arrest in Chicago (date, age, juvenile vs. adult), you also can get your arrest record (aka rap sheet) at:
          Records and Services Division of the Chicago Police Department
          3510 S Michigan, Chicago IL 60653
          (312)745-5508
          Mon-Fri 8am-12pm
        </p>
        <p>
          If you were arrested in a different county in IL:

          search for your zip code <a href="https://www.illinoislegalaid.org/legal-information/expunging-juvenile-record#a=legalhelp">here</a> and contact the appropriate legal aid organization
        </p>
      </div>
      <div class="modal-footer">
        <div class="text-center">
          <button type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>  
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myThirdModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Applying for expungement</h4>
      </div>
      <div class="modal-body text-center">
      <div class="page-header">
  <h2 style="color: #43BDBD">Applying for expungement</h2>
</div>
<h3 style="color: #43BDBD">
  1. Pick up your arrest record, <i>for free</i>, in person at:
</h3>
<p>
<a href="https://www.facebook.com/JuvenileExpungementHelpDesk" target = "_blank">Juvenile Expungement Help Desk</a> at Cook County Juvenile Center<br>
<i class="fa fa-map-marker fa-fw"></i> <a href="https://www.google.com/maps/dir/''/1100+S+Hamilton+Ave,+Chicago,+IL+60612/data=!4m5!4m4!1m0!1m2!1m1!1s0x880e2d6da3d88edb:0x96bb1955978d2f7f?sa=X&ved=0ahUKEwiKpfefy_bKAhXI6iYKHdhIANoQwwUIJTAB" target="_blank">1100 S Hamilton Ave, Chicago, IL 60612</a><br>
<i class="fa fa-phone fa-fw"></i> (312) 229-6049<br>
<i class="fa fa-clock-o fa-fw"></i> Mon/Tues/Fri: 9am-4pm, Wed/Thurs: 9am-12pm<br>
</p>
<p>
  <i class="fa fa-car fa-fw"></i> Parking available adjacent to the courthouse ($2.00)
</p>

<h3 style="color: #43BDBD">
  2. Complete Paperwork
</h3>

<p>
  You'll need to submit <a href="http://www.illinois.gov/osad/Expungement/Instructions_Forms/Documents/Forms_/ExpungementJuvOption1Form.pdf" target="blank">some forms</a> to the court Clerk's office in the county where your arrest happened:
  <ol>
    <li>a Petition to Expunge Juvenile Arrest Record</li>
    <li>a Notice</li>
    <li>an Order of Expungement</li>
  </ol>
</p>
<p>
  The attorneys and law students at the <a href="https://www.facebook.com/JuvenileExpungementHelpDesk" target = "_blank">juvenile expungement help desk</a> can help you fill out and submit your paperwork, for free.
</p><br><br>

<div class="well well-sm">
  <p class="h3">
     If you have any questions, don't hesitate to call free legal help at (312) 229-6049
  </p>
</div>
      </div>
      <div class="modal-footer">
        <div class="text-center">
        <button type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="privacy-policy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Privacy Policy</h4>
      </div>
      <div class="modal-body">
        By using this website, www.expunge.io, (the “Web Site”) you acknowledge and agree to this Privacy Policy. The Web Site was created by Cathy Deng and is operated and run by LAF (formerly, the Legal Assistance Foundation of Metropolitan Chicago), the Mikva Juvenile Justice Council and Smart Chicago (collectively, the Affiliates” and/or “we”).

        <h4>1. SCOPE</h4>
        This privacy statement applies to this Web Site, which collects data about any juvenile criminal record you may have to determine whether or not you may be able to expunge that record from all relevant public files.

        <h4>2. INFORMATION WE COLLECT</h4>
        This Web Site collects the minimal amount of information from you necessary to achieve the purpose of the Web Site. This information comprises:<br>
        <ul>
          <li>
            <strong>Information you provide</strong>: We collect information from you when you choose to share it with us via the Web Site. The information we collect includes your name, e-mail address, phone number, and information that you volunteer. We use the service provided at <a href="http://www.wufoo.com">Wufoo</a> to transmit this information to LAF so that LAF can attempt to reach you at the phone number you provide. Submitting your contact information this way does not create an attorney-client relationship with LAF. By filling out the Wufoo form, we understand that you might be eligible for juvenile expungement and are looking for free legal aid. The Wufoo service has its own privacy policy and terms of use which are available at <a href="http://www.wufoo.com">http://www.wufoo.com</a>.
          </li>
          <li>
            <strong>Information collected automatically</strong>: We may use cookies, web beacons, pixel tags, log files, or other technologies to collect certain information about visitors to and users of our Web Site to monitor interactions with our Web Site. For example, using the Google Analytics service, we may automatically collect certain non-personal information from you, such as the type of web browser and operating system you use, the name of your Internet Service Provider, Internet Protocol (“IP”) address, software version, course geolocation information (for example, based on IP address or location of cellular tower used for the connection), and the domain name from which you accessed our sites. In addition, we may collect information about your browsing behavior, such as the date and time you visit our sites, the areas or pages of our sites that you visit, the amount of time you spend viewing or using our sites, the number of times you return to our sites, other click-stream or site usage data, emails or ads that you open, forward or click-through to our sites.
          </li>
          <li>
            <strong>Aggregate data</strong>:  We may publish, in aggregate fashion, data about the number of people who have used the Web Site or the services provided.
          </li>
        </ul>

        <h4>3. YOUR ABILITY TO CONTROL COOKIES AND SIMILAR TECHNOLOGIES</h4>
        Cookies, web beacons, Flash cookies and similar technologies serve many important functions that help us serve you better.  However, you have a variety of tools to control cookies and similar technologies, including:<br>
        <ul>
          <li>
            Web browser controls to block and delete cookies, or adjust your tracking preferences;
          </li>
          <li>
            Information on how to manage privacy and storage settings for Flash cookies here.
          </li>
        </ul>

        <h4>4. HOW WE USE YOUR PERSONAL INFORMATION</h4>
        This Web Site collects your personal information and uses it for the sole purpose of preliminarily determining whether your juvenile record is eligible for expungement based on your answers to certain questions, whether or not it is likely your juvenile record can be expunged and collects your contact information so a lawyer who may agree to represent you may contact you to assist you with expunging your juvenile record.

        <h4>5. HOW WE SHARE YOUR PERSONAL INFORMATION</h4>
        The information collected through this Web Site is not sold or disclosed to any third party without your consent, except where:<br>

        <ul>
          <li>
            Third-party service providers are used to assist with the activities identified in this privacy statement.  In those situations, these providers only use your personal information as necessary to perform activities to comply with a legal requirement; and
          </li>
          <li>
            It is necessary to prevent a crime or injury, or as otherwise required by law.
          </li>
        </ul>

        During the normal course of our business, an Affiliate may sell or purchase assets. If another entity acquires one of the Affiliates or some of an Affiliate’s assets, information we have collected about you may be transferred to such entity. In addition, if any bankruptcy or reorganization proceeding is brought by or against any Affiliate, such information may be considered an asset of ours and may be sold or transferred to third parties. Should such a sale or transfer occur, we will use reasonable efforts to try to require that the transferee use the information obtained through this Web Site in a manner that is consistent with this Privacy Policy.

        <h4>6. HOW WE PROTECT YOUR INFORMATION</h4>
        This Web Site maintains administrative, technical, and physical safeguards to protect your personal information.  We ensure that any data collected is only accessible to appropriate personnel and that the information is user ID and password-protected.

        <h4>7. LINKING TO OTHER WEBSITES</h4>
        When using the Web Site, you may be directed to content and websites that are not contained within the Web Site.  External websites are governed by their own privacy policies and you agree that you recognize that the Affiliates take no responsibility for the contents for other linked websites, including those provided by any government.  External websites linked to or from the Web Site are not under the control of the Affiliates, and we are not responsible for any link contained in a linked site.  These links are provided only as a convenience.  Inclusion of any link does not imply recommendation, approval, or endorsement of that website by the Affiliates, nor does it imply that the linked site recommends, approves of, or endorses the Web Site.

        <h4>8. COMMITMENT TO CHILDREN’S PRIVACY</h4>
        This Web Site is intended for general audiences and we do not knowingly collect any personal information from children under the age of 13 on our sites.  Under federal law, websites directed to children under 13 are prohibited from conditioning a child's participation in an activity on the child's disclosing more personal information than is reasonably necessary to engage in the activity. We comply fully with this requirement.

        <h4>9. LINKS TO OTHER SITES</h4>
        This Web Site tries to make sure that any link included on this Web Site sends you to a helpful and reliable place on the Internet, but we are not responsible for the content of these other sites or their privacy practices.

        <h4>10. UPDATES TO THE PRIVACY STATEMENT</h4>
        We reserve the right to change the terms of this Privacy Policy at any time. Please check back periodically for any changes to our Privacy Policy. If we decide to change our data collection and use practices, we will first publish a new policy on this Web page before modifying our practices. YOUR ONLY NOTICE OF CHANGES IN OUR DATA COLLECTION AND USE PRACTICES WILL BE BY READING THIS PRIVACY POLICY. Your continued use of the Web Site constitutes your agreement to any such changes. 

        <h4>11. HOW TO CONTACT US</h4>
        If you have any questions or concerns regarding the Web Site, please contact info@smartchicagocollaborative.org . 

      </div>
      <div class="modal-footer">
        <div class="text-center">
          <button type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END OF PRIVACY MODAL -->

<!-- TERMS OF USE MODAL -->
<div class="modal fade" id="terms-of-use" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Terms of Use</h4>
      </div>
      <div class="modal-body">
        By using this website, http://www.expunge.io/ (the “Web Site”), you accept and agree to these Terms and Conditions of Use. This Web Site is intended for and applicable only for residents of the United States. If you are from another jurisdiction, you should not use this Web Site.  By accessing this Web Site in any way, including by viewing the Web Site, participating in the Web Site or submitting any personal information via the Web Site, you agree to and are bound by the terms, conditions, policies and notices contained on this page (the “Terms”).<br><br>
 
        Please read the following Terms carefully because they constitute a legally binding agreement. If you do not accept these Terms, you will not be able to use the Web Site. If you download the Expunge.io Application, your use of the application will be governed by the application’s Terms and Privacy Policy. Please note that you may not use the Web Site and may not accept these Terms if you are a person barred from using the Web Site under the laws of the United States.<br><br>
         
        From time to time these Terms may be revised and updated without notice by posting the amended terms to the Web Site. Your continued use of the Web Site means that you accept and agree to the revised Terms. If you disagree with the Terms (as amended from time to time) or are dissatisfied with the Web Site, your sole and exclusive remedy is to discontinue using the Web Site. THE MOST CURRENT VERSION OF THIS AGREEMENT, WHICH SUPERSEDES ALL PREVIOUS VERSIONS, CAN BE REVIEWED BY CLICKING ON THE “TERMS OF USE” HYPERLINK LOCATED ON THE WEB SITE.<br><br>
         
        <h4>1. INTRODUCTION TO THE WEB SITE</h4>
         
        The Web Site contains the application and program referred to as Expunge.io. The Web Site was created by Cathy Deng and is operated and run by LAF (formerly, Legal Assistance Foundation of Metropolitan Chicago), the Mikva Juvenile Justice Council and Smart Chicago (collectively, the Affiliates”). The Web Site is a program that asks you to answer certain questions that then provides information about expungement eligibility and next steps based upon your answers.   
         
        <h4>2. INFORMATION NOT LEGAL ADVICE</h4>
         
        You are not forming any legal or binding relationship with a lawyer when you use the Web Site.  The information on this Web Site, including without limitation, responses given by the Web Site based on your answers to questions it asks. The information on this Web Site is not a substitute for and does not replace the advice or representation of a licensed attorney.  Although this Web Site goes to great lengths to make sure the information on this Web Site is accurate and up to date, no claims are made to the accuracy of this information and the Web Site is not responsible for any consequences that may result from the use of this Web Site. It is recommended that you consult with a licensed attorney if you want assurances that the information on this Web Site and your interpretation of it are appropriate for your particular situation. You should not and are not authorized to rely on this Web Site as a source of legal advice. This Web Site does not create an attorney-client relationship between any of the Affiliates and any user.
         
         
        <h4>3. TERMINATION OR RESTRICTION OF ACCESS</h4>
         
        The Affiliates reserve the right, in their sole discretion, to terminate your access to the Web Site.  Your right to the Web Site is effective until terminated by you or by the Affiliates, which may be done at any time. Upon termination, you shall cease to use the Web Site in its entirety. The Affiliates may terminate your rights to access the Web Site without any refund obligation or other liability, if you fail to comply with these Terms.
         
        <h4>4. LIMITED LICENSE; RESTRICTIONS ON USE</h4>
         
        The Affiliates hereby grant you a limited, non-exclusive, non-transferable license to access and use the Web Site and the Content provided by the Affiliates. You agree that you will not, and will not allow any third party: (i) to take any action to circumvent or defeat the security or content usage rules provided, deployed or enforced by any functionality contained in the Web Site, (ii) to use the Web Site to access, copy, transfer or re-transmit content in violation of any law or third party rights, or (iii) to remove, obscure, or alter the Affiliates’ or any third party's copyright notices, trademarks, or other proprietary rights notices affixed to or contained within or accessed in conjunction with or through the Web Site. The source code of the website is open source under the Massachusetts Institute of Technology (MIT) license, meaning that it permits reuse, as long as all copies of the licensed code also include a copy of the MIT License terms and the copyright notice.

         
        <h4>5. REPRESENTATIONS AND LIMITATIONS OF LIABILITY</h4>
         
        The Affiliates make no representation or warranty whatsoever regarding the completeness, accuracy, timeliness or adequacy of any information, facts, views, opinions, statements or recommendations contained on this Web Site. Reference to any product, process, publication or service of any third party by trade name, domain name, trademark, service mark, logo, manufacturer or otherwise does not constitute or imply its endorsement or recommendation by any of the Affiliates.<br><br>

        The Internet may be subject to breaches of security. The Affiliates are not responsible for any resulting damage to any user's computer from any such security breach, or from any virus, bugs, tampering, unauthorized intervention, fraud, error, omission, interruption, deletion, defect, delay in operation or transmission, computer line failure or any other technical or other malfunction. The Affiliates make no representation or warranty whatsoever regarding the suitability, functionality, performance, availability or operation of the Web Site. This Web Site may be temporarily unavailable due to maintenance or malfunction of computer equipment.<br><br>

        THE WEB SITE AND AFFILIATES’ CONTENT ARE MADE AVAILABLE ON AN "AS IS," "AS AVAILABLE" AND "WITH ALL FAULTS" BASIS. THE AFFILIATES SPECIFICALLY DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, WITHOUT LIMITATION, THE WARRANTIES OF MERCHANTABILITY, QUALITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT, WITH RESPECT TO THE SITE, THE AFFILIATES’ CONTENT AND THE USER CONTENT.<br><br>

        YOU AGREE THAT THE AFFILIATES ARE NOT LIABLE TO YOU FOR DAMAGES OF ANY KIND, WHETHER BASED IN TORT, CONTRACT, STRICT LIABILITY OR OTHERWISE, INCLUDING, WITHOUT LIMITATION, ANY DIRECT, SPECIAL, INDIRECT, INCIDENTAL, CONSEQUENTIAL OR PUNITIVE DAMAGES RESULTING IN ANY WAY FROM OR IN CONNECTION WITH: (I) THE WEB SITE, ANY MATCHING PROGRAM, OR THE AFFILIATES’ CONTENT; (II) ANY ERRORS OR OMISSIONS IN THE TECHNICAL OPERATION OR CONTENT OF THE WEB SITE; (III) ANY ACTION TAKEN IN CONNECTION WITH AN INVESTIGATION BY THE AFFILIATES, LAW ENFORCEMENT OR OTHER AUTHORITIES REGARDING YOUR USE OF THE WEB SITE, OR THE AFFILIATES’ CONTENT; (IV) ANY ACTION TAKEN IN CONNECTION WITH COPYRIGHT OWNERS; OR (V) THE CONDUCT, ACTIONS OR INACTIONS OF WEB SITE USERS OR YOUR INTERACTIONS OR RELATIONSHIPS WITH WEB SITE USERS.<br><br>

        THE WEB SITE ASKS PARTICIPANTS TO PROVIDE FACTS ABOUT THEIR BACKGROUND, AND THE AFFILIATES DO NOT REPRESENT OR ENDORSE THE ACCURACY, TIMELINESS OR RELIABILITY OF ANY OF THESE FACTS.  YOU ACKNOWLEDGE THAT ANY RELIANCE UPON ANY SUCH FACTS OR RECOMMENDATIONS IS AT YOUR SOLE RISK AND THAT NONE OF THE AFFILIATES GIVE LEGAL ADVICE THROUGH THE WEB SITE. IN NO EVENT WILL THE AFFILIATES BE LIABLE TO YOU OR ANYONE ELSE FOR LOSS OR INJURY, INCLUDING, WITHOUT LIMITATION, DEATH OR PERSONAL INJURY. SOME JURISDICTIONS DO NOT ALLOW THE LIMITATION OR EXCLUSION OF CERTAIN WARRANTIES AND CONDITIONS, OR THE DISCLAIMER OF SOME TYPES OF DAMAGES, SO SOME OF THE ABOVE MAY NOT APPLY TO YOU.<br><br>

        BY ACCESSING THIS WEB SITE, ACCEPTING ANY INFORMATION FROM THIS WEB SITE, SUBMITTING ANY INFORMATION TO THIS WEB SITE, OR PARTICIPATING IN THIS WEB SITE, YOU AGREE TO INDEMNIFY, DEFEND AND HOLD THE AFFILIATES HARMLESS FROM AND AGAINST ANY ACTUAL OR ALLEGED CLAIMS, DEMANDS, CAUSES OF ACTION, JUDGMENTS, DAMAGES, LOSSES, LIABILITIES, AND ALL COSTS AND EXPENSES OF DEFENSE (INCLUDING REASONABLE ATTORNEYS' FEES AND COURT COSTS) ARISING OUT OF OR RELATING TO: (A) YOUR BREACH OF THESE TERMS; (B) YOUR VIOLATION OF ANY LOCAL, STATE, FEDERAL OR INTERNATIONAL LAW, RULE OR REGULATION; (C) A CLAIM BY A THIRD PARTY THAT IS BASED ON YOUR USE OF THE WEB SITE; OR (D) ANY MISREPRESENTATION MADE BY YOU; OR (E) ANY DISPUTE BETWEEN YOU AND ANOTHER USER OF THE WEB SITE. YOU WILL COOPERATE AS FULLY AND AS REASONABLY REQUIRED IN THE AFFILIATES’ DEFENSE OF ANY CLAIM EACH AFFILIATE RESERVES THE RIGHT, AT ITS OWN EXPENSE, TO ASSUME THE EXCLUSIVE DEFENSE AND CONTROL OF ANY MATTER OTHERWISE SUBJECT TO INDEMNIFICATION BY YOU, AND YOU SHALL NOT, IN ANY EVENT, SETTLE ANY MATTER WITHOUT THE WRITTEN CONSENT OF THE AFFILIATES.

        <h4>6. LINKING TO OTHER WEBSITES</h4>

        When using the Web Site, you may be directed to content and websites that are not contained within the Web Site. External websites are governed by their own terms and conditions of use, and you agree that you recognize that the Affiliates take no responsibility for the contents of other linked websites, including those provided by any government.  External websites linked to or from the Web Site are not under the control of the Affiliates, and we are not responsible for any link contained in a linked site. These links are provided only as a convenience. Inclusion of any link does not imply recommendation, approval or endorsement of that website by the Affiliates, nor does it imply that the linked site recommends, approves of, or endorses the Web Site.

        <h4>7. CONTACTING</h4>

        If you have any questions or concerns regarding the Web Site, please contact info@smartchicagocollaborative.org .  

        <h4>8. MISCELLANEOUS</h4>

        Both you and the Affiliates acknowledge and agree that no partnership is formed and neither of you nor the Affiliates has the power or the authority to obligate or bind the other.
        These Terms will be governed by and construed in accordance with the internal laws of the State of Illinois without regard to conflicts of laws principles. Each party hereby waives any rights they may have to a trial by jury.  With respect to any dispute arising from these Terms of Use, each party irrevocably consents to the exclusive jurisdiction and venue of the state and federal courts located in Cook County, Illinois, with precedence being given to said federal courts if the requisite subject matter jurisdiction should exist. Any cause of action you may have with respect to the Web Site must be commenced within six (6) months after the claim or cause of action arises or else such claim or cause of action is barred. These Terms operate to the fullest extent permissible by law.<br><br>

        On certain areas of the Web Site, you may be given the ability to provide us with personally identifiable information. Please read our Privacy Policy for more information about our information collection and use practices.<br><br>

        The failure of the Affiliates to comply with these Terms because of an act of God, war, fire, riot, terrorism, earthquake, actions of federal, state or local governmental authorities or for any other reason beyond the reasonable control of the Affiliates, shall not be deemed a breach of these Terms.<br><br>

        If the Affiliates fail to act with respect to your breach or anyone else's breach on any occasion, the Affiliates are not waiving their right to act with respect to future or similar breaches.<br><br>

        If any provision of these Terms shall be unlawful, void or for any reason unenforceable, then that provision shall be deemed severable from these terms of use and shall not affect the validity and enforceability of any remaining provisions. These Terms constitute a binding agreement between you and the Affiliates, and is accepted by you upon your use of the Web Site or your account. These Terms constitute the entire agreement between you and the Affiliates regarding the use of the Web Site and your account. By using the Web Site you represent that you are capable of entering into a binding agreement, and that you agree to be bound by these Terms.<br><br>

        A printed version of these Terms and of any notice given in electronic form shall be admissible in judicial or administrative proceedings based upon or relating to these Terms to the same extent and subject to the same conditions as other business documents and records originally generated and maintained in printed form.

      </div>
      <div class="modal-footer">
        <div class="text-center">
          <button type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ABOUT SECTION LEARN MORE MODAL -->
<div class="portfolio-modal modal animated bounceInUp" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2 style="color:#43BDBD">More on expungement</h2>
            <p>EXPUNGEMENT is the legal process of ERASING juvenile arrests and court cases. 
               Only a judge can order that records be expunged. Once you have your record expunged, you can lawfully say that you do not have a criminal record on applications. 
            </p>
            <p>
              If you were arrested as a juvenile, the police station and the court began creating records that are kept and maintained from the moment you were arrested. This means that you have a juvenile record, EVEN IF you were arrested and released from the police station, your case was dismissed, or you were found “not delinquent”/“not guilty.” Even if you were placed on supervision or probation, you still have a juvenile record that doesn’t automatically go away.
            </p>
            <p>
              Even though juvenile records are supposed to be confidential, there many exceptions to this general rule. That means that there are a lot of people who could potentially see your record legally. <a href="http://ijjc.illinois.gov/sites/ijjc.illinois.gov/files/assets/Burdened%20for%20Life.pdf">Juvenile records are also sometimes unlawfully disclosed to employers, landlords, schools, and licensing boards.</a>
            </p><br>
            <div class="text-center">
            <button id="close" type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SECOND MODAL -->
<div class="portfolio-modal modal animated bounceInRight" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    <div class="close-modal" data-dismiss="modal">
      <div class="lr">
        <div class="rl">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <div class="modal-body">
            <h2 style="color:#43BDBD">More on expungement</h2>
            <p>
              A juvenile record does not go away on its own, and you're better off without one. A juvenile record can be a serious barrier to a good job, housing, or academic programs. The good news: most juvenile records can be erased through a process called juvenile expungement, and as of January 1, 2017, many people can start the expungement process at ANY AGE!
            </p>
            <p>
              This is your chance to remove these barriers that are standing between you and the future you want. It’s okay if you’ve made some mistakes in the past, but now is the time to move away from the past and give yourself all the opportunities you can! Having a juvenile record can make it hard to get a job, obtain credit, find a place to live, qualify for student loans, and so much more. Expunging your record makes sure that people see you for who you really are NOW, and not judge you based on past mistakes.
            </p>
            <h2 style="color:#43BDBD" class="text-center">
              Applying for juvenile expungement
            </h2>
              <p>There are <span class="animated tada">FREE</span> attorneys who can help you get all your information together and get your record expunged! <a href="#" data-toggle="modal" data-target="#myThirdModal" data-dismiss="modal">Learn more about this!</a> 
              </p>
            <div class="text-center">
              <button type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
</div>
<div class="portfolio-modal modal animated bounceInDown" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-content" style="background-color: #00e6e6;">
      <div class="close-modal" data-dismiss="modal">
          <div class="lr">
              <div class="rl">
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                    
              <div class="modal-body">
                <button type="button" class="navbar-right modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times fa-4x"></i></button>
                <div class="page-header">
                <h2 style="padding-top:50px;" class="text-center">Frequently Asked Questions</h2>
              </div>
                  
              <div class="panel-group" id="q7">
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#q7" data-target="#collapse7">
                    <h4>
                      <i class="fa fa-chevron-circle-right fa-lg plusminus"></i>
                      What does it mean to have a juvenile record?
                    </h4>
                    <div class='clearfix'></div>
                  </div>
                  <div id="collapse7" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                        If you were arrested under age 18 or had a case in juvenile court, you may have a juvenile record.  Even though a juvenile record is not the same as an adult conviction. A juvenile arrest, or a juvenile court case, can still show up on a background check, and very often, still is a barrier to things you need for your future. Remember, even arrests that never went to court create a record!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
                    
              <div class="panel-group" id="q8">
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#q8" href="#collapse8">
                    <h4>
                      <i class="fa fa-chevron-circle-right fa-lg plusminus"></i>
                      Is my Juvenile Record Confidential?
                    </h4>
                    <div class='clearfix'></div>
                  </div>
                  <div id="collapse8" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                       Your juvenile record is supposed to be confidential, but in reality, there are many legal exceptions to that protection.  Juvenile records are frequently disclosed, even when they shouldn’t be.  Even though a juvenile case is not the same as an adult case, many employers, licensing agencies, and other entities still treat it the same way they would an adult conviction.  Some are allowed by law to do so, and some do so illegally.
                       If a job application asks you about criminal convictions, you may not have to reveal your juvenile record. If you think a job has seen your juvenile record or that you have been turned down for a job because of a juvenile record, call the Juvenile Expungement Help Desk at <a href="tel:312-229-6049">312-229-6049</a> to learn more about your rights.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
                    
                    
                    
              <div class="panel-group" id="q1">
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#q1" href="#collapse1">
                    <h4>
                      <i class="fa fa-chevron-circle-right fa-lg plusminus"></i>
                      Is my juvenile record a criminal conviction?
                    </h4>
                    <div class='clearfix'></div>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                        No, a juvenile record is not a criminal conviction, even if you were "found guilty" in juvenile court. In Illinois, you cannot be convicted of a crime in juvenile court, because juvenile court is separate from (adult) criminal court.
                      </p>
                      <p>
                        If a job application asks you about criminal convictions, you should not reveal your juvenile record. If you think a job has seen your juvenile record, contact the Juvenile Expungement Help Desk at <a herf="tel:312-229-6049">312-229-6049</a>.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel-group" id="q2">
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#q2" href="#collapse2">
                    <h4>
                      <i class="fa fa-chevron-circle-right fa-lg plusminus"></i>
                      After I find out I am eligible to apply for juvenile expungement in Illinois, what do I have to do?
                    </h4>
                    <div class='clearfix'></div>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                        Remember that free legal help is available to help you complete the process! Use it! At the Juvenile Expungement Help Desk, attorneys or law students can walk you through this entire process - many people only need to visit the help desk one time! 
                        To petition for juvenile expungement, you will need to:
                        <ol>
                          <li>
                            Get a copy of your RAP sheet (arrest record).  If you have one, bring it with you, but if not, don’t worry - you can get a copy for free at the <a href="https://www.google.com/maps/dir/''/''/@41.8674477,-87.7505009,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x880e2d6de7996a61:0x7d533bb7b1ee3e04!2m2!1d-87.680461!2d41.867469">Juvenile Court Building</a>
                          </li>
                          <li>
                            Complete court paperwork, including a notice and petition
                          </li>
                          <li>
                            File your petition. Remember, attorneys and law students will help you complete all of the documents you need, and you may be able to get your RAP sheet, complete paperwork, and file your petition the same day
                          </li>
                        </ol>
                        If you were arrested outside of Cook County: search for your zip code <a href="https://www.illinoislegalaid.org/get-legal-help">here</a> to find a free legal aid organization in your area.

                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel-group" id="q3">
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#q3" href="#collapse3">
                    <h4>
                      <i class="fa fa-chevron-circle-right fa-lg plusminus"></i>
                      How do I get my RAP sheet (arrest record)?
                    </h4>
                    <div class='clearfix'></div>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                        You can get a copy at the Juvenile Court Building. Click <a href="https://www.google.com/maps/dir/''/''/@41.8674477,-87.7505009,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x880e2d6de7996a61:0x7d533bb7b1ee3e04!2m2!1d-87.680461!2d41.867469">here</a> for instructions.
                      </p>
                      <p>
                        RAP sheets are available same day at the Chicago Police Department, and fingerprinting is also available at the Juvenile Expungement Help Desk if you were arrested in Cook County but outside of Chicago.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel-group" id="q4">
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#q4" href="#collapse4">
                    <h4>
                      <i class="fa fa-chevron-circle-right fa-lg plusminus"></i>
                      How much does juvenile expungement cost?
                    </h4>
                    <div class='clearfix'></div>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                        Thanks to a new law that just went into effect on January 1, 2017, petitioning the court in Illinois to expunge a juvenile record is FREE! 
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel-group" id="q5">
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#q5" href="#collapse5">
                    <h4>
                      <i class="fa fa-chevron-circle-right fa-lg plusminus"></i>
                      How long does the process take?
                    </h4>
                    <div class='clearfix'></div>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                       To start the process, it typically takes an hour or less of your time at the Juvenile Expungement Help Desk! <br><br>

                       Once your paperwork is completed and filed with the clerk`s office, a court date is scheduled about 45 days from the petition date. After a judge approves the petition on the court date, it takes about 2 months for the police to erase records and for the records to no longer appear on a background check. So in total, the whole process is typically over in 100 days or less. If you have questions about this process, call the help desk for more information!

                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel-group" id="q6">
                <div class="panel panel-default">
                  <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#q6" href="#collapse6">
                    <h4>
                      <i class="fa fa-chevron-circle-right fa-lg plusminus"></i>
                      After I petition for juvenile expungement, what are the chances that my petition will be approved?
                    </h4>
                    <div class='clearfix'></div>
                  </div>
                  <div id="collapse6" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>
                        Whether your petition is approved is up to the judge. However, in the past, almost all petitions have been approved. The attorney or law student you speak with will evaluate your record to make sure it is eligible beforehand, so you can feel confident about the court process.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
                    
                    
              <h3 class="text-center">Interested in learning more about juvenile justice & expungement? Check out these links:</h3>
              <div class="panel-body">
                <ul id="hover-links">
                  <h4><li><a class="links" href="http://www.illinoislegalaid.org/index.cfm?fuseaction=home.dsp_Content&contentID=7064#">Illinois Legal Aid Online</a></li></h4>
                  <h4><li><a class="links" href="http://rapgenius.com/Illinois-criminal-justice-information-authority-juvenile-criminal-records-lyrics">Illinois Juvenile Criminal Records - explained on Rap Genius</a></li></h4>
                  <h4><li><a class="links" href="https://vine.co/u/1031276355163230208">Expungement vocabulary - explained on Vine</a></li></h4>
                  <h4><li><a class="links" href="https://docs.google.com/file/d/0ByNPZcL7VWcVODVkb20wYU5vOVk/edit">Mikva JJC Full Report 2013</a></li></h4>
                </ul>
              </div>
                <div class="text-center">
                  <button type="button" class="modal-close btn btn-default text-center" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="portfolio-modal modal animated bounceInRight" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Terms of Use</h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                        
                            <div id="containerr" class="animated wobble">
                          		<h2 class="title">Did you know?</h2>
                          			<div id="quoteContainerr">
                          				<p id="quoteGenius">Click the "New Fact" button to cycle through facts!</p>			
                          			</div><!--end quoteContainer-->
                          			
                          			<div id="buttonContainerr">
                          			  <div class="container">
                          			    <div class="row">
                          			      <div class="col-lg-1">
                          			        <a id="tweetQuote" class="btn btn-info" href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
                          			      </div>
                          			      <div class="col-lg-8 col-lg-offset-1">
                          			        <a href="#" id="quoteButton" class="btn btn-primary">New fact</a>
                          			      </div>
                          			    </div>
                          			   
                          			  </div>
                          		
                          				
                          		</div><!--end buttonContainer-->
                          
                          
                          	</div><!--end container-->
                          	<div class="text-center">
                            <button type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content zoomIn">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body text-center">
      <p>
        It's likely that you'll be eligible to expunge your record!
      </p>
      <p class="text-center">
        Let's get in touch with Legal Aid!
      </p>
      <p class="text-center">
        Please fill this form out to speak with someone from the Juvenile Expungement Help Desk.
      </p>
      <div class="form-style-5">
        <div id="wufoo-z1qurfjk1buq7uw">
          Fill out my <a href="https://juvenileexpungementhelpdesk.wufoo.com/forms/z1qurfjk1buq7uw">online form</a>.
        </div>
        <script type="text/javascript">var z1qurfjk1buq7uw;(function(d, t) {
           var s = d.createElement(t), options = {
             'userName':'juvenileexpungementhelpdesk',
             'formHash':'z1qurfjk1buq7uw',
             'autoResize':false,
             'height':'420',
             'async':true,
             'host':'wufoo.com',
             'header':'show',
             'ssl':true};
           s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
           s.onload = s.onreadystatechange = function() {
             var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
             try { z1qurfjk1buq7uw = new WufooForm();z1qurfjk1buq7uw.initialize(options);z1qurfjk1buq7uw.display(); } catch (e) {}};
           var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
         })(document, 'script');</script>
        </div>
      </div>
      <div class="modal-footer">
        <div class="text-center">
        <button type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content zoomIn">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body text-center">
      <p>
        Based on your answers, you have an adult record, so you are not eligible for juvenile expungement. However, you may be eligible for adult expungement or sealing - more information <a href="https://www.illinoislegalaid.org/legal-information/sealing-criminal-record#">here.</a>
      </p>
      <p class="text-center">
        For legal assistance with your adult record in Cook County (including Chicago):
          <ol>
            <li>Get a copy of your Chicago Police arrest record (rap sheet) at:
              Records and Services Division of the Chicago Police Department:
              3510 S Michigan, Chicago IL 60653
              (312)745-5508
              Mon-Fri 8am-12pm
              Note: it costs $16 to get your adult rap sheet *if you were arrested outside Chicago, contact the police department that arrested you to find out how to get your records.
            </li>
            <li>
              Bring your rap sheet to Cabrini Green Legal Aid's Adult Expungement Help Desk:
              Daley Center
              50 W Washington, Room 1006
              Chicago, IL 60602
              Mon, Tues, Wed, Thurs: 9am-12pm
              Thurs: 1pm-4pm
              *you should arrive before 9am or before 1pm to get assistance, since space is limited
            </li>
          </ol>
      </p>
      <p>
        For legal assistance with your Illinois adult record outside Cook County: information and forms you can fill out are <a href="https://www.illinoislegalaid.org/legal-information/sealing-criminal-record#">here.</a>
      </p>
      <h3 style="color: #43BDBD">
        Need help finding a job?
      </h3>
      <ul>
        <li>
          <a href="http://www.saferfoundation.org/client-resources/makeskeake-an-appointment">Safer Foundation</a>
        </li>
        <li>
          <a href="http://www.nlen.org/">North Lawndale Employment Network</a>
        </li>
        <li>
          <a href="https://xamire.com/jobs-for-felons/illinois">Xamire Felony Friendly Jobs Network</a>
        </li>
        <li>
          <a href="http://m.wikihow.com/Get-a-Job-with-a-Criminal-Record">How to apply for a job</a>
        </li>
      </ul>
      <div class="modal-footer">
        <div class="text-center">
        <button type="button" class="modal-close btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END OF FACT GENERATOR MODAL -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.contact-buttons.min.js"></script>
  <script src="js/demo.min.js"></script>
  <script src="js/jquery.backstrech.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/spanish-main.js"></script>
  <script>
    $(document).ready(function(){$(".logo").addClass("animated tada");$(".navbar-brand").addClass("animated tada");$("#quoteButton").click(function(){$(".title").addClass("animated tada");});});
  </script>
    <!--<script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-46830328-2', 'expunge.io');
     ga('send', 'pageview');
     /* SCC */
     ga('create', 'UA-37739534-19', 'expunge.io', {'name': 'scc'});
     ga('scc.send', 'pageview');
    </script>-->
<?php  wp_footer();  ?>
</body>
</html>
