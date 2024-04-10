<main>
    <div class="container-comic">
        <div class="comic-details">
            <div class="comic-header">
                <h1><?php echo $comic["title"] ?></h1>
            </div>
            <div class="comic-body">
                <div class="comic-image">
                    <div class="bg-image"></div>
                    <img src="<?php echo $comic["thumbnail"]["path"] . "." . $comic["thumbnail"]["extension"] ?>" alt="Comic <?php echo $comic["title"] ?>">
                </div>
                <div class="comic-info">
                    <div class="comic-info-description">
                        <h3>Description</h3>
                        <p><?php echo (!empty($comic["description"])) ? $comic["description"] : "Whithout description" ?>
                        </p>
                    </div>
                    <div class="comic-info-variants">
                        <h3>Variants</h3>
                        <ul>
                            <?php
                            if (count($comic["variants"]) > 0) {
                                foreach ($comic["variants"] as $variant) {
                                    echo
                                    "<li>
                                        <span></span>
                                    " . $variant["name"] . "
                                    </li>";
                                }
                            } else {
                                echo "<li>No variants available</li>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="comic-footer">
                <h3>Creators</h3>
                <ul>
                    <?php
                    if (count($comic["creators"]["items"]) > 0) {
                        foreach ($comic["creators"]["items"] as $creator) {
                            echo "<li><p>" . $creator["name"] . "</p> <span> " . ucfirst($creator["role"]) . "</span></li>";
                        }
                    } else {
                        echo "<li>No creators available</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</main>