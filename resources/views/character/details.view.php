<main>
    <div class="container">
        <div class="container-character">
            <div class="character-image">
                <img src="<?php echo $character["thumbnail"]["path"] . "." . $character["thumbnail"]["extension"] ?>"
                    alt="Character <?php echo $character["name"] ?>" id="image-character">
            </div>
            <div class="character-info">
                <h1><?php echo $character["name"] ?></h1>
                <p>
                    <?php echo ($character["description"] != "") ? $character["description"] : "Without description" ?>
                </p>
                <div class="character-lists">
                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Comics
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    color="#000000" fill="none" class="icon-down">
                                    <path
                                        d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path d="M17 10C17 10 13.3176 14 12 14C10.6824 14 7 10 7 10" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    color="#000000" fill="none" class="icon-up">
                                    <path
                                        d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path d="M17 14C17 14 13.3176 10 12 10C10.6824 9.99999 7 14 7 14"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="accordion-content">
                                <div class="comics">
                                    <?php
                                    if (!empty($character["comics"]["items"])) {
                                        foreach ($character["comics"]["items"] as $comic) {
                                    ?>
                                    <a href="<?php echo url("/comics/" . basename($comic['resourceURI'])) ?>">
                                        <span></span>
                                        <?php echo $comic["name"]  ?>
                                    </a>
                                    <?php
                                        }
                                    } else {
                                        echo "No comics found";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Series
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    color="#000000" fill="none" class="icon-down">
                                    <path
                                        d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path d="M17 10C17 10 13.3176 14 12 14C10.6824 14 7 10 7 10" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                    color="#000000" fill="none" class="icon-up">
                                    <path
                                        d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                        stroke="currentColor" stroke-width="1.5" />
                                    <path d="M17 14C17 14 13.3176 10 12 10C10.6824 9.99999 7 14 7 14"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="accordion-content">
                                <div class="series">
                                    <?php
                                    if (!empty($character["series"]["items"])) {
                                        foreach ($character["series"]["items"] as $serie) {
                                    ?>
                                    <a href="<?php echo url("/series/" . basename($serie['resourceURI'])) ?>">
                                        <span></span>
                                        <?php echo $serie["name"] ?>
                                    </a>
                                    <?php
                                        }
                                    } else {
                                        echo "No series found";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-image" class="modal">
        <span class="close" id="close-modal">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000"
                fill="none">
                <path d="M15 9L9 14.9996M15 15L9 9.00039" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                    stroke="currentColor" stroke-width="1.5" />
            </svg>
        </span>
        <div class="image-container-modal" id="container-modal-image">
            <img class="modal-contenido" id="image-modal" />
        </div>
    </div>

</main>