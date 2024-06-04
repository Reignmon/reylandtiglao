<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees_tbl';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
        ];
    use HasFactory;
}
