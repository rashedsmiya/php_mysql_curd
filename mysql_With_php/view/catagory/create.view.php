
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
         <div class="section py-5">
            <div class="container my-5">
               <div class="row">
                  <div class="col-10 mx-auto">
                     <div class="card">
                        <div class="card-header d-flex justify-content-between align-item-center">
                           <h2>Categories Create</h2>
                        </div>
                        <div class="card-body">
                              <form action="store.php" method="POST">
                                    <div class="mb-3">
                                       <label for="name" class="form-label">Name</label>
                                       <input for="text" placeholder="Catagory Name" class="form-control" id="name" name="name"> <?= $name_err; ?>                                 
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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