<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shore extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','location','number_of_umbrellas','number_of_bed','price','opening_date','closing_date','has_volley_beach','has_soccer_field'
    ];
}
