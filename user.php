 <?php

include 'DBconnect.php';

function createUser() {
    global $conn;
    $name = "vivek";
    $mobile = "9112363432";
    $email = "vivek@gmail.com";
    $address = "pune";
    $count = 1;
    $stmt = $conn->prepare("INSERT INTO user(name, mobile, email, address, count) VALUES('" . $name . "','" . $mobile . "', '" . $email . "', '" . $address . "', '" . $count . "')");
    $response = $stmt->execute();
    if (!$response)
        {
            echo "error while inserting record!!!";
        }
}

function updateUser($count, $name) {
    global $conn;
    $stmt = $conn->prepare("UPDATE user SET count=? WHERE name=?");
    $stmt->execute(array($count, $name));
    $affected_rows = $stmt->rowCount();
}

function getAllUser(){
    global $conn;
    foreach($conn->query('SELECT * FROM user') as $row) {
    echo $row['name'].' '.$row['email'].' '.$row['mobile'].' '.$row['address'].' '.$row['count'];
    }
}

function getCount($name) {
    global $conn;
    $stmt = $conn->prepare("SELECT count FROM user WHERE name=:name");
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!$rows){
        return 0;
    }
    foreach($rows as $row) {
        return $row['count'];
    }
}
$name="vivek";
$count = getCount($name);
if($count>0 || $count===NULL ){
    updateUser($count+1, $name);
}else {
    createUser();
}

?>