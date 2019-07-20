<?php
  include("config.php");
  $query1="SELECT id_work,id_salary,name from Name";
  $hasil1 = mysqli_query($db,$query1);
  $row1 = mysqli_fetch_array($hasil1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header" style=
      "position: absolute;
      width: 150px;
      height: 106px;
      left: 48px;
      top: 0px;
    ">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="http://192.168.64.2/No7/1_7ugSMISUo8vYf9ILG6VmuQ.png"></a>
      <a class="navbar-brand" style="text-align:center;" href="#"><img src="http://192.168.64.2/No7/ARKADEMY BOOTCAMP.png"></a>
    </div>
  </div>
</nav>
<br><br>
  <hr>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-2">
    &nbsp;
  </div>
    <div class="col-8 text-center"> 
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Salary</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <?php foreach($row1 as $rw){
          var_dump($row1);
        ?>
          <tr>
            <td><?php echo $rw->name?></td>
            <td><?php echo $rw->id_work?></td>
            <td><?php echo $rw->id_salary?></td>
            <td><button class="btn btn-danger">Hapus</button><button class="btn btn-info">Ubah</button></td>
          </tr>
          <?php
        }
        ?>
        <tbody>
        </tbody>
      </table>
  </div>
  <div class="col-2">
    &nbsp;
  </div>
  </div>
</div>

</body>
</html>
