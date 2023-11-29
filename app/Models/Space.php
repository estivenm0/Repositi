<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Space extends Model
{
    use HasFactory;

    protected $table = 'spaces';

    protected $fillable = ['user_id', 'name'];


    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);    
    }

    public function webs() : BelongsToMany 
    {
        return $this->belongsToMany(Web::class, 'space_webs', 'space_id', 'web_id');    
    }


}
