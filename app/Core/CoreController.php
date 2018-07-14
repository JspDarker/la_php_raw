<?php


namespace App\Core;


interface CoreController
{

    public function model($model);
    public function view($view,$data = []);

}