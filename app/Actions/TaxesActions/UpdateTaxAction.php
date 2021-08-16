<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٠/٠٨/٢٠٢١
 * Time: ١٢:٤٢ م
 */

namespace App\Actions\TaxesActions;


use App\Models\Tax;

class UpdateTaxAction
{
    public static function execute($id,$inputs = []){
        $record = Tax::find($id);
        return $record->update($inputs);
    }
}
