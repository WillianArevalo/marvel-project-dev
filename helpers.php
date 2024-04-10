<?php


function url($path)
{
  return constant("URL")  . $path;
}

function assets($type, $name)
{
  return constant("URL") . "/public/assets/" . $type . "/" . $name;
}

function currentPage($page)
{
  $request = explode("?", $_SERVER['REQUEST_URI']);
  $uri = explode("/", $request[0]);
  return ($uri[1] === $page) ? 'active' : '';
}

function load_view($controller = null, $action = null, $params = [], $layout = true)
{
  $nameContoller = strtolower($controller);
  $view = __DIR__ . "/resources/views/" . $nameContoller . "/" . ($action ? $action . ".view.php" :  "index.view.php");

  if ($layout) {
    require_once(__DIR__ . "/resources/views/layouts/header.php");
  }

  if ($layout) {
    require_once(__DIR__ . "/resources/views/layouts/navbar.php");
  }

  if ($params) {
    extract($params);
  }

  require_once($view);


  if ($layout) {
    require_once(__DIR__ . "/resources/views/layouts/footer.php");
  }
}
