<?php
// Connection setting
include('const.php');

// Create connection

$link = mysqli_connect("$servername", "$serverUserName", "$serverPassword", "$dbname");

//$link - connection object;
echo 'connection object $link :' . "<br>";
echo var_dump($link) . "<br>" . "<br>";
if (!$link) {
    echo " Ошибка: Невозможно установить соединение с MySQL." . "<br>";
    echo " Код ошибки errno: " . mysqli_connect_errno() . "<br>";
    echo " Текст ошибки error: " . mysqli_connect_error() . "<br>";
    exit;
}
echo "Соединение с MySQL установлено!";
echo "Информация о сервере: " . mysqli_get_host_info($link) . "</br>";

// get data task 1. Get all blocks from block table where theme is bartik and module is system
$sql = "SELECT* FROM block WHERE theme = 'bartik' AND module = 'system' ORDER BY bid";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>" .
            " - bid: " . $row["bid"] .
            " - module: " . $row["module"].
            " - delta: " . $row["delta"].
            " - theme: " . $row["theme"].
            " - status: " . $row["status"].
            " - weight: " . $row["weight"].
            " - region: " . $row["region"].
            " - custom: " . $row["custom"].
            " - visibility: " . $row["visibility"].
            " - pages: " . $row["pages"].
            " - title: " . $row["title"].
            " - cache: " . $row["cache"];
    }
} else {
    echo "NULL results";
}
echo "<br>";

//  get data task 2. Get nodes where type is delivery and all that made in october and title begins with 8046
$sql = "SELECT* FROM node WHERE type = 'delivery' AND (created BETWEEN 1538352001 AND 1541030399) AND 
title LIKE '8046%'";                      //1538352001 is 01.10.2018, 1541030399 is 31.10.2018
$result = $link->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>" .
            " - nid: " . $row["nid"] .
            " - vid: " . $row["vid"] .
            " - type: " . $row["type"] .
            " - language: " . $row["language"] .
            " - title: " . $row["title"] .
            " - uid: " . $row["uid"] .
            " - status: " . $row["status"] .
            " - created: " . $row["created"] .
            " - changed: " . $row["changed"] .
            " - comment: " . $row["comment"] .
            " - promote: " . $row["promote"] .
            " - sticky: " . $row["sticky"] .
            " - tnid: " . $row["tnid"] .
            " - translate: " . $row["translate"]."<br>";
    }
} else {
    echo "NULL results";
}
echo "<br>";

//  get data task 3. Get user name and nodes that where published by user 'serhiy'(output username and email with each node). get last 20 nodes.
$sql = "SELECT users.name, users.mail, node.nid, node.vid, node.type, node.language, node.title, node.uid, node.status, 
node.created, node.changed, node.comment, node.promote, node.sticky, node.tnid, node.translate  FROM node LEFT JOIN users 
ON node.uid = users.uid WHERE users.name = 'serhiy' ORDER BY node.created DESC LIMIT 20 ";

$result = $link->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>" .
             " - users name: " . $row["name"] .
             " - users mail: " . $row["mail"] .
            " - nid: " . $row["nid"] .
            " - vid: " . $row["vid"] .
            " - type: " . $row["type"] .
            " - language: " . $row["language"] .
            " - title: " . $row["title"] .
            " - uid: " . $row["uid"] .
            " - status: " . $row["status"] .
            " - created: " . $row["created"] .
            " - changed: " . $row["changed"] .
            " - comment: " . $row["comment"] .
            " - promote: " . $row["promote"] .
            " - sticky: " . $row["sticky"] .
            " - tnid: " . $row["tnid"] .
            " - translate: " . $row["translate"]."<br>";
    }
} else {
    echo "NULL results";
}
echo "<br>";

//get data task 4. Get all variable name that has cache word(cache_akjsgdkjag) but not (cache)(see variable table)
$sql = "SELECT * FROM variable WHERE name LIKE '%cache%' AND NOT name = 'cache' ";

$result = $link->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>" .
            " - variable name: " . $row["name"] .
            " - variable value: " . $row["value"];
    }
} else {
    echo "NULL results";
}
echo "<br>";
mysqli_close($link);
?>