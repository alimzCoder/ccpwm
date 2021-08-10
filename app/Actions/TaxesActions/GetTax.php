<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٠/٠٨/٢٠٢١
 * Time: ١٢:٤١ م
 */

namespace App\Actions\TaxesActions;


use App\Models\Tax;

class GetTax
{
    public static function execute($id){
        return Tax::find($id);
    }
}
