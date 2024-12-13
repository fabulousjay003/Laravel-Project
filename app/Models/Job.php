<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model
{
    use Hasfactory;
    protected $table = 'job_listings';
    protected $fillable = ['employer_id', 'title', 'salary',];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
