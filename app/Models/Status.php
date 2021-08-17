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
        return $this->hasMany(ItemCategory::class);
    }
}
