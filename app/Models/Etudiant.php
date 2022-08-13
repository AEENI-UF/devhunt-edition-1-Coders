<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = ['matricule','nom', 'prenoms', 'date_naiss', 'lieu_naiss','sexe', 'adresse', 'cin', 'tel', 'email', 'password'];
    protected $primaryKey = 'matricule';
    protected $table = 'etudiants';
    protected $hidden = ['password'];
}
