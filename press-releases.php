<?php 
    $name = 'Ministerial Statements';
    include('assets/header.php') ?>

      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">DOcuments</h6>
              <h1 class="breadcrumbs-custom-title">Ministerial Statements</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index">Home</a></li>
              <li><a href="documents">Documents</a></li>
              <li class="active">Ministerial Statements</li>
            </ul>
          </div>
        </div>
      </section>

    
      <section class="section section-lg">
        <div class="container">
          <div class="row">
            <div class="col-lg-11 col-xl-8">

              <!-- RD Search-->
              <form class="rd-form rd-search rd-search-classic" action="search-results.html" method="GET">
                <div class="form-wrap">
                  <label class="form-label-outside" for="rd-search-form-input">Search</label>
                  <div class="form-wrap-inner">
                    <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                    <button class="rd-search-submit" type="submit" aria-label="Submit"></button>
                  </div>
                </div>
              </form>

              <div class="rd-search-results">
                <div id="search-results">

                    
                    <ol class="search-list">
                        <li class="search-list-item">
                            <h5 class="search-title"><a target="_top" href="index.html" class="search-link">Document</a></h5>
                            <p>This Document discusses lorem ipsum and so much more<br> Download it to peruse further</p>
                            <a href="#"><span class="fa fa-lg fa-download"></span> Download Doc</a>
                        </li>
                        <li class="search-list-item">
                            <h5 class="search-title"><a target="_top" href="index.html" class="search-link">Document</a></h5>
                            <p>This Document discusses lorem ipsum and so much more<br> Download it to peruse further</p>
                            <a href="#"><span class="fa fa-lg fa-download"></span> Download Doc</a>
                        </li>
                        <li class="search-list-item">
                            <h5 class="search-title"><a target="_top" href="index.html" class="search-link">Document</a></h5>
                            <p>This Document discusses lorem ipsum and so much more<br> Download it to peruse further</p>
                            <a href="#"><span class="fa fa-lg fa-download"></span> Download Doc</a>
                        </li>
                    </ol>
                </div>

                </div>
            </div>
          </div>
        </div>
      </section>


      <?php include('assets/footer.php');?>