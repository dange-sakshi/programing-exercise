<?php
//An Insurance company follows following rules to calculate premium.
//(1) If a person’s health is excellent and the person is between 25 and 35 years of age and lives in a city and is a male then the premium is Rs. 4 per thousand and his policy amount cannot exceed Rs. 2 lakhs.
//(2) If a person satisfies all the above conditions except that the sex is female then the premium is Rs. 3 per thousand and her policy amount cannot exceed Rs. 1 lakh.
//(3) If a person’s health is poor and the person is between 25 and 35 years of age and lives in a village and is a male then the premium is Rs. 6 per thousand and his policy cannot exceed Rs. 10,000.
//(4) In all other cases the person is not insured.

//Write a program to output whether the person should be insured or not, his/her premium rate and maximum amount for which he/she can be insured.



$he = readline('Enter health: ');
$cv = readline('Enter city or village: ');
$gen = readline('Enter gender: ');
$age = readline('Enter age: ');

if ($he == "excellent" && $age >= 25 && $age <= 35 && $cv == "city" && $gen == "male") {
    echo "The premium is RS.4 per thousand & his policy amount cannot exceed Rs.2 lakhs";
} elseif ($he == "excellent" && $age >= 25 && $age <= 35 && $cv == "city" && $gen == "female") {
    echo "The premium is RS.3 per thousand & her policy amount cannot exceed Rs.1 lakhs";
} elseif ($he == "poor" && $age >= 25 && $age <= 35 && $cv == "village" && $gen == "male") {
    echo "The premium is RS.6 per thousand & his policy amount cannot exceed Rs.1000";
} else {
    echo "The person is not insured";
}
