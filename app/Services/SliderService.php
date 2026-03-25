<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

//CMS
use App\Models\Slider;

class SliderService
{
    public function upload(string $title, UploadedFile $file, object $model, bool $delete = false)
    {
        if ($delete) {
            File::delete(public_path('uploads/slider/' . $model->file));
            File::delete(public_path('uploads/slider/thumbs/' . $model->file));
            File::delete(public_path('uploads/slider/webp/' . pathinfo($model->file, PATHINFO_FILENAME) . '.webp'));
            File::delete(public_path('uploads/slider/thumbs/webp/' . pathinfo($model->file, PATHINFO_FILENAME) . '.webp'));
        }

        $slug = Str::slug($title);
        $name = date('His') . '_' . $slug . '.' . $file->getClientOriginalExtension();

        $file->storeAs('slider', $name, 'public_uploads');

        $filepath = public_path('uploads/slider/' . $name);
        $thumb_filepath = public_path('uploads/slider/thumbs/' . $name);

        // 🔥 RESIZE (najpierw)
        Image::make($filepath)
            ->fit(
                config('images.slider.big_width'),
                config('images.slider.big_height')
            )->save($filepath);

        Image::make($filepath)
            ->fit(
                config('images.slider.thumb_width'),
                config('images.slider.thumb_height')
            )->save($thumb_filepath);

        // 🔥 WEBP (po resize)
        $name_webp = date('His') . '_' . $slug . '.webp';

        $webp_path = public_path('uploads/slider/webp/' . $name_webp);
        $webp_thumb_path = public_path('uploads/slider/thumbs/webp/' . $name_webp);

        // upewnij się że katalogi istnieją
        File::ensureDirectoryExists(public_path('uploads/slider/webp'));
        File::ensureDirectoryExists(public_path('uploads/slider/thumbs/webp'));

        Image::make($filepath)->encode('webp', 75)->save($webp_path);
        Image::make($thumb_filepath)->encode('webp', 75)->save($webp_thumb_path);

        $model->update(['file' => $name]);
    }
}
