<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Php Program</title>
</head>

<body>


  <?php
  //--- Variable in PHP ---
  $name = "John Doe";
  $age = 25;
  echo "<h2>Hello, my name is $name and I am $age years old.</h2>";

  //--- Variable Scope in PHP ---
  //1. Global Scope
  //2. Local Scope
  //3. Static Scope


  //1. Global Scope
  $x = 20;
  $y = 30;

  function Method1()
  {
    //2. Local Scope

    //Access-1 - Global 
    global $x;

    //Access-2 - Global 
    echo $GLOBALS["x"];

    echo $x;
    echo "Hello World", $x;
  }

  Method1();


  //3. Static Scope
  function StaticVar()
  {
    static $x = 0;
    echo "<h1>X Value is : $x<h1>";
    $x++;
  }

  StaticVar();
  StaticVar();
  StaticVar();


  // echo $arrayVar[];

  echo ("<br>");
  $ary = array(1, 2, 3, 4, 5, 6);
  for ($i = 0; $i < count($ary); $i++) {

    echo  $ary[$i];
  };


  //--- Echo VS Print --- 
  //Echo 
  //It is faster 
  echo " <br> Hello World", "check it is working <br> ";


  //Print 

  // It is use only one Arugument 
  // print "Only one Arugment , "check it is proint <br> ";
  // It is return 1 
  echo (print "Hello World");



  //--- Data Types in PHP ---
  $integerVar = 10; // Integer
  $floatVar = 10.5; // Float
  $stringVar = "Hello, World!"; // String
  $booleanVar = true; // Boolean
  $arrayVar = array("Apple", "Banana", "Orange"); // Array
  $nullVar = null; // Null
  //Resource - It is not Data Type it store outside information 

  //var_dump - Show what d-type then value Eg: int(2323)
  echo "<br>";
  $d = 2323;
  var_dump($d);
  echo "<br>";

  //--- Type Casting ---
  $x = 5;
  $x = (string) $x;
  var_dump($x);


  //--- Class and Object ---
  class Car
  {

    public $Name;
    public $Age;

    public function __construct($name, $age)
    {
      $this->Name = $name;
      $this->Age = $age;
    }
    public function Message()
    {
      echo "<br>";
      return "This is your name : " . $this->Name . " this is your Age: " . $this->Age;
    }
  }

  $myCar = new Car("Prasath", "21");

  echo $myCar->Message();

  $myCar = new Car("kandhan", "22");

  echo $myCar->Message();
  echo "<br>";



  //--- DataBase Connection ---

  // $servername ="localhost";
  // $username = "username";
  // $password = "password";

  //Create Connection 
  // $conn = new mysqli($servername ,$username,$password);

  //Check Connection
  // if($conn ->$connect_error){
  //   die("Connection failed: ".$connect_error );
  // }
  // echo "Connection Successfully";



  // --- String Functions ---

  //strlen()          - String length
  //str_word_count()  - String word count
  //strrev()          - Reverse the string 
  //strpos()          - Searches for a specific text within a string ("ExistString", "Searchstr");
  //str_replace()     - Replace the String (whichexistchange, newAdd, oldexistfully );
  //
  // strtoupper()
  // strtolower()
  // trim()
  // explode( )  - Convert String into Array - user "print_r " To display Important 

  $firstName = "Prasath";
  $result = strlen($firstName);
  $result2 = strrev($firstName);
  $result3 = str_word_count($firstName);


  //strlen          - String length
  echo $result;
  echo "<br>";

  //strrev          - Reverse the string 
  echo $result2;
  echo "<br>";

  //str_word_count  - String word count
  echo $result3;
  echo "<br>";


  //strpos()        - String Position Searches for a specific text within a string - OutPut:6
  $lastName = "Hello World";
  $result4 = strpos("Hello World", "World");
  echo $result4;
  echo "<br>";


  //str_replace()   - Replace the String.
  $result5 = str_replace("kandhan", "Sabari", "kandhan Prasath");
  // (whichexistchange, newAdd, oldexistfully )

  echo $result5;
  echo "<br>";


  // explode( )  - Convert String into Array 

  $data = "Sabari Vignesh Kandhan Prasath";

  $finalResult = explode(" ", $data);

  print_r($finalResult[1]);
  echo "<br>";

  // --- Math Function ---

  echo (pi());
  echo "<br>";

  echo (min(1, 2, 3, 4, 5));
  echo "<br>";

  echo (max(1, 2, 3, 4, 5));
  echo "<br>";

  echo (round(1.46));
  echo "<br>";

  echo (round(1.66));
  echo "<br>";

  echo (abs(-6));
  echo "<br>";

  echo (rand(1, 5));
  echo "<br>";


  //--- Constant Variable ---

  const MYCAR = "Volvo";

  echo MYCAR;
  echo ("<br>");

  define("Data", "It is constant using define ");

  echo (Data);
  echo ("<br>");



  //--- Array Constant ---
  define("Fruties", [
    "Apple",
    "Orange",
    "Mango",
    "Gova",
    "Graps"

  ]);

  for ($i = 0; $i < count(Fruties); $i++) {

    echo Fruties[$i];
    echo "<br>";
  }


  $checkdata = 'dd';

  function checkmethod()
  {


    $GLOBALS['checkdata'];
  }


  //-- DATE ---
  $now = date("y-m-d");

  echo $now;
  echo "<br>";



  //--- Operators in PHP ---

  //1.Arithemetic Operator
  //2.Assignment Operator
  //3.Comparison Operator
  //4.Increment/Decrement Operator
  //5.Logical Operator
  //6.String Operator
  //7.Array Operator 
  //8.Conditional Assignment Operator 


  //--- Space Ship Operator ---
  // X=2 <=> Y =2  
  // -X Less Than Y   - Return - False
  // Or Equal         - Return - True 
  // Or X Greater than 0  - Return - True 


  //6. String Operators 

  $text1 = "Hello";
  $text2 = "World ";
  //concate -1 
  $concat1 = $text1 . $text2;
  echo $concat1;
  echo "<br>";

  //concate -2
  $concat2 = $text1 .= $text2;
  echo $concat2;
  echo "<br>";

  //7. Array Operators

  //Array Concate
  $arr1 = array(1, 2, 3, 4, 5);
  $arr2 = array(6, 7, 8, 9, 10);

  print_r(array_merge($arr1, $arr2));
  echo "<br>";

  //Array Equal 
  var_dump($arr1 == $arr2);
  echo "<br>";
  //Array Identy 
  var_dump($arr1 === $arr2);
  echo "<br>";

  //8.Conditional Assignment Operator 

  //Ternary Operator
  $status = (empty($user)) ? "True" : "False";
  echo $status;
  echo "<br>";
  
  //Null cosing operater
  echo $user = $color ?? "Anonymus";
  echo "<br>";

  ?>





  <script src="script.js"></script>


</body>

</html>