<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Repository//SoundRepository.php';

class ClockController extends AppController {

    public function alarmclock()
    {   
        $soundRepository = new SoundRepository();
        if($this->isPost())
        {
            $soundID=$_POST['sound'];
            $sound = $soundRepository->getSound($soundID);
        }
        $this->render('alarmclock',['sounds'=>$sound]);
    }

    public function about()
    {   
        $this->render('about');
    }
}