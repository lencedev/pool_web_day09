<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function display_menu()
{
    return <<<HTML
<ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="product.php">Products</a></li>
    <li><a href="about.php">About Us</a></li>
    <li><a href="contact.php">Contact</a></li>
</ul>
HTML;
}
?>
