<?php

class User_UserController extends Controller
{

    public function showList()
    {
        $users = array(
            0 => array(
                'name' => 'Tadeusz',
                'profession' => 'head of development',
                'age' => 30
            ),
            1 => array(
                'name' => 'Konrad',
                'profession' => 'backend developer',
                'age' => 24
            ),
            3 => array(
                'name' => 'Edek',
                'profession' => 'head hunter',
                'age' => 26
            )
        );

        return $this->render('user/list.php', array('users' => $users));
    }
}