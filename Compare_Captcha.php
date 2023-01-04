<?php
session_start();
if (count($_POST) > 0) {
    if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
        $message = "You have entered correct captcha";
    } else {
        $message = "Please enter Correct Captcha Code";
    }
}
