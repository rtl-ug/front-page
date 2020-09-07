<?php 
    $name='Services';
    include('assets/header.php') ?>

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

    


      <section class="section section-lg bg-gray-800" id="directorates">
        <div class="container">
          <!-- Timeline Classic-->
          <article class="timeline-classic">
            <div class="timeline-classic-item">
              <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="images/stock/infra.jpg" alt="" width="390" height="250">
              </div>
              <div class="timeline-classic-item-divider"></div>
              <div class="timeline-classic-item-main">
                  <p class="timeline-classic-item-title">
                    <a href="infrastructure">GPS Tracking & Fleet Management</a>
                  </p>
                <p class="thumbnail-classic-item-subtitle">The involves services like:</p>
                <p>
                  <li>Vehicle Tracking</li>
                  <li>Fleet Management</li>
                </p>
              </div>
            </div>
            <div class="timeline-classic-item">
              <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="images/gcic/opengov.jpg" alt="" width="390" height="250">
              </div>
              <div class="timeline-classic-item-divider"></div>
              <div class="timeline-classic-item-main">
                <p class="timeline-classic-item-title"><a href="information"> Bulk SMS Services</a></p>
                <p class="thumbnail-classic-item-subtitle">We offer services like:</p>
                <p>
                <li>Bulk SMS</li>
                <li>Robot Calls</li>
                <li>IVR</li>
                </p>
              </div>
            </div>
            <div class="timeline-classic-item">
              <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="images/stock/infra.jpg" alt="" width="390" height="250">
              </div>
              <div class="timeline-classic-item-divider"></div>
              <div class="timeline-classic-item-main">
                <p class="timeline-classic-item-title"><a href="ictservices">Information & Communication Technology Services</a></p>
                <p class="thumbnail-classic-item-subtitle">The directorate is made up of the following departments</p>
                <p>
                  <li>ICT Research and Development</li>
                  <li>E- Services</li>
                </p>
              </div>
            </div>

            <div class="timeline-classic-item">
              <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="images/gcic/call-center.jpg" alt="" width="390" height="250">
              </div>
              <div class="timeline-classic-item-divider"></div>
              <div class="timeline-classic-item-main">
                <p class="timeline-classic-item-title">Government Citizen Interaction Centre</p>
                <p class="thumbnail-classic-item-subtitle">The directorate is made up of the following departments</p>
                <p>
                  <li>ICT Research and Development</li>
                  <li>E- Services</li>
                </p>
              </div>
            </div>
          </article>
        </div>
      </section>
 


      <?php include('assets/footer.php');?>