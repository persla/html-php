<?php
    $db = connectToDatabase($dsn2);
    $sql = "SELECT * FROM article;";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res1 = $stmt->fetchAll();
    $res1[1]["title"];
    ?>
    <section>
        <header>
            <h1><?= $res1[8]["title"]; ?></h1>
        </header>
    <article>
<div class="history"><img  src= <?='img/250/'. $res1[8]["image1"]; ?> ></div>
<?= $res1[8]["data"]; ?>
    </article>
</section>
