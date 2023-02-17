<?php
include 'header.php';
$dir = "./downloads/";
?>
<html>
<link rel="stylesheet" type="text/css" href="css/Download.css">
<link rel="icon" href="image/amirulHubIcon.png">
<title>
    Downloads
</title>
<body>
<table class="styled-table">
    <thead>
        <tr>
            <td>
                NO.
            </td>
            <td>
                Filename
            </td>
            <td>
                File Size
            </td>
        </tr>
    </thead>
    <tbody>
<?php
$i = 1;
// Open a directory, and read its contents
if (is_dir($dir)){
    if ($dh = opendir($dir))
    { 
        while (($file = readdir($dh)) !== false)
        {
            if(strpos($file, ".exe"))
            {
            ?>
            <tr>
                <td>
                    <?php echo $i++ ?>
                </td>
                <td> <a href="download.php?download=<?php echo $file ?>"><?php echo $file ?></a></td>
                <td><?php echo number_format(filesize("./downloads/".$file)/1000/1000, 2) ?> MB</td>
            </tr>
            <?php
            }
        }
    closedir($dh);
    }
}

?>
</tbody>
</table>
</body>
</html>