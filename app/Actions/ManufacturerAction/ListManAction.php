<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٩/٠٨/٢٠٢١
 * Time: ٠٢:٣٢ م
 */

namespace App\Actions\ManufacturerAction;


use App\Models\Manufacturer;

class ListManAction
{
    public static function execute($inputs = [])
    {
        $records = new Manufacturer();
        if (!empty($inputs['search'])) {
            $records = $records->where('name', 'LIKE', '%' . $inputs['search'] . '%');
        }
        $records = $records->orderBy('id','DESC');

        return $records->get();
    }
}
