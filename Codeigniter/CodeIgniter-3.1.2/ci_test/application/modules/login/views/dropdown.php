<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script>
            $(document).ready(function(){
                
                $('#select_drop').change(function(){
                    var neww = $('#select_drop option:selected').val();
                    $.ajax({
                        url:"http://localhost:8080/Codeigniter/CodeIgniter-3.1.2/ci_test/login/fetch_city",
                        data:{id:neww},
                        type: "POST",
                        success:function(data){
                            
        alert(data);                   
        $('#get_city').html(data);
                        }
                    });
                    alert(neww);
                });
                
                $('#clickme').click(function(){
                    
                });
                
            });
        
        </script>
</head>
<body>

 
    <div>
         <select id="select_drop">
            <?php foreach($fetching as $new):?>
                <option value="<?php echo $new->id;?>"><?php echo $new->name;?></option>
            <?php endforeach;?>
        </select>

        
    </div>
    <div id="khgkjhg">
        
        <select id="get_city">
            <option>Select City</option>
        </select>
    </div>
    <button id="clickme">Refresh</button>

</body>
</html>
