<?php

namespace App\Models;

use App\Models\Tipe;
use App\Models\HasilVoting;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Calon extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // relasi ke tabel kategori
    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }

    //relasi ke hasil voting
    public function hasilvoting()
    {
        return $this->belongsTo(HasilVoting::class);
    }
}
