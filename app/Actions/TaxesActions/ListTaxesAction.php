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

class ListTaxesAction
{
    public static function execute($inputs = [])
    {
        $records = new Tax();
        if (!empty($inputs['search'])) {
            $records = $records->where('index', 'LIKE', '%' . $inputs['search'] . '%');
        }
        $records = $records->orderBy('id','DESC');

        return $records->get();
    }
}
