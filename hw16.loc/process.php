<?php
// Connection setting
include('const.php');

// Create connection

$link = mysqli_connect("$servername", "$serverUserName", "$serverPassword", "$dbname");

//$link - connection object
//echo 'connection object $link :' . "<br>";
//echo var_dump($link) . "<br>" . "<br>";
if (!$link) {
    echo " Ошибка: Невозможно установить соединение с MySQL." . "<br>";
    echo " Код ошибки errno: " . mysqli_connect_errno() . "<br>";
    echo " Текст ошибки error: " . mysqli_connect_error() . "<br>";
    exit;
}
echo "Соединение с MySQL установлено!";
echo "Информация о сервере: " . mysqli_get_host_info($link) . "</br>";

/*//                                example delete data
$sql = "DELETE FROM users WHERE id = 1";
$result = $link->query($sql);*/

/*//                               example insert data
$username = "testname";
$email = "test@meta.ua";
$sql = "INSERT INTO users (username, email)
VALUES ('$username', 'email')";
$result = $link->query($sql);*/

//                              defining validation function cleanData, variables, ...
$username = '';
$email = '';
$password = '';
$passwordRepeat = '';
$firstName = '';
$lastName = '';
$age = '';
$gender = '';

$usernameErr = '';
$emailErr = '';
$passwordErr = '';
$passwordRepeatErr = '';
$firstNameErr = '';
$lastNameErr = '';
$ageErr = '';

$result = false;
$sql = '';

function addValidClass($fieldErr = '')
{
    if (!isset($fieldErr)) {
        return false;
    } else if (!empty($fieldErr)) {
        return 'is-invalid';
    } else {
        return 'is-valid';
    }
}

function cleanData($value = '')
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

//                               input validation

if (empty(cleanData(filter_input(INPUT_POST, 'username')))) {
    $usernameErr = "username is required";
} else {
    $username = cleanData(filter_input(INPUT_POST, 'username'));
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
        $usernameErr = "Only letters and white space allowed";
    }
}

if (empty(cleanData(filter_input(INPUT_POST, 'email')))) {
    $emailErr = "Email is required";
} else {
    $email = cleanData(filter_input(INPUT_POST, 'email'));
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
}

if (empty(cleanData(filter_input(INPUT_POST, 'password') ||
    cleanData(filter_input(INPUT_POST, 'passwordRepeat'))))) {
    $passwordErr = 'password is required';
    $passwordRepeatErr = 'password is required';
} else {
    $password = cleanData(filter_input(INPUT_POST, 'password'));
    $passwordRepeat = cleanData(filter_input(INPUT_POST, 'passwordRepeat'));
    // check if e-mail address is well-formed
    if (!(filter_input(INPUT_POST, 'password') === filter_input(INPUT_POST, 'passwordRepeat'))) {
        $passwordErr = "Different passwords";
        $passwordRepeatErr = "Different passwords";
    }
}

if (empty(cleanData(filter_input(INPUT_POST, 'firstName')))) {
    $firstNameErr = "first Name is required";
} else {
    $firstName = cleanData(filter_input(INPUT_POST, 'firstName'));
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
        $firstNameErr = "Only letters and white space allowed";
    }
}

if (empty(cleanData(filter_input(INPUT_POST, 'lastName')))) {
    $lastNameErr = "last Name is required";
} else {
    $lastName = cleanData(filter_input(INPUT_POST, 'lastName'));
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
        $lastNameErr = "Only letters and white space allowed";
    }
}

if (empty(cleanData(filter_input(INPUT_POST, 'age')))) {
    $ageErr = "age is required";
} else {
    $age = cleanData(filter_input(INPUT_POST, 'age'));
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1-9][0-9]{0,2}$/", $age)) {
        $ageErr = "incorrect number";
    }
}

$gender = cleanData(filter_input(INPUT_POST, 'gender'));


// IF VALIDATION IS DONE, THEN DO THE INSERT!!!
/*$sql = "INSERT INTO users (username, email, password, passwordRepeat, firstName, lastName, age, gender)
VALUES ('$username', '$email', '$password', '$passwordRepeat', '$firstName', '$lastName', '$age', '$gender')";
$result = $link->query($sql);*/
if (($_SERVER["REQUEST_METHOD"] == "POST") && empty($usernameErr) && empty($emailErr) && empty($passwordErr) &&
    empty($passwordRepeatErr) && empty($firstNameErr) && empty($lastNameErr) && empty($ageErr)) {

    $sql = "INSERT INTO users (username, email, password, passwordRepeat, firstName, lastName, age, gender)
VALUES ('$username', '$email', '$password', '$passwordRepeat', '$firstName', '$lastName', '$age', '$gender')";
    $result = $link->query($sql);

}


if ($result === TRUE) {
    echo "<br>" . "New record created successfully";
} /*else {
    echo "<br>" . "Error insert" . $sql . " " . $link->error;
}*/

//                                  get data
$sql = "SELECT* FROM users";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>" . "id: " . $row["id"] .
            " - username: " . $row["username"] .
            " - email: " . $row["email"] .
            " - password: " . $row["password"] .
            " - passwordRepeat: " . $row["passwordRepeat"] .
            " - firstName: " . $row["firstName"] .
            " - lastName: " . $row["lastName"] .
            " - age: " . $row["age"] .
            " - gender: " . $row["gender"];
    }
} else {
    echo "NULL results";
}
mysqli_close($link);
?>