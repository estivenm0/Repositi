<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Web extends Model
{
    use HasFactory;

    protected $guarded =['id'];


    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'web_tags');
    }

    public function spaces() : BelongsToMany
    {
        return $this->belongsToMany(SpaceWebs::class);
    }
}
