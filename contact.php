<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['bob'];
        if (empty($name)) {
            echo "Nie podano imienia";
        } else {
            
            echo "Podano imie: ", $name;
        }
      }
