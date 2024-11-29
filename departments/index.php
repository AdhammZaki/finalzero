<?php 
include_once 'C:/xampp/htdocs/Final zero/app/dbconfig.php';

include_once "../shared/head.php";
include_once "../shared/navbar.php";
 
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $deleteQuery = "DELETE FROM `departments` WHERE id = $id";
    $delete = mysqli_query($con , $deleteQuery);
if ($delete){
    path ('department/index.php');
 }
}

$selectQuery = "SELECT * FROM `departments`";
$select = mysqli_query($con , $selectQuery);

?>

<div class="container mt-5">
    <div class="card bg-dark text-light">
    <div class="card-body table-responsive">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Departments</th>    
                    <th>Action</th>
                  </tr>
                 </thead>
                <tbody>
                <?php foreach ($select as $index => $department):?>
                    <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $department ['department'] ?></td>    
                    <td>
                    <a href="edit.php?edit=<?= $department ['id']?>" class="btn btn-warning">Edit</a>
                    <a href="?delete=<?= $department ['id']?>" class ="btn btn-danger">Delete</a>
                    </td>
                    </tr> 
                    <?php endforeach ;?>include_once
                </tbody>
            </table>
        </card-body>
    </div>
</div>
<?php 

include_once "../shared/script.php";
include_once "../shared/footer.php";

?> 