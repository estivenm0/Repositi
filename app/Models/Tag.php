<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function webs() : BelongsToMany
    {
        return $this->belongsToMany(Web::class, 'web_tags');
    }

}
