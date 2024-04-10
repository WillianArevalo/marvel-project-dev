<main>
    <div class="container">
        <div class="comics-container">
            <div class="comics-header">
                <h1>Comics</h1>
            </div>
            <div class="comics-body" id="cards-comics">
                <?php
                if ($comics != null) :
                    $comics = array_slice($comics, 0, 21);
                    foreach ($comics as $comic) : ?>
                <div class="comic">
                    <img src="<?php echo $comic["thumbnail"]["path"] . "." . $comic["thumbnail"]["extension"] ?>"
                        alt="Comic Marvel <?php echo $comic["title"] ?>">
                    <div class="comic-info">
                        <h3><?php echo $comic["title"] ?></h3>
                        <div class="comic-links">
                            <a href="<?php echo url("/comics/details/" . $comic["id"]) ?>">
                                <span class="box">View Comic</span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach;
                endif;
                ?>
            </div>
            <div id="pagination-comics" class="pagination-button-comics">
                <?php
                for ($i = 1; $i <= $total; $i++) {
                    $class = ($i == 1) ? 'active' : '';
                ?>
                <button class="page <?php echo $class; ?>"
                    data-page-comic="<?php echo $i; ?>"><?php echo $i; ?></button>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</main>