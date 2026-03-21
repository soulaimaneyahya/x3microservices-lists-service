<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lists extends Model
{
    use HasUuids, HasFactory, SoftDeletes;

    protected $table = 'lists';

    protected $fillable = ['name'];

    protected $hidden = ['deleted_at'];
}
