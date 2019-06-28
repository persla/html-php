<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

$page = $_GET["page"] ?? "intro_articel";

$db = connectToDatabase($dsn2);

$sql = "SELECT title, name FROM object;";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();


$pages = [
    "intro_articel"=>[
    "titel" => "Artiklar om objekten",
    "subpage" => __DIR__ . "/view/intro_articel.php"
    ],
    $res[0]["name"] => [
    "titel" => $res[0]["title"],
    "subpage" => __DIR__ . "/view/artikel1.php"
    ],
    $res[1]["name"] =>[
    "titel" => $res[1]["title"],
    "subpage" => __DIR__ . "/view/artikel2.php"
    ],
    $res[2]["name"] =>[
    "titel" => $res[2]["title"],
    "subpage" => __DIR__ . "/view/artikel3.php"
    ],
    $res[3]["name"] =>[
    "titel" => $res[3]["title"],
    "subpage" => __DIR__ . "/view/artikel4.php"
    ],
    $res[4]["name"] =>[
    "titel" => $res[4]["title"],
    "subpage" => __DIR__ . "/view/artikel5.php"
    ],
    $res[5]["name"] =>[
    "titel" => $res[5]["title"],
    "subpage" => __DIR__ . "/view/artikel6.php"
    ],
    $res[6]["name"] =>[
    "titel" => $res[6]["title"],
    "subpage" => __DIR__ . "/view/artikel7.php"
    ],
    $res[7]["name"] =>[
    "titel" => $res[7]["title"],
    "subpage" => __DIR__ . "/view/artikel8.php"
    ],
    $res[8]["name"] =>[
    "titel" => $res[8]["title"],
    "subpage" => __DIR__ . "/view/artikel9.php"
    ],
    $res[9]["name"] =>[
    "titel" => $res[9]["title"],
    "subpage" => __DIR__ . "/view/artikel10.php"
    ],
    $res[10]["name"] =>[
    "titel" => $res[10]["title"],
    "subpage" => __DIR__ . "/view/artikel11.php"
    ],
    $res[11]["name"] =>[
    "titel" => $res[11]["title"],
    "subpage" => __DIR__ . "/view/artikel12.php"
    ],
    $res[12]["name"] =>[
    "titel" => $res[12]["title"],
    "subpage" => __DIR__ . "/view/artikel13.php"
    ],
    $res[13]["name"] =>[
    "titel" => $res[13]["title"],
    "subpage" => __DIR__ . "/view/artikel14.php"
    ],


];

$validPage = $pages[$page] ?? null;
if (!$validPage) {
    die("Sidan finns inte!");
}

$title = "{$validPage["titel"]} NMV" . $basetitle;
$subpage = $validPage["subpage"];
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/report_multi.php";
require __DIR__ . "/view/footer.php";
