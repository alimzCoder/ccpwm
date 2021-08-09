<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ٠٩/٠٨/٢٠٢١
 * Time: ٠٢:٥٦ م
 */

namespace App\Actions\CurrencyActions;


use App\Models\Currency;

class DestroyCurrency
{
       public static function execute($id){
        $record = Currency::find($id);
        return $record->delete($id);
       }
}
