<?php
/**
 * Created by PhpStorm.
 * Author: Codeminos SARL | Hassan Zeaiter
 * Email: hassan@codeminos.io
 * Date: ١٨/٠٨/٢٠٢١
 * Time: ٠٢:٥٩ م
 */

namespace App\Actions\UtilsActions;


use Illuminate\Support\Facades\Storage;

class StoreMediaAction
{
    public static function execute($file, $root = '', $disk = 'public')
    {
        return Storage::disk($disk)->put($root, $file);
    }
}
