<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
    <div class="container">

     <div class="seletion-one w-75">
       <h3 class="text-center">Add your Recipe</h3>

        <div class="add-record">

        <div class="form-group ">
          <span>Recipe name</span>
          <input type="text" id="name" class="form-control" placeholder="enter name">
        </div>

          <div class="form-group">
            <label>category</label>
          <select class="form-control" id="category">
        	<option value="">Select Country</option>
        </select>
          </div>

          <div class="form-group ">
          <span>Range From</span>
          <input type="text"  id="from"class="form-control" placeholder="">
        </div>

        <div class="form-group ">
          <span>Range to </span>
          <input type="text" id="to" class="form-control" placeholder="">
        </div>
         <a href="#" class="text-primary  float-right">download csv</a>
        </div>
        <button onclick="addrecord();" type="button" class="btn btn-primary text-center ">Add Recipe</button>
        </div>


    </div>
     
    <div id="table">

    </div>

    


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>

</body>
</html>
