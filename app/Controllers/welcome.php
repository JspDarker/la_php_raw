<?php

namespace App\Controllers;

require_once '../app/Core/Controller.php';

use App\Core\Controller;


class Welcome extends Controller
{
    public function __construct()
    {
        //echo "<h4> this is Welcome in Controllers</h4>";
        $data = ["thanhdndage@gmail.com"];
        $this->view('train', $data);
    }


}