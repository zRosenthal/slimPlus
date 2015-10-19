<?php
/**
 * Created by PhpStorm.
 * User: zacharyrosenthal
 * Date: 10/16/15
 * Time: 11:23 AM
 */
class User extends Illuminate\Database\Eloquent\Model
{
    protected $table = 'user';

    protected $fillable = ['name'];
}