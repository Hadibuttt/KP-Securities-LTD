<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financial_statements extends Model
{
    use HasFactory;
    
    protected $table='financial_statements';
    protected $primaryKey = 'id';
}
