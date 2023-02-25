<?php

class IndexController extends Controller
{

    public function index()
    {

        $this->view->render('index');

    }

    public function contact()
    {
        $this->view->render('contact');

    }

    public function love()
    {

        $this->view->render('love');

    }

    public function oib()
    {

        $this->view->render('oib');

    }

    public function chart()
    {

        $this->view->render('chart');

    }

    public function login()
    {

        $this->view->render('login');

    }

    public function logout()
    {

        $this->view->render('logout');

    }

    public function authorization()
    {

        $this->view->render('authorization');

    }

    public function protected()
    {

        $this->view->render('protected');

    }



}