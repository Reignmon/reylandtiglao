<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bsitModel extends Model
{   

    protected $table = 'sit3a_tbl';
    protected $primaryKey = 'id';

    protected $fillable = [
        'firstname',
        'lastname',
        'dateofbirth',
        'phone',
        ];
    use HasFactory;
}
