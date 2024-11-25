<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['name', 'post_type'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
