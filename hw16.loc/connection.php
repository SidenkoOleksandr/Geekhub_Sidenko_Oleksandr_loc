<?php
include('const.php');

// Create connection
$link = mysqli_connect("127.0.0.1", "$username", "$password", "$dbname");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;


//                                delete data
$sql = "DELETE FROM users WHERE id = 5";
$result = $link->query($sql);

//                                insert data
$username = filter_input(INPUT_POST, 'username');;
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$passwordRepeat = filter_input(INPUT_POST, 'repeatPassword');
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$age = filter_input(INPUT_POST, 'age');
$gender = filter_input(INPUT_POST, 'gender');

$sql = "INSERT INTO users (username, email, password, passwordRepeat, firstName, lastName, age, gender)
VALUES ('$username', '$email', '$password', '$passwordRepeat', '$firstName', '$lastName', '$age', '$gender')";
$result = $link->query($sql);

if ($link->query($sql) === TRUE) {
    echo "<br>" . "New record created successfully";
} else {
    echo "<br>" . "Error: " . $sql . "<br>" . $link->error;
}

//                                  get data
$sql = "SELECT* FROM users";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>"."id: ".$row["id"].
             " - username: ".$row["username"].
             " - email: ".$row["email"].
             " - password: ".$row["password"].
             " - passwordRepeat: ".$row["passwordRepeat"].
             " - firstName: ".$row["firstName"].
             " - lastName: ".$row["lastName"].
             " - age: ".$row["age"].
             " - gender: ".$row["gender"]."<br>";
    }
} else {
    echo "NULL results";
}

mysqli_close($link);
?>