
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<table class="table table-striped">
    <tr>
        <th>states</th>
        <th>capital</th>
    </tr>
    <!-- <tr>
        <td>Abia</td>
        <td>Umuahia</td>
    </tr> -->

    <?php
   printStateAndCapital();
    ?>
    
</table>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>





<?php 
function printStateAndCapital(){
    $statesAndCapitals = array(
        "Abia"=>"Umuahia",
        "Delta" => "Asaba",
        "Anambra" => "Awka",
        "Edo" => "Benin",
        "Crossriver" => "Calabar",
        "Akwa-Ibom" => "Uyo",
        
    );
//  Outputing a response when there is nothing tto view using count and the if or elseif.

        if (count($statesAndCapitals)>0){  


            foreach ($statesAndCapitals as $key => $value){
       
                echo "
                <tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr> 
            ";            
        } 
          
   } else {
         echo "
         
        <tr>
            <td>no states</td>
            <td>no capitals</td>
        </tr> 
         
         ";

   };


}
// echo "<tr>
//     <td>Delta</td>
//      <td>Asaba</td>
//  </tr>";
    
    

?>