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

class DestroyManAction
{
    public static function execute($id){
        $record = Manufacturer::find($id);
        return $record->delete($id);
    }
}
