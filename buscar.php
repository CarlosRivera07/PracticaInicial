<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Initial Practice</title>
</head>
<body>
    <?php
        /*$boton1 = $_POST['boton1'];*/
    ?>
    <div style="text-align: center; margin-top: 1rem;">
    <form action="" method="post" > 
        <input type="submit" class="btn btn-outline-primary" name="boton1" id="View" value="Update Table" >
        <input type="submit" class="btn btn-outline-success" name="boton2" id="Download" value="Download Table">
        <form action="añadir.php" method="POST">
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#Modal" >Add Data</button>
        </form>
        
        <!-- Modal -->
        <form action="añadir.php" method="post">
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Add Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="añadir.php" method="post">
                <div class="modal-body">
                    
                        <div class="mb-3" style="text-align: left;">
                            <label for="name" class="col-form-label">Name: </label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-3" style="text-align: left;">
                            <label for="lastname" class="col-form-label">Last Name: </label>
                            <input type="text" name="lastName" class="form-control" id="lastName">
                        </div>
                        <div class="mb-3" style="text-align: left;">
                            <label for="phone" class="col-form-label">Phone Numer:  </label>
                            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber">
                        </div>
                        <div class="mb-3" style="text-align: left;">
                            <label for="age" class="col-form-label">Age: </label>
                            <input type="text" name="age" class="form-control" id="age">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>      
                    <input type="submit" name="save" id="" class="btn btn-success" value="Save New Data">
                </div>
            </form>
            </div>
        </div>
        </div>
        </form>
        <div class="form-group">
            <form action="buscar.php" method="POST">
                <label for="filter" style="margin-top: 1rem; ">Filter by: </label>
                <input type="text" id="filter" name="search">
                <input type="submit" name="search" id="filter" class="btn btn-secondary btn-sm" value="Filter Table">
            </form> 
            <br>
        </div>   
        </form>
    </div>
        <?php 
            $boton1 = "";
            if(isset($_POST['boton1'])) $boton1 = $_POST['boton1'];
            
            if($boton1){
                header("Location: muestra.php");
            }
                ?>
                <div>
                    <table class="table table-sm">
                            <thead >
                                <tr >
                                <th class="col-sm-2" scope="col" style="text-align: center;">idCustomer</th>
                                <th class="col-sm-2" scope="col" style="text-align: center;">Name</th>
                                <th class="col-sm-2" scope="col" style="text-align: center;">Last Name</th>
                                <th class="col-sm-2" scope="col" style="text-align: center;">Phone Number</th>
                                <th class="col-sm-2" scope="col" style="text-align: center;">Age</th>
                                </tr>
                            </thead>
                                <tbody id="datos">
                                    <?php
                                    $search = $_POST['search'];
                                    $con = new mysqli("localhost", "root", "", "db_practica");
                                    
                                    $op = "SELECT idCustomer, name, lastName, phoneNumber, age FROM customer where idCustomer like '$search' '%' 
                                    or name like '$search' '%' or lastName like '$search' '%' order by idCustomer desc";

                                    $qr = mysqli_query($con, $op);
                                    $mostrar = mysqli_fetch_row($qr);
                                    while($mostrar){
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $mostrar['0']?></td>
                                        <td style="text-align: center;"><?php echo $mostrar['1']?></td>
                                        <td style="text-align: center;"><?php echo $mostrar['2']?></td>
                                        
                                </tbody>
                        </table>
                    </div>
                <?php
            }
            ?>

</body>
</html>