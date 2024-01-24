<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedOption = $_POST["data_type"];

    if ($selectedOption === "basic") {
        header("Location: page_basic_data_form.php");
        exit();
    } elseif ($selectedOption === "advanced") {
        header("Location: page_advanced_data_form.php");
        exit();
    }
}
?>