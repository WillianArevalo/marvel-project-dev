<?php
if ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_ADDR'] === '127.0.0.1') {
    define("URL", "http://localhost/marvel-project");
} else {
    define("URL", "https://tu-enlace-de-produccion.com");
}
define("PUBLIC_KEY", "c24a98aa8e3e8e3ac2951146e2b95b28");
define("PRIVATE_KEY", "454b67479f4bfaa27b2cf53ccb4a30de855a13be");
