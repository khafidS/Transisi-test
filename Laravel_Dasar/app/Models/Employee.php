<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable =
    [
        'nama', 'company_id', 'email'
    ];

    protected $hidden =
    [

    ];

    public function company ()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
