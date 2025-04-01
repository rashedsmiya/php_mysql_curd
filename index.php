<?php
//     $short_desc = "Hadi is bad boy";

//     echo str_word_count($short_desc);

//     echo strrev($short_desc); random valou return


//$username = "hadi";
//
//$para = "hadi is a bad boy also bad boy";
//
//echo strpos($para, $username);

//echo str_replace("hadi jaman", "is a", "badboy");

//$product_price = 5000;
//var_dump(is_int($product_price));

//$price = 5.40;
//
//var_dump(is_float($price));

//$price = 500.321;
//$price_cost = (int)$price;
//
//echo $price_cost;

//$price = "20979648.123";
//
//$price_string_to_int = (int)$price;
//
//var_dump(is_int($price_string_to_int));

//$price = "20125245.023";
//var_dump($price);
//
//$price_string_to_int = (int)$price;
//
//var_dump(is_int($price_string_to_int));

//$max_number = max(1,2,3,4,5,6,6,78);
//$min_number = min(1,2,34,5,6,78,9);

//$number =  -54.235;
//echo round($number);

//echo sqrt(64);

//define("message", "welcome to phplearn");
//
//function getName()
//{
//  echo message;
//}
//
//getName();


//define('info',[
//    'hadijaman',
//    '0987654321',
//    'Dhaka-mirpur'
//]);
//
//var_dump(info[0]);
//echo info[1];

//echo __DIR__;

//echo __FILE__;

//echo __LINE__;

//function userdefine()
//{
//  echo __FUNCTION__;
//}
//userdefine();

//Arithmetic
//Assignment
//Comparrison
//Increment/decrement
//logical
//String
//Array

//$price = 10;
//$qty = 5;
//$total_price = $price*$qty;

//$age = 18;
//$getresult = $age>=18?"tomar age hoi say":"tomar age hoy nai";
//echo $getresult;

//echo date("H");

//$age = 21;
//if($age>=22){
//  echo "tumi biye korte";
//}

//$age = 19;
//
//if($age>=19){
//    echo "Voter";
//}
//
//else{
//    echo "Not Voter";
//}

//$currentd_day = date("D");
//
//if($currentd_day=="friday"){
//    echo "This is sun day";
//}
//
//else{
//    echo "not";
//}

//$current_Day = date("D");
//echo $current_Day;
//
//if($current_Day=="Sun"){
//    echo "This is Sunday. 10% Discuount";
//}
//elseif ($current_Day=="Mon"){
//    echo "This is Monday and 15% Discuount";
//}
//elseif ($current_Day=="Tue"){
//    echo "This is Tuesday and Get 16% Discuount";
//}
//else{
//    echo  "Normaly 2% Dicount";
//}


//$day = "Tuesday";
//
//switch ($day){
//    case "Monday";
//    echo "today is manday";
//    break;
//    case "Tuesday":
//        echo "Today is tuesday";
//        break;
//    case "wednesday":
//        echo "today is wednesday";
//        break;
//    default:
//        echo "It's another day of the week!";
//
//}


//// Generate a random number between 1 and 10
//$randomNumber = rand(1, 10);
//
//// Variable to store user guess
//$guess = 0;
//
//// Start the loop
//while ($guess != $randomNumber) {
//    // Get user input from the console
//    echo "Guess a number between 1 and 10: ";
//    $guess = trim(fgets(STDIN)); // Read input
//
//    if ($guess < $randomNumber) {
//        echo "Too low! Try again.\n";
//    } elseif ($guess > $randomNumber) {
//        echo "Too high! Try again.\n";
//    } else {
//        echo "Congratulations! You guessed it right!\n";
//    }
//}


//if($_SERVER["REQUEST_METHOD"] == "POST"){
//    $age = $_POST['age'];
//
//    if($age >= 18){
//        echo "You are eligible to vote!";
//    } else {
//        echo "Sorry, you are not eligible to vote.";
//    }
//}
//
//?>
<!---->
<!--<form method="post">-->
<!--    Enter your age: <input type="number" name="age">-->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->


<?php
//
//    if ($_SERVER["REQUEST_METHOD"] == "POST"){
//        $username = $_POST['username'];
//        $password = $_POST['password'];
//
//        if ($username == "admin" && $password == "1234") {
//            echo "Login successful! Welcome, $username.";
//        } else {
//            echo "Invalid credentials. Try again.";
//        }
//    }
//
//?>

<!--<form method="post">-->
<!--    username: <input type="text" name="username"><br>-->
<!--    password: <input type="password" name="password"><br>-->
<!--    <button type="submit">Login</button>-->
<!--</form>-->



<?php
//
//    if($_SERVER["REQUEST_METHOD"] == "POST"){
//        $score = $_POST['score'];
//
//        if($score >= 90){
//            echo "Grade: A";
//        } elseif ($score >= 80){
//            echo "Grade: B";
//        } elseif ($score >= 70){
//            echo "Grade: C";
//        } elseif ($score >= 60){
//            echo "Grade: D";
//        } else{
//            echo "Grade: F";
//        }
//    }
//
// ?>

