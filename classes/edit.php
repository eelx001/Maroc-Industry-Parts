<?php
include('conn.php');

// Edit operation
if (isset($_GET['edit'])) {
    $editId = $_GET['edit'];

    // Fetch the record to be edited from the database
    $sql = "SELECT * FROM products WHERE id = :editId";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':editId' => $editId));
    $row = $stmt->fetch();

    // Assign the fetched values to variables
    $editProduit = $row['produit'];
    $editDescription = $row['description'];
    $editPhoto = $row['photo'];
}

// Update operation
if (isset($_POST['update'])) {
    $editId = $_POST['editId'];
    $editProduit = $_POST['editProduit'];
    $editDescription = $_POST['editDescription'];
    $uploadOk = 1;
    // Check if a new photo file is uploaded
    if ($_FILES['editPhoto']['error'] === UPLOAD_ERR_OK) {
        // Image upload
        $target_dir = "images/"; // Change this to your desired upload directory
        $target_file = $target_dir . basename($_FILES["editPhoto"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check file size
        if ($_FILES["editPhoto"]["size"] > 500000) { // Change this to your desired maximum file size
            $faux = "Le fichier est trop grand.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $faux = "Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $faux = "Le fichier n'a pas été téléchargé.";
        } else {
            if (move_uploaded_file($_FILES["editPhoto"]["tmp_name"], $target_file)) {
                // Update the record in the database with the new photo path
                $sql = "UPDATE products SET produit = :editProduit, description = :editDescription, photo = :editPhoto WHERE id = :editId";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array(
                    ':editProduit' => $editProduit,
                    ':editDescription' => $editDescription,
                    ':editPhoto' => $target_file,
                    ':editId' => $editId
                ));

                header('Location: panel.php');
                exit();
            } else {
                $faux = "Une erreur s'est produite lors du téléchargement du fichier.";
            }
        }
    } else {
        // Update the record in the database without changing the photo
        $sql = "UPDATE products SET produit = :editProduit, description = :editDescription WHERE id = :editId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':editProduit' => $editProduit,
            ':editDescription' => $editDescription,
            ':editId' => $editId
        ));

        header('Location: panel.php');
        exit();
    }
}
?>

