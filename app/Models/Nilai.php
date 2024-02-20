<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['alternatif'];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'kecamatan_id');
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
