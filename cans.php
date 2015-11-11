<?php

$content = 'view/cans-content.php';
if (isset($_GET['ajax'])) {
    echo $content;
} else {
    include_once 'view/layout.php';
}