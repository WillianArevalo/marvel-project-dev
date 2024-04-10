<?php

function loadCardsCharacters($characters)
{
    ob_start();
    $html = "";
    if (!empty($characters)) {
        foreach ($characters as $character) {
            $pathImage = $character["thumbnail"]["path"] . "." . $character["thumbnail"]["extension"];
?>
            <div class="card-character">
                <div class="card-header">
                    <img src="<?php echo $pathImage  ?>" alt="Character <?php echo $character["name"] ?>">
                </div>
                <div class="card-body">

                    <div class="card-body-header">
                        <h2><?php echo $character["name"] ?></h2>
                        <p>
                            <?php echo ($character["description"] != "") ? $character["description"] : "Without description"   ?>
                        </p>
                    </div>

                    <div class="card-body-avaibles">
                        <div class="card-body-avaibles-1">
                            <span>
                                <?php echo $character["comics"]["available"] ?> Comics Available
                            </span>
                            <span>
                                <?php echo $character["series"]["available"] ?> Series Available
                            </span>
                        </div>
                        <div class="card-body-avaibles-2">
                            <span>
                                <?php echo $character["stories"]["available"] ?> Stories Available
                            </span>
                            <span>
                                <?php echo $character["events"]["available"] ?> Events Available
                            </span>
                        </div>
                    </div>
                    <div class="card-body-date">
                        <span>
                            <?php echo $character["modified"] ?>
                        </span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo url("/characters/details/" . $character["id"]) ?>">
                        <span class="box">
                            View Character
                        </span>
                    </a>
                </div>
            </div>
        <?php
        }
    } else {
        $html = "No characters found";
    }
    $html = ob_get_clean();
    return $html;
}

function loadCardsComics($comics)
{
    ob_start();
    $html = "";
    if (!empty($comics)) {
        foreach ($comics as $comic) {
            $pathImage = $comic["thumbnail"]["path"] . "." .
                $comic["thumbnail"]["extension"];
        ?>
            <div class="comic">
                <img src="<?php echo $pathImage ?>" alt="Comic Marvel <?php echo $comic["title"] ?>">
                <div class="comic-info">
                    <h3><?php echo $comic["title"] ?></h3>
                    <div class="comic-links">
                        <a href="<?php echo url("/comics/details/" . $comic["id"]) ?>">
                            <span class="box">View Comic</span>
                        </a>
                    </div>
                </div>
            </div>

<?php
        }
    } else {
        $html = "No comics found";
    }
    $html = ob_get_clean();
    return $html;
}
