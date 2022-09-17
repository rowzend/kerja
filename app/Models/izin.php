<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class izin extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = [
        'nama',
        'nip',
        'pangkat',
        'jabas',
        'unora',
        'instansia',
        'nohp',
        'instansib',
        'unorb',
        'jabtu',
        'permohonan',
        'sizin',
        'skp',
        'sk'
    ];
}
