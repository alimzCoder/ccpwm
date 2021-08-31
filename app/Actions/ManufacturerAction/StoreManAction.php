<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٩/٠٨/٢٠٢١
 * Time: ٠٢:٣٣ م
 */

namespace App\Actions\ManufacturerAction;


use App\Models\Manufacturer;

class StoreManAction
{
    public static function execute($inputs){
        // some conditions and rules can be added
        return Manufacturer::create($inputs);
    }
}
