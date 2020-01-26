<?php

require_once 'AppController.php';

class StartController extends AppController {
    public function cos() {
        $this->render('start');
    }

    public function adminer() {
        $this->render('adminer');
    }
}