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
     * Handle creating | updating | saving
     */
    public static function bootSluggable()
    {
        static::creating(function (Model $model) {
            $model->createSlug();
        });

        static::updating(function (Model $model) {
            $model->createSlug();
        });

        static::saving(function (Model $model) {
            $model->createSlug();
        });
    }

    /**
     * @return mixed
     */
    protected function createSlug()
    {
        return $this->setAttribute('slug', Slugify::make($this->getSlugFromField()));
    }

    /**
     * @return mixed
     */
    protected function getSlugFromField()
    {
        return $this->getAttribute($this->slugFrom());
    }
}
