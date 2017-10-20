

   <?php
    $titlee = $_POST['titlee'];
    $target_dir = "reqdoc/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    $new_filename = $target_dir . uniqid() . '.' . $imageFileType;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $new_filename))
        {   
            $filee = $new_filename;
            // insert query to insert the image path and other parameters in the table
        }
    else
        {
            echo "false";
        }
     ?>