<?php
    $target_path ="foto/";
    $target_path = $target_path . basename(
    $_FILES['uploadedfile']['name']);
    if(move_uploaded_file( $_FILES['uploadedfile']['tmp_name'], $target_path)){
        echo "File " . basename($_FILES['uploadedfile']['name']) . " sukses diupload";
    }else{
        echo "Terjadi kegagalan upload, mohon ulangi lagi!";
    }
?>