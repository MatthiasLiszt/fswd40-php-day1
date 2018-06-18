<html>

<body>

<h1>Exercise 2 </h1>
<?php
      $thisDate=date('w');

      if ($thisDate==1)
       {echo "Happy Monday!";}
      else
       {echo "Have a nice day!";} 
  
?>

<h1>Exercise 3</h1>
<?php

    $thisDate=date('w');
    if($thisDate==0)
     {echo "Today is Sunday!";}
    elseif ($thisDate==1)
     {echo "Today is Monday!";}
    elseif ($thisDate==2)
     {echo "Today is Tuesday!";}
    elseif ($thisDate==3)
     {echo "Today is Wednesday!";}
    elseif ($thisDate==4)
     {echo "Today is Thursday!";}
    elseif ($thisDate==5)
     {echo "Today is Friday!";}
    elseif ($thisDate==6)
     {echo "Today is Saturday!";}
      
?>

</body>

</html>
