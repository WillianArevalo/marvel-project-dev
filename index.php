<?php
@session_start();

# Archivo de funciones auxiliares
require_once("helpers.php");
require_once("config.php");
require_once("resources/views-ajax/results.php");

# Quitar la última barra inclinada de la URL si la tuviera
$_SERVER['REQUEST_URI'] = rtrim($_SERVER['REQUEST_URI'], "/");

# Obtener el prefijo de la URL para el proyecto
$urlProject = "/marvel-project";
$urlProject = rtrim($urlProject, "/");

# Quitar el prefijo de la URL de la solicitud actual
$_SERVER['REQUEST_URI'] = str_replace($urlProject, '', $_SERVER['REQUEST_URI']);


if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "") {
    header("Location: /marvel-project/home");
    exit;
}


# Analizar la URL para determinar qué controlador y qué método se debe ejecutar
if ($_SERVER['REQUEST_URI'] == "/home") {
    $nameController = "HomeController";
    $fileController = __DIR__ . "/app/controllers/" . $nameController . ".php";
} else {
    # Verificar si la URL tiene parámetros (variables GET) y separarlos para
    # obtener la ruta del controlador
    $parametersRequest = explode("?", $_SERVER['REQUEST_URI']);
    if (count($parametersRequest) > 1) {
        $uriRequest = explode("/", $parametersRequest[0]);
    } else {
        $uriRequest = explode("/", $_SERVER['REQUEST_URI']);
    }
    $nameController = ucfirst($uriRequest[1] ?? "Home") . "Controller";
    $fileController = __DIR__ . "/app/controllers/" . $nameController . ".php";
}

# Verificar si el archivo del controlador existe, si no, mostrar un error 404
if (!file_exists($fileController)) {
    $nameController = "ErrorController";
    $fileController = __DIR__ . "/app/controllers/" . $nameController . ".php";
}

# Incluir el archivo del controlador e instanciar el objeto
require_once($fileController);
$controller = new $nameController();

# Verificar si un ID está presente en la URL
if (isset($uriRequest[3])) {
    $id = $uriRequest[3];
    $controller->set_id($id);
}

# Verificar si hay alguna acción presente en la URL y llamar al método correspondiente
# del controller mediante la función call_user_func_array que permite pasar un array
# de parámetros a la función, en lugar de pasarlos uno por uno.
if (isset($uriRequest[2])) {
    $action = $uriRequest[2];
    $parameters = array_slice($uriRequest, 4);
    if (method_exists($controller, $action)) {
        call_user_func_array([$controller, $action], $parameters);
    } else {
        //cargar_vista("error", "index", [], true, false);
    }
} else {
    # Si no hay acción presente en la URL, llamar al método index
    $controller->index();
}
