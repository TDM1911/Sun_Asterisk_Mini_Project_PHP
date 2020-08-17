<?php

class Controller
{

    protected $folder = NULL;
    protected $content = NULL;

    //validate logged in status
    protected function auth()
    {
        if (!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] == false) {
            header(BASE_URL.'/index.php');
        }
    }

    //render view file.
    protected function render($view, $data = [], $layout = 'app')
    {
        // create path to files
        $viewPath = BASE_PATH."/Views/";
        $layoutPath = BASE_PATH."/Views/layouts/{$layout}.php";
        if (isset($this->folder)) {
            $viewPath = $view."{$this->folder}/{$view}.php";
        }
        else {
            $viewPath = $viewPath."{$view}.php";
        }
        // validate view
        if (!file_exists($viewPath)) {
            die("Page not found");
        }
        extract($data);
        ob_start();
        require_once($viewPath);
        $content = ob_get_clean();
        ob_end_clean();
        // validate layout
        if (!file_exists($layoutPath)) {
            die("Layout <b>'$layout'</b> not found");
        }
        require_once($layoutPath);
    }
}
