<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDOList extends Model
{
    use HasFactory;
    protected $table = 'list';
    protected $guarded = [];
    const STATUS = ['pending', 'completed'];
}