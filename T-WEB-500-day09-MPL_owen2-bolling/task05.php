<?php
function form_is_submitted()
{
    return isset($_POST['submit']);
}
function whoami()
{
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : null;
    $age = isset($_POST['age']) && ctype_digit($_POST['age']) ? (int) $_POST['age'] : null;
    $curriculum = isset($_POST['curriculum']) ? htmlspecialchars($_POST['curriculum']) : null;

    if ($name && $age)
        echo "Hi, my name is $name and I'm $age years old.";
    elseif ($age)
        echo "Hi, I have no name and I'm $age years old.";
    elseif ($name)
        echo "Hi, my name is $name.";
    else
        echo "Hello";
    if ($curriculum)
        echo " I'm a student of $curriculum.";
    echo "\n";
}
?>
