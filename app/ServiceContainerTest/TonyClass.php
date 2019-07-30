<?php
namespace App\ServiceContainerTest;


class TonyClass implements TonyInterface {

    public function test($ok)
    {
        return $ok;
    }
}