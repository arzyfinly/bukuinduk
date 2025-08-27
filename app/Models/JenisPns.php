<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPns extends Model
{
    use HasFactory;

    protected $table    = 'jenis_pns';
    protected $guarded  = ['id'];
}
