<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'profession',
        'salary'
    ];
    public function attributes()
{
    return $this->hasMany(Attribute::class);
}
}