<?php
 echo '<html><head>
<style type="text/css">
body
{ 
background-color:##0000ff;
text-align:center;
}

.image{
position:relative;
}
h3{
position:absolute;
top:20px;
left:20px;
width:100%;
}

p
{
font-size:20px;
background-color:#ff00ff;
}

.container
{
text-align:center;
}

.center_div
{
border:1px solid gray;
margin-left:auto;
margin-right:auto;
width:90%;
background-color:#d0f0f6;
text-align:left;
padding:8px;
}
</style>
</head>

';



$name =$_REQUEST['name'];
$dest =$_REQUEST['dest'];
$train=$_REQUEST['train'];
$condition=$_REQUEST['condition'];
echo '

<html>
<head><style type="text/css">
body
{
background-color:#b0c4de;
}
</style></head>

<body>

<a href="Home.html"><-Back</a>
<div class="image">
<img src="ticket.png" height="300" width="400" alt=""/>
<h3>Mr./Mrs. '; echo $name;
echo'<br>Your Ticket No. :500170
<br>Destination :';echo $dest;
echo'<br>Your Train :';echo $train;
echo'<br>Condition is :';echo $condition;
echo'<br>Ticket Prive(Including 10% Vat) :115 Tk<br>
<br>Have a nice Journey...</h3>
</div>




</body>

</html>


';



?>



