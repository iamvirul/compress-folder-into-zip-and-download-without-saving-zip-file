<?php
$zip_file = "./files/all-image.zip";

touch($zip_file);

$zip = new ZipArchive;
$this_zip = $zip->open($zip_file, ZipArchive::CREATE);

if ($this_zip) {
    $folder = opendir('./images');
    if ($folder) {
        while (false !== ($image = readdir($folder))) {
            if ($image !== "." && $image != "..") {
                $file_with_path = "./images/" . $image;
                $zip->addFile($file_with_path);
            }
        }
        closedir($folder);
    }

    $zip->close();

    if (file_exists($zip_file)) {
        $zip_file_name = "download.zip";
        header("Content-type: application/zip");
        header("Content-Disposition: attachment; filename=" . $zip_file_name);
        header("Content-Length: " . filesize($zip_file));
        readfile($zip_file);
        unlink($zip_file);
    }
}
?>
