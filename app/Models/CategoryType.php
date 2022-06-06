<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryType extends Model
{
    use HasFactory;

    public $table = "category_types";

    protected $guarded;

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
