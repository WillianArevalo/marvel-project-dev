<main>
    <div class="container">
        <div class="characters-container">
            <div class="characters-header">
                <h1>Characters</h1>
            </div>
            <div class="characters-body" id="cards-body">
                <div class="categorys">
                    <button class="button-category active">All</button>
                    <button class="button-category">Heroes</button>
                    <button class="button-category">Villains</button>
                    <button class="button-category">Neutral</button>
                </div>
                <div class="cards" id="cards">
                    <?php if ($characters != null) :
                        $characters = array_slice($characters, 0, 21);
                        foreach ($characters as $character) :
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
                        endforeach;
                    endif;  ?>
                </div>
                <div id="pagination" class="pagination">
                    <?php
                    for ($i = 1; $i <= $total; $i++) {
                        $class = ($i == 1) ? 'active' : '';
                    ?>
                        <button class="page <?php echo $class; ?>" data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>