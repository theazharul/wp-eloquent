<?php

namespace WPEloquent\ORM\WP;


use WPEloquent\ORM\Eloquent\Model;

class User extends Model
{
    protected $primaryKey = 'ID';
    protected $timestamp = false;

    public function meta()
    {
        return $this->hasMany('WPEloquent\ORM\WP\UserMeta', 'user_id');
    }
}