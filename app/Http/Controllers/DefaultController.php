<?php

namespace App\Http\Controllers;

use Redirect;

class DefaultController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index() {
        echo 'test';

        return Redirect::action('DefaultController@index2');
    }
    
    public function index2(){
        echo 'test 2';
    }

}