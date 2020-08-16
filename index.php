<!--To try out something different with api examples from @link: https://www.nobelprize.org/about/api-examples/-->

<?php include 'template/header.php';

       //Retrieve response string from API endpoint
       $responseString = file_get_contents("https://onepiececover.com/api/chapters");
       //var_dump($responseString); -- checked good.
   
       //Convert response JSON string into PHP array/oject. 
       if($responseString !==FALSE) {
   
           if(($responseObj = json_decode($responseString)) !==NULL) {
               //var_dump($responseString); - okay!

               //collect the array of results from the response object's 
               $items = $responseObj->items;
               //var_dump($items);  
               
               foreach($items as $item): ?>

                <h3><?php echo $item->title?></h2>
                <p><?php echo $item->summary?></p>

               <?php endforeach;?>
               
           <?php }
           else
           {
               echo 'Could not interpret API response.';
           }
       }
         else{
        echo 'Could not receive API';
            }    
   


 include 'template/footer.php';?>

