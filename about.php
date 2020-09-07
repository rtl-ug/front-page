<?php 
	$name = 'About';
	include('assets/header.php');?>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image bg-gray-100" style="background-image:url(images/slide-1.jpg)">
      <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
          <div class="breadcrumbs-custom-main">
            <h6 class="breadcrumbs-custom-subtitle title-decorated wow slideInDown">Home</h6>
            <h1 class="breadcrumbs-custom-title wow fadeInUp"><?=$name?> RTL</h1>
          </div>
          <ul class="breadcrumbs-custom-path wow fadeInLeft">
            <li><a href="/">Home</a></li>
            <li class="active"><?=$name?></li>
          </ul>
        </div>
      </div>
    </section>
  
    <section class="section section-lg">
      <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
            <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <div class="slide_rgt">
                    <h3 class="wow-outer"><span class="wow slideInDown">About Rootless Technologies Limited</span></h3>
                    <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">Rootless Technologies Limited is a top tier IT firm based in Kampala, Uganda. We deliver world-class technology solutions and services to our Clients.</span></p>
                    <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">We Transform your business entirely in a digital way with a perfect mix of mobile, cloud, CRM and other emerging technologies. Delight your customers with our effective and innovative business processes.</span></p>      
                </div>
            </div>
            <div class="col-lg-6 wow fadeInLeft">
              <img src="img/gps-tracking.png">
            </div>
          </div>
      </div>
      </section>

      
    <section class="section bg-gray-100">
        <div class="range justify-content-xl-between">
          <div class="cell-lg-6 cell-xl-5 align-self-center container">
            <div class="row">
              <div class="col-md-10 cell-inner">
                <div class="section-lg inset-right-2">
                  <h3 class="wow-outer">
                    <span class="wow slideInDown" >Team</span>
                	</h3>
									<p class="wow fadeIn">RTL Limited is blessed with technical experts who provide management leadership in the design, development and delivery of technology-enabled applications, products and services within a computing systems environment.</p>
									<p>The team also ensures the delivered solution meets the technical specifications and design requirements of the clients who need business solutions for the running of their businesses.</p>
									<p> The team, coupled with sound efficient management and state of the Art infrastructure, provides the best brains of the industry, capable of handling a wide range technologies moving with the latest trends in the industry.</p>
								
                  <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInUp" href="contact" style="visibility: visible; animation-name: slideInUp;">Get in Touch</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-lg-6 height-fill">
            <div class="figure-card">
              <div class="figure-card-sizer"></div><img src="img/servers.jpg" alt="" width="960" height="792">
            </div>
          </div>
        </div>
      </section>

    
<?php include('assets/footer.php');?>