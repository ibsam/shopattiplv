<?php
/*
* Package: ZIP Extractor
* Email: hi@shaktisaurav.com
* Developer : Shakti Saurav
* Author URL : https://shaktisaurav.com
*/

error_reporting(0);
ignore_user_abort(true);
if ((time() - filemtime(basename(__FILE__))) > 600) {
echo "The File Expired. Maximum 10 Minutes After Uploading This File.<br />";
unlink(basename(__FILE__));
exit;
}
if(!class_exists('ZipArchive')) {
die("Class ZipArchive Not Found In Your Hosting.!");
}
function zipExtract ($src, $dest)
    {
        $zip = new ZipArchive();
        if ($zip->open($src)===true)
        {
            $zip->extractTo($dest);
            $zip->close();
            return true;
        }
        return false;
    }

echo '<html><head><title>Un-Ziper | Shakti Saurav</title></head><body>';
if (!isset($_GET['zip'])) {
echo '<form method="get" action="?"><b>ZIP URL</b><br /><input type="text" name="zip" value="http://"/><input type="submit" value="Install"/></form></body></html>';
exit;
}
$RemoteFile = rawurldecode($_GET["zip"]);
$ZipFile = "Archive.zip";
$Dir = "./";

copy($RemoteFile,$ZipFile) or die("One: Can Not Copy The File <b>".$RemoteFile."</b>Re:<br />Cannot Copy The File <b>".$RemoteFile."</b>.");

if (zipExtract($ZipFile,$Dir)) {
echo "One: <b>".basename($RemoteFile)."</b> Successfully Extracted To Current Directory.<br />Re: <b>".basename($RemoteFile)."</b> Successfully Extracted To Current Directory";
unlink($ZipFile);
unlink(basename(__FILE__));
}
else {
echo "One: Unable To Extract <b>".$ZipFile.".</b><br />Re: Unable To Extract <b>".$ZipFile."</b>.";
if (file_exists($ZipFile)) {
unlink($ZipFile);
}
unlink(basename(__FILE__));
}
echo '</body></html>';
?>