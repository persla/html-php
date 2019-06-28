<?php
    $db = connectToDatabase($dsn2);
    $sql = "SELECT * FROM article;";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res1 = $stmt->fetchAll();

    $db = connectToDatabase($dsn2);
    $sql = "SELECT * FROM object;";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res2 = $stmt->fetchAll();
    $res1[1]["title"];
    ?>
    <section>
    <article>
<div class="kombine">


<div class='pichome'>
<img src=<?='img/250/'. $res1[0]["image1"]; ?> alt='stenbron' >
<div class='deschome'> <?= $res1[0]["image1Text"]; ?></div>
</div>

<div class='pichome'>
<div class="sloganinfo">Följ med på en spännande resa genom historien - Vi Visar Vägen!</div>
<img src=<?='img/250/'. $res1[8]["image1"]; ?> alt='infoskylt' >
<div class='deschome'> <?= $res1[8]["image1Text"]; ?></div>
</div>

<div class='pichome'>
<img src=<?='img/250/'. $res2[7]["image2"]; ?> alt='riks' >
<div class='deschome'> <?= $res2[7]["image2Text"]; ?></div>
</div>
</div>

<div class="kombine">
<div class='pichome'>
<img src=<?='img/250/'. $res2[12]["image2"]; ?> alt='isvägen' >
<div class='deschome'> <?= $res2[12]["image2Text"]; ?></div>
</div>

<div class='pichome'>
<img src=<?='img/250/'. $res2[10]["image2"]; ?> alt='smalspårigjärnv' >
<div class='deschome'> <?= $res2[10]["image2Text"]; ?></div>
</div>

<div class='pichome'>
<img src=<?='img/250/'. $res2[8]["image1"]; ?> alt='cyklist' >
<div class='deschome'> <?= $res2[8]["image2Text"]; ?></div>
</div>
</div>

<div class="kombine">
<div class='pichome'>
<img src=<?='img/250/'. $res2[13]["image2"]; ?> alt='shell' >
<div class='deschome'> <?= $res2[13]["image2Text"]; ?></div>
</div>

<div class='pichome'>
<img src=<?='img/250/'. $res1[1]["image1"]; ?> alt='infoskylt' >
<div class='deschome'> <?= $res1[1]["image1Text"]; ?></div>
</div>

<div class='pichome'>
<img src=<?='img/250/'. $res2[3]["image2"]; ?> alt='shell' >
<div class='deschome'> <?= $res2[3]["image2Text"]; ?></div>
</div>
</div>
</article>
</section>
