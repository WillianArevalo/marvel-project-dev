<footer>
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-content-logo">
                <img src="<?php echo assets("images", "logo.webp") ?>" alt="Logo MARVEL">
            </div>
            <div class="footer-content-nav">
                <ul>
                    <li>
                        <a href="<?php echo url("/home") ?>" class="<?php echo currentPage("home") ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo url("/characters") ?>"
                            class="<?php echo currentPage("characters") ?>">Characters</a>
                    </li>
                    <li>
                        <a href="<?php echo url("/comics") ?>" class="<?php echo currentPage("comics") ?>">Comics</a>
                    </li>
                </ul>
            </div>
            <div class="footer-content-networks">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/Marvel" target="_blank" title="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                color="#000000" fill="none">
                                <path
                                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                <path
                                    d="M16.9265 8.02637H13.9816C12.9378 8.02637 12.0894 8.86847 12.0817 9.91229L11.9964 21.4268M10.082 14.0017H14.8847"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Marvel" target="_blank" title="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                color="#000000" fill="none">
                                <path
                                    d="M3 21L10.5484 13.4516M21 3L13.4516 10.5484M13.4516 10.5484L8 3H3L10.5484 13.4516M13.4516 10.5484L21 21H16L10.5484 13.4516"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/marvel/" target="_blank" title="Instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                color="#000000" fill="none">
                                <path
                                    d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                <path
                                    d="M16.5 12C16.5 14.4853 14.4853 16.5 12 16.5C9.51472 16.5 7.5 14.4853 7.5 12C7.5 9.51472 9.51472 7.5 12 7.5C14.4853 7.5 16.5 9.51472 16.5 12Z"
                                    stroke="currentColor" stroke-width="1.5" />
                                <path d="M17.5078 6.5L17.4988 6.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<script src="<?php echo assets("js", "jquery-3.7.1.min.js") ?>"></script>
<script src="<?php echo assets("js", "navbar.js") ?>"></script>
<script src="<?php echo assets("js", "characters.js") ?>"></script>
<script src="<?php echo assets("js", "accordion.js") ?>"></script>
<script src="<?php echo assets("js", "comics.js") ?>"></script>
<script src="<?php echo assets("js", "modal.js") ?>"></script>
</body>

</html>