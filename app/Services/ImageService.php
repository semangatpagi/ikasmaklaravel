<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImageService
{
    /**
     * Crop dan resize gambar menjadi 254x254 pixel
     */
    public function cropAndResize(UploadedFile $file, string $path): string
    {
        // Buat instance gambar
        $image = Image::make($file);

        // Hitung dimensi untuk crop
        $width = $image->width();
        $height = $image->height();
        $size = min($width, $height);

        // Hitung posisi crop (center)
        $x = ($width - $size) / 2;
        $y = ($height - $size) / 2;

        // Crop dan resize gambar
        $image->crop($size, $size, $x, $y)
              ->resize(254, 254)
              ->encode();

        // Simpan gambar
        $filename = time() . '.' . $file->getClientOriginalExtension();
        Storage::put('public/' . $path . '/' . $filename, $image);

        return $path . '/' . $filename;
    }
} 