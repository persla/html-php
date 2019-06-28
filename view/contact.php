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
            <h1><?= $res1[8]["image1Alt"]; ?></h1>
        </header>
    <article>

        <div class='info'>

        <img src=<?='img/500/'. $res1[8]["image1"]; ?> alt='infoskylt' > </div>
        <div class='infofact'><?= $res1[8]["image1Text"];?> <p>
        <b>Position:</b> <?= $res1[8]["gps"];?> </p></div>
    </article>
</section>
