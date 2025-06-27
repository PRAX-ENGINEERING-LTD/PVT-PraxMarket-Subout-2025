<?php

namespace App\Traits;

use League\Flysystem\Sftp\SftpAdapter;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Config;

trait HandlesFileUpload
{

    private function uploadToSftp(UploadedFile $uploadedFile, $path)
    {
        $fileName = str_replace(' ', '-', $uploadedFile->getClientOriginalName());
        $baseName = pathinfo($fileName, PATHINFO_FILENAME);
        $uniqueBaseName = $baseName ."-".time();
        $fileExtension = $uploadedFile->getClientOriginalExtension();
        $uniqueFileName = $uniqueBaseName . "." . $fileExtension;

        $adapter = new SftpAdapter(Config::get('filesystems.disks.sftp'));
        $adapter->connect();
        if ($adapter->isConnected()) {
            $uploadedData = Storage::disk('sftp')->putFileAs($path, $uploadedFile, $uniqueFileName);
            if (!empty($uploadedData)) {
                return $uniqueFileName;
            } else {
                return false;
            }
        }
    }

}
