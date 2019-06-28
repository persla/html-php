
<?php
$search = $_GET["maps"] ?? "01";

$db = connectToDatabase($dsn2);
$sql = "SELECT mapImage, title FROM object;";
$stmt = $db->prepare($sql);
$stmt->execute();
$res1 = $stmt->fetchAll();

$sql = <<<EOD
SELECT
    mapImage,
    title,
    gps,
    name,
    image1Alt
FROM object
WHERE
    mapImage = ? or
    title like?
;
EOD;
$stmt = $db->prepare($sql);
$stmt->execute([$search]);
$res = $stmt->fetchAll();

?>
<section>
 <header>
     <h1>Sök efter kartor till objekten</h1>
 </header>
    <article>
        <header>
        </header>
        <form>

            <input id="maps" type="hidden" name="page" value="maps">

            <select type=select name="maps">
            <option value="01" selected="selected">Välj karta</option>
            <?php printformoptions($res1); ?>

            <?php
            $map = "img/500/". $res[0]["mapImage"]."_karta.jpg";
            $title = $res[0]["title"];
            $gps = $res[0]["gps"];
            $name = $res[0]["name"];
            $image1Alt= $res[0]["image1Alt"];

            ?>
          </select>
           <input type="submit" value="Ta fram vald karta" >
        </form>

        <img class="map" src=<?= $map?>>
        <div class="mapfact">
        <p><b>Objekt:</b> <?= $title?></p>
        <p><b>Position:</b> <?= $gps?></p>
        <p><a href=objectspage.php?page=<?=$name?>><b>Till objektet:</b> <?= $image1Alt?></a></p>
        <p><a href=articelspage.php?page=<?=$name?>><b>Till artikel:</b> <?= $image1Alt?></a></p></div>
    </article>
</section>