<!--<form method="post">-->
<!--      Enter your score: <input type="number" name="score">-->
<!--      <button type="submit">Get Grade</button>-->
<!--</form>-->


<?php //
//
//     if($_SERVER["REQUEST_METHOD"] == "POST"){
//         $num = $_POST['number'];
//
//         if($num % 2 == 0){
//             echo "$num is an Even number";
//         } else{
//             echo "$num is an odd number";
//         }
//     }
//?>
<!---->
<!--<form method="post">-->
<!--      Enter a number: <input type="number" name="number">-->
<!--      <button type="submit">Check</button>-->
<!--</form>-->
<!--    -->


<!--<h2>Menu</h2> -->
<!--<form method="post">-->
<!--     <label for="dish">Select a Dish:</label>-->
<!--     <select name="dish">-->
<!--         <option value="pizza">Pizza</option>-->
<!--         <option value="burger">Burger</option>-->
<!--         <option value="pasta">Pasta</option>-->
<!--         <option value="salad">Salad</option>-->
<!--     </select>-->
<!--    <input type="submit" name="submit" value="Order">-->
<!--</form>-->

<?php

//    if(isset($_POST['submit'])){
//        $dish = $_POST['dish'];
//
//        switch ($dish){
//            case "<p>You order a Pizza - $12. A delicious cheesy delight!</p>";
//            break;
//            case "burger":
//                echo "<p>You order a Burget - $8. Juicy and grilled to perfection!</p>";
//                break;
//            case  "pasta":
//                echo "<p>You order pasta - $10. Served with a creamy sauce.</p>";
//                break;
//            case  "salad";
//            echo  "<p>You order a salad - $6. Fresh and healthy!</p>";
//            break;
//            default:
//                echo "<p>Pleese select a valid dish.</p>";
//        }
//    }
?>

<?php
//session_start();
//
//if (!isset($_SESSION['random_number'])) {
//    $_SESSION['random_number'] = rand(1, 10); // Generate a random number between 1 and 10
//}
//
//$random_number = $_SESSION['random_number'];
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $guess = intval($_POST['guess']);
//
//    if ($guess == $random_number) {
//        echo "<p>🎉 Congratulations! You guessed the right number: $random_number</p>";
//        session_destroy(); // Reset game
//    } else {
//        echo "<p>❌ Wrong guess! Try again.</p>";
//    }
//}
//?>
<!-- -->
<!--<form method="POST">-->
<!--    <label>Guess a number (1-10):</label>-->
<!--    <input type="number" name="guess" min="1" max="10" required>-->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->


<?php

//    $start_point = 1;
//    do{
//        echo "This is start point $start_point <br>";
//        $start_point+=2;
//    } while($start_point<=20)


//$x = 1;
//
//do{
//    echo "Number: $x \n";
//    $x++;
//} while ($x <= 5);


//$info = array("hadijaman", "0987654321", "01", "098876");
//$count_array_value = count($info);
//
//for($i=0;$i<$count_array_value; $i++){
//    echo $info[$i] . "</br>";
//}

//$infos = array(1,2,3,4,5,6,7,8,9);
//foreach ($infos as $single_value){
//    echo $single_value . "<br>";
//}

//$person = ["name" => "John", "age" => 30, "city" => "New Yourk"];
//
//foreach ($person as $key => $value){
//    echo "$key: $value <br>";
//}

//$num = 1;
//
//while ($num <= 10){
//    echo "Number: $num <br>";
//    $num++;
//}

//
//$num = 0;
//$counter = 1;
//
//while ($counter <= 50){
//    $sum += $counter; // Add counter to sum
//    $counter++;
//}
//
//echo  "The sum of number form 1 to 50 is: $sum";


//$sum = 0;
//$counter = 1;
//
//while ($counter <= 50){
//    $sum += $counter;
//    $counter++;
//}
//
//echo "The sum of number from 1 to 50 is: $sum";

//$colors = ["red", "green", "blue", "yellow"];
//
//$i = 0;
//
//while ($i < count($colors)){
//    echo "colors: " . $colors[$i] . "<br>";
//    $i++;
//}

//$number = array(1,2,3,4,5,6,7);
//
//if(!function_exists('check_even')){
//    function check_even($var)
//    {
//      return !($var & 1);
//    }
//}
//
//$myoddnumber = array_filter($number, 'check_even');
//print_r($myoddnumber);


// $person_info_one = array(
//         "id" => 10,
//         "name" => "hadijamn",
//         "email" => "rashedmiya@gmail.com",
//         "phone" => "0987654321",
// );

// $person_info_two = array(
//   "id" => 11,
//   "name" => "rowza",
//     "email" => "rowza@gmail.com",
//     "cell" => "0987654321"
// );

// $match = array_intersect_key($person_info_one, $person_info_two);
// print_r($match);
 