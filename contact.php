<?php
include './config.php';
include './db/db.php';

if (!empty($_POST["register"])){
    if(empty($_POST["name"]) or empty($_POST["email"]) or empty($_POST["phone"]) or empty($_POST["affair"]) or empty($_POST["comment"])) {
        echo "<div class='alert'>Debe ingresar todos los datos del formulario</div>";
    } else {
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            if(preg_match('/^[0-9]{9}$/', $_POST["phone"])){
                
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $contact = [
                        "customer" => $_POST["customer"],
                        "phone" => $_POST["phone"],
                        "email" => $_POST["email"],
                        "affair" => $_POST["affair"],
                        "comment" => $_POST["comment"],
                    ];
                
                    $sql = "INSERT INTO reviews(customer, phone, email, affair, comment) VALUES ('".$contact["customer"]."', '".$contact["phone"]."', '".$contact["email"]."', '".$contact["affair"]."', '".$contact["comment"]."');";
                
                    $conn->query($sql);
                
                    $conn->close();
                }
                
            } else {
                echo "<div class='alert'>El formato de telefono es incorrecto.</div>";
            }

        } else {
            echo "<div class='alert'>El email es incorrecto o ya se encuentra registrado.</div>";
        }
    }
}

echo $blade->run("contact");