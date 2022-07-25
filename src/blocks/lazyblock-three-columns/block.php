<!-- Two Columns Left image Right Text-->
<?php
switch ($attributes['vAlign']) {
    case "middle":
        $vAlign = "justify-content-center";
        $vAligncol = "align-self-center";
        break;

    case "top":
        $vAlign = "";
        $vAligncol = "";
        break;
    default:
        $vAlign = "justify-content-center";
        $vAligncol = "align-self-center";
        break;
}
?>
<div class="row d-flex <?= $vAlign ?> py-4 pt-5 py-md-3">
    <div class="col col-12 col-md-4 px-3 px-lg-4 <?= $vAligncol ?> text-center text-lg-start">
        <?= $attributes['content-left'] ?>
    </div>
    <div class="col col-12 col-md-4 px-3 px-lg-4 <?= $vAligncol ?> text-center text-lg-start">
        <?= $attributes['content-middle'] ?>
    </div>
    <div class="col col-12 col-md-4 px-3 px-lg-4 <?= $vAligncol ?> text-center text-lg-start">
        <?= $attributes['content-right'] ?>
    </div>
</div>
<!-- End Two Columns Left image Right Text-->