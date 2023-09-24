<?php
header('Content-Type: application/png');
header('Content-Disposition: attachment; filename="downloaded_pp.png"');
readfile('profilePicture.png');

?>
