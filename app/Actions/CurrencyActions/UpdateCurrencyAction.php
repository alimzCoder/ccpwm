<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ٠٩/٠٨/٢٠٢١
 * Time: ٠٢:٥٨ م
 */

namespace App\Actions\CurrencyActions;


use App\Models\Currency;

class UpdateCurrencyAction
{

    public static function execute($id,$inputs = []){
        $record = Currency::find($id);
        return $record->update($inputs);
    }


}
