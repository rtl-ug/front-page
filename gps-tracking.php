<?php 
	$name = 'GPS Tracking';
	include('assets/header.php');?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image bg-gray-100" style="background-image:url(images/slide-1.jpg)">
      <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
          <div class="breadcrumbs-custom-main">
            <h6 class="breadcrumbs-custom-subtitle title-decorated wow slideInDown">Services</h6>
            <h1 class="breadcrumbs-custom-title wow fadeInUp">Live <?=$name?></h1>
          </div>
          <ul class="breadcrumbs-custom-path wow fadeInLeft">
            <li><a href="/">Home</a></li>
            <li><a href="services">Services</a></li>
            <li class="active"><?=$name?></li>
          </ul>
        </div>
      </div>
    </section>
  
	  <!-- About GPS vehicle tracking  -->
    <section class="section section-lg">
      <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <div class="slide_rgt">
                  <h3>Fleet Automation<br><span>is the key to regain control!</span></h3>
                  <p>Automating fleet with GPS vehicle tracking system is the best way to manage your vehicles/drivers. It puts you in control and helps you cut losses.</p>
                  <div class="hide-on-med-and-down slide01_li">
                    <ul>
                      <li><span class="mdi mdi-check"></span> Use raw location data to <span>automate your fleet</span></li>
                      <li><span class="mdi mdi-check"></span> <span>Transform GPS tracking</span> into valuable insights</li>
                      <li><span class="mdi mdi-check"></span> <span>Be in charge</span> of your fleet, grow your business</li>
                    </ul>
                  </div>
                  <p><span>Find out how you can optimize your fleet today!</span></p>
                  <p><a class="button button-lg button-primary-outline button-winona wow slideInUp" href="contact" style="visibility: visible;">Get in Touch</a></p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInLeft">
              <img src="img/gps-tracking.png">
            </div>
          </div>
      </div>
      </section>

    
	  <!-- About tracking with video -->
    <section class="section section-lg bg-gray-100">
      <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <div class="inset-right-3">
                <h3>Fuel Monitoring</h3>
                <h5>Fuel monitoring to prevent tank draining and fraud attempts..
                </h5><h5>
                  The cost of fuel is always a concern, and fuel savings continue to be fundamentally important in running a successful fleet operation. In most vehicle operations fuel expenses account for at least 32% of operating costs, so fuel monitoring & management is the logical place to start in order to reach fuel efficiency.
                  
                  There are many factors that influence fuel consumption, and knowing these factors at all levels is important if real improvement is to be made.</h5>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInLeft">
              <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/7u4xotJQmcw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              
            </div>
          </div>
      </div>
      </section>

    <!-- About Notifications  -->
    <section class="section section-lg">
      <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <div class="inset-right-3">
                <h3>Custom Notifications</h3>
                <h5>Do you feel bombarded by the huge number of popup notifications and SMSs sent from multiple sources?
                </h5><h5>
                  No more worries as AVL View’s fleet automation platform lets you choose when to receive alerts:</h5>
                  <br>
                  <ol>
                    <li>Choose from the standard alerts offered by the platform and opt to get notified only in cases of deviations.</li>
                    <li>Apart from the standard alerts, you can customize and set various alert rules of your choice.</li>
                    <li>You can also opt to change the format of the alerts received via push notifications, SMS and emails.</li>
                    <li>Get notified on the Estimated Time of Arrival (ETA) of vehicles at the designated location.</li>
                  </ol>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInLeft">
              <img src="img/no_more_spamming_customize.png">
            </div>
          </div>
      </div>
      </section>

<?php include('assets/footer.php');?>