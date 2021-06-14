<?php
$marks = 75;
if ($marks >= 90)
{
	echo "The grade is : A+";
}
else if ($marks >= 80 && $marks <90)
{
	echo "The grade is : A";
}
else if ($marks >= 70 && $marks <80)
{
	echo "The grade is : B";
}
else if ($marks >= 60 && $marks <70)
{
	echo "The grade is : C";
}
else 
{
	echo "The grade is : F";
}