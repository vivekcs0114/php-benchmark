<?php

include 'DBconnect.php';

function getAllUser() {
    global $conn;
    foreach($conn->query('SELECT * FROM user') as $row) {
    echo json_encode($row);
    }
}

function createUser() {
    global $conn;
    print_r(json_encode($_POST));
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $stmt = $conn->prepare("INSERT INTO user(name, mobile, email, address) VALUES('" . $name . "','" . $mobile . "', '" . $email . "', '" . $address . "')");
    $response = $stmt->execute();
    if (!$response) {
        echo "error while inserting record!!!";
    }
}

$method = $_SERVER['REQUEST_METHOD'];
if ("GET" == $method) {
    getAllUser();
} elseif ("POST" == $method) {
    createUser();
} 

?>