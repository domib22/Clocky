<?php

require_once 'AppController.php';

class ClockController extends AppController {

    public function alarmclock()
    {   
        $this->render('alarmclock');
    }
}