<?php
  $sql = "SELECT * FROM vagaexpv_carhandling_content WHERE page = 'contact'";
  $content = $conn->query($sql);

  $contactData = array();

  if ($content->num_rows > 0) {
    while($row = $content->fetch_assoc()) {
      $contactData[$row['title']] = $row;
    }
  }
?>
<header class="site-header">
  <div class="top-menu v-c">
    <div class="container ">
      <div class="row">
        <div class="col-lg-4 col-md-4 v-c logo">
          <div class="inner">
            <a href="/" class="custom-logo-link" rel="home" aria-current="page">
              <img width="300" height="100" src="<?php echo ASSET_URL; ?>img/logo-mch.png" class="custom-logo" alt="Vaga Divertida" decoding="async" />
            </a>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 v-c">
          <div class="inner t-r">
            <a href="/pages/company.php">About Us</a>
            <a class="contactinfomobile" href="mailto:<?php echo $contactData['email']['description']; ?>">
              <i class="fa-light fa-circle-envelope"></i> 
              <?php echo $contactData['email']['description']; ?>
            </a>
            <a class="contactinfomobile" href="tel:<?php echo $contactData['phone']['description']; ?>">
              <i class="fa-light fa-circle-phone"></i> 
              <?php echo $contactData['phone']['description']; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-menu bg-lgr ">
    <div class="container ">
      <div id="mega-menu-wrap-primary" class="mega-menu-wrap">
        <div class="mega-menu-toggle">
          <div class="mega-toggle-blocks-left">
            <div class='mega-toggle-block mega-logo-block mega-toggle-block-1' id='mega-toggle-block-1'>
              <a class="mega-menu-logo" href="https://vagadivertida-car-handling.com" target="_self">
                <img class="mega-menu-logo" src="<?php echo ASSET_URL; ?>img/logo-mch.png" />
              </a>
            </div>
          </div>
          <div class="mega-toggle-blocks-center"></div>
          <div class="mega-toggle-blocks-right">
            <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-2' id='mega-toggle-block-2'>
              <button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-expanded="false">
                <span class="mega-toggle-animated-box">
                  <span class="mega-toggle-animated-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="slide_left" data-effect-speed-mobile="400" data-mobile-force-width="body" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="768" data-unbind="true" data-mobile-state="collapse_all" data-hover-intent-timeout="300" data-hover-intent-interval="100" data-sticky-enabled="true" data-sticky-desktop="true" data-sticky-mobile="true" data-sticky-offset="0" data-sticky-expand="true" data-sticky-expand-mobile="true" data-sticky-transition="false">
          <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-home mega-current-menu-item mega-page_item mega-page-item-2 mega-current_page_item mega-align-bottom-left mega-menu-flyout mega-menu-item-16' id='mega-menu-item-16'>
            <a class="mega-menu-link" href="/" aria-current="page" tabindex="0">Home</a>
          </li>
          <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-grid mega-menu-item-19' id='mega-menu-item-19'>
            <a class="mega-menu-link" href="/pages/import/" aria-haspopup="true" aria-expanded="false" tabindex="0">Import <span class="mega-indicator"></span>
            </a>
            <ul class="mega-sub-menu">
              <li class='mega-menu-row mega-megamenu megamenu' id='mega-menu-19-0'>
                <ul class="mega-sub-menu">
                  <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-19-0-0'>
                    <ul class="mega-sub-menu">
                      <li class='mega-menu-item mega-menu-item-type-widget widget_nav_menu mega-menu-item-nav_menu-2' id='mega-menu-item-nav_menu-2'>
                        <h4 class="mega-block-title">What we ship</h4>
                        <div class="menu-import-container">
                          <ul id="menu-import" class="menu">
                            <li id="menu-item-256" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-256">
                              <a href="/pages/import/cars.php">Cars</a>
                            </li>
                            <li id="menu-item-257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-257">
                              <a href="/pages/import/classics.php">Classics</a>
                            </li>
                            <li id="menu-item-258" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-258">
                              <a href="/pages/import/motorcycles.php">Motorcycles</a>
                            </li>
                            <li id="menu-item-255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255">
                              <a href="/pages/import/machinery.php">Machinery</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-19-0-1'>
                    <ul class="mega-sub-menu">
                      <li class='mega-menu-item mega-menu-item-type-widget widget_nav_menu mega-menu-item-nav_menu-3' id='mega-menu-item-nav_menu-3'>
                        <h4 class="mega-block-title">From which countries</h4>
                        <div class="menu-import-countries-container">
                          <ul id="menu-import-countries" class="menu">
                            <li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253">
                              <a href="/pages/import/from/usa.php">USA</a>
                            </li>
                            <li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252">
                              <a href="/pages/import/from/canada.php">Canada</a>
                            </li>
                            <li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-250">
                              <a href="/pages/import/from/asia.php">Asia</a>
                            </li>
                            <li id="menu-item-12825" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12825">
                              <a href="/pages/import/from/australia.php">Australia</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-19-0-2'>
                    <ul class="mega-sub-menu">
                      <li class='mega-menu-item mega-menu-item-type-widget widget_nav_menu mega-menu-item-nav_menu-30' id='mega-menu-item-nav_menu-30'>
                        <h4 class="mega-block-title">How can we help you?</h4>
                        <div class="menu-important-pages-container">
                          <ul id="menu-important-pages" class="menu">
                            <li id="menu-item-13399" class="menu-item menu-item-type-post_type menu-item-object-services menu-item-13399">
                              <a href="/pages/services/escrow.php">Escrow service</a>
                            </li>
                            <li id="menu-item-13400" class="menu-item menu-item-type-post_type menu-item-object-services menu-item-13400">
                              <a href="/pages/services/registration-procedure-homologation.php">Registration procedure / Homologation</a>
                            </li>
                            <li id="menu-item-13401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13401">
                              <a href="/pages/interstate-car-transport.php">Interstate car transport</a>
                            </li>
                            <li id="menu-item-13402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13402">
                              <a href="/pages/shipping-costs.php">Shipping costs</a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-19-0-3'>
                    <ul class="mega-sub-menu">
                      <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-2' id='mega-menu-item-custom_html-2'>
                        <h4 class="mega-block-title">Request quote</h4>
                        <div class="textwidget custom-html-widget">
                          <p>Are you curious what we can do for you?</p>
                          <br>
                          <div class="button yellow" href="/pages/quote.php">Request quote</div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-grid mega-menu-item-18' id='mega-menu-item-18'>
              <a class="mega-menu-link" href="/pages/export/" aria-haspopup="true" aria-expanded="false" tabindex="0">Export <span class="mega-indicator"></span>
              </a>
              <ul class="mega-sub-menu">
                <li class='mega-menu-row' id='mega-menu-18-0'>
                  <ul class="mega-sub-menu">
                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-18-0-0'>
                      <ul class="mega-sub-menu">
                        <li class='mega-menu-item mega-menu-item-type-widget widget_nav_menu mega-menu-item-nav_menu-12' id='mega-menu-item-nav_menu-12'>
                          <h4 class="mega-block-title">What we export</h4>
                          <div class="menu-export-container">
                            <ul id="menu-export" class="menu">
                              <li id="menu-item-259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-259">
                                  <a href="/pages/export/classics.php">Classics</a>
                              </li>
                              <li id="menu-item-260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-260">
                                  <a href="/pages/export/container.php">Container</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-18-0-1'>
                      <ul class="mega-sub-menu">
                        <li class='mega-menu-item mega-menu-item-type-widget widget_nav_menu mega-menu-item-nav_menu-13' id='mega-menu-item-nav_menu-13'>
                          <h4 class="mega-block-title">Delivery countries</h4>
                          <div class="menu-export-countries-container">
                            <ul id="menu-export-countries" class="menu">
                              <li id="menu-item-261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-261">
                                  <a href="/pages/export/to/australia.php">Australia</a>
                              </li>
                              <li id="menu-item-263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-263">
                                  <a href="/pages/export/to/america.php">Export to America</a>
                              </li>
                              <li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267">
                                  <a href="/pages/export/to/south-america.php">South America</a>
                              </li>
                              <li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266">
                                  <a href="/pages/export/to/middle-east.php">Middle East</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-18-0-2'></li>
                    <li class='mega-menu-column mega-menu-columns-3-of-12' id='mega-menu-18-0-3'>
                      <ul class="mega-sub-menu">
                        <li class='mega-menu-item mega-menu-item-type-widget widget_custom_html mega-menu-item-custom_html-3' id='mega-menu-item-custom_html-3'>
                          <h4 class="mega-block-title">Request a quote</h4>
                          <div class="textwidget custom-html-widget">
                              <p>Are you curious what we can do for you?</p>
                              <br>
                              <div class="button yellow" href="/pages/quote.php">Request quote</div>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
          </li>
          <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-370' id='mega-menu-item-370'>
              <a class="mega-menu-link" href="/pages/services/" aria-haspopup="true" aria-expanded="false" tabindex="0">Services <span class="mega-indicator"></span>
              </a>
              <ul class="mega-sub-menu">
                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-services mega-menu-item-1535' id='mega-menu-item-1535'>
                  <a class="mega-menu-link" href="/pages/services/escrow.php">Escrow service</a>
                </li>
                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-services mega-menu-item-1533' id='mega-menu-item-1533'>
                  <a class="mega-menu-link" href="/pages/services/general-cargo.php">General cargo</a>
                </li>
                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-services mega-menu-item-1537' id='mega-menu-item-1537'>
                  <a class="mega-menu-link" href="/pages/services/insurance.php">Insurance</a>
                </li>
                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-services mega-menu-item-1538' id='mega-menu-item-1538'>
                  <a class="mega-menu-link" href="/pages/services/registration-procedure-homologation.php">Registration procedure / Homologation</a>
                </li>
                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-services mega-menu-item-1539' id='mega-menu-item-1539'>
                  <a class="mega-menu-link" href="/pages/services/sea-proof-packaging.php">Seaworthy Packing</a>
                </li>
              </ul>
          </li>
          <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-20' id='mega-menu-item-20'>
            <a class="mega-menu-link" href="/pages/quote.php" tabindex="0">Request a quote</a>
          </li>
          <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-17' id='mega-menu-item-17'>
            <a class="mega-menu-link" href="/pages/contact.php" tabindex="0">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>