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


}