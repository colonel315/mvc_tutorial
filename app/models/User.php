<?php

/**
 * Created by PhpStorm.
 * User: Trey
 * Date: 12/14/2015
 * Time: 8:06 PM
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    public $name;

    public $timestamps = [];

    protected $fillable = ['username', 'email'];
}