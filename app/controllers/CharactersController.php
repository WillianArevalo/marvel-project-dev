<?php

require_once "app/api/Functions.php";

class CharactersController
{
    public $limit = 21;
    public $id;

    public function index()
    {
        $marvel = new Marvel();
        $characters = $marvel->getAllCharacters(0, 100);
        $count = count($characters);
        $total = ceil($count / $this->limit);
        load_view("character", "index", ["characters" => $characters, "total" => $total], true);
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function loadCharacters()
    {
        $page = $_POST["page"];
        $offset = ($page - 1) * 21;
        $marvel = new Marvel();
        $characters = $marvel->getAllCharacters($offset, $this->limit);
        $html = loadCardsCharacters($characters);
        echo json_encode(["html" => $html]);
    }

    public function details()
    {
        $marvel = new Marvel();
        $character = $marvel->getCharacter($this->id);

        if (!$character) {
            load_view("error", "error", ["title" => "Character not found", "message" => "The character does not exist or is not available."], true);
            return;
        }

        load_view("character", "details", ["character" => $character], true);
    }
}
