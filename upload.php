<?php
if ($_POST['file_name'] && $_FILES['file']['type']) {
    $uploads_dir = __DIR__. '/upload';
    $upload_name = basename($_POST['file_name']).'.'.basename($_FILES['file']['type']);
    $uploadFiles = $uploads_dir. $upload_name;
    $upload_size = round($_FILES['file']['size'] / 1000);

    move_uploaded_file($_FILES['file']['tmp_name'], $uploadFiles);
    echo "Файл размером «<b>$upload_size КБ</b>» сохранен c именем «<b>$upload_name</b>» в папку «<b>$uploads_dir</b>»";
} else {
    header('Location: ./index.html');
}