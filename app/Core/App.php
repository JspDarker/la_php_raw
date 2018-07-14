<?php
/**
 * Created by PhpStorm.
 * User: storm
 * Date: 14/07/2018
 * Time: 14:32
 */

namespace App\Core;


class App
{
    protected $money;


    public function __construct()
    {
        require_once "../app/Controllers/welcome.php";


        echo "<h2> this is App in Core</h2>";

    }



    public function setMoney($money)
    {
        $this->money = $money;
    }

    public function getMoney()
    {
        return $this->money;
    }
}