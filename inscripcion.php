<?php
include ('coneccion_db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <!-- alta -->
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center fs-3">
                        INSCRIPCION
                    </div>
                    <div class="card-body">
                        <form action="datos.php" method="post">
                            <div class="form-group mb-2">
                                <label for="" class="form-label">Nombre:</label>
                                <input type="text" name="nombre" id="" class="form-control">
                            </div>    

                            <div class="form-group mb-2">
                                <label for="" class="form-label">Apellido:</label>
                                <input type="text" name="apellido" id="" class="form-control">
                            </div>    

                            <div class="form-group mb-2">
                                <label for="" class="form-label">edad:</label>
                                <input type="text" name="edad" id="" class="form-control">
                            </div>  
                            
                            <div class="form-group mb-2">
                                <label for="" class="form-label">fecha_nacimiento:</label>
                                <input type="text" name="fecha" id="" class="form-control">
                            </div> 

                            <div class="form-group mb-2">
                                <label for="" class="form-label">DNI:</label>
                                <input type="text" name="DNI" id="" class="form-control">
                            </div> 

                            <div class="form-group mb-2">
                                <label for="" class="form-label">telefono:</label>
                                <input type="text" name="numero" id="" class="form-control">
                            </div> 

                            <div class="form-group mb-2">
                                <label for="" class="form-label">direccion:</label>
                                <input type="text" name="direccion" id="" class="form-control">
                            </div> 

                            <div class="form-group mb-2">
                                <input type="submit" name="boton" id="" class="btn btn-dark form-control">
                            </div>    

                        </form>
                    </div>
                </div>

            </div>
            <!-- tabla -->
            <div class="col-8">
                <div class="card">
                  <div class="card-header text-center fs-3">
                    ALUMNOS
                  </div>
                  <div class="card-body">
                    <form action="" method="post">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">id</th>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">edad</th>
                          <th scope="col">fecha de nacimiento</th>
                          <th scope="col">telefono</th>
                          <th scope="col">direccion</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                      <?php 
                      $sql = "SELECT * FROM alumnos";
                      $resultado = $conn->query($sql);
                      
                      if ($resultado -> num_rows > 0 ) {
                        while ($row = $resultado->fetch_assoc()) {
                          echo "<tr> <td>" . $row['id_alumno'] . "</td>";
                          echo "<td>" . $row['nombre'] . "</td>";
                          echo "<td>" . $row['apellido'] . "</td>";
                          echo "<td>" . $row['edad'] . "</td>";
                          echo "<td>" . $row['fecha_nacimiento'] . "</td>";
                          echo "<td>" . $row['dni'] . "</td>";
                          echo "<td>" . $row['telefono'] . "</td>";
                          echo "<td>" . $row['direccion'] . "</td></tr>";
                        }


                      }
                      ?>
                      </tr> 
                      </tbody>
                    </table>

                    </form>
                  </div>
                </div>
            </div>
        </div>

    </div>



    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>