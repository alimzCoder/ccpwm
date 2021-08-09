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

class ListCurrencies
{
    public static function execute($inputs = [])
    {
        $records = new Currency();
        if (!empty($inputs['search'])) {
            $records = $records->where('name', 'LIKE', '%' . $inputs['search'] . '%');
        }
        $records = $records->orderBy('id','DESC');

        return $records->get();
    }

}
