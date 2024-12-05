<!DOCTYPE html>
<html lang="en-US">
    <?php 
        require "../../config/constant.php";
        require "../../config/db.php";
        require "../../layout/head.php";

        $sql = "SELECT * FROM vagaexpv_carhandling_content WHERE page = 'import'";
        $content = $conn->query($sql);

        $data = array();

        if ($content->num_rows > 0) {
          while($row = $content->fetch_assoc()) {
            $data[$row['title']] = $row;
          }
        }
    ?>
    <body class="home page-template page-template-page-templates page-template-home page-template-page-templateshome-php page page-id-2 wp-custom-logo wp-embed-responsive mega-menu-primary header-full-width content-sidebar genesis-breadcrumbs-hidden genesis-singular-image-hidden genesis-footer-widgets-visible has-no-blocks">
        <div class="site-container">
          <?php require "../../layout/header.php"; ?>

          <div class="site-inner">
              <section class="page-section intro bg-gr p-r">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <p id="breadcrumbs">
                                  <span>
                                      <span>
                                          <a href="/">Home</a>
                                      </span> / <span>
                                          <a href="/pages/import/">Import</a>
                                      </span> / <span class="breadcrumb_last" aria-current="page">
                                          <strong>Cars</strong>
                                      </span>
                                  </span>
                              </p>
                          </div>
                          <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                              <div class="inner p-t-md p-b-md">
                                  <h1><?php echo $data['car-hero-title']['description'] ?></h1>
                                  <p><?php echo $data['car-hero-desc']['description'] ?></p>
                              </div>
                          </div>
                          <div class="col-xl-6 offset-xl-1 col-lg-4 offset-lg-0 col-md-6 offset-md-1 p-r h-image">
                              <div class="inner p-r">
                                  <img width="655" height="340" src="<?php echo ASSET_URL.$data['car-hero-image']['url'] ?>" class="attachment-full size-full" alt="Export to America" decoding="async" fetchpriority="high" sizes="(max-width: 655px) 100vw, 655px" />
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              
              <?php require "../../layout/hero_option.php" ?>

              <section class="page-section builder p-r p-b-xl">
                  <section class="page-section content p-t-xl">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="inner text">
                                      <h2><?php echo $data['car-service-title']['description'] ?></h2>
                                      <p><?php echo $data['car-service-desc']['description'] ?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  
                  <?php require "../../layout/help_card.php" ?>
                  <?php require "../../layout/benefit.php" ?>
              </section>
          </div>

          <?php require "../../layout/footer.php"; ?>

        </div>

        <?php require "../../layout/footer_script.php"; ?>
    </body>
</html>