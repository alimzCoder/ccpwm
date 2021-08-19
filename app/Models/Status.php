<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['name','value','model','text_color','bg_color'];
    public function itemCategories()
    {
         $this->hasMany(ItemCategory::class);
    }

    public function items()
    {
         $this->hasMany(Item::class);
    }
}
