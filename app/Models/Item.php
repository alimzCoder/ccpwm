<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    public static $this;
    protected $fillable = ['name', 'image_url', 'status_id', 'manufacturer_id'];

    public function categories()
    {
      return $this->belongsToMany(ItemCategory::class, 'items_categories', 'item_id', 'category_id');
    }

    public function warehouse()
    {
        return $this->belongsToMany(Warehouse::class, 'items_warehouses', 'item_id', 'warehouse_id');
    }

    public function status()
    {
       return $this->belongsTo(Status::class,'status_id');
    }

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class,'manufacturer_id');
    }

}
