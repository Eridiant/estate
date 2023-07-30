<?php

namespace common\components;

use Yii;
use yii\base\Component;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;
use yii\imagine\Image;

class ImageResizer extends Component
{
    public $uploadedFile;

    // Method to resize an image based on given width and height
    public function resizeImage(UploadedFile $uploadedFile, $outputDirectory, $parameters)
    {
        $width = $parameters['width'];
        $height = $parameters['height'];
        $format = $parameters['format'] ?? 'jpg';

        $this->uploadedFile = $uploadedFile;

        // Ensure the output directory exists
        FileHelper::createDirectory(\Yii::getAlias($outputDirectory));

        // Get the source image dimensions
        $sourceImagePath = $this->uploadedFile->tempName;
        list($srcWidth, $srcHeight) = getimagesize($sourceImagePath);

        $imageSizeMultiplier = min([$this->getMultiplier($srcWidth / $width), $this->getMultiplier($srcHeight / $height)]);

        // Calculate the aspect ratios
        $srcRatio = $srcWidth / $srcHeight;
        $targetRatio = $width / $height;

        if (!$imageSizeMultiplier) {

            // Calculate the new dimensions based on the aspect ratios
            if ($srcRatio > $targetRatio) {
                $width = $srcWidth;
                $height = $srcWidth / $srcRatio;
            } else {
                $height = $srcHeight;
                $width = $srcHeight * $srcRatio;
            }
        }

        $quality = ['jpeg_quality' => 80];

        $filename = [];
        do {

            $filename["{$imageSizeMultiplier}x"] = uniqid() . "-{$imageSizeMultiplier}x.{$format}";

            $outputPath = \Yii::getAlias($outputDirectory) . DIRECTORY_SEPARATOR . end($filename);

            if (isset($parameters['crop'])) {
                Image::thumbnail($sourceImagePath, $width * $imageSizeMultiplier, $height * $imageSizeMultiplier)
                    ->save($outputPath, $quality);
            } else {
                Image::thumbnail($sourceImagePath, $width * $imageSizeMultiplier, $height * $imageSizeMultiplier)
                    ->save($outputPath, $quality);
            }

            $imageSizeMultiplier /= 2;
        } while ($imageSizeMultiplier >= 1);

        return $filename;
    }

    private function getMultiplier($result)
    {
        $imageSizeMultiplier = 0;

        // Check the result and assign the appropriate value to $imageSizeMultiplier
        if ($result >= 4) {
            $imageSizeMultiplier = 4;
        } elseif ($result >= 2) {
            $imageSizeMultiplier = 2;
        } elseif ($result >= 1) {
            $imageSizeMultiplier = 1;
        }

        return $imageSizeMultiplier;
    }
}