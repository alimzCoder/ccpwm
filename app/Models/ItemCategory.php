<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name','parent_id','status_id'];

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id');
    }

    public function items()
    {
       return $this->belongsToMany(Item::class,'items_categories');
    }
}
