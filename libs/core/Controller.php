<?php

class Controller
{

    /**
     * Render view
     * @param string $view
     * @param array type $data
     * @return type
     */
    protected function render($view, $data = [])
    {

        extract($data, EXTR_SKIP);

        ob_start();

        require 'views/'.$view;

        $render = ob_get_contents();

        ob_end_clean();

        echo $render;
    }
}