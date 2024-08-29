<?php

namespace App\Helper;

use App\Models\FirebaseToken;
use App\Models\News;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Helper
{
    // Upload Image
    public static function fileUpload($file, $folder, $name)
    {
        $imageName = Str::slug($name) . '.' . $file->extension();
        $file->move(public_path('uploads/' . $folder), $imageName);
        $path = 'uploads/' . $folder . '/' . $imageName;
        return $path;
    }

    public static function deleteFile($filePath)
    {
        if (File::exists($filePath)) {
            return File::delete($filePath);
        }
        return false;
    }

    // Make Slug
    public static function makeSlug($modal, $title)
    {
        $baseSlug = Str::slug($title);
        $slug = $baseSlug;

        $count = 1;

        while ($modal::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count;
            $count++;
        }
        return $slug;
    }

    public static function convertToEmbedUrl($url)
    {
        // Parse the URL to get its components
        $parsed_url = parse_url($url);

        if (isset($parsed_url['host'])) {
            // Check if the URL is already an embed URL
            if (strpos($parsed_url['host'], 'youtube.com') !== false && strpos($parsed_url['path'], '/embed/') === 0) {
                return $url; // It's already an embed URL
            }

            switch ($parsed_url['host']) {
                case 'youtu.be':
                    // Extract the video ID from the path for youtu.be
                    $video_id = ltrim($parsed_url['path'], '/');
                    $query_params = isset($parsed_url['query']) ? '?'.$parsed_url['query'] : '';
                    $embed_url = "https://www.youtube.com/embed/$video_id$query_params";
                    break;

                case 'www.youtube.com':
                case 'youtube.com':
                    // Extract the query parameters from the URL for youtube.com/watch
                    parse_str($parsed_url['query'], $query_params);
                    if (isset($query_params['v'])) {
                        $video_id = $query_params['v'];
                        $embed_url = "https://www.youtube.com/embed/$video_id";
                    } else {
                        return $url;
                    }
                    break;

                default:
                    return $url;
            }

            return $embed_url;
        }

        return $url;
    }


}
