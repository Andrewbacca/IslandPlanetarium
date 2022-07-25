<!-- Light Content -->
<div class="content-wrapper-light <?= $attributes['background-position'] ?>">
    <!--    <div style="background: #ffffff;position: absolute;width: 100%;/* height: 20%; */">-->
    <div class="container content-inner-light">
        <?= $attributes['white_wrapper_content'] ?>
    </div>
    <!--    </div>-->
</div>
<?php
if ($attributes['bottom-curve'] == "show") { ?>
    <div class="content-spacer-wrapper">
        <div class="content-spacer-secondary ">
            &nbsp;
        </div>
    </div>
    <?php
} ?>
<!-- End Light Content -->
