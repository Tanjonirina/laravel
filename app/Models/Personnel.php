<?php

namespace App\Models;


use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable=['Matricule_P','nom','prenom','	telephone','Adresse','poste','departement_id','date_embouche','taux_horaire','image'];

    public function departement(){
        return $this->belongsTo(Departement::class,'departement_id');
    }

    public function findForPassport($personnel) {
        return $this->where('Matricule_P', $personnel)->first();
    }
}
