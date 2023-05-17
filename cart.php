<?php
    ob_start();
    // include header
    include("header.php");
?>

<?php
    // include cart
    count($product->getCartData($_SESSION["user_id"])) ? include("Template/cart-template.php") : include("Template/notFound/cart_not_found.php") 
    
?>

<?php
    // include blogs
    include("Template/blogs.php");
?>

<?php
    // include footer
    include("footer.php");
?>