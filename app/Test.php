<?php
namespace App;

class Test implements TestInterface {

    public function parler($text)
    {
        echo "Voici le text que vous m'aviez demandé ".$text;
    }

    public function executerUneTache($tache)
    {
        echo "Voici la tache a éxecuter ".$tache;
    }
}