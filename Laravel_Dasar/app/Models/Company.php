<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable =
    [
        'nama', 'email', 'logo', 'website'
    ];

    protected $hidden =
    [

    ];

    public function employee ()
    {
        return $this->hasMany(Employee::class, 'company_id');
    }
}
