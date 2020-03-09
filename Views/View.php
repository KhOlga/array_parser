<?php

namespace Views;

class View
{
    private $viewPath;
    function __construct($viewPath, array $params)
    {
        $this->viewPath = $viewPath;
        $this->view($params);
    }

    public function view(array $params)
    {
        extract($params);
        include $this->viewPath;
    }

}
