<?php
    $db = connectToDatabase($dsn2);
    $sql = "SELECT name, title, image1, image1Alt FROM object;";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res1 = $stmt->fetchAll();
    ?>



<section>
 <header>
     <h1>Museet objekt</h1>
 </header>
    <article>
        <header>
<?php printthumbnail($res1);  ?>
</header>
</article>
</section>
