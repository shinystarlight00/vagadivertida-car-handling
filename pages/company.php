<!DOCTYPE html>
<html lang="en-US">
    <?php 
        require "../config/constant.php";
        require "../config/db.php";
        require "../layout/head.php";

        $sql = "SELECT * FROM vagaexpv_carhandling_content WHERE page = 'about'";
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
          <?php require "../layout/header.php"; ?>

          <div class="site-inner">
              <section class="page-section intro bg-gr p-r">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <p id="breadcrumbs">
                                  <span>
                                      <span>
                                          <a href="/">Home </a>
                                      </span> / <span class="breadcrumb_last" aria-current="page">
                                          <strong>The company</strong>
                                      </span>
                                  </span>
                              </p>
                          </div>
                          <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                              <div class="inner p-t-md">
                                  <h1><?php echo $data['hero-title']['description'] ?></h1>
                                  <p class="f-s-20">
                                    <p><?php echo str_replace('<br/>', '</p><p>', $data['hero-desc']['description']) ?></p>
                                  </p>
                              </div>
                          </div>
                          <div class="col-lg-6 offset-lg-1 col-md-6 offset-md-1 p-r h-image">
                              <div class="inner p-r">
                                  <img width="900" height="400" src="<?php echo ASSET_URL.$data['hero-image']['url']; ?>" class="attachment-full size-full" alt="" decoding="async" fetchpriority="high" sizes="(max-width: 900px) 100vw, 900px" />
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              
              <?php require "../layout/hero_option.php"; ?>

              <section class="page-section builder p-r p-b-xl">
                  <section class="page-section content p-t-xl">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-7">
                                  <div class="inner text">
                                      <h2><?php echo $data['service-subtitle']['description'] ?></h2>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['service-subdesc']['description']) ?></p>
                                  </div>
                              </div>
                              <div class="col-lg-4 offset-lg-1 pl-0">
                                  <div class="inner bg-lgr p-md br-5">
                                      <h3><?php echo $data['card-title']['description'] ?></h3>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['card-desc']['description']) ?></p>
                                      <a class="button" href="/pages/contact.php">Contact <i class="fal fa-long-arrow-right"></i>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  <section class="page-section slider p-t-xl">
                      <div class="container">
                          <div class="row p-b-sm">
                              <div class="col-lg-6">
                                  <div class="inner">
                                      <h2>Impression</h2>
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="navigation t-r">
                                      <button class="prev-photo slick-arrow">
                                          <i class="fas fa-long-arrow-left"></i>
                                      </button>
                                      <button class="next-photo slick-arrow">
                                          <i class="fas fa-long-arrow-right"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="container-fluid p-r  p-0">
                          <div class="photo-slider">
                              <div class="image">
                                  <img width="945" height="400" src="<?php echo ASSET_URL.$data['slide-image1']['url']; ?>" class="attachment-full size-full" alt="Registration procedure / Homologation" decoding="async"  sizes="(max-width: 945px) 100vw, 945px" />
                              </div>
                              <div class="image">
                                  <img width="945" height="400" src="<?php echo ASSET_URL.$data['slide-image2']['url']; ?>" class="attachment-full size-full" alt="Escrow service" decoding="async"  sizes="(max-width: 945px) 100vw, 945px" />
                              </div>
                              <div class="image">
                                  <img width="945" height="400" src="<?php echo ASSET_URL.$data['slide-image3']['url']; ?>" class="attachment-full size-full" alt="Service - Gassing the container" decoding="async"  sizes="(max-width: 945px) 100vw, 945px" />
                              </div>
                              <div class="image">
                                  <img width="945" height="400" src="<?php echo ASSET_URL.$data['slide-image4']['url']; ?>" class="attachment-full size-full" alt="Export Oldtimers/ Classics" decoding="async"  sizes="(max-width: 945px) 100vw, 945px" />
                              </div>
                          </div>
                      </div>
                  </section>
                  <section class="page-section content p-t-xl">
                      <div class="container">
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="inner text">
                                      <h2 style="text-align: center"><?php echo $data['service-title']['description'] ?></h2>
                                      <p style="text-align: center"><?php echo str_replace('<br/>', '</p><p>', $data['service-desc']['description']) ?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  <section class="page-section content variable-columns p-t-xl">
                      <div class="container">
                          <div class="row">
                              <div class="col">
                                  <div class="inner bg-white p-md text h-100 br-5">
                                      <h2><?php echo $data['service-title1']['description'] ?></h2>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['service-desc1']['description']) ?></p>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="inner bg-white p-md text h-100 br-5">
                                      <h2><?php echo $data['service-title2']['description'] ?></h2>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['service-desc2']['description']) ?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  <section class="page-section content variable-columns p-t-xl">
                      <div class="container">
                          <div class="row">
                              <div class="col">
                                  <div class="inner bg-white p-md text h-100 br-5">
                                      <h2><?php echo $data['service-title3']['description'] ?></h2>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['service-desc3']['description']) ?></p>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="inner bg-white p-md text h-100 br-5">
                                      <h2><?php echo $data['service-title4']['description'] ?></h2>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['service-desc4']['description']) ?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </section>
                  
                  <?php require '../layout/help_card.php' ?>
              </section>
          </div>

          <?php require "../layout/footer.php"; ?>

        </div>

        <?php require "../layout/footer_script.php"; ?>
    </body>
</html>