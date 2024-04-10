<header>
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="<?php echo assets("images", "logo.webp") ?>" alt="Logo MARVEL" srcset="">
        </div>
        <ul>
            <li>
                <a href="<?php echo url("/home") ?>" class="<?php echo currentPage("home") ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo url("/characters") ?>" class="<?php echo currentPage("characters") ?>">Characters</a>
            </li>
            <li>
                <a href="<?php echo url("/comics") ?>" class="<?php echo currentPage("comics") ?>">Comics</a>
            </li>
        </ul>
        <div class="navbar-search">
            <div class="form-group">
                <input type="text" placeholder="Search" id="input-search">
                <button id="button-search" title="button search">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                        <path d="M14 14L16.5 16.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        <path d="M16.4333 18.5252C15.8556 17.9475 15.8556 17.0109 16.4333 16.4333C17.0109 15.8556 17.9475 15.8556 18.5252 16.4333L21.5667 19.4748C22.1444 20.0525 22.1444 20.9891 21.5667 21.5667C20.9891 22.1444 20.0525 22.1444 19.4748 21.5667L16.4333 18.5252Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M16 9C16 5.13401 12.866 2 9 2C5.13401 2 2 5.13401 2 9C2 12.866 5.13401 16 9 16C12.866 16 16 12.866 16 9Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
        <button class="btn-hamburger" id="btn-hamburger" title="button hamburger">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none" id="icon-hamburger">
                <path d="M4 5L20 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M4 19L20 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </nav>

    <nav class="navbar-mobile" id="navbar-mobile">
        <ul>
            <li>
                <a href="<?php echo url("/home") ?>" class="<?php echo currentPage("home") ?>">Home</a>
            </li>
            <li>
                <a href="<?php echo url("/characters") ?>" class="<?php echo currentPage("characters") ?>">Characters</a>
            </li>
            <li>
                <a href="<?php echo url("/comics") ?>" class="<?php echo currentPage("comics") ?>">Comics</a>
            </li>
            <button id="btn-close" title="button close navbar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                    <path d="M19.0005 4.99988L5.00045 18.9999M5.00045 4.99988L19.0005 18.9999" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <div class="navbar-search-mobile">
                <div class="form-group">
                    <input type="text" placeholder="Search" id="input-search">
                    <button id="button-search" title="button search navbar mobile">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none">
                            <path d="M14 14L16.5 16.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path d="M16.4333 18.5252C15.8556 17.9475 15.8556 17.0109 16.4333 16.4333C17.0109 15.8556 17.9475 15.8556 18.5252 16.4333L21.5667 19.4748C22.1444 20.0525 22.1444 20.9891 21.5667 21.5667C20.9891 22.1444 20.0525 22.1444 19.4748 21.5667L16.4333 18.5252Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M16 9C16 5.13401 12.866 2 9 2C5.13401 2 2 5.13401 2 9C2 12.866 5.13401 16 9 16C12.866 16 16 12.866 16 9Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </ul>
    </nav>


</header>