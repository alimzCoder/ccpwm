<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٢/٠٨/٢٠٢١
 * Time: ١١:٢٩ ص
 */

namespace App\Actions\WarehouseActions;


use App\Models\Warehouse;

class ListWarehousesAction
{
    public static function execute($inputs = [])
    {
        $records = new Warehouse();
        if (!empty($inputs['search'])) {
            $records = $records->where('name', 'LIKE', '%' . $inputs['search'] . '%');
        }
        $records = $records->orderBy('id','DESC');

        return $records->get();
    }
}
