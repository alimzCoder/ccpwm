<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٧/٠٨/٢٠٢١
 * Time: ١٢:٣٥ م
 */

namespace App\Actions\StatusActions;


use App\Models\Status;

class StoreStatusAction
{
    public static function execute($inputs){
        // some conditions and rules can be added
        return Status::create($inputs);
    }
}
