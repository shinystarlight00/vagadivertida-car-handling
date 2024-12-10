<!DOCTYPE html>
<html lang="en-US">
    <?php
        require "../../config/constant.php";
        require "../../config/db.php";
        require "../../layout/head.php";

        $sql = "SELECT * FROM vagaexpv_carhandling_content WHERE page = 'services'";
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
                                          <a href="/pages/services/">Services</a>
                                      </span> / <span class="breadcrumb_last" aria-current="page">
                                          <strong>Seaworthy Packing</strong>
                                      </span>
                                  </span>
                              </p>
                          </div>
                          <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                              <div class="inner p-t-md p-b-md">
                                  <h1><?php echo $data['seaworth-hero-title']['description'] ?></h1>
                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['seaworth-hero-desc']['description']) ?></p>
                              </div>
                          </div>
                          <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1 col-md-6 offset-md-1 p-r h-image">
                              <div class="inner p-r">
                                  <img width="900" height="400" src="<?php echo ASSET_URL.$data['seaworth-hero-image']['url'] ?>" class="attachment-full size-full" alt="" decoding="async" fetchpriority="high" sizes="(max-width: 900px) 100vw, 900px" />
                              </div>
                          </div>
                      </div>
                  </div>
              </section>

              <?php require '../../layout/hero_option.php' ?>
              
              <section class="page-section builder p-r p-b-xl">
                  <section class="page-section content p-t-xl">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="inner text">
                                      <h2><?php echo $data['seaworth-service-title1']['description'] ?></h2>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['seaworth-service-desc1']['description']) ?></p>
                                      <p>
                                          <img decoding="async" class="alignnone size-medium wp-image-483" src="<?php echo ASSET_URL.$data['seaworth-service-image1']['url'] ?>" alt="" width="300" height="225" />
                                      </p>
                                      <h2><?php echo $data['seaworth-service-title2']['description'] ?></h2>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['seaworth-service-desc2']['description']) ?></p>
                                      <p>
                                          <img decoding="async" class="alignnone size-full wp-image-488" src="<?php echo ASSET_URL.$data['seaworth-service-image2']['url'] ?>" alt="Crating" width="300" height="200" />
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  
                  <?php require '../../layout/help_card.php' ?>

                  <section class="page-section services p-t-xl">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-6 v-c">
                                  <h2></h2>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-4 col-md-6 col-12">
                                  <div class="inner bg-lgr service p-r h-100">
                                      <div class="service-image">
                                          <img width="945" height="400" src="<?php echo ASSET_URL.$data['insurance-hero-image']['url'] ?>" class="attachment-full size-full" alt="Car Insurance" decoding="async" sizes="(max-width: 945px) 100vw, 945px" />
                                      </div>
                                      <div class="content p-md">
                                          <h3><?php echo $data['insurance-hero-title']['description'] ?></h3>
                                          <p><?php echo str_replace('<br/>', '</p><p>', $data['insurance-hero-desc']['description']) ?></p>
                                          <a class="button" href="/pages/services/insurance.php">More information <i class="fal fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-12">
                                  <div class="inner bg-lgr service p-r h-100">
                                      <div class="service-image">
                                          <img width="945" height="400" src="<?php echo ASSET_URL.$data['general-hero-image']['url'] ?>" class="attachment-full size-full" alt="General Cargo" decoding="async" sizes="(max-width: 945px) 100vw, 945px" />
                                      </div>
                                      <div class="content p-md">
                                          <h3><?php echo $data['general-hero-title']['description'] ?></h3>
                                          <p><?php echo str_replace('<br/>', '</p><p>', $data['general-hero-desc']['description']) ?></p>
                                          <a class="button" href="/pages/services/insurance.php">More information <i class="fal fa-long-arrow-right"></i>
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
              </section>
          </div>

          <?php require "../../layout/footer.php"; ?>

        </div>

        <?php require "../../layout/footer_script.php"; ?>
    </body>
</html>