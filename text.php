<?php
include "functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Färg glad</title>

    
</head>
<body>

<form action="index.php" method="get">
Select text color:
<button type="submit" value="">Select color</button>


<p>
Select color
<select name="setColor">
<option value="#000000">Select</option>
<option value="#ff0000">Red</option>
<option value="#008000">Green</option>
<option value="#0000ff">Blue</option>
<option value="#ff00ff">Pink</option>

</select>
</p>



<?php

$selectedColor = $_GET['setColor'];
echo "<p style='color: $selectedColor; border:5px grey solid;'>Var får jag tag i det?
Det finns många olika varianter av Lorem Ipsum, 
men majoriteten av dessa har ändrats på någotvis. 
Antingen med inslag av humor, eller med inlägg 
av ord som knappast ser trovärdiga ut. 
Skall man använda långa stycken av Lorem Ipsum 
bör man försäkra sig om att det inte gömmer sig 
något pinsamt mitt i texten. Lorem Ipsum-generatorer 
på internet tenderar att repetera Lorem Ipsum-texten 
styckvis efter behov, något som gör denna sidan till 
den första riktiga Lorem Ipsum-generatorn på internet. 
Den använder ett ordförråd på över 200 ord, 
kombinerat med ett antal meningsbyggnadsstrukturer 
som tillsamman genererar Lorem Ipsum som ser ut som 
en normal mening. Lorem Ipsum genererad på denna 
sidan är därför alltid fri från repetitioner, humorinslag, 
märkliga ordformationer osv.</p>";
?>






    
</body>
</html>