<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";



$db = connectToDatabase($dsn2);

$sql = "SELECT title, name FROM article;";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
$link = $res[4]["name"];
$page = $_GET["page"] ?? "$link";


$pages = [
    $res[4]["name"] => [
    "titel" => $res[4]["title"],
    "subpage" => __DIR__ . "/view/history1.php"
    ],
    $res[3]["name"] =>[
    "titel" => $res[3]["title"],
    "subpage" => __DIR__ . "/view/history2.php"
    ],
    $res[10]["name"] =>[
    "titel" => $res[10]["title"],
    "subpage" => __DIR__ . "/view/history3.php"
    ],
];

$validPage = $pages[$page] ?? null;
if (!$validPage) {
    die("Sidan finns inte!");
}

$title = "{$validPage["titel"]}" . $basetitle;
$subpage = $validPage["subpage"];
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/report_multi.php";
require __DIR__ . "/view/footer.php";
