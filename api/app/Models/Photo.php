<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Photo extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'thumbnail_path',
        'alt_text',
        'is_featured',
        'visibility',
        'order',
        'taken_at',
        'camera_make',
        'camera_model',
        'focal_length',
        'exposure_time',
        'aperture',
        'iso',
        'gps_latitude',
        'gps_longitude',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'is_featured' => 'boolean',
        'taken_at' => 'datetime',
    ];

    public function photoCollections(): BelongsToMany
    {
        return $this->belongsToMany(
            PhotoCollection::class,
            'photo_collection_photo'
        );
    }
}
