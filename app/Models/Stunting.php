<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunting extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'stunting';
    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'kelamin', 'tanggal_lahir', 'kode_posyandu', 'kode_dusun', 'usia_ukur'];
}
