<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ٠٩/٠٨/٢٠٢١
 * Time: ٠٢:٥٧ م
 */

namespace App\Actions\CurrencyActions;


use App\Models\Currency;

class GetCurrency
{
      public static function execute($id){
          return Currency::find($id);
      }
}
