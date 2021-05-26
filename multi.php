<?php
  $array= Array ( "musicals"=> Array (  "Oklahoma" ,"The Music Man" , "South Pacific ") ,
                   "dramas"=>  Array ( "Lawrence of Arabia"  , "To Kill a Mockingbird",   "Casablanca "  ) ,
                   "mysteries"=>Array ( "The Maltese Falcon " , "Rear Window " , "North by Northwest"  )
                  
                  );
  // printing multi array
  // foreach ($array as  $key =>$elem){
  //       echo $key."<br>";
  //       foreach($elem as $subkey =>$subkeyvalue){

  //        echo "--->";
  //        echo $subkey ."=".$subkeyvalue."<br>";

  //       }
  // }
  //printing in decreasing order
  //ksort — Sort an array by key
   ksort($array);

    foreach ($array as  $key =>$elem){
      echo $key."<br>";
      foreach($elem as $subkey =>$subkeyvalue){

       echo "--->";
       echo $subkey ."=".$subkeyvalue."<br>";

      }
    }

?>