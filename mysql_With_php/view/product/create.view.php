
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
         <div class="section py-5">
            <div class="container my-5">
               <div class="row">
                  <div class="col-10 mx-auto">
                     <div class="card">
                        <div class="card-header d-flex justify-content-between align-item-center">
                           <h2>Product Create</h2>
                        </div>
                        <div class="card-body">
                              <form action="store.php" method="POST">
                                    <div class="mb-3">
                                       <label for="name" class="form-label">Name</label>
                                       <input for="text" placeholder="product Name" class="form-control" id="name" name="name">
                                       <span class="text-danger"><?= $name_err; ?></span>           
                                    </div>
                                    <div class="mb-3">
                                       <label for="name" class="form-label">Catagory</label>
                                       <select class="form-select" name="category_id" aria-label="Default select example">
                                          <option selected>Select Catagory</option>
                                          <?php foreach($catagories as $catagory): ?>
                                             <option value="<?= $catagory['id']; ?>"><?= $catagory['name']; ?></option>
                                          <?php endforeach; ?>
                                       </select>
                                       <span class="text-danger"><?= $cat_err; ?></span>
                                    </div>
                                    <div class="mb-3">
                                       <label for="price" class="form-label">Price</label>
                                       <input for="text" placeholder="Product Price" class="form-control" id="price" name="price">
                                       <span class="text-danger"><?= $price_err; ?></span>
                                    </div>
                                    <div class="mb-3">
                                       <label for="image" class="form-label">Image</label>
                                       <input for="file"  class="form-control" id="image" name="image">
                                       <span class="text-danger"><?= $image_err; ?></span>
                                    </div>
                                    <div class="mb-3">
                                       <label for="description" class="form-label">Description</label>
                                       <textarea name="description" id="description" class="form-control"></textarea>
                                       <span class="text-danger"><?= $description_err; ?></span>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>