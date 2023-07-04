  <?php
  session_start();
  include('delete.php');
  include('classes/conn.php');
  include ('classes/logout.php');
  include('classes/up.php');
  include('classes/log1.php');
  if(!isset($_SESSION['id'])){
    header('location: login.php');
  }
  ?>
      <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="img1/fav.png" rel="icon">
	<title>MIP panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<style>
body{
  }
  .btn {
  background: #308f8a !important;
  background-image: -webkit-linear-gradient(top, #ADFF2F, #70ab11);
  background-image: -moz-linear-gradient(top, #ADFF2F, #70ab11);
  background-image: -ms-linear-gradient(top, #ADFF2F, #70ab11);
  background-image: -o-linear-gradient(top, #ADFF2F, #70ab11);
  background-image: linear-gradient(to bottom, #ADFF2F, #70ab11);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  -webkit-box-shadow: 0px 3px 15px #050405;
  -moz-box-shadow: 0px 3px 15px #050405;
  box-shadow: 0px 3px 15px #050405;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 7px 20px 7px 20px;
  text-decoration: none;
  color:black;
  font-family:'Oswald', sans-serif;
  font-weight:600;
  float:right;
}

.btn:hover {
  background: #3cb0fd;
  text-decoration: none;
}
.img{
  text-align:center;   
}
.form-control{
  background-color:white;
}
.fabtn{
  background-color:#8f0000 !important;
  color:white;
  float:left;
}
form.damn {
    text-align: center;
    width: 100%;
    display: block;
    padding: 1.5%;
    align-items: center;
}

table{
  color:white !important;
}
#myInput{
  text-align: left;
  width:100%;
  background-color: #308f8a00;
  color: white;
  font-size: 120%;
  margin: 15px;
  padding: 15px;
}


</style>
<body>
  
    <div class="container">
      
    <div class="header">
            
            <a href="index.php"><img src="img1/oko.png" class="img-fluid" width="295px" ></a>
            <br>
            <form method="post">
                <img src="" alt="" srcset="">
                <div class="user"><span style="color:white;">Connecté en tant que :</span> <?php echo $_SESSION['user'] ;?></div>
                <br>
                <button type="submit" class="btn" name="logout" id="logout">Se Déconnecter</button>
            </form>
           <br>
            
            <div class="news-container">
              <br>
            
          </div>
          <br>
      </div>
    <form method="post" enctype="multipart/form-data">
      <div class="container">
      <div class="mb-3">
            
            <label for="exampleFormControlInput1" class="form-label">Produit</label>
            <input type="title" class="form-control" id="exampleFormControlInput1" placeholder="title" name="ptitle" required>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="dpost" required></textarea>
            <br>
            
                <label class="form-label" for="customFile">Photo:</label><br>
                <input type="file" class="" id="customFile" placeholder="Upload image" name="upost" required/>

                <button class="btn btn-default" type="submit" name="aff">Afficher</button> </div>
            </div>

            </form>

 

<br>
<br>
</div>

<form method="get" class="damn">
<div class="input-group">
  <div class="input-group-prepend">
    
  </div>
  <input type="seo" id="myInput" class="form-control" placeholder="Rechercher...">
</div>
		<br>
		<div style="height: 500px; overflow-y: scroll;border: 1px solid #308F8A;">
  <table class="table table-dark table-striped table-bordered" >
    <thead>
      <tr>
        <th>Photo</th>
        <th>Produit</th>
        <th>Description</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php
        // Establish PDO connection to database
        try {
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $pdo->prepare("SELECT * FROM products");
          $stmt->execute();

          // Fetch data from database and display in table rows
          while ($row = $stmt->fetch()) {
            echo "<tr>";
            echo "<td><img src='{$row['photo']}' alt='Photo' width='50' height='50'></td>";
            echo "<td>{$row['produit']}</td>";
            echo "<td>{$row['description']}</td>";
            echo "<td>{$row['date']}</td>";
            echo "<td style='width:200px;'>";
            echo "<center><a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'><i class='fas fa-trash-alt'></i></a></center>";
            echo "</td>";
            echo "</tr>";
          }
        } catch(PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
      ?>
    </tbody>
  </table>
  </div>
</form>

    
    <br>
    

</body>
<script> 
 var input = document.getElementById("myInput");
  var tableRows = document.getElementById("myTable").getElementsByTagName("tr");

  // Add event listener to input field
  input.addEventListener("input", function() {
    // Convert input value to lowercase
    var inputValue = input.value.toLowerCase();

    // Loop through all table rows
    for (var i = 0; i < tableRows.length; i++) {
      // Get the cells in the current row
      var cells = tableRows[i].getElementsByTagName("td");

      // Loop through the cells and check if the cell value contains the input value
      var matchFound = false;
      for (var j = 0; j < cells.length; j++) {
        var cellValue = cells[j].textContent || cells[j].innerText;
        if (cellValue.toLowerCase().indexOf(inputValue) > -1) {
          matchFound = true;
          break;
        }
      }

      // Hide or show the row based on whether a match was found
      if (matchFound) {
        tableRows[i].style.display = "";
      } else {
        tableRows[i].style.display = "none";
      }
    }
  });
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
<?php ?>  
	
