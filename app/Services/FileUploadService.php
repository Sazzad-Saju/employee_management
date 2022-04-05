<?php

namespace App\Services;

use App\Http\Middleware\Employee;
use Illuminate\Support\Str;

class FileUploadService
{

    public function addFile($fileUploadInfo){
        $requestFileName = $fileUploadInfo['request_file_name'];

        $fileName = time() . Str::random(8) . '.' . request()->$requestFileName->extension();
        request()->$requestFileName->move(storage_path('app/public/'.$fileUploadInfo['storage_folder']), $fileName);

        $fileUploadInfo['model_info']->update([
            $requestFileName=>'/'.$fileUploadInfo['storage_folder'].'/'.$fileName
        ]);
    }

    public function updateFile($fileUploadInfo)
    {
        $existingFile = $fileUploadInfo['existing_file'];
        $requestFileName = $fileUploadInfo['request_file_name'];
        $filePath = $filePath = storage_path('app/public/' . $fileUploadInfo['storage_folder'] . '/' .$fileUploadInfo['existing_file']);
        if (file_exists($filePath)) {
            unlink($filePath);
            $fileName = time() . Str::random(8) . '.' . request()->$requestFileName->extension();
            request()->$requestFileName->move(storage_path('app/public/' . $fileUploadInfo['storage_folder']), $fileName);

            $fileUploadInfo['model_info']->update([
                $requestFileName=>'/'.$fileUploadInfo['storage_folder'].'/'.$fileName
            ]);
        }
    }
}
