<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scan extends Model
{
    use HasFactory;

    protected $table = 'scan'; 

    protected $fillable = [
        'titre',
        'description',
        'date_ajout',
    ];

    protected $dates = [
        'date_ajout',
    ];

    protected $primaryKey = 'id_scan';

    public $timestamps = false; 
}
