<?php
$db = connectToDatabase($dsn2);
$sql = "SELECT name, title, data, author, gps, mapImage, image1, image1Alt, image1Text FROM object WHERE id=10;";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
printarticel($res);
