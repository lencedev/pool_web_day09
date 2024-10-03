<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function dynamic_body()
{
    if (isset($_GET['page']) && $_GET['page'] == 'php') {
        return file_get_contents("php.html");

    } else if (isset($_GET['page']) && $_GET['page'] == 'sql') {
        return file_get_contents("sql.html");
    } else if (isset($_GET['page']) && $_GET['page'] == 'home') {
        return file_get_contents("home.html");
    } else
        return "<p>Unknown page</p>";
}
?>