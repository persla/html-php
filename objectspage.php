<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

$page = $_GET["page"] ?? "intro_object";

$db = connectToDatabase($dsn2);

$sql = "SELECT title, name FROM object;";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();



$pages = [
    "intro_object"=>[
    "titel" => "Objektsamling",
    "subpage" => __DIR__ . "/view/intro_object.php"
    ],
    $res[0]["name"] => [
    "titel" => $res[0]["title"],
    "subpage" => __DIR__ . "/view/objekt1.php"
    ],
    $res[1]["name"] =>[
    "titel" => $res[1]["title"],
    "subpage" => __DIR__ . "/view/objekt2.php"
    ],
    $res[2]["name"] =>[
    "titel" => $res[2]["title"],
    "subpage" => __DIR__ . "/view/objekt3.php"
    ],
    $res[3]["name"] =>[
    "titel" => $res[3]["title"],
    "subpage" => __DIR__ . "/view/objekt4.php"
    ],
    $res[4]["name"] =>[
    "titel" => $res[4]["title"],
    "subpage" => __DIR__ . "/view/objekt5.php"
    ],
    $res[5]["name"] =>[
    "titel" => $res[5]["title"],
    "subpage" => __DIR__ . "/view/objekt6.php"
    ],
    $res[6]["name"] =>[
    "titel" => $res[6]["title"],
    "subpage" => __DIR__ . "/view/objekt7.php"
    ],
    $res[7]["name"] =>[
    "titel" => $res[7]["title"],
    "subpage" => __DIR__ . "/view/objekt8.php"
    ],
    $res[8]["name"] =>[
    "titel" => $res[8]["title"],
    "subpage" => __DIR__ . "/view/objekt9.php"
    ],
    $res[9]["name"] =>[
    "titel" => $res[9]["title"],
    "subpage" => __DIR__ . "/view/objekt10.php"
    ],
    $res[10]["name"] =>[
    "titel" => $res[10]["title"],
    "subpage" => __DIR__ . "/view/objekt11.php"
    ],
    $res[11]["name"] =>[
    "titel" => $res[11]["title"],
    "subpage" => __DIR__ . "/view/objekt12.php"
    ],
    $res[12]["name"] =>[
    "titel" => $res[12]["title"],
    "subpage" => __DIR__ . "/view/objekt13.php"
    ],
    $res[13]["name"] =>[
    "titel" => $res[13]["title"],
    "subpage" => __DIR__ . "/view/objekt14.php"
    ],
    "maps" =>[
    "titel" => "Sök kartor",
    "subpage" => __DIR__ . "/view/maps.php"
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
