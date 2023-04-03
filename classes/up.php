<?php
include('conn.php');
if (isset($_POST['aff'])) {
  if (empty($_POST['ptitle']) || empty($_POST['dpost']) || empty($_FILES['upost'])) {  
    $faux = "Veuillez remplir tous les champs obligatoires" ;   
  } else {    
    $title = $_POST['ptitle'];
    $dpost = $_POST['dpost'];
    
    // Image upload
    $target_dir = "images/"; // Change this to your desired upload directory
    $target_file = $target_dir . basename($_FILES["upost"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["upost"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $faux = "Le fichier n'est pas une image.";
        $uploadOk = 0;
    }

    

    // Check file size
    if ($_FILES["upost"]["size"] > 500000) { // Change this to your desired maximum file size
        $faux = "Le fichier est trop grand.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $faux = "Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $faux = "Le fichier n'a pas été téléchargé.";
    // if everything is ok, try to upload file and store the file path in the database
    } else {
        if (move_uploaded_file($_FILES["upost"]["tmp_name"], $target_file)) {
            // Database insertion
            $sql = "INSERT INTO products (produit, description, photo) VALUES (:title, :dpost, :upost)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':title' => $title,
                ':dpost' => $dpost,
                ':upost' => $target_file
            ));
            $user_id = $pdo->lastInsertId();

            header('Location: panel.php');
            exit();
        } else {
            $faux = "Une erreur s'est produite lors du téléchargement du fichier.";
        }
    }
  }
}


?>