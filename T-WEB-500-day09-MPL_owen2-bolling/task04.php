<?php
function whoami()
{
    $name = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : null;
    $age = isset($_POST['age']) && ctype_digit($_POST['age']) ? (int) $_POST['age'] : null;

    if ($name && $age !== null) {
        echo "Hi, my name is $name and I'm $age years old.";
    } elseif ($name) {
        echo "Hi, my name is $name.";
    } elseif ($age !== null) {
        echo "Hi, I have no name and I'm $age years old.";
    } else {
        echo "Hello";
    }
    echo "\n";
}
?>
