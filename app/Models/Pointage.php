<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointage extends Model
{
    protected $fillable=['Matricule_P','heure_entre','heure_sortie'];
    use HasFactory;
}
