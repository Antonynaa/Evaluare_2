<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public const NR_PER_PAGE = 20;
    protected $fillable = [
        'name',
        'description',
        'status',
        'created'
    ];
}
