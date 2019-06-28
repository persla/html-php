

    <aside class="undersida">
        <nav class="multipage">
            <ul>
            <?php foreach ($pages as $key => $value) :
                $selected = null;
                if ($key === $page) {
                    $selected = "class='selected'";
                }
                ?>
                <li><a <?= $selected ?> href=" ?page=<?= $key ?>"><?=
                $value["titel"]; ?></a></li>
            <?php endforeach; ?>
            </ul>
        </nav>
    </aside>
