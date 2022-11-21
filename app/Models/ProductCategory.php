<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class ProductCategory extends Model implements HasMedia
{
    use HasFactory, SoftDeletes,InteractsWithMedia,NodeTrait,LogsActivity,HasSlug;

    protected $guarded = [];
    protected $table = 'product_categories';

    public function cat()
    {
        return $this->hasMany('App\Models\ProductCategoryPivot', 'category_id');
    }

    public function product()
    {
        return $this->hasManyThrough(
        // required
            'App\Models\Product', // the related model
            'App\Models\ProductCategoryPivot', // the pivot model

            // optional
            'product_id', // the current model id in the pivot
            'id', // the id of related model
            'id', // the id of current model
            'product_id' // the related model id in the pivot
        );
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('img')->width(1000)->optimize();
        $this->addMediaConversion('thumb')->width(400)->optimize();
        $this->addMediaConversion('small')->width(150)->optimize();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['title', 'slug']);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('title')->saveSlugsTo('slug');
    }
}
