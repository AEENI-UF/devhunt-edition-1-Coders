<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Etudiant extends Model
{
  
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $fillable = ['matricule','nom', 'prenoms', 'date_naiss', 'lieu_naiss','sexe', 'adresse', 'cin', 'tel', 'email', 'password'];
    protected $primaryKey = 'matricule';
    protected $table = 'etudiants';
   // protected $hidden = ['password'];
}
