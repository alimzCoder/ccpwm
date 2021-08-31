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

class GetManAction
{
    public static function execute($id){
        return Manufacturer::find($id);
    }
}
