<?php
function connectToDatabase($dsn)
{
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }

    return $db;
}

function printobject($res)
{
    $name = $res[0]["name"];
    $gps = $res[0]["gps"];
    $imageAlt = $res[0]["image1Alt"];
    $imagetext = $res[0]["image1Text"];
    $img = "img/500/". $res[0]["image1"];
    echo"
    <section>
     <header>
         <h1>$imageAlt</h1>
     </header>
        <article>
        <div class='gallery3'>
      <img src=$img alt='$imageAlt' >      </div>
        <div class='desc3'> $imagetext <p><b>Position:</b> $gps</p>
        <p><a  href=articelspage.php?page=$name> <b>Artikel om:</b> $imageAlt </a></p>
        <p><a  href=?page=maps> <b>Kartor</b></a></p>
        </div>

    </article>
    </section>
    ";
}

function printarticel($res)
{
    $name = $res[0]["name"];
    $articel = $res[0]["data"];
    $author = $res[0]["author"];
    $imageAlt = $res[0]["image1Alt"];
    $img = "img/250/". $res[0]["image1"];
    $map = "img/250/". $res[0]["mapImage"]."_karta.jpg";
    echo"
    <section>

        <article>
            <div class='picart'>
        <img src=$img alt='$imageAlt' >
        <div class='desc2'> Bild: $imageAlt Fotograf: $author</div>
        </div>
            <img class='artmap' src= $map>
            $articel
        <p class='author'> Författare: $author</p>
         <a  href=objectspage.php?page=$name><b>Till objektet:</b> $imageAlt </a>
    </article>

    </section>
    ";
}

function printthumbnail($res1)
{
    $row = "";
    foreach ($res1 as $row) : ?>
        <div class="gallery">
        <a  href=?page=<?=$row['name']?>>
        <img src=img/150x150/<?= $row['image1'] ?>>
        <div class="desc"><?= $row['title'] ?></div>
        </div></a>
    <?php ;
    endforeach;
}

function printformoptions($res)
{
    $row = "";
    foreach ($res as $row) : ?>
        <option value="<?= $row['mapImage'] ?>"><?= $row["title"]?></option>
    <?php ;
    endforeach;
}
