<!--Full Width Centred Content -->
<?php
switch ($attributes['hAlign']) {
    case "centre":
        $hAlign = "text-center";
        break;

    case "left":
        $hAlign = "";
        break;
    default:
        $hAlign = "text-center";
        break;
}
?>
<div class="row d-flex justify-content-center">
    <div class="col col-md-12 px-3 px-lg-5 <?=$hAlign?>">
        <?= $attributes['content'] ?>
    </div>
</div>
<!--End Full Width Centred Content -->