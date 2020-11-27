<?php 
	$name = 'Web Hosting';
	include('assets/header.php');?>
    <!-- Breadcrumbs -->
	<section class="breadcrumbs-custom bg-image bg-gray-100" style="background-image:url(images/slide-1.jpg)">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Services</h6>
              <h1 class="breadcrumbs-custom-title"><?=$name?></h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="/">Home</a></li>
              <li><a href="services">Services</a></li>
              <li class="active"><?=$name?></li>
            </ul>
          </div>
        </div>
  </section>
  
	  <!-- About Web Hosting  -->
    <section class="section section-lg">
    <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse">
          <div class="col-lg-6 col-xl-5 wow fadeInRight">
              <div class="inset-right-3">
              <h3>Affordable Web Hosting</h3>
              <h5>RTL provides affordable website hosting services to small and medium businesses. Our services includes re-seller hosting where you can make money with your own web hosting business, VPS hosting where you have dedicated functionality for your website and dedicated server hosting, and domain name registration.</h5>
              </div>
          </div>
          <div class="col-lg-6 wow fadeInLeft">
            <img src="img/server-room.jpg">
          </div>
        </div>
    </div>
    </section>

     <!-- Small Features-->
     <section class="section section-lg bg-gray-100">
      <div class="container">
        <div class="row row-30">
          <div class="col-sm-6 col-lg-4 wow-outer">
            <!-- Box Minimal-->
            <article class="box-minimal">
              <div class="box-minimal-icon fl-bigmug-line-text109 wow fadeIn"></div>
              <div class="box-minimal-main wow-outer">
                <h4 class="box-minimal-title wow slideInDown">Free Site Migration</h4>
                <p class="wow fadeInUpSmall">Moving from another host? We understand how hectic it can be. Our migration experts will transfer all your website files, databases and emails from your old host to your new account with zero downtime at zero cost.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow-outer">
            <!-- Box Minimal-->
            <article class="box-minimal">
              <div class="box-minimal-icon fl-bigmug-line-rectangular78 wow fadeIn" data-wow-delay=".1s"></div>
              <div class="box-minimal-main wow-outer">
                <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".1s">Free SSL Certificate</h4>
                <p class="wow fadeInUpSmall" data-wow-delay=".1s">We offer Top-notch SSL certificates to ensure delivery of services over encrypted channels. This boosts the security of our clients' accounts and sites.</p>
              </div>
            </article>
          </div>
          <div class="col-sm-6 col-lg-4 wow-outer">
            <!-- Box Minimal-->
            <article class="box-minimal">
              <div class="box-minimal-icon fl-bigmug-line-new83 wow fadeIn" data-wow-delay=".2s"></div>
              <div class="box-minimal-main wow-outer">
                <h4 class="box-minimal-title wow slideInDown" data-wow-delay=".2s">Free Domain Management Services</h4>
                <p class="wow fadeInUpSmall" data-wow-delay=".2s">We offer a full suite of domain services including registration, transfer, renewal, ID protection, theft protection, DNS management, email forwarding, domain forwarding and others.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-lg">
        <div class="container">
            <div class="row wow-outer">

                <!-- Economy  -->
                <div class="col-md-4 col-sm-6 wow fadeInUp">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Economy</h3>
                        </div>
                        <div class="pricing-content">
                            <div class="price-value">
                              <span class="amount-sm">UGX</span>
                                <span class="amount">150,000</span>
                                <span class="duration">per month</span>
                            </div>
                            <ul class="content-list">
                                <li>5GB Disk Space</li>
                                <li>SSL Certificate</li>
                                <li>Unlimited Bandwidth</li>
                                <li>25 Email Accounts</li>
                                <li>Webmail</li>
                                <li>Cpanel Access</li>
                                <li class="disable">1 Subdomain</li>
                                <li class="disable">1 database</li>
                            </ul>
                        </div>
                        <div class="pricingTable-signup">
                        </div>
                    </div>
                </div>

                <!-- Premium  -->
                <div class="col-md-4 col-sm-6 wow fadeInUpSmall">
                    <div class="pricingTable popular">
                        <div class="pricingTable-header">
                            <h3 class="title">Premium</h3>
                        </div>
                        <div class="pricing-content">
                            <div class="price-value">
                              <span class="amount-sm">UGX</span>
                                <span class="amount">250,000</span>
                                <span class="duration">per year</span>
                            </div>
                            <ul class="content-list">
                              <li>10GB Disk Space</li>
                              <li>SSL Certificate</li>
                              <li>Unlimited Bandwidth</li>
                              <li>100 Email Accounts</li>
                              <li>Webmail</li>
                              <li>Cpanel Access</li>
                              <li>5 Subdomains</li>
                              <li class="disable">5 databases</li>
                            </ul>
                        </div>
                        <div class="pricingTable-signup">
                        </div>
                    </div>
                </div>

                <!-- Corporate  -->
                <div class="col-md-4 col-sm-6 wow fadeInUp">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Corporate</h3>
                        </div>
                        <div class="pricing-content">
                            <div class="price-value">
                              <span class="amount-sm">UGX</span>
                                <span class="amount">350,000</span>
                                <span class="duration">per month</span>
                            </div>
                            <ul class="content-list">
                              <li>10GB Disk Space</li>
                              <li>SSL Certificate</li>
                              <li>Unlimited Bandwidth</li>
                              <li>100 Email Accounts</li>
                              <li>Webmail</li>
                              <li>Cpanel Access</li>
                              <li>unlimited Subdomains</li>
                              <li>10 databases</li>
                            </ul>
                        </div>
                        <div class="pricingTable-signup">
                        </div>
                    </div>
                </div>
                
              </div>
              <div class="row">
                  <div class="col-md-12 text-center">
                    <a class="button button-primary-outline button-winona offset-top-2 wow slideInUp" href="contact-us" style="visibility: visible; animation-name: slideInUp;"><div class="content-original">Order Now</div><div class="content-dubbed">Get in Touch</div></a>
                  </div>
              </div>
        </div>
    </div>
    </section>

    <style>
 
</style>
<?php include('assets/footer.php');?>