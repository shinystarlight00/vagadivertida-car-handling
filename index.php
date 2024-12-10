<!DOCTYPE html>
<html lang="en-US">

    <?php
        require "config/constant.php";
        require "config/db.php";
        require "layout/head.php";

        $sql = "SELECT * FROM vagaexpv_carhandling_content WHERE page = 'home'";
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
          <?php require "layout/header.php"; ?>

          <div class="site-inner">
              <section class="page-section h-intro bg-gr v-c p-r">
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-6 col-lg-7 col-md-12">
                              <div class="inner">
                                  <h1><?php echo $data['hero-title']['description'] ?></h1>
                                  <span class="f-s-16">
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['hero-description']['description']) ?></p>
                                  </span>
                                  <a class="button yellow" href="/pages/quote.php"> Request quote</a>
                              </div>
                          </div>
                          <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-0 p-r">
                              <div class="inner bg-white p-md br-5 questions">
                                  <h2><?php echo $data['hero-subtitle']['description'] ?></h2>
                                  <ul class="fa-ul">
                                      <li>
                                          <span class="fa-li">
                                              <a href="/pages/import/">
                                                  <i class="fa-solid fa-arrow-right-long"></i>
                                          </span> <?php echo $data['hero-option1']['description'] ?> </a>
                                      </li>
                                      <li>
                                          <span class="fa-li">
                                              <a href="/pages/export/">
                                                  <i class="fa-solid fa-arrow-right-long"></i>
                                          </span><?php echo $data['hero-option2']['description'] ?> </a>
                                      </li>
                                      <li>
                                          <span class="fa-li">
                                              <a href="/pages/services/escrow.php">
                                                  <i class="fa-solid fa-arrow-right-long"></i>
                                          </span><?php echo $data['hero-option3']['description'] ?> </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              
              <?php require "layout/hero_option.php"; ?>

              <section class="page-section m-services p-t-xl p-r">
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4">
                              <a href="/pages/import/">
                                  <div class="inner bg-white p-md p-r h-100">
                                      <h3>
                                          <span class="icon">
                                              <img src="assets/img/import-icon.png" alt="import">
                                          </span> <?php echo $data['mainfunc1-title']['description'] ?>
                                      </h3>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['mainfunc1-desc']['description']) ?></p>
                                      <span class="arrow-btm">
                                          <i class="fa-solid fa-arrow-right-long"></i>
                                      </span>
                                  </div>
                              </a>
                          </div>
                          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4">
                              <a href="/pages/export/">
                                  <div class="inner bg-white p-md p-r h-100">
                                      <h3>
                                          <span class="icon">
                                              <img src="assets/img/export-icon.png" alt="import">
                                          </span> <?php echo $data['mainfunc2-title']['description'] ?>
                                      </h3>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['mainfunc2-desc']['description']) ?></p>
                                      <span class="arrow-btm">
                                          <i class="fa-solid fa-arrow-right-long"></i>
                                      </span>
                                  </div>
                              </a>
                          </div>
                          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4">
                              <a href="/pages/services/">
                                  <div class="inner bg-white p-md p-r h-100">
                                      <h3>
                                          <span class="icon">
                                              <img src="assets/img/serivce-icon.png" alt="import">
                                          </span> <?php echo $data['mainfunc3-title']['description'] ?>
                                      </h3>
                                      <p><?php echo str_replace('<br/>', '</p><p>', $data['mainfunc3-desc']['description']) ?></p>
                                      <span class="arrow-btm">
                                          <i class="fa-solid fa-arrow-right-long"></i>
                                      </span>
                                  </div>
                              </a>
                          </div>
                      </div>
                  </div>
              </section>
              <section class="page-section services p-t-xl">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8 col-8 v-c">
                              <h2 class="m-0"><?php echo $data['solutions-title']['description'] ?></h2>
                          </div>
                          <div class="col-lg-4 col-4">
                              <div class="navigation t-r">
                                  <button class="prev slick-arrow">
                                      <i class="fas fa-long-arrow-left"></i>
                                  </button>
                                  <button class="next slick-arrow">
                                      <i class="fas fa-long-arrow-right"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <div class="service-slider v-c">
                          <div class="inner bg-lgr service p-r">
                              <div class="service-image">
                                  <img width="945" height="400" src="<?php echo ASSET_URL.$data['solution1-image']['url'] ?>" class="attachment-full size-full" alt="Container shipping Vaga" decoding="async" fetchpriority="high"  sizes="(max-width: 945px) 100vw, 945px" />
                              </div>
                              <div class="content p-md">
                                  <h3><?php echo $data['solution1-title']['description'] ?></h3>
                                  <p>
                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['solution1-desc']['description']) ?></p>
                                  </p>
                                  <a class="button" href="/pages/services/general-cargo.php">More information <i class="fas fa-long-arrow-right"></i>
                                  </a>
                              </div>
                          </div>
                          <div class="inner bg-lgr service p-r">
                              <div class="service-image">
                                  <img width="945" height="400" src="<?php echo ASSET_URL.$data['solution2-image']['url'] ?>" class="attachment-full size-full" alt="Car Insurance" decoding="async" sizes="(max-width: 945px) 100vw, 945px" />
                              </div>
                              <div class="content p-md">
                                  <h3><?php echo $data['solution2-title']['description'] ?></h3>
                                  <p>
                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['solution2-desc']['description']) ?></p>
                                  </p>
                                  <a class="button" href="/pages/services/insurance.php">More information <i class="fas fa-long-arrow-right"></i>
                                  </a>
                              </div>
                          </div>
                          <div class="inner bg-lgr service p-r">
                              <div class="service-image">
                                  <img width="945" height="400" src="<?php echo ASSET_URL.$data['solution3-image']['url'] ?>" class="attachment-full size-full" alt="Escrow service" decoding="async" sizes="(max-width: 945px) 100vw, 945px" />
                              </div>
                              <div class="content p-md">
                                  <h3><?php echo $data['solution3-title']['description'] ?></h3>
                                  <p>
                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['solution3-desc']['description']) ?></p>
                                  </p>
                                  <a class="button" href="/pages/services/escrow.php">More information <i class="fas fa-long-arrow-right"></i>
                                  </a>
                              </div>
                          </div>
                          <div class="inner bg-lgr service p-r">
                              <div class="service-image">
                                  <img width="900" height="400" src="<?php echo ASSET_URL.$data['solution4-image']['url'] ?>" class="attachment-full size-full" alt="" decoding="async"  sizes="(max-width: 900px) 100vw, 900px" />
                              </div>
                              <div class="content p-md">
                                  <h3><?php echo $data['solution4-title']['description'] ?></h3>
                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['solution4-desc']['description']) ?></p>
                                  <a class="button" href="/pages/services/sea-proof-packaging.php">More information <i class="fas fa-long-arrow-right"></i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section class="page-section cta p-t-xl">
                  <div class="container">
                      <div class="inner bg-gr br-5 p-r">
                          <div class="row">
                              <div class="col-xl-7  col-lg-7 offset-lg-1 col-md-12  offset-md-0 col-12 offset-0">
                                  <div class="inner ">
                                      <h2>Need help importing a car or other vehicle?</h2>
                                      <div class="subtitle"> Vaga Divertida is happy to help you!</div>
                                      <p>Please give us a call, e-mail us or fill out a <a href="/pages/quote.php">quotation form</a>. </p>
                                      <div class="cta-contact">
                                          <a class="p-r-md" href="mailto:contact@vagadivertida-car-handling.com">
                                              <i class="fa-regular fa-circle-envelope"></i> contact@vagadivertida-car-handling.com </a>
                                          <a href="tel:+351 911 899 273">
                                              <i class="fa-regular fa-circle-phone"></i> +351 911 899 273 </a>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-2 offset-xl-1 col-lg-3 offset-lg-1 col-md-4 offset-md-0 h-image">
                                  <div class="inner p-r">
                                      <img width="197" height="223" src="assets/img/others/Lucas.png" class="attachment-full size-full" alt="Lucas" decoding="async" />
                                      <div class="cta-name">
                                          <img src="assets/img/arrow.svg" alt="arrow"> Lucas is happy to help you.
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section class="page-section roadmap p-t-xl p-r">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                              <h2><?php echo $data['procedure-label']['description'] ?></h2>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xl-8 col-lg-12 col-sm-12 p-b-md">
                              <div class="inner bg-white">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8">
                                          <a href="/pages/services/escrow.php">
                                              <div class="inner p-md p-r h-100 v-c">
                                                  <h3><?php echo $data['procedure1-title']['description'] ?></h3>
                                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['procedure1-desc']['description']) ?></p>
                                                  <span class="arrow-btm">
                                                      <i class="fa-solid fa-arrow-right-long"></i>
                                                  </span>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col-lg-4 col-md-4">
                                          <div class="inner h-100">
                                              <img width="251" height="314" src="<?php echo ASSET_URL.$data['procedure1-image']['url'] ?>" class="attachment-full size-full" alt="Escrow Service" decoding="async"  sizes="(max-width: 251px) 100vw, 251px" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-8 offset-xl-4 col-lg-12 col-sm-12  p-b-md">
                              <div class="inner bg-white">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8">
                                          <a href="/pages/interstate-car-transport.php">
                                              <div class="inner p-md p-r h-100 v-c">
                                                  <h3><?php echo $data['procedure2-title']['description'] ?></h3>
                                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['procedure2-desc']['description']) ?></p>
                                                  <span class="arrow-btm">
                                                      <i class="fa-solid fa-arrow-right-long"></i>
                                                  </span>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col-lg-4 col-md-4">
                                          <div class="inner h-100">
                                              <img width="797" height="996" src="<?php echo ASSET_URL.$data['procedure2-image']['url'] ?>" class="attachment-full size-full" alt="" decoding="async"  sizes="(max-width: 797px) 100vw, 797px" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-8 col-lg-12 col-sm-12 p-b-md">
                              <div class="inner bg-white">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8">
                                          <a href="/pages/import/">
                                              <div class="inner p-md p-r h-100 v-c">
                                                  <h3><?php echo $data['procedure3-title']['description'] ?></h3>
                                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['procedure3-desc']['description']) ?></p>
                                                  <span class="arrow-btm">
                                                      <i class="fa-solid fa-arrow-right-long"></i>
                                                  </span>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col-lg-4 col-md-4">
                                          <div class="inner h-100">
                                              <img width="723" height="897" src="<?php echo ASSET_URL.$data['procedure3-image']['url'] ?>" class="attachment-full size-full" alt="" decoding="async" sizes="(max-width: 723px) 100vw, 723px" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-8 offset-xl-4 col-lg-12 col-sm-12 p-b-md">
                              <div class="inner bg-white">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8">
                                          <a href="/pages/services/registration-procedure-homologation.php">
                                              <div class="inner p-md p-r h-100 v-c">
                                                  <h3><?php echo $data['procedure4-title']['description'] ?></h3>
                                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['procedure4-desc']['description']) ?></p>
                                                  <span class="arrow-btm">
                                                      <i class="fa-solid fa-arrow-right-long"></i>
                                                  </span>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col-lg-4 col-md-4">
                                          <div class="inner h-100">
                                              <img width="275" height="344" src="<?php echo ASSET_URL.$data['procedure4-image']['url'] ?>" class="attachment-full size-full" alt="" decoding="async" sizes="(max-width: 275px) 100vw, 275px" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-8 col-lg-12 col-sm-12 p-b-md">
                              <div class="inner bg-white">
                                  <div class="row">
                                      <div class="col-lg-8 col-md-8">
                                          <a href="/pages/contact.php">
                                              <div class="inner p-md p-r h-100 v-c">
                                                  <h3><?php echo $data['procedure5-title']['description'] ?></h3>
                                                  <p><?php echo str_replace('<br/>', '</p><p>', $data['procedure5-desc']['description']) ?></p>
                                                  <span class="arrow-btm">
                                                      <i class="fa-solid fa-arrow-right-long"></i>
                                                  </span>
                                              </div>
                                          </a>
                                      </div>
                                      <div class="col-lg-4 col-md-4">
                                          <div class="inner h-100">
                                              <img width="275" height="344" src="<?php echo ASSET_URL.$data['procedure5-image']['url'] ?>" class="attachment-full size-full" alt="" decoding="async"  sizes="(max-width: 275px) 100vw, 275px" />
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
          </div>

          <?php require "layout/footer.php"; ?>

        </div>

        <?php require "layout/footer_script.php"; ?>
    </body>
</html>