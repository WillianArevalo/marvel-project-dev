<main>
    <div class="container">
        <section class="banner">
            <div class="banner-container">
                <div class="card-banner">
                    <h1>WELCOME TO MY WEBSITE</h1>
                    <p>
                        My website is for viewing information on different Marvel categories, such as characters,
                        comics,
                        and series. Using Marvel's API.
                    </p>
                </div>
                <a href="https://www.marvel.com/" target="_blank">
                    <span class="box">
                        Visit Marvel
                    </span>
                </a>
            </div>
        </section>
        <section class="structure">
            <div class="card-container">
                <div class="card-structure">
                    <div class="card-structure-image">
                        <img src="<?php echo assets("images", "characters.webp") ?>" alt="Characters">
                    </div>
                    <div class="card-structure-content">
                        <h2>CHARACTERS</h2>
                        <p>
                            View information on different Marvel characters.
                        </p>
                    </div>
                    <div class="card-structure-footer">
                        <a href="<?php echo url("/characters") ?>">
                            <span class="box">
                                View Characters
                            </span>
                        </a>
                    </div>
                </div>
                <div class="card-structure">
                    <div class="card-structure-image">
                        <img src="<?php echo assets("images", "commics.webp") ?>" alt="Commics">
                    </div>
                    <div class="card-structure-content">
                        <h2>COMICS</h2>
                        <p>
                            View information on different Marvel comics.
                        </p>
                    </div>
                    <div class="card-structure-footer">
                        <a href="<?php echo url("/comics") ?>">
                            <span class="box">
                                View Comics
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>