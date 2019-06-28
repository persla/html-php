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
            <h1>Om webbsidan</h1>
        </header>
    <article>

<p>Jag som har skapat den här webbplatsen heter Lars Persson och studerar
    webbteknologi på Blekinge tekniska högskolan. Detta är det avslutande
    projektet i kursen Webbteknologier(7,5) där teknikerna HTML, CSS, PHP
    och SQL lärs ut för att sedermera kunna används tillsammans för att
    bygga en databasdriven webbplats.
<p>Projektbeskrivningen bestod i att utveckla och leverera en webbplats till
    Nättraby Vägmuseum (NVM). Vi fick tillgång till en databas som innehåller
    material samt bilder och utifrån detta skapa en attraktiv, strukturerad och
    välfungerande webbplats som kan tänkas tillfredsställa kundens önskemål.</p>
<p>Detta är således ett uppdrag i utbildningssyfte och ska inte förväxlas med
    Nättraby Vägmuseums riktiga webbplats, länk:  <a href="http://www.nattrabyvagmuseum.se/">Nättraby Vägmuseum</a>. </p>
<?php include("view/byline.php"); ?>
    </article>
</section>
