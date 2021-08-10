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

class StoreTax
{
    public static function execute($inputs){
        // some conditions and rules can be added
        return Tax::create($inputs);
    }
}
