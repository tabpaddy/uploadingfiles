---

# Image Uploader Using PHP

This is a simple PHP script that allows users to upload images to a server. It includes basic validation to ensure that only image files are uploaded and sets a maximum file size limit.

## Installation

1. Clone or download this repository to your local machine.
2. Upload the contents of the repository to your web server.

## Usage

1. Navigate to the directory where you uploaded the files using a web browser.
2. Click on the "Choose File" button to select an image from your device.
3. Once the image is selected, click the "Upload" button to initiate the upload process.
4. Upon successful upload, the image will be saved to the `images` directory on the server.
5. You can view the uploaded image by clicking on the link provided after the upload process is complete.

## Configuration

You can configure certain parameters in the `display.php` file:

- **$targetDirectory**: The directory where uploaded images will be saved.
- **$allowedExtensions**: An array containing the allowed file extensions for upload.
- **$maxFileSize**: The maximum allowed file size (in bytes).

```php
$targetDirectory = "images/";
$allowedExtensions = array("jpg", "jpeg", "png");
```

## Security

- Ensure that the `images` directory has the appropriate permissions set to allow file uploads.
- Implement additional security measures such as file type checking, file name sanitization, and file size limitations to prevent malicious uploads.

## Disclaimer

This script is provided as-is without any warranty. Use it at your own risk.

---

