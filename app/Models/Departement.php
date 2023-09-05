<?php

namespace App\Models;


use App\Models\Personnel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;
    public function personnel(){
        return $this->belongTo(Personnel::class,'departement_id');
    }
}
