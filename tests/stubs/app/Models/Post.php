<?php


namespace App\Models;

use Designbycode\Sluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    public function slugFrom(): string
    {
        return 'title';
    }

    protected $guarded = [''];
}
