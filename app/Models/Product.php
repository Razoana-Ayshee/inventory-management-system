<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static select(string[] $array)
 * @method static find(int $id)
 */
class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];
}
