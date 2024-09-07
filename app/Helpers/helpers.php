<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('uploadFile')) {
    function uploadFile($file, $directory = 'uploads', $customFileName = null, $oldFilePath = null)
    {
        if ($file) {

            if ($oldFilePath && Storage::exists($oldFilePath)) {
                Storage::delete($oldFilePath);
            }
            $fileName = ($customFileName ?? time()) . '.' . $file->getClientOriginalExtension();
            return $file->storeAs('public/' . $directory, $fileName);
        }
        return $oldFilePath;
    }
}
