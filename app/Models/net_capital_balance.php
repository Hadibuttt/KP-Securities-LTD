<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class net_capital_balance extends Model
{
    use HasFactory;
    
    protected $table='net_capital_balance';
    protected $primaryKey = 'id';
}
