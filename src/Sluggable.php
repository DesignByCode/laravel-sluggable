<?php

namespace Designbycode\Sluggable;

use DesignByCode\Slugify\Slugify;
use Illuminate\Database\Eloquent\Model;

trait Sluggable
{
    /**
     * @return string
     */
    abstract public function slugFrom(): string;

    /**
     * Creating | Update | Saving watchers
     */
    public static function bootSluggable()
    {
        static::creating(callback: function (Model $model) {
            $model->createSlug();
        });
    }

    /**
     * @return string
     */
    public function getSlugField(): string
    {
        return $this->getAttribute($this->slugFrom());
    }

    /**
     * @return mixed
     */
    public function createSlug(): mixed
    {
        return $this->setAttribute('slug', Slugify::make($this->getSlugField()));
    }
}
