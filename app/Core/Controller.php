<?php

namespace App\Core;
require_once 'CoreController.php';

/**
 * Class Controller
 *
 * @package App\Core
 *     [ Main Controller ]
 *          1/ method return data from Model
 *          2/ method load view from views
 *          ...
 *
 */
class Controller implements CoreController
{



    /**
     * @var $model
     */
    public function model($model)
    {
        // TODO: Implement model() method.
        require_once "../app/Models/".$model. ".php";

    }

    /**
     * @var $views : from views
     * @var $data : from database
     * @load a view
     */
    public function view( $views = "welcome", $data = [])
    {
        // TODO: Implement view() method.
        //echo "<h4> this is Welcome in Controllers</h4>";
        require_once "../app/views/".$views.".dev.php";
    }
}