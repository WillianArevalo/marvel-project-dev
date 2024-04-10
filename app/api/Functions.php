<?php


class Marvel
{

    public $publicKey;
    public $privateKey;
    public $ts;
    public $hash;
    public $url;


    public function __construct()
    {
        $this->publicKey = constant("PUBLIC_KEY");
        $this->privateKey = constant("PRIVATE_KEY");
        $this->ts = time();
        $this->hash = md5($this->ts . $this->privateKey . $this->publicKey);
    }

    public function getAllCharacters($offset = 0, $limit = 0)
    {
        $this->url = "http://gateway.marvel.com/v1/public/characters?ts=$this->ts&apikey=$this->publicKey&hash=$this->hash&offset=$offset&limit=$limit";
        $response = file_get_contents($this->url);

        if ($response == false) {
            echo "Error fetching data from API";
        }

        $data = json_decode($response, true);
        if ($data["code"] == 200) {
            $characters  = $data["data"]["results"];
        } else {
            echo "Error fetching data from API" . $data["status"];
        }
        return $characters;
    }


    public function getCharacter($id)
    {
        $this->url = "http://gateway.marvel.com/v1/public/characters/$id?ts=$this->ts&apikey=$this->publicKey&hash=$this->hash";
        @$response = file_get_contents($this->url);

        if (!$response || ($data = json_decode($response, true)) == null) {
            return false;
        }

        $data = json_decode($response, true);
        if ($data["code"] == 200) {
            $character  = $data["data"]["results"][0];
        } else {
            echo "Error fetching data from API" . $data["status"];
        }
        return $character;
    }

    public function getAllComics($offset = 0, $limit = 0)
    {
        $this->url = "http://gateway.marvel.com/v1/public/comics?ts=$this->ts&apikey=$this->publicKey&hash=$this->hash&offset=$offset&limit=$limit";
        @$response = file_get_contents($this->url);

        if (!$response || ($data = json_decode($response, true)) == null) {
            return false;
        }

        $data = json_decode($response, true);
        if ($data["code"] == 200) {
            $comics  = $data["data"]["results"];
        } else {
            echo "Error fetching data from API" . $data["status"];
        }
        return $comics;
    }

    public function getComic($id)
    {
        $this->url = "http://gateway.marvel.com/v1/public/comics/$id?ts=$this->ts&apikey=$this->publicKey&hash=$this->hash";
        @$response = file_get_contents($this->url);

        if (!$response || ($data = json_decode($response, true)) == null) {
            return false;
        }

        $data = json_decode($response, true);
        if ($data["code"] == 200) {
            $comic  = $data["data"]["results"][0];
        } else {
            echo "Error fetching data from API" . $data["status"];
        }
        return $comic;
    }
}
