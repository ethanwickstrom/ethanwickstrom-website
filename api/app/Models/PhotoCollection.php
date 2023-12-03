<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PhotoCollection extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'description', 'visibility'];

    protected $searchableFields = ['*'];

    protected $table = 'photo_collections';

    public function photos(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class, 'photo_collection_photo');
    }
}
