<?php

require_once 'AppController.php';

class DefaultController extends AppController
{
    public function login()
    {
        $this->render('login');
    }

    public function register()
    {
        $this->render('register');
    }

    public function main_menu()
    {
        $this->render('main_menu');
    }

    public function top_100()
    {
        $this->render('top_100');
    }

    public function add_question()
    {
        $this->render('add_question');
    }

    public function scores()
    {
        $this->render('scores');
    }
}
