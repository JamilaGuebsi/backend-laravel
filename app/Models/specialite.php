<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
    use HasFactory;
    protected $fillable = ['nomspecialite'];     public function livres()     {         return $this->hasMany(Livre::class);     } 
}
