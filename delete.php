<?php


include('classes/conn.php');


if(isset($_GET['id'])) {
  // Prepare and execute the SQL statement to delete the product from the database
  try {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
    $stmt->bindParam(":id", $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();

    // Redirect back to the product list page
    header("Location: panel.php");
    exit;
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}else{

}





?>