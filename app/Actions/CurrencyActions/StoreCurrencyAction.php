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

class StoreCurrencyAction
{
    public static function execute($inputs){
        // some conditions and rules can be added
        return Currency::create($inputs);
    }
}
