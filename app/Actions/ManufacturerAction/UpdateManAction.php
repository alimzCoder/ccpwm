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

class UpdateManAction
{
    public static function execute($id,$inputs = []){
        $record = Manufacturer::find($id);
        return $record->update($inputs);
    }
}
