<div class="footer-cta">
    <div class="d-flex flex-column justify-content-center text-center text-light px-3 py-4">

        <div class="help-icon position-relative" style="padding:0; margin:0 auto;">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/binoculars.png" alt="Binoculars icon" width="200" height="120">
        </div>

        <h2>Can’t find what you're looking for?</h2>
        <span>Call our customer service team on <a href="tel:01983 24 24 24" class="text-white">24 24 24</a></span>
        <span>Call our sales team on <a href="tel:01983 300 000" class="text-white">300 000</a></span>
    </div>
</div>

<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/slogan.svg" alt="Because we care" height="35" width="254">
            </div>
        </div>
        <div class="row my-4">
            <div class="col-12 col-md-8 col-lg-10 ps-2 ps-md-4 text-center text-md-start">
                <?php
                wp_nav_menu(array(
                    'menu'           => 'footer',
                    'theme_location' => 'footer',
                    'depth'          => 1,
                    'container'      => false,
                    'menu_class'     => 'list-unstyled footer-links',
                    'fallback_cb'    => 'bs4navwalker::fallback',
                    'walker'         => new bs4navwalker()
                ));
                ?>
            </div>
            <div class="col-12 col-md-4 col-lg-2 text-right mt-3 mt-md-0">
                <div class="trust-pilot">
                    <div class="trust-pilot-bubble">
                        <span class="font-weight-bold">What does this mean?</span>
                        <div class="trust-pilot-bubble-arrow"></div>
                        <a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#trustPilot" alt="TrustPilot" title="Trustpilot"></a>
                    </div>
                    <!-- TrustBox widget - Mini -->
                    <div class="trustpilot-widget" data-locale="en-GB" data-template-id="53aa8807dec7e10d38f59f32" data-businessunit-id="51150c51000064000522117e" data-style-height="110px" data-style-width="100%" data-theme="light">
                        <a href="https://uk.trustpilot.com/review/wightfibre.com" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-2 text-center text-lg-left">
                <a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/assets/images/WightFibreLogo2021.png" class="footer-logo img-fluid" alt="Wight Fibre logo" height="60" width="140"></a>
            </div>
            <div class="col-12 col-md-12 col-lg-7 d-flex align-items-end justify-content-center mt-3 text-lg-left">
                <p class="mb-0">
                    © <?= date('Y'); ?> Wightfibre, all rights reserved. Registered in England No. 547 0659. VAT Number - 283 9389 47 GB
                    <br/>Designed and built by <a href="https://brightbulbdesign.co.uk" target="_blank" rel="noopener">brightbulbdesign.co.uk</a>
                </p>
            </div>
            <div class="col-12 col-lg-3 d-lg-flex text-center text-lg-right mt-4 mt-lg-0 align-items-end justify-content-end">
                <ul class="list-unstyled mb-0">
                    <li class="d-inline-block"><a href="https://www.facebook.com/wightfibre/" target="_blank" rel="noopener"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-facebook.svg" alt="Facebook icon" width="30" height="30"></a></li>
                    <li class="d-inline-block ml-2"><a href="https://twitter.com/WightFibre" target="_blank" rel="noopener"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-twitter.svg" alt="Twitter icon" width="30" height="30"></a></li>
                    <li class="d-inline-block ml-2"><a href="https://www.instagram.com/wightfibreltd/" target="_blank" rel="noopener"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-instagram.svg" alt="Instagram icon" width="30" height="30"></a></li>
                    <li class="d-inline-block ml-2"><a href="https://www.linkedin.com/company/wightfibre" target="_blank" rel="noopener"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-linkedin.svg" alt="LinkedIn icon" width="30" height="30"></a></li>
                    <li class="d-inline-block ml-2"><a href="https://www.youtube.com/c/Wightfibre" target="_blank" rel="noopener"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-youtube.svg" alt="YouTube icon" width="30" height="30"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="trustPilot" tabindex="-1" aria-labelledby="trustPilotLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Trustpilot Reviews</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Trust Pilot is an independent online review community which is built on honesty
                    and transparency, Trustpilot is the peoples’ choice for reviews. We take pride in our
                    customer service team going that extra mile to look after customers.
                </p>
                <!-- TrustBox widget - Grid -->
                <div class="trustpilot-widget" data-locale="en-GB" data-template-id="539adbd6dec7e10e686debee" data-businessunit-id="51150c51000064000522117e" data-style-height="500px" data-style-width="100%" data-theme="light" data-stars="1,2,3,4,5" data-review-languages="en">
                    <a href="https://uk.trustpilot.com/review/wightfibre.com" target="_blank" rel="noopener">Trustpilot</a>
                </div>
                <!-- End TrustBox widget -->
            </div>
        </div>
    </div>
</div>