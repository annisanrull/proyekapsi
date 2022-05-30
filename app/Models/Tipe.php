<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // relasi ke tabel calon
    public function calon()
    {
        return $this->hasMany(Calon::class);
    }
}
