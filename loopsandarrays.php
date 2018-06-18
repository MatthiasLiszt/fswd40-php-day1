<html>
<body>
<h1>Exercise 4</h1>

<?php
 for($i=0;$i<50;++$i)
  {echo " <span color='blue'> Matthias</span> ";}

$j=0;
while($j<50)
 {echo " <span color='red'> matthias </span> ";
  ++$j;
 }

$k=0;
do
{echo " <span color='green'> Matthias </span>";
 ++$k;
}
while($k<50);

?>

<h1>Exercise 5</h1>

<?php $field = array(0,1,2,3,4,5,6,7,8,9);

foreach($field as $x )
 {echo ". $x . "; }

?>
<h1>Exercise 6</h1>

<?php
 $toons=array ("mickey"=>"<div><img src='https://thumb7.shutterstock.com/display_pic_with_logo/168957982/550301707/stock-photo-nature-hot-streaming-stone-550301707.jpg'/><p>Mickey Mouse</p></div>","mario"=>"<div><img src='https://cdn.pixabay.com/photo/2016/07/30/21/38/mario-1558068_960_720.jpg'/><p>Super Mario</p></div>","goku"=>"<div><img src='https://thumb1.shutterstock.com/display_pic_with_logo/1203440/270072170/stock-photo-son-goku-journey-to-the-west-270072170.jpg'/><p>Goku</p></div>","pikachu"=>"<div><img src='https://cdn.pixabay.com/photo/2016/10/17/22/18/white-male-1748779_960_720.jpg'/><p>Pikachu</p></div>");


echo $toons['pikachu'];

?>
</body>

</html>
