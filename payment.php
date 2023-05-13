<?php
    ob_start();
    // include header
    include("header.php");
?>

<?php
    // include payment
    count($product->getData('cart')) ? include("Template/payment-template.php") : include("Template/notFound/cart_not_found.php") 

?>


<?php
    // include footer
    include("footer.php");
?>