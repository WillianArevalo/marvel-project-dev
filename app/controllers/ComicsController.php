<?php

require_once "app/api/Functions.php";

class ComicsController
{
    public $limit = 21;
    public $id;

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function index()
    {
        $marvel = new Marvel();
        $comics = $marvel->getAllComics(0, 100);
        $count = count($comics);
        $total = ceil($count / $this->limit);

        if (!$comics) {
            load_view("error", "error", ["title" => "Comics not found", "message" => ""], true);
            return;
        }

        load_view("comics", "index", ["comics" => $comics, "total" => $total], true);
    }

    public function loadComics()
    {
        $page = $_POST["page"];
        $offset = ($page - 1) * 21;
        $marvel = new Marvel();
        $comics = $marvel->getAllComics($offset, $this->limit);
        $html = loadCardsComics($comics);
        echo json_encode(["html" => $html]);
    }

    public function details()
    {
        $marvel = new Marvel();
        $comic = $marvel->getComic($this->id);

        if (!$comic) {
            load_view("error", "error", ["title" => "Comic not found", "message" => "The comic does not exist or is not available."], true);
            return;
        }


        load_view("comics", "details", ["comic" => $comic], true);
    }
}
