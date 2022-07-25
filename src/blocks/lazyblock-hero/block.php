<style>
    .header-background-container {
        background-image: url(<?=$attributes['image']['url']?>) !important;
    }
</style>
<div class="page-heading mb-4 h-100">
    <div class="image-overlay">
        <img src="<?= get_template_directory_uri() ?>/assets/images/hero-badge.webp" class="img-fluid" width="250" height="212" alt="Customer Service" >
    </div>
    <div class="skew-rounded skew">
        <div class="header-background-container">
            <div class="container anti-skew h-100 position-relative">

                <div class="row align-items-center">
                    <div class="col-7 col-md-6 col-xl-5">
                        <div class="hero-splodge">
                            <div class="splodge white-gradient"></div>
                            <div class="splodge-heading d-flex align-items-center">
                                <div>
                                    <?php
                                    if ($attributes['heading']) { ?>
                                        <h1 class="flex-item"><?= $attributes['heading'] ?></h1>
                                        <h2 class="flex-item"><?= $attributes['sub-heading'] ?></h2>
                                        <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

</div>
