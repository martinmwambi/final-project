<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Livestock Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style1.css">
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">    
    </head >
    <body>  
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">LIVESTOCK MANAGEMENT SYSTEM</label>
            <ul>
                <li><a class="active" href="home.php">Home</a></li>
                <li><a href="about.html">About</a></li> 
                <li><a href="registervet.html">Register as Vet</a></li>
                <li><a href="contacts of vets.php">Contacts of Vets</a></li>
                <li><a href="index.php">Chat</a></li>
            </ul>    
        </nav><br>

     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search Diseases and their Treatment methods</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Input Symptom">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Disease</th>
                                    <th>Symptoms</th>
                                    <th>Treatment</th>
                                    
                                </tr> 
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","livestock diseases");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM diseases WHERE CONCAT(Disease,Symptoms,Treatment) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['Disease']; ?></td>
                                                    <td><?= $items['Symptoms']; ?></td>
                                                    <td><?= $items['Treatment']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>    
            
    </body>
</html> 

