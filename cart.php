<?php
ob_start(); //Used to reload when items added to cart
include_once "header.php";
?>


<!-- Shopping cart section  -->
<?php
include "templates/carts.php";
?>
<!-- !Shopping cart section  -->

<!-- New Phones -->
<?php
include "templates/new-phones.php";  //it has shuffle which is in index.php not in cart.php
?>
<!-- !New Phones -->


<!-- start #footer -->
<?php
include_once "footer.php";
?>