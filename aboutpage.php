<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";



$db = connectToDatabase($dsn2);

$sql = "SELECT title, name FROM article;";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();
$link = $res[8]["name"];
$page = $_GET["page"] ?? "$link";


$pages = [
    $res[8]["name"] =>[
    "titel" => $res[8]["title"],
    "subpage" => __DIR__ . "/view/about4.php"
    ],
    $res[5]["name"] => [
    "titel" => $res[5]["title"],
    "subpage" => __DIR__ . "/view/about1.php"
    ],

    $res[7]["name"] =>[
    "titel" => $res[7]["title"],
    "subpage" => __DIR__ . "/view/about2.php"
    ],

    $res[6]["name"] =>[
    "titel" => $res[6]["title"],
    "subpage" => __DIR__ . "/view/about5.php"
    ],
    $res[9]["name"] =>[
    "titel" => $res[9]["title"],
    "subpage" => __DIR__ . "/view/about3.php"
    ],
    "webb"=>[
    "titel" => "Information om webbplatsen",
    "subpage" => __DIR__ . "/view/webb.php"
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
