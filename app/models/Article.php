<?php
/**
 * Created by PhpStorm.
 * User: Emre-Rezervasyon.com
 * Date: 25.09.2014
 * Time: 12:00
 */

class Article extends Eloquent{

    protected $table = 'article';

    const CREATED_AT = 'iDate';
    const UPDATED_AT = 'uDate';

    public function user()
    {
        return $this->belongsTo('User', 'userId');
    }

    public function comment()
    {
        return $this->hasMany('Comment','articleId');
    }

} 