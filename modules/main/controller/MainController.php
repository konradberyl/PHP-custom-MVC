<?php

class Main_MainController extends Controller
{

    public function home()
    {

        return $this->render('main/main.php');
    }
}