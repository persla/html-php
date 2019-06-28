
<?php
$search1 = isset($_GET['search'])
    ? $_GET['search']
    : null;
$wildcard1 = "%";
$wildcard2 = "%%";
$search = $wildcard1 .$search1. $wildcard1;

$select = isset($_GET['select'])
        ? $_GET['select']
        : null;
$select1 = isset($_GET['select1'])
        ? $_GET['select1']
        : null;

$db = connectToDatabase($dsn2);
$sql = <<<EOD
SELECT
    *
FROM object
WHERE
    data LIKE ? OR
    image1Text LIKE ? OR
    image1 LIKE ? OR
    mapImage LIKE ? OR
    Image1Alt LIKE ?
;
EOD;
$stmt = $db->prepare($sql);
$stmt->execute([$search, $search, $search]);

$res = $stmt->fetchAll();
echo "

<section>
 <header>
     <h1>Sök efter artiklar, bilder och kartor i arkivet</h1>
 </header>
    <article>";
    ?>
    <form class="search">

        <legend for="name">Sökord:</legend>

        <input type="text" name="search" placeholder="Skriv sökordet här" autofocus value="<?= htmlentities($search1) ?>"><br>
        <fieldset>
        <legend for="checkbox">Välj sökalternativ:</legend>
        <input type="checkbox" name="select" value="Pic" checked="checked"> Bilder och kartor<br>
        <input type="checkbox" name="select1" value="Text" checked="checked">Text<br>

        <input type="submit" value="Sök">
        </fieldset>

    </form>
    <?php
    //check if its empty first time, befor submit
    if (is_null($search1)) {
        exit("<p class='call'>Skriv ett ord i sökrutan ovan.");
    }
    //check if its empty after submit
    if (empty($search1)) {
        exit("<p class='alert'>Sökningen gav inget resultat, du måste skriva in minst en bokstav i sökrutan.");
    }
    //check after submit if its contains %%


    //check if search string is in soursestring

    $rows = null;
    foreach ($res as $row) :
        $rows .= $row['image1'];
        $rows .= $row["image1Text"];
        $rows .= $row["mapImage"];
        $rows .= $row["data"];
    endforeach;

    $search = trim($search, '%');
    if (strpos($rows, $search) === false) {
        exit("<p class='alert'>Sökordet <b>'$search'</b> gav ingen träff i arkivet.");
    }

//print tabele of choise
    if ($select != null && $select1 != null) {
        echo "<table>
        <tr>
            <th>Bilder</th>
            <th>Bildtext</th>
            <th>Kartor</th>
            <th>Artiklar</th>
        </tr>";
        foreach ($res as $row) : ?>
        <tr>
        <td><img src=img/80x80/<?= $row['image1'] ?>></td>
        <td><?= $row["image1Text"] ?></td>
        <td><img src=img/80x80/<?= $row["mapImage"]."_karta.jpg" ?>></td>
        <td><div class="rowtable"><?= $row["data"] ?></td>

        <?php echo "</tr>";
        endforeach;
        echo "</table>";
    } elseif ($select != null && $select1 == null) {
        echo "<table>
        <tr>
            <th>Bilder</th>
            <th>Kartor</th>
        </tr>";
        foreach ($res as $row) : ?>
        <tr>
        <td><b><?= $row["image1Alt"] ?></b><br>
            <img src=img/250/<?= $row['image1'] ?>>
        </td>
        <td>Karta: <b><?= $row["image1Alt"] ?></b><br>
            <img src=img/250/<?= $row["mapImage"]."_karta.jpg" ?>></td>

        <?php echo "</tr>";
        endforeach;
        echo "</table>";
    } elseif ($select == null && $select1 != null) {
        echo "<table>
            <tr>
                <th>Bildtext</th>
                <th>Artiklar</th>
            </tr>";
        foreach ($res as $row) : ?>
            <tr>
            <td><?= $row["image1Text"] ?></td>
            <td><div class="rowtable"><?= $row["data"] ?></td>

            <?php echo "</tr>";
        endforeach;
            echo "</table>";
    } else {
        $search = trim($search, '%');
        echo "<p class='alert'>Sökordet <b>'$search'</b> i kombination med de angivna sökalternativen gav ingen träff i arkivet.";
    }


    echo"
</article>
</section>";
