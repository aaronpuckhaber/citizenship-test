<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">
  
<head>
  
  <meta charset="UTF-8">
  
  <link rel="stylesheet" type="text/css" href="test.css">
  
  <title>Results</title>
  
</head>
  
<body>
  <h1>
  Your Results
  </h1>
 
  <form action="questions.php" method="post" id="results"> <!-- lets you start the form and identifies this form as the results page, and makes the completion of the form take you back to the questions page -->
    
  
    
  
  <?php
   
  

   // echo $questions[10];
    
//brings the user inputs in from the other page and assigns them variables while also converting everything to lowercase, so that it does not matter if the user used capitalization or where
   
     $answer1 = strtolower($_POST['name1']);
    
    
     $answer2 = strtolower($_POST['name2']);
    
    
     $answer3 = strtolower($_POST['name3']);
    
    
     $answer4 = strtolower($_POST['name4']);
    
    
     $answer5 = strtolower($_POST['name5']);
    
    
     $answer6 = strtolower($_POST['name6']);
    
    
     $answer7 = strtolower($_POST['name7']);
    
    
     $answer8 = strtolower($_POST['name8']);
    
    
     $answer9 = strtolower($_POST['name9']);
    
    
     $answer10 = strtolower($_POST['name10']);
    

    
        $points = 0; //the starting amount of questions that you got correct is zero. If you get more questions correct as you take the test, it will add on
    $correct = array();
    
     if (stripos($answer1, $_SESSION['answers'][10]) || $answer1 == $_SESSION['answers'][10]) //if your answer contains the phrase of the correct word or if the answer is a number equal to the correct answer, it will execute the following
    { $points += 1;
     $correct[1] = 'Correct!';
     }
    
    else {
     
      $correct[1] = 'Incorrect.';

    }
    
        if (stripos($answer2, $_SESSION['answers'][11]) || $answer2 == $_SESSION['answers'][11]) 
    { $points += 1;
     $correct[2] = 'Correct!';
     }
    else {
     
      $correct[2] = 'Incorrect';

    }
    
            if (stripos($answer3, $_SESSION['answers'][12]) || $answer3 == $_SESSION['answers'][12]) 
    { $points += 1;
     $correct[3] = 'Correct!';
     }
    else {
      
      $correct[3] = 'Incorrect';
  
    
    }
    
    
         if (stripos($answer4, $_SESSION['answers'][13]) || $answer4 == $_SESSION['answers'][13]) 
    { $points += 1;
     $correct[4] = 'Correct!';
     }
    else {

      $correct[4] = 'Incorrect';

 
    }
    
         if (stripos($answer5, $_SESSION['answers'][14]) || $answer5 == $_SESSION['answers'][14]) 
    { $points += 1;
     $correct[5] = 'Correct!';
     }
    else {
    
      $correct[5] = 'Incorrect';
 
    }
    
         if (stripos($answer6, $_SESSION['answers'][15]) || $answer6 == $_SESSION['answers'][15]) 
    { $points += 1;
     $correct[6] = 'Correct!';
     }
    else {
    
      $correct[6] = 'Incorrect';
 
    
    }
    
         if (stripos($answer7, $_SESSION['answers'][16]) || $answer7 == $_SESSION['answers'][16]) 
    { $points += 1;
     $correct[7] = 'Correct!';
     }
    else {
   
      $correct[7] = 'Incorrect';
   
     
    }
    
         if (stripos($answer8, $_SESSION['answers'][17]) || $answer8 == $_SESSION['answers'][17]) 
    { $points += 1;
     $correct[8] = 'Correct!';
     }
    else {
    
      $correct[8] = 'Incorrect';
  
     
    }
    
         if (stripos($answer9, $_SESSION['answers'][18]) || $answer9 == $_SESSION['answers'][18]) 
    { $points += 1;
     $correct[9] = 'Correct!';
     }
    else {
    
      $correct[9] = 'Incorrect';

     
    }
    
         if (stripos($answer10, $_SESSION['answers'][19]) || $answer10 == $_SESSION['answers'][19]) 
    { $points += 1;
     $correct[10] = 'Correct!';
     }
    else {
    
      $correct[10] = 'Incorrect';
    
     
    }
    ?><h3>
    
    <?php
    
    echo "You got ". $points. "0% correct. <br>";
    if ($points > 5) {
      echo "You passed the test!";
    }
    else {
      echo "You failed the test. <br>";
      
    }
       
?>
    </h3>
    <h3>
      <?php
    

$i = 1; //this for each loop lists out the answers that were correct and the ones that were incorrect, using data collected from the inputs
foreach($correct as $value){
  echo "Question ". $i.": $value<br>";
  $i++;
}
      ?>
    </h3>
  <?php
  ?>
    <div class = "buttons">
      
    
     <input type="submit" value = "Try Again"> <!-- creates the submit button to let you try again with brand new questions -->
    </div>
  </form>


<h3><?php
 date_default_timezone_set('America/Chicago');
   $date = date('m/d/Y h:i:s a', time());
    echo "Completion time: ". $date. '<br>'; ?>
</body>

</html>