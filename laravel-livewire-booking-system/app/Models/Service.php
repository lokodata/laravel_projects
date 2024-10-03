<?php

namespace App\Models;

use Cknow\Money\Casts\MoneyDecimalCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'title', 'slug', 'duration', 'price', 'created_at', 'updated_at'
    ];

    protected $casts = [
        'price' => MoneyDecimalCast::class . ':PHP,true',
    ];

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
