
        $(document).ready(function ()
        {          
           
          function cat()
            {
               var cat = "cat"
              $.ajax({
                url:"backend.php",
                type:"POST",
                data:{cat : cat},
                success:function (data)
                {
                  $('#category').append(data);
                }
              })
            }
     
          cat();
         
        })
        function loaddata()
         {
            var table= "read";
            $.ajax({
                type: "POST",
                url: "backend.php",
                data: {table : table},
                
                success: function (data) 
                {
                  $('#table').html(data); 
                     
                }
            }); 
         } 
  
    /*add_record*/

      function addrecord()
      {
         let name = $('#name').val();
         let from  = $('#from').val();
         let to  = $('#to').val();
         let category  = $('#category').val();


          alert(name + from + to + category);

          $.ajax({
              url:"backend.php",
              type:"POST",
              data:{name : name , from :from , to : to ,category :category},
              success : function (data)
              {
                loaddata();
                
                 //$('#content').html(data); 
                 
              }
              
          })
      }
