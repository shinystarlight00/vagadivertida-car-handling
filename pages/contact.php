<!DOCTYPE html>
<html lang="en-US">

    <?php 
        require "../config/constant.php";
        require "../config/db.php";
        require "../layout/head.php";

        $sql = "SELECT * FROM vagaexpv_carhandling_content WHERE page = 'contact'";
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
                                          <a href="/">Home</a>
                                      </span> / <span class="breadcrumb_last" aria-current="page">
                                          <strong>Contact</strong>
                                      </span>
                                  </span>
                              </p>
                          </div>
                          <div class="col-xl-5 col-lg-12 col-md-12 col-12">
                              <div class="inner p-t-md">
                                  <h1><?php echo $data['hero-title']['description'] ?></h1>
                                  <p class="f-s-20">
                                    <p><?php echo $data['hero-desc']['description'] ?></p>
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

              <section class="page-section contact p-t-xl p-b-xl p-r">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6">
                              <div class="inner p-md bg-white h-100">
                                  <h2><?php echo $data['contact-title']['description'] ?></h2>
                                  <div class="row">
                                      <div class="col-xl-4 col-lg-12 col-md-12">
                                          <div class="inner">
                                              <p><?php echo $data['address']['description'] ?></p>
                                              <a href="mailto:contact@vagadivertida-car-handling.com">
                                                  <i class="fa-light fa-circle-envelope"></i> contact@vagadivertida-car-handling.com </a>
                                              </br>
                                              <a href="tel:<?php echo $data['phone']['description'] ?>">
                                                  <i class="fa-light fa-circle-phone"></i> <?php echo $data['phone']['description'] ?></a>
                                          </div>
                                      </div>
                                      <div class="col-xl-8 col-lg-12 col-md-12 col-12 openingstijden">
                                          <div class="row">
                                              <div class="col-lg-12">
                                                  <h4>Opening hours head office</h4>
                                                  <p>
                                                      <strong>Monday to Friday: </strong>08.00 – 17.00 <br />
                                                      <strong>Saturday: </strong>08.00 – 12.00  by appointment
                                                  </p>
                                                  <h4>Opening hours customs warehouse</h4>
                                                  <p>
                                                      <strong>Monday to Friday: </strong>07.30 – 15.30 <br />
                                                      <strong>Saturday: </strong>08.00 – 12.00 by appointment
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="inner bg-gr p-md br-5 h-100">
                                  <h2>Contact Form</h2>
                                  <script type="text/javascript"></script>
                                  <div class='gf_browser_chrome gform_wrapper gravity-theme gform-theme--no-framework' data-form-theme='gravity-theme' data-form-index='0' id='gform_wrapper_5'>
                                    <div id="response_mesg"></div>

                                    <template id="form-submit-success" style="display: none">
                                        <div class="success-message text-center">
                                        <h3>Thank you for your message</h3>
                                        <p>We will be in touch as soon as we can.</p>
                                        </div>
                                    </template>

                                    <template id="response_error" style="display: none">
                                        <div class="error-message text-center">
                                        <h3>Sorry something went wrong</h3>
                                        <p>Please try again or contact us via phone or email.</p>
                                        </div>
                                    </template>

                                    <form 
                                        class="ajax-form" 
                                        action='/utils/emailus.php' 
                                        data-recaptcha-action="contact"
                                        data-recaptcha-key="6Lftt4kqAAAAAK9TiIe967UFZYfPUZGHPw5vo70M"
                                        data-success-template-selector="#form-submit-success"
                                        data-error-template-selector="#form-submit-error"
                                    >
                                        <div class='gform-body gform_body'>
                                            <div id='gform_fields_5' class='gform_fields top_label form_sublabel_below description_below validation_below'>
                                                <div id="field_5_1" class="gfield gfield--type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible" data-js-reload="field_5_1">
                                                    <label class='gfield_label gform-field-label' for='input_5_1'>Name</label>
                                                    <div class='ginput_container ginput_container_text'>
                                                        <input name='name' id='input_5_1' type='text' value='' class='large' placeholder='Name' aria-invalid="false" required />
                                                    </div>
                                                </div>
                                                <div id="field_5_2" class="gfield gfield--type-email gfield--width-half field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible" data-js-reload="field_5_2">
                                                    <label class='gfield_label gform-field-label' for='input_5_2'>Email address</label>
                                                    <div class='ginput_container ginput_container_email'>
                                                        <input name='email' id='input_5_2' type='email' value='' class='large' placeholder='Your email address' aria-invalid="false" required />
                                                    </div>
                                                </div>
                                                <div id="field_5_3" class="gfield gfield--type-text gfield--width-full field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible" data-js-reload="field_5_3">
                                                    <label class='gfield_label gform-field-label' for='input_5_3'>Subject</label>
                                                    <div class='ginput_container ginput_container_text'>
                                                        <input name='subject' id='input_5_3' type='text' value='' class='large' placeholder='Subject' aria-invalid="false" required />
                                                    </div>
                                                </div>
                                                <div id="field_5_4" class="gfield gfield--type-textarea gfield--width-full field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible" data-js-reload="field_5_4">
                                                    <label class='gfield_label gform-field-label' for='input_5_4'>What can we help you with?</label>
                                                    <div class='ginput_container ginput_container_textarea'>
                                                        <textarea name='message' id='input_5_4' class='textarea small' placeholder='What can we help you with?' aria-invalid="false" rows='10' cols='50' required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='gform-footer gform_footer top_label'>
                                            <input type='submit' id='gform_submit_button_5' class='gform_button button gfield--width-one-sixth' value='Submit' />
                                        </div>
                                    </form>
                                  </div>
                                  <script src="data:text/javascript;base64,Z2Zvcm0uaW5pdGlhbGl6ZU9uTG9hZGVkKGZ1bmN0aW9uKCl7Z2Zvcm1Jbml0U3Bpbm5lcig1LCdodHRwczovL3d3dy5tYXJsb2ctY2FyLWhhbmRsaW5nLmNvbS93cC1jb250ZW50L3BsdWdpbnMvZ3Jhdml0eWZvcm1zL2ltYWdlcy9zcGlubmVyLnN2ZycsITApO2pRdWVyeSgnI2dmb3JtX2FqYXhfZnJhbWVfNScpLm9uKCdsb2FkJyxmdW5jdGlvbigpe3ZhciBjb250ZW50cz1qUXVlcnkodGhpcykuY29udGVudHMoKS5maW5kKCcqJykuaHRtbCgpO3ZhciBpc19wb3N0YmFjaz1jb250ZW50cy5pbmRleE9mKCdHRl9BSkFYX1BPU1RCQUNLJyk+PTA7aWYoIWlzX3Bvc3RiYWNrKXtyZXR1cm59dmFyIGZvcm1fY29udGVudD1qUXVlcnkodGhpcykuY29udGVudHMoKS5maW5kKCcjZ2Zvcm1fd3JhcHBlcl81Jyk7dmFyIGlzX2NvbmZpcm1hdGlvbj1qUXVlcnkodGhpcykuY29udGVudHMoKS5maW5kKCcjZ2Zvcm1fY29uZmlybWF0aW9uX3dyYXBwZXJfNScpLmxlbmd0aD4wO3ZhciBpc19yZWRpcmVjdD1jb250ZW50cy5pbmRleE9mKCdnZm9ybVJlZGlyZWN0KCl7Jyk+PTA7dmFyIGlzX2Zvcm09Zm9ybV9jb250ZW50Lmxlbmd0aD4wJiYhaXNfcmVkaXJlY3QmJiFpc19jb25maXJtYXRpb247dmFyIG10PXBhcnNlSW50KGpRdWVyeSgnaHRtbCcpLmNzcygnbWFyZ2luLXRvcCcpLDEwKStwYXJzZUludChqUXVlcnkoJ2JvZHknKS5jc3MoJ21hcmdpbi10b3AnKSwxMCkrMTAwO2lmKGlzX2Zvcm0pe2pRdWVyeSgnI2dmb3JtX3dyYXBwZXJfNScpLmh0bWwoZm9ybV9jb250ZW50Lmh0bWwoKSk7aWYoZm9ybV9jb250ZW50Lmhhc0NsYXNzKCdnZm9ybV92YWxpZGF0aW9uX2Vycm9yJykpe2pRdWVyeSgnI2dmb3JtX3dyYXBwZXJfNScpLmFkZENsYXNzKCdnZm9ybV92YWxpZGF0aW9uX2Vycm9yJyl9ZWxzZXtqUXVlcnkoJyNnZm9ybV93cmFwcGVyXzUnKS5yZW1vdmVDbGFzcygnZ2Zvcm1fdmFsaWRhdGlvbl9lcnJvcicpfXNldFRpbWVvdXQoZnVuY3Rpb24oKXt9LDUwKTtpZih3aW5kb3cuZ2Zvcm1Jbml0RGF0ZXBpY2tlcil7Z2Zvcm1Jbml0RGF0ZXBpY2tlcigpfWlmKHdpbmRvdy5nZm9ybUluaXRQcmljZUZpZWxkcyl7Z2Zvcm1Jbml0UHJpY2VGaWVsZHMoKX12YXIgY3VycmVudF9wYWdlPWpRdWVyeSgnI2dmb3JtX3NvdXJjZV9wYWdlX251bWJlcl81JykudmFsKCk7Z2Zvcm1Jbml0U3Bpbm5lcig1LCdodHRwczovL3d3dy5tYXJsb2ctY2FyLWhhbmRsaW5nLmNvbS93cC1jb250ZW50L3BsdWdpbnMvZ3Jhdml0eWZvcm1zL2ltYWdlcy9zcGlubmVyLnN2ZycsITApO2pRdWVyeShkb2N1bWVudCkudHJpZ2dlcignZ2Zvcm1fcGFnZV9sb2FkZWQnLFs1LGN1cnJlbnRfcGFnZV0pO3dpbmRvdy5nZl9zdWJtaXR0aW5nXzU9ITF9ZWxzZSBpZighaXNfcmVkaXJlY3Qpe3ZhciBjb25maXJtYXRpb25fY29udGVudD1qUXVlcnkodGhpcykuY29udGVudHMoKS5maW5kKCcuR0ZfQUpBWF9QT1NUQkFDSycpLmh0bWwoKTtpZighY29uZmlybWF0aW9uX2NvbnRlbnQpe2NvbmZpcm1hdGlvbl9jb250ZW50PWNvbnRlbnRzfWpRdWVyeSgnI2dmb3JtX3dyYXBwZXJfNScpLnJlcGxhY2VXaXRoKGNvbmZpcm1hdGlvbl9jb250ZW50KTtqUXVlcnkoZG9jdW1lbnQpLnRyaWdnZXIoJ2dmb3JtX2NvbmZpcm1hdGlvbl9sb2FkZWQnLFs1XSk7d2luZG93LmdmX3N1Ym1pdHRpbmdfNT0hMTt3cC5hMTF5LnNwZWFrKGpRdWVyeSgnI2dmb3JtX2NvbmZpcm1hdGlvbl9tZXNzYWdlXzUnKS50ZXh0KCkpfWVsc2V7alF1ZXJ5KCcjZ2Zvcm1fNScpLmFwcGVuZChjb250ZW50cyk7aWYod2luZG93Lmdmb3JtUmVkaXJlY3Qpe2dmb3JtUmVkaXJlY3QoKX19alF1ZXJ5KGRvY3VtZW50KS50cmlnZ2VyKCJnZm9ybV9wcmVfcG9zdF9yZW5kZXIiLFt7Zm9ybUlkOiI1IixjdXJyZW50UGFnZToiY3VycmVudF9wYWdlIixhYm9ydDpmdW5jdGlvbigpe3RoaXMucHJldmVudERlZmF1bHQoKX19XSk7aWYoZXZlbnQmJmV2ZW50LmRlZmF1bHRQcmV2ZW50ZWQpe3JldHVybn1jb25zdCBnZm9ybVdyYXBwZXJEaXY9ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImdmb3JtX3dyYXBwZXJfNSIpO2lmKGdmb3JtV3JhcHBlckRpdil7Y29uc3QgdmlzaWJpbGl0eVNwYW49ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgic3BhbiIpO3Zpc2liaWxpdHlTcGFuLmlkPSJnZm9ybV92aXNpYmlsaXR5X3Rlc3RfNSI7Z2Zvcm1XcmFwcGVyRGl2Lmluc2VydEFkamFjZW50RWxlbWVudCgiYWZ0ZXJlbmQiLHZpc2liaWxpdHlTcGFuKX1jb25zdCB2aXNpYmlsaXR5VGVzdERpdj1kb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiZ2Zvcm1fdmlzaWJpbGl0eV90ZXN0XzUiKTtsZXQgcG9zdFJlbmRlckZpcmVkPSExO2Z1bmN0aW9uIHRyaWdnZXJQb3N0UmVuZGVyKCl7aWYocG9zdFJlbmRlckZpcmVkKXtyZXR1cm59cG9zdFJlbmRlckZpcmVkPSEwO2pRdWVyeShkb2N1bWVudCkudHJpZ2dlcignZ2Zvcm1fcG9zdF9yZW5kZXInLFs1LGN1cnJlbnRfcGFnZV0pO2dmb3JtLnV0aWxzLnRyaWdnZXIoe2V2ZW50OidnZm9ybS9wb3N0UmVuZGVyJyxuYXRpdmU6ITEsZGF0YTp7Zm9ybUlkOjUsY3VycmVudFBhZ2U6Y3VycmVudF9wYWdlfX0pO2dmb3JtLnV0aWxzLnRyaWdnZXIoe2V2ZW50OidnZm9ybS9wb3N0X3JlbmRlcicsbmF0aXZlOiExLGRhdGE6e2Zvcm1JZDo1LGN1cnJlbnRQYWdlOmN1cnJlbnRfcGFnZX19KTtpZih2aXNpYmlsaXR5VGVzdERpdil7dmlzaWJpbGl0eVRlc3REaXYucGFyZW50Tm9kZS5yZW1vdmVDaGlsZCh2aXNpYmlsaXR5VGVzdERpdil9fWZ1bmN0aW9uIGRlYm91bmNlKGZ1bmMsd2FpdCxpbW1lZGlhdGUpe3ZhciB0aW1lb3V0O3JldHVybiBmdW5jdGlvbigpe3ZhciBjb250ZXh0PXRoaXMsYXJncz1hcmd1bWVudHM7dmFyIGxhdGVyPWZ1bmN0aW9uKCl7dGltZW91dD1udWxsO2lmKCFpbW1lZGlhdGUpZnVuYy5hcHBseShjb250ZXh0LGFyZ3MpfTt2YXIgY2FsbE5vdz1pbW1lZGlhdGUmJiF0aW1lb3V0O2NsZWFyVGltZW91dCh0aW1lb3V0KTt0aW1lb3V0PXNldFRpbWVvdXQobGF0ZXIsd2FpdCk7aWYoY2FsbE5vdylmdW5jLmFwcGx5KGNvbnRleHQsYXJncyl9fWNvbnN0IGRlYm91bmNlZFRyaWdnZXJQb3N0UmVuZGVyPWRlYm91bmNlKGZ1bmN0aW9uKCl7dHJpZ2dlclBvc3RSZW5kZXIoKX0sMjAwKTtpZih2aXNpYmlsaXR5VGVzdERpdiYmdmlzaWJpbGl0eVRlc3REaXYub2Zmc2V0UGFyZW50PT09bnVsbCl7Y29uc3Qgb2JzZXJ2ZXI9bmV3IE11dGF0aW9uT2JzZXJ2ZXIoKG11dGF0aW9ucyk9PnttdXRhdGlvbnMuZm9yRWFjaCgobXV0YXRpb24pPT57aWYobXV0YXRpb24udHlwZT09PSdhdHRyaWJ1dGVzJyYmdmlzaWJpbGl0eVRlc3REaXYub2Zmc2V0UGFyZW50IT09bnVsbCl7ZGVib3VuY2VkVHJpZ2dlclBvc3RSZW5kZXIoKTtvYnNlcnZlci5kaXNjb25uZWN0KCl9fSl9KTtvYnNlcnZlci5vYnNlcnZlKGRvY3VtZW50LmJvZHkse2F0dHJpYnV0ZXM6ITAsY2hpbGRMaXN0OiExLHN1YnRyZWU6ITAsYXR0cmlidXRlRmlsdGVyOlsnc3R5bGUnLCdjbGFzcyddLH0pfWVsc2V7dHJpZ2dlclBvc3RSZW5kZXIoKX19KX0p" defer></script>
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