<?php

namespace CoffeeCode\Uploader;

/**
 * Class CoffeeCode Image
 *
 * @author Robson V. Leite <https://github.com/robsonvleite>
 * @package CoffeeCode\Uploader
 */
class Image extends Uploader
{
    /**
     * Allow jpg, png and gif images, use from check. For new extensions check the imageCrete method
     * @var array allowed media types
     */
    protected static $allowTypes = [
        "image/jpeg",
        "image/png",
        "image/gif",
        "image/webp",
    ];

    /**
     * @param array $image
     * @param string $name
     * @param int $width
     * @param array|null $quality
     * @return string
     * @throws \Exception
     */
    public function upload(array $image, string $name, int $width = 2000, ?array $quality = null): string
    {
        $optName = preg_replace('/^\s+|\s+$/u', '', $name);

        if (empty($image['type'])) {
            throw new \Exception("Not a valid data from image");
        }

        if (!$this->imageCreate($image)) {
            throw new \Exception("Not a valid image type or extension");
        } else {
            $this->name($optName);
        }

        if ($this->ext == "gif") {
            move_uploaded_file("{$image['tmp_name']}", "{$this->path}/{$this->name}");
            return "{$this->path}/{$this->name}";
        }

        $this->imageGenerate($width, ($quality ?? ["jpg" => 75, "png" => 5, "webp" => 90]));
        return "{$this->path}/{$this->name}";
    }

    /**
     * Image create and valid extension from mime-type
     * https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types#Image_types
     *
     * @param array $image
     * @return bool
     */
    protected function imageCreate(array $image): bool
    {
        if ($image['type'] == "image/jpeg") {
            $this->file = imagecreatefromjpeg($image['tmp_name']);
            $this->ext = "jpg";
            $this->checkAngle($image);
            return true;
        }

        if ($image['type'] == "image/png") {
            $this->file = imagecreatefrompng($image['tmp_name']);
            $this->ext = "png";
            return true;
        }

        if ($image['type'] == "image/gif") {
            $this->ext = "gif";
            return true;
        }

        if ($image['type'] == "image/webp") {
            $this->file = imagecreatefromwebp($image['tmp_name']);
            $this->ext = "webp";
            return true;
        }

        return false;
    }

    /**
     * @param int $width
     * @param array $quality
     */
    private function imageGenerate(int $width, array $quality): void
    {
        $fileX = imagesx($this->file);
        $fileY = imagesy($this->file);
        $imageW = ($width < $fileX ? $width : $fileX);
        $imageH = ($imageW * $fileY) / $fileX;
        $imageCreate = imagecreatetruecolor($imageW, $imageH);

        if ($this->ext == "jpg") {
            imagecopyresampled($imageCreate, $this->file, 0, 0, 0, 0, $imageW, $imageH, $fileX, $fileY);
            imagejpeg($imageCreate, "{$this->path}/{$this->name}", $quality['jpg']);
        }

        if ($this->ext == "png") {
            imagealphablending($imageCreate, false);
            imagesavealpha($imageCreate, true);
            imagecopyresampled($imageCreate, $this->file, 0, 0, 0, 0, $imageW, $imageH, $fileX, $fileY);
            imagepng($imageCreate, "{$this->path}/{$this->name}", $quality['png']);
        }

        if ($this->ext == "webp") {
            imagealphablending($imageCreate, false);
            imagesavealpha($imageCreate, true);
            imagecopyresampled($imageCreate, $this->file, 0, 0, 0, 0, $imageW, $imageH, $fileX, $fileY);
            imagewebp($imageCreate, "{$this->path}/{$this->name}", $quality['webp']);
        }

        imagedestroy($this->file);
        imagedestroy($imageCreate);
    }

    /**
     * Check image (JPG, PNG) angle and rotate from exif data.
     * @param $image
     */
    /*private function checkAngle($image): void
    {
        $exif = @exif_read_data($image["tmp_name"]);
        $orientation = (!empty($exif["Orientation"]) ? $exif["Orientation"] : null);

        switch ($orientation) {
            case 8:
                $this->file = imagerotate($this->file, 90, 0);
                break;
            case 3:
                $this->file = imagerotate($this->file, 180, 0);
                break;
            case 6:
                $this->file = imagerotate($this->file, -90, 0);
                break;
        }

        return;
    } */

    private function checkAngle($image): void
    {
        // if (function_exists('exif_read_data')) {
        //     $exif = @exif_read_data($image["tmp_name"]);
        //     $orientation = (!empty($exif["Orientation"]) ? $exif["Orientation"] : null);
        // } else {
            
        //     $info = @getimagesize($image["tmp_name"]);
        //     $orientation = null;
        //     if (!empty($info[0]) && !empty($info[1])) {
        //         if ($info[0] < $info[1]) {
                    
        //             $orientation = 6;
        //         }
        //     }
        // }

        
        // if (!is_null($orientation)) {
        //     $this->file = imagecreatefromstring(file_get_contents($image["tmp_name"]));

        //     switch ($orientation) {
        //         case 8:
        //             $this->file = imagerotate($this->file, 90, 0);
        //             break;
        //         case 3:
        //             $this->file = imagerotate($this->file, 180, 0);
        //             break;
        //         case 6:
        //             $this->file = imagerotate($this->file, -90, 0);
        //             break;
        //     }
        // }
        return;
    }
}
