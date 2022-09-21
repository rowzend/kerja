<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mutasi extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id','nama','nip','pangkat','jabas','unora','instansia','nohp','instansib','unorb','jabtu'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
