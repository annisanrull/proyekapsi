<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilVoting extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function calon()
    {
        return $this->hasMany(Calon::class);
    }
}
