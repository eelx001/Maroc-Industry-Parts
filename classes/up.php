<?php
include('conn.php');

if (isset($_POST['aff'])) {
    if (empty($_POST['ptitle']) || empty($_POST['dpost']) || empty($_FILES['upost'])) {
        $faux = "Veuillez remplir tous les champs obligatoires";
    } else {
        $title = $_POST['ptitle'];
        $dpost = $_POST['dpost'];

        // Image upload
        $imageData = file_get_contents($_FILES["upost"]["tmp_name"]);
        $imageType = pathinfo($_FILES["upost"]["name"], PATHINFO_EXTENSION);
        $base64Image = base64_encode($imageData);
        $base64ImageWithType = 'data:image/' . $imageType . ';base64,' . $base64Image;

        // Database insertion
        $sql = "INSERT INTO products (produit, description, photo) VALUES (:title, :dpost, :upost)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':title' => $title,
            ':dpost' => $dpost,
            ':upost' => $base64ImageWithType
        ));
        $user_id = $pdo->lastInsertId();

        header('Location: panel.php');
        exit();
    }
}
?>
