<?php 


      require_once '../database/db_conections.php';
      $sql = "SELECT * FROM categories";

      $result = $conn->query($sql);

      $categories = [];

      if($result->num_rows > 0){
         $categories = $result->fetch_all(MYSQLI_ASSOC);
      }


?> 

 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

         <div class="section py-5">
            <div class="container my-5">
               <div class="row"> 
                  <div class="col-10 mx-auto">
                     <div class="card">
                        <div class="card-header d-flex justify-content-between align-item-center">
                           <h2>Categories List</h2>
                           <a href="create.php" class="btn btn-primary">Add New</a>
                        </div>
                        <div class="card-body">
                              <div class="table-responsive">
                                 <table class="table table-striped">
                                     <thead>
                                       <tr>
                                          <th>ID</th>
                                          <th>Name</th>
                                          <th>Status</th>
                                          <th>Created At</th>
                                          <th>Updated At</th>
                                          <th>Action</th>
                                       </tr>                                    
                                   </thead>  
                                  <tbody>
                                       <?php foreach ($categories as $key => $category): ?>
                                          <tr>
                                              <td><?= $key + 1 ?></td>
                                              <td><?= $category['name'] ?></td> 
                                              <td><span class="badge bg-<?= $category['status'] == 1 ? 'success' : 'danger' ?>"><?= $category['status'] = 1 ? 'Active' : 'Deactive' ?></span></td>
                                              <td><?= $category['created_at'] ?></td>
                                              <td><?= $category['updated_at'] ?></td>
                                              <td> 
                                                  <div class="btn-group">
                                                      <a href="edit.php?id=<?= $category['id'] ?>" class="btn btn-sm btn-primary">Edit</a>

                                                      <a href="status.php?id=<?= $category['id'] ?>" class="btn btn-sm btn-<?= $category['status'] == 1 ? 'warning ' : 'success' ?>"><?= $category['status'] == 1 ? 'Deactive' : 'Active' ?></a>

                                                      <a href="delete.php?id=<?= $category['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                                  </div> 
                                              </td>
                                          </tr>
                                       <?php endforeach; ?>  
                                 </tbody>  
                              </div>
                        </div>
                     </div> 
                  </div>
               </div>
            </div>
         </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>