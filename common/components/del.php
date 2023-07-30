<?php

namespace common\components;

use yii\base\Component;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

class ImageResizer extends Component
{
    // Define the directory where the resized images will be stored
    public $outputDirectory = '@webroot/uploads/resized';

    // Method to resize an image based on given width and height
    public function resizeImage(UploadedFile $uploadedFile, $width, $height)
    {
        // Ensure the output directory exists
        FileHelper::createDirectory(\Yii::getAlias($this->outputDirectory));

        // Get the source image dimensions
        $sourceImagePath = $uploadedFile->tempName;
        list($srcWidth, $srcHeight) = getimagesize($sourceImagePath);

        // Calculate the aspect ratios
        $srcRatio = $srcWidth / $srcHeight;
        $targetRatio = $width / $height;

        // Calculate the new dimensions based on the aspect ratios
        if ($srcRatio > $targetRatio) {
            $newWidth = $width;
            $newHeight = $width / $srcRatio;
        } else {
            $newHeight = $height;
            $newWidth = $height * $srcRatio;
        }

        // Create a new image resource
        $targetImage = imagecreatetruecolor($newWidth, $newHeight);

        // Get the file extension to determine the image type
        $extension = $uploadedFile->extension;

        // Load the source image based on the file extension
        switch (strtolower($extension)) {
            case 'jpg':
            case 'jpeg':
                $sourceImage = imagecreatefromjpeg($sourceImagePath);
                break;
            case 'png':
                $sourceImage = imagecreatefrompng($sourceImagePath);
                break;
            case 'gif':
                $sourceImage = imagecreatefromgif($sourceImagePath);
                break;
            default:
                throw new \InvalidArgumentException('Unsupported image type.');
        }

        // Resize the image
        imagecopyresampled($targetImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $srcWidth, $srcHeight);

        // Generate a unique filename for the resized image
        $filename = uniqid('resized_', true) . '.' . $extension;

        // Save the resized image to the output directory
        $outputPath = \Yii::getAlias($this->outputDirectory) . DIRECTORY_SEPARATOR . $filename;

        // Save the resized image based on the file extension
        switch (strtolower($extension)) {
            case 'jpg':
            case 'jpeg':
                imagejpeg($targetImage, $outputPath);
                break;
            case 'png':
                imagepng($targetImage, $outputPath);
                break;
            case 'gif':
                imagegif($targetImage, $outputPath);
                break;
        }

        // Free up memory by destroying the image resources
        imagedestroy($sourceImage);
        imagedestroy($targetImage);

        // Check if the original image is more than twice the required size
        if ($srcWidth > $width * 2 && $srcHeight > $height * 2) {
            // Calculate dimensions for the twice required size
            $twiceWidth = $width * 2;
            $twiceHeight = $height * 2;

            // Create a new image resource for the twice required size
            $twiceTargetImage = imagecreatetruecolor($twiceWidth, $twiceHeight);

            // Resize the image for the twice required size
            imagecopyresampled($twiceTargetImage, $sourceImage, 0, 0, 0, 0, $twiceWidth, $twiceHeight, $srcWidth, $srcHeight);

            // Generate a unique filename for the twice required size image
            $twiceFilename = uniqid('resized_twice_', true) . '.' . $extension;

            // Save the twice required size image to the output directory
            $twiceOutputPath = \Yii::getAlias($this->outputDirectory) . DIRECTORY_SEPARATOR . $twiceFilename;

            // Save the twice required size image based on the file extension
            switch (strtolower($extension)) {
                case 'jpg':
                case 'jpeg':
                    imagejpeg($twiceTargetImage, $twiceOutputPath);
                    break;
                case 'png':
                    imagepng($twiceTargetImage, $twiceOutputPath);
                    break;
                case 'gif':
                    imagegif($twiceTargetImage, $twiceOutputPath);
                    break;
            }

            // Free up memory by destroying the image resources
            imagedestroy($twiceTargetImage);

            // Return both filenames as an array
            return [
                'filename' => $filename,
                'twiceFilename' => $twiceFilename,
            ];
        }

        return $filename;
    }
}

class ImageResizerC extends Component
{
    // Define the directory where the resized images will be stored
    public $outputDirectory = '@webroot/uploads/resized';

    // Method to resize an image based on given width and height
    public function resizeImage(UploadedFile $uploadedFile, $width, $height, $crop = 0)
    {
        // Ensure the output directory exists
        FileHelper::createDirectory(\Yii::getAlias($this->outputDirectory));

        // Get the source image dimensions
        $sourceImagePath = $uploadedFile->tempName;
        list($srcWidth, $srcHeight) = getimagesize($sourceImagePath);

        // Calculate the aspect ratios
        $srcRatio = $srcWidth / $srcHeight;
        $targetRatio = $width / $height;

        if ($crop) {
            // Crop the image to the specified size
            $cropWidth = $srcRatio > $targetRatio ? $srcHeight * $targetRatio : $srcWidth;
            $cropHeight = $srcRatio > $targetRatio ? $srcHeight : $srcWidth / $targetRatio;

            // Calculate the cropping position to center the image
            $x = ($srcWidth - $cropWidth) / 2;
            $y = ($srcHeight - $cropHeight) / 2;

            // Create a new image resource for the cropped image
            $targetImage = imagecreatetruecolor($width, $height);

            // Get the file extension to determine the image type
            $extension = $uploadedFile->extension;

            // Load the source image based on the file extension
            switch (strtolower($extension)) {
                case 'jpg':
                case 'jpeg':
                    $sourceImage = imagecreatefromjpeg($sourceImagePath);
                    break;
                case 'png':
                    $sourceImage = imagecreatefrompng($sourceImagePath);
                    break;
                case 'gif':
                    $sourceImage = imagecreatefromgif($sourceImagePath);
                    break;
                default:
                    throw new \InvalidArgumentException('Unsupported image type.');
            }

            // Crop the image
            imagecopyresampled($targetImage, $sourceImage, 0, 0, $x, $y, $width, $height, $cropWidth, $cropHeight);

            // Generate a unique filename for the cropped image
            $filename = uniqid('cropped_', true) . '.' . $extension;
        } else {
            // Calculate the new dimensions based on the aspect ratios
            if ($srcRatio > $targetRatio) {
                $newWidth = $width;
                $newHeight = $width / $srcRatio;
            } else {
                $newHeight = $height;
                $newWidth = $height * $srcRatio;
            }

            // Create a new image resource for the resized image
            $targetImage = imagecreatetruecolor($newWidth, $newHeight);

            // Get the file extension to determine the image type
            $extension = $uploadedFile->extension;

            // Load the source image based on the file extension
            switch (strtolower($extension)) {
                case 'jpg':
                case 'jpeg':
                    $sourceImage = imagecreatefromjpeg($sourceImagePath);
                    break;
                case 'png':
                    $sourceImage = imagecreatefrompng($sourceImagePath);
                    break;
                case 'gif':
                    $sourceImage = imagecreatefromgif($sourceImagePath);
                    break;
                default:
                    throw new \InvalidArgumentException('Unsupported image type.');
            }

            // Resize the image
            imagecopyresampled($targetImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $srcWidth, $srcHeight);

            // Generate a unique filename for the resized image
            $filename = uniqid('resized_', true) . '.' . $extension;
        }

        // Save the image to the output directory
        $outputPath = \Yii::getAlias($this->outputDirectory) . DIRECTORY_SEPARATOR . $filename;

        // Save the image based on the file extension
        switch (strtolower($extension)) {
            case 'jpg':
            case 'jpeg':
                imagejpeg($targetImage, $outputPath);
                break;
            case 'png':
                imagepng($targetImage, $outputPath);
                break;
            case 'gif':
                imagegif($targetImage, $outputPath);
                break;
        }

        // Free up memory by destroying the image resources
        imagedestroy($sourceImage);
        imagedestroy($targetImage);

        return $filename;
    }
}
