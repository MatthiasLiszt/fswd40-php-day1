<html>
<body>

Welcome <?php echo $_GET["name"]; echo "!!!"; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>


<?php $name=$_GET["name"]; echo "<div id='data' script='display:none;'>{name: $name}</div>"; ?>

<script>
var mydata=document.getElementById('data').textContent;
alert("name : "+mydata);
</script>

</body>
</html>			