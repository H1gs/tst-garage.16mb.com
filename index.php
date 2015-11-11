<?php

$content = 'Hello. It\'s History API';
if (isset($_GET['ajax'])) {
    echo $content;
} else {
    include_once 'view/layout.php';
}