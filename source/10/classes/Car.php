<?php

/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 24/05/2016
 * Time: 09:58
 */
class Car extends ACar
{
    public function go(){
        echo 'Тачка поехала</br>';
    }
    public function stop(){
        echo 'Тачка остановилась</br>';
    }

    public function displayWheelsNumber(){
        echo '</br>WheelsNumber: '.$this->wheels;
    }
    public function displayDoorsNumber(){
        $this->go();
        echo '</br>Doors Number: '.$this->doors;
    }

}