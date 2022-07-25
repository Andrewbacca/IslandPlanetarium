<!-- Two Columns Left image Right Text-->
<div class="row d-flex justify-content-center">
    <div class="col text-center col-12 col-md-6 px-3 px-lg-4  align-self-center  <?php
    echo ($attributes['order'] == 'imgRight') ? 'order-first order-md-last' : ''; ?>">
        <img src="<?= $attributes['image']['url'] ?>" alt="<?= $attributes['image']['alt'] ?>" title="<?= $attributes['image']['title'] ?>" class="img-fluid" width="500" height="500">
    </div>

    <div class="col col-12 col-md-6 px-3 px-lg-4 align-self-center text-center text-lg-start">
        <?php
        if ($attributes['heading-icon']) { ?>
            <div class="row">
                <div class="col col-1 d-none d-lg-block p-0">
                    <img src="<?= $attributes['heading-icon']['url'] ?>" alt="<?= $attributes['heading-icon']['alt'] ?>" title="<?= $attributes['heading-icon']['title'] ?>" class="img-fluid" width="50" height="50">
                </div>
                <div class="col col-12 col-lg-11">
                    <?php
                    if ($attributes['heading']) { ?>
                        <h3><?= $attributes['heading'] ?></h3>
                        <?php
                    } ?>
                    <?= $attributes['content'] ?>
                </div>
            </div>
            <?php
        } else { ?>
            <?= $attributes['content'] ?>
            <?php
        } ?>
    </div>
</div>
<!-- End Two Columns Left image Right Text-->