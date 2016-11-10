<?php
    if($_SERVER['REQUEST_METHOD']==='POST' && !empty($_POST['numbers'])) {
        if(count($_POST['numbers'])!=6) {
            echo 'Zaznacz 6 liczb!';
        }else{
            $result = range(1,49);
            shuffle($result);
            for($i=0; $i<=5; $i++) {
                $wynik[] = $result[$i];
        }
            $checktext="Brak trafień";
            for($i=0; $i<=5; $i++) {
                if (in_array($_POST['numbers'][$i], $wynik)) {
                    echo 'Trafienie: '.$_POST['numbers'][$i].'<br>';
                    $checktext='';
                }
            }
            echo $checktext;
        }
    }else{
        echo 'Nie zaznaczono żadnej liczby!';
    }