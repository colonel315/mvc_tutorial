<?php
/**
 * Created by PhpStorm.
 * User: Trey
 * Date: 12/14/2015
 * Time: 4:27 PM
 */

class Home extends Controller {
    public function index($name = '') {
        $this->view('home/index', ['name' => $name]);
    }

    public function create($username = '', $email = '') {
        User::create([
            'username' => $username,
            'email' => $email
        ]);
    }
}