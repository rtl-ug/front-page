<?php 
	$name = 'Contact Us';
	include('assets/header.php');?>
    <!-- Breadcrumbs -->
	<section class="breadcrumbs-custom bg-image" style="background-image: url(images/slide-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Home</h6>
              <h1 class="breadcrumbs-custom-title">Contact Us</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="/">Home</a></li>
              <li class="active">Contact Us</li>
            </ul>
          </div>
        </div>
	  </section>
	  
	  <section class="section section-sm">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                <ul class="list-0">
					<li><a class="link-default" href="tel:+256-782-211-921">256-782-211-921</a></li>
					<li><a class="link-default" href="tel:+256-706-211-921">256-706-211-921</a></li>
                </ul>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:info@rtl.ug">info@rtl.ug</a>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#">Plot 925, Bukoto Ntinda Rd<br>Kampala, Uganda</a>
              </div>
            </div>
          </div>
        </div>
      </section>
<div class="section bg-gray-100">
	<div class="container" style="padding-top:3em;padding-bottom:3em;">
		<div class="row">
			<div class="col-lg-6">
				<h3>Contact Us</h3>
				<!-- RD Mailform-->
				<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
					<div class="row row-10">
					<div class="col-md-6">
						<div class="form-wrap">
						<label class="form-label-outside" for="contact-2-first-name">First Name</label>
						<input class="form-input form-control-has-validation form-control-last-child" id="contact-2-first-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-wrap">
						<label class="form-label-outside" for="contact-2-last-name">Last Name</label>
						<input class="form-input form-control-has-validation form-control-last-child" id="contact-2-last-name" type="text" name="name" data-constraints="@Required"><span class="form-validation"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-wrap">
						<label class="form-label-outside" for="contact-2-email">E-mail</label>
						<input class="form-input form-control-has-validation form-control-last-child" id="contact-2-email" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-wrap">
						<label class="form-label-outside" for="contact-2-phone">Phone</label>
						<input class="form-input form-control-has-validation form-control-last-child" id="contact-2-phone" type="text" name="phone" data-constraints="@PhoneNumber"><span class="form-validation"></span>
						</div>
					</div>
					<div class="col-12">
						<div class="form-wrap">
						<label class="form-label-outside" for="contact-2-message">Your Message</label>
						<textarea class="form-input form-control-has-validation form-control-last-child" id="contact-2-message" name="message" data-constraints="@Required"></textarea><span class="form-validation"></span>
						</div>
					</div>
					</div>
					<!-- Google captcha-->
					<div class="form-wrap text-left form-validation-left">
					<!-- <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt&amp;co=aHR0cHM6Ly9saXZlZGVtbzAwLnRlbXBsYXRlLWhlbHAuY29tOjQ0Mw..&amp;hl=en&amp;v=mhgGrlTs_PbFQOW4ejlxlxZn&amp;theme=light&amp;size=normal&amp;cb=2a32ve2c0p0s" width="304" height="78" role="presentation" name="a-arf9ss811qkl" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div><span class="form-validation"></span> -->
					</div>
					<div class="group group-middle">
						<button class="button button-primary button-winona" type="submit">Send Message</button>
						<p>or use</p>
						<a class="button button-primary-outline button-icon button-icon-left button-facebook-messenger" href="https://api.whatsapp.com/send?phone=256782211921&text=Hello,%20I%27d%20like%20to%20discuss%20a%20project%20with%20you" target="_blank">
							<span class="icon text-primary mdi mdi-Whatsapp"></span>Whatsapp
						</a>
					</div>
				</form>
			</div>
			<div class="col-lg-6">
				<div style="width:100%;height:80%;padding-top:2em;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.975476091127!2d32.602121!3d0.3500241!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfeee8e313671cfa9!2sROOTLESS%20TECHNOLOGY%20LTD!5e0!3m2!1sen!2sug!4v1599416343244!5m2!1sen!2sug" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('assets/footer.php');?>