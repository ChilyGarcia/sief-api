<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatisticalInformation extends Model
{
    use HasFactory;

    protected $table = 'statistical_informations';

    protected $fillable = ['enrolled_students',  'admitted_students', 'graduated_students', 'dropout_students', 'career_id'];
}
