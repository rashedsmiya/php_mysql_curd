<!doctype html>
<html lang="en">
  
<head>
    <title>Add or Remove Input Fields Dynamically</title>
    <link rel="stylesheet" 
          href=
"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet"
          href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src=
"//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            margin-top: 1%;
            justify-content: center;
            align-items: center;
        }

        #rowAdder {
            margin-left: 17px;
        }
    </style>
</head>
  
<body>
    <h2 style="color:green">GeeksforGeeks</h2>
    <strong> 
          Adding and Deleting Input fields Dynamically
      </strong>
    <div style="width:40%;">
        <form action="example.php" method="post">
            <div class="">
                <div class="col-lg-12">
                    <div id="row">
                        <div class="input-group m-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-danger" 
                                        id="DeleteRow" 
                                        type="button">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </button>  
                            </div>
                            <input type="text" name="student[]" class="form-control m-input">
                        </div>
                    </div>

                    <div id="newinput"></div>
                    <button id="rowAdder" type="button" class="btn btn-dark">
                        <span class="bi bi-plus-square-dotted">
                        </span> ADD
                    </button>
                </div>
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $("#rowAdder").click(function () {
            newRowAdd =
                '<div id="row"> <div class="input-group m-3">' +
                '<div class="input-group-prepend">' +
                '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                '<i class="bi bi-trash"></i> Delete</button> </div>' +
                '<input type="text" name="student[]" class="form-control m-input"> </div> </div>';

            $('#newinput').append(newRowAdd);  
        });
        $("body").on("click", "#DeleteRow", function () {
            $(this).parents("#row").remove();
        })
    </script>
</body>
</html>
