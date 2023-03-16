
<?php
//assignment number one
$cups_of_coffee_sold =120;
$cost_per_cup = 2.50;
$totalRevenueEarned = $cups_of_coffee_sold*$cost_per_cup;
//number two
$dressesSold =50;
$costPerDress =25;
$profit = $dressesSold*$costPerDress;

//number three
$bagsOfCement =30;
$costPerBag =10;
$numberOfBricks =1000;
$costPerBrick =0.50;
$totalOfMaterials = $bagsOfCement*$costPerBag+$numberOfBricks*$costPerBrick;

//number four
$applesSoldOnMonday =200;
$applesSoldOnWednesday =150;
$applesSoldOnFriday =175;
$totalWeightofApplesSold = $applesSoldOnMonday+$applesSoldOnFriday+$applesSoldOnWednesday;
$result1 ="the total weigtht of apples sold is {$totalWeightofApplesSold} pounds";

//number five
$participants =10;
$weight1 =200;
$weight2 =225;
$weight3 =180;
$weight4 =190;
$weight5 =215;
$weight6 =210;
$weight7 =195;
$totalWeight =$weight1+$weight2+$weight3+$weight4+$weight5+$weight6+$weight7;
$avg =$totalWeight/$participants;
$result ="the average weight lifted by {$participants} people is {$avg} ibs";

echo'<br>'."the total revenue earned is $ $totalRevenueEarned";
echo'<br>'."the profit earned from the sale of dresses is $ $profit";
echo'<br>'."the total of building materials is $ $totalOfMaterials";
echo'<br>'.$result1;
echo'<br>'.$result;




?>