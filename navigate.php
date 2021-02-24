<?php
session_start();

if (isset($_POST['valueName'])) {
    if ($_POST['valueName'] == 'index.html'){
        header("Location: index.html");
    } elseif ($_POST['valueName'] == 'networked.html'){
        header("Location: htb-box/Networked/index.html");
    } else {
        header("Location: index.html");
    };
    
}
?>