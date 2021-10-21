<form action="Добавить%20фотографию%20в%20проект.php" method="post" enctype="multipart/form-data">
<input type="file" name="image">
<button type="submit">Submit</button>
</form>

<?php

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];
$type = $_FILES['image']['type'];

move_uploaded_file($tmp_name, "/" . $name);
