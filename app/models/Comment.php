<?php
/**
 * Created by PhpStorm.
 * User: Emre-Rezervasyon.com
 * Date: 25.09.2014
 * Time: 14:07
 */

class Comment extends Eloquent{
    protected $table = 'comment';

    const CREATED_AT = 'iDate';
    const UPDATED_AT = 'uDate';

    public function user()
    {
        return $this->belongsTo('User', 'userId');
    }
} 