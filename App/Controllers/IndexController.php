<?php

namespace App\Controllers;

use SON\Controller\Action;

class IndexController extends Action {

    protected $view;

    public function index() {

        $this->view->cars = array("Mustang", "Ferrari");
        $this->render('index');
    }

    public function contact() {

        $this->view->car = array("Mustang", "Ferrari");
        $this->render('contact');
    }

}
?>

