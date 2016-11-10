<?php
    if($_SERVER['REQUEST_METHOD']==='POST' && !empty($_POST['name'])) {
        echo '<p>Cześć, '.$_POST['name'].'</p>';
    }