<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class izin extends Model
{
    use HasFactory;

    // public function user(){
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    protected $fillable = [
        'user_id','nama','nip','pangkat','jabas','unora','instansia','nohp','instansib','unorb','jabtu','file1','file2'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
