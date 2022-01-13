<?php

namespace App\Http\Controllers;


use Auth;
use App\Models\Documento;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DownloadMediaController extends Controller
{
    public function show(Media $mediaItem)
   {
      return $mediaItem;
   }

   public function download($uuid) {

    $file = Documento::where([
        ['uuid', '=', $uuid],
        ['creado_por_id', '=', Auth::getUser()->id]
        ])->first();

    $media = $file->getFirstMedia();
    
    return $media;
    //$pathToFile = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . $file->id . DIRECTORY_SEPARATOR . $media->file_name );

    //return Response::download($pathToFile);
}
}
