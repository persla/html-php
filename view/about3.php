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
            <h1><?= $res1[9]["title"]; ?></h1>
        </header>
    <article>

<?= $res1[9]["data"]; ?>

    </article>
</section>
