<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    public $table = "product_types";

    protected $guarded;

    public function type(){
        return $this->hasMany(CategoryType::class);
    }
}
