<?php
$conn = mysqli_connect('localhost','root','','sachin1') or die("database not found");
extract($_POST);
      
     if(isset($_POST['cat']))
     {
     $cat ="select category_name from category ";
     $show = mysqli_query($conn,$cat);
     $str ="";
     while($row = mysqli_fetch_array($show))
     {
     $str .= "<option value={$row['category_name']}>{$row['category_name']}</option>"; 
     }
     echo $str;
    }
      
      
   //made change above 
   

   //display record
     
    if(isset($_POST['table']))
    {
        $data ='<table class="table">
                <tr>
                <th>Recipe Name</th>
                <th>Category</th>
                <th>Range From</th>
                <th>Range  To</th>
                </tr>
            ';
             
             $display  = "select * from store";
             $result = mysqli_query($conn,$display);

              if(mysqli_num_rows($result)>0)
              {
                  while($row =  mysqli_fetch_array($result))
                  {
                    $data .= '<tr>
                                <td>'.$row['R_name'].'</td>
                                <td>'.$row['category'].'</td>
                                <td>'.$row['Range_from'].'</td>
                                <td>'.$row['Range_to'].'</td> 
                    
                       </tr>';

                  }
              }

             $data .= '</table>' ;

             echo $data;



    }
  //insert  record
  if(isset($_POST['name']) && isset($_POST['from']) && isset($_POST['to']) && 
  isset($_POST['category']))
  {
     $insert = "INSERT INTO `store`(`R_name`, `category`, `Range_from`, `Range_to`) VALUES
      ('$name','$category','$from','$to')";
  
      $result = mysqli_query($conn,$insert) or mysqli_error($conn);
  
       if($result)
       {
          echo " Record inserted" ;
       }
       else
       {
           echo " Record not inserted";
       }
  }



?>