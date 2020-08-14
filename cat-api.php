<?php 

function retrieveCat(){
    $responseString = file_get_contents('https://cat-fact.herokuapp.com/facts');
    //var_dump($responseString); -- okay!
    if($responseString !==FALSE)
    {
        if(($responseObj = json_decode($responseString)) !==NULL) 
        {
            //var_dump($responseObj); -- okay!
            $all = $responseObj->all;
            //var_dump($all); --okay!
            return $all;

        }
        else
        {
            echo 'Could not intepret API response.';
        }
    }
    else
    {
       echo 'Unable to connect/retrieve data from API';
    }
    return FALSE;
}
