<?php
    $toEmail = "noaa99@gmail.com";
    $subject = "Contact email arrived from Homepage";

    $mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
    if(mail($toEmail, $subject, $_POST["content"], $mailHeaders)) {
        print "<p class='success'>Mail Sent.</p>";
    } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }
?>