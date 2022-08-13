<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    protected $fillable = ['id_niveau','design_niveau'];
    protected $primaryKey = 'id_niveau';
    protected $table = 'niveaux';
}