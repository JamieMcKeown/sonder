<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';

    // relationships

    public function clients()
    {
        return $this->hasOne('app/Models/Client');
    }

    public function products()
    {
        return $this->hasOne('app/Models/Product');
    }
}
