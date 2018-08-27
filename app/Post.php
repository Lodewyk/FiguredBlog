<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

/**
 * Class HomeController
 *
 * @category App
 *
 * @author   Lodewyk Duminy
 * @since    25 August 2018
 */
class Post extends Eloquent
{
    /**
     * @var string
     */
    protected $connection = 'mongodb';

    /**
     * @var string
     */
    protected $collection = 'post';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'content'
    ];
}