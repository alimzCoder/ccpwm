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

class GetStatusAction
{
    public static function execute($id){
        return Status::find($id);
    }
}
