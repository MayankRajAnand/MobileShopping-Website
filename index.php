<?php
include_once "header.php";
?>


<!-- Owl-carousel -->
<?php
ob_start(); //Used to reload when items added to cart

include "templates/banner-area.php";
?>

<?php
include "templates/top-sale.php";
?>

<!-- !Owl-carousel -->

<!-- Special Price -->
<?php
include "templates/special-price.php";
?>
<!-- !Special Price -->

<!-- !Banner Ads  -->
<?php
include "templates/banner-ad.php";
?>
<!-- !Banner Ads  -->

<!-- New Phones -->
<?php
include "templates/new-phones.php";
?>
<!-- !New Phones -->

<!-- Blogs -->
<?php
include "templates/blogs.php";
?>
<!-- !Blogs -->


<!-- start #footer -->
<?php
include_once "footer.php";
?>