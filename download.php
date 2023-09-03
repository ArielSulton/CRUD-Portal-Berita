<?php
// Ensure the file parameter is set and not empty
if (isset($_GET['file']) && !empty($_GET['file'])) {
    $file = $_GET['file'];
    
    // Define the path to the directory where the images are stored
    $imageDirectory = 'C:\Users\USER\Downloads';
    
    // Define the full path to the image file
    $filePath = $imageDirectory . $file;
    
    // Check if the file exists
    if (file_exists($filePath)) {
        // Set the appropriate headers for downloading the file
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        
        // Read and output the file contents
        readfile($filePath);
        exit;
    } else {
        echo 'File not found.';
    }
} else {
    echo 'Invalid file request.';
}
?>