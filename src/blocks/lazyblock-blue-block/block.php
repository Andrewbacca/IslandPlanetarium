<!-- Dark Content -->
<div class="content-wrapper-dark <?= $attributes['background-position'] ?>">
    <div class="container content-inner-dark">
        <?= $attributes['blue_wrapper_content'] ?>
    </div>
    <?php
    if ($attributes['show-bottom-curve'] == "show") { ?>
        <div class="content-spacer-wrapper bg-white">
            <div class="content-spacer">
                &nbsp;
            </div>
        </div>
    <?php
    } ?>
</div>
<!-- End Dark Content -->