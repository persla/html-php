<?php

$db = connectToDatabase($dsn2);
$sql = "SELECT name, title, gps, image1, image1Alt, image1Text FROM object WHERE id=9;";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
printobject($res);
