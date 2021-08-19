<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٨/٠٨/٢٠٢١
 * Time: ٠٢:٥٩ م
 */

namespace App\Actions\UtilsActions;


use App\Actions\CountryAction\GetCountry;
use App\Actions\ItemActions\GetItemAction;
use Illuminate\Support\Facades\File;

class DeleteMediaAction
{
    public static function execute($id, $path = 'uploads/')
    {
        $record = GetItemAction::execute($id);
        File::delete($path . $record->image_url);
    }
}
