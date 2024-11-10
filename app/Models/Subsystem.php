<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsystem extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function conferences()
    {
        return $this->hasMany(Conference::class);
    }
}