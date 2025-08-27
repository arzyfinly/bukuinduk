<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigKepalaSekolah extends Model
{
    use HasFactory;
    protected $table = 'config_kepala_sekolah';
    protected $guarded = ['id'];
}
