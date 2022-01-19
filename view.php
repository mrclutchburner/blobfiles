<?php
    include 'db.php';
    
    $file = 'placement.pdf';
    $type = 'placement.pdf';
    header ('Content-type: application/pdf');
    header ('Content-Disposition: inline; type="' . $type . '"');
    header ('Content-Transfer-Encoding: binary');
    header ('Accept-Ranges: bytes');
    @readfile ('$file');
?>