<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $primaryKey = 'id_division';
    
    protected $table = 'ref_division';
    
    protected $fillable = [
        'name',
        'description',
        'status',
        'type',        
    ];
}
