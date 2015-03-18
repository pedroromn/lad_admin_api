<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Project extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';


    public function postCreateProject(){

    }


    public function postUpdateProject($id){

    }

    public function postDeleteProject($id){

    }


    public function getAllProjects(){

    }

    public function getProjectById($id){

    }

}