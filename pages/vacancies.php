<!DOCTYPE html>
<html lang="en-US">
    <?php require "../config/constant.php"; ?>

    <?php require "../layout/head.php"; ?>

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
                                          <a href="/">Home</a>
                                      </span> / <span class="breadcrumb_last" aria-current="page">
                                          <strong>Vacancies</strong>
                                      </span>
                                  </span>
                              </p>
                          </div>
                          <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                              <div class="inner p-t-md">
                                  <h1>Vacancies</h1>
                                  <p>You are part of the Marlog sales team and you are the first point of contact for the customer. You support the sales team directly where necessary. You are responsible for the proper execution of sales activities (usually by telephone or e-mail).</p>
                              </div>
                          </div>
                          <div class="col-lg-6 offset-lg-1 col-md-6 offset-md-1 p-r h-image">
                              <div class="inner p-r">
                                  <img width="957" height="400" src="<?php echo ASSET_URL; ?>img/the-company.jpg" class="attachment-full size-full" alt="The Company" decoding="async" fetchpriority="high" srcset="<?php echo ASSET_URL; ?>img/the-company.jpg 957w, <?php echo ASSET_URL; ?>img/the-company-300x125.jpg 300w, <?php echo ASSET_URL; ?>img/the-company-768x321.jpg 768w" sizes="(max-width: 957px) 100vw, 957px" />
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section class="page-section usp bg-lgr v-c">
                  <div class="container">
                      <div class="row">
                          <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                              <div class="inner p-t-md p-b-md">
                                  <p>
                                      <i class="fa-light fa-circle-check"></i>Completely unburdened
                                  </p>
                                  <p>
                                      <i class="fa-light fa-circle-check"></i>Fast delivery
                                  </p>
                                  <p>
                                      <i class="fa-light fa-circle-check"></i>Customization
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <section class="page-section vacancies p-t-xl p-b-lg p-r">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8">
                              <p>Sorry, no vacancies at this moment.</p>
                          </div>
                          <div class="col-lg-4 sidebar">
                              <div class="inner bg-lgr p-md br-5">
                                  <h3>What do we have to offer?</h3>
                                  <ul class="fa-ul">
                                      <li>
                                          <span class="fa-li">
                                              <i class="fa-light fa-circle-check"></i>
                                          </span>Informal working environment
                                      </li>
                                      <li>
                                          <span class="fa-li">
                                              <i class="fa-light fa-circle-check"></i>
                                          </span>Salary in line with your work experience and education
                                      </li>
                                      <li>
                                          <span class="fa-li">
                                              <i class="fa-light fa-circle-check"></i>
                                          </span>Reimbursement of travel expenses
                                      </li>
                                      <li>
                                          <span class="fa-li">
                                              <i class="fa-light fa-circle-check"></i>
                                          </span>Company lunch and fruit
                                      </li>
                                      <li>
                                          <span class="fa-li">
                                              <i class="fa-light fa-circle-check"></i>
                                          </span>Pension scheme
                                      </li>
                                      <li>
                                          <span class="fa-li">
                                              <i class="fa-light fa-circle-check"></i>
                                          </span>Bonus for not being sick
                                      </li>
                                      <li>
                                          <span class="fa-li">
                                              <i class="fa-light fa-circle-check"></i>
                                          </span>Opportunity to develop yourself
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
          </div>

          <?php require "../layout/footer.php"; ?>

        </div>

        <?php require "../layout/footer_script.php"; ?>
    </body>
</html>