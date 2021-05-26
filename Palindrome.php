<?php

function is_palindrome($string){

 if( isset($string)  &&  strrev($string)==$string  )
   return 1;
   return 0;

}
  
 echo  is_palindrome('madam')."\n" ;
//  echo  is_palindrome('hajar');

?>