<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 6 Q3</title>
</head>
<body>
 <?php
 function calculateArea($length, $width) {
     return $length * $width;
 }

 // Example values
 $length = 10;
 $width = 6;

 // Calculate the area
 $area = calculateArea($length, $width);
 ?>

 <p>The area of a rectangle with a width of <?php echo $width; ?> and <?php echo $length; ?> is <?php echo $area; ?></p>

</body>
</html>

