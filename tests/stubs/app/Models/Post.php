<?php


namespace App\Models;

use Designbycode\Sluggable\Slug;
use Designbycode\Sluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    public function slugConfigure(): Slug
    {
        return Slug::create()->slugForm('title');
    }

    public function slugFrom(): string
    {
        return 'title';
    }

    protected $guarded = [''];
}
