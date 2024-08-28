<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'fk_department',
        'fk_designation',
        'phone_number',
        'created_at',
    ];

     // Define the department relationship
     public function department()
     {
         return $this->belongsTo(Department::class, 'fk_department');
     }
 
     // Define the designation relationship
     public function designation()
     {
         return $this->belongsTo(Designation::class, 'fk_designation');
     }
}
