<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="test.css">
  <title>US Naturalization Practice Test</title>
</head>
<body>
 
   <h1>
    US Naturalization Practice Test
  </h1>


<?php

session_start();


$questions = array();
$answers = array();

$questions[1] = "What is the supreme law of the land?";
$answers[1] = "Constitution";

$questions[2] = "True or false: The Constitution sets up and defines the government.";
$answers[2] = "true";

$questions[3] = "	 The idea of self-government is in the first three words of the Constitution. What are these words?";
$answers[3] = "We the People";

$questions[4] = "An addition or change to the Constitution is called what?";
$answers[4] = "amendment";

$questions[5] = "What do we call the first ten amendments to the Constitution?";
$answers[5] = "Bill of Rights";

$questions[6] = "Which of the following is NOT a right guaranteed by the First Amendment? freedom of religion, freedom of the press, the pursuit of happiness";
$answers[6] = "happiness";

$questions[7] = "How many amendments does the Constitution have? (Please enter a number.)";
$answers[7] = "27";

$questions[8] = "What document announced our independence from Great Britain?";
$answers[8] = "Declaration of Independence";

$questions[9] = "The Declaration of Independence states that people have the right to _____, liberty, and the pursuit of happiness.";
$answers[9] = "life";

$questions[10] = "True or false: Freedom of religion means that you can practice any religion, or no religion at all.";
$answers[10] = "true";

$questions[11] = "True or false: The United States has a capitalist economy.";
$answers[11] = "true";

$questions[12] = "True or false: Rulers are above the &ldquo;rule of law.&rdquo;";
$answers[12] = "false";

$questions[13] = "True or false: The Executive branch is one branch of our government.";
$answers[13] = "true";

$questions[14] = "True or false: Checks and balances allow one branch of government to become more powerful than another branch.";
$answers[14] = "false";

$questions[15] = "Who is in charge of the executive branch?";
$answers[15] = "President";

$questions[16] = "Who makes federal laws?";
$answers[16] = "Congress";

$questions[17] = "The two parts of Congress are the _____ and the House of Representatives.";
$answers[17] = "Senate";

$questions[18] = "How many U.S. Senators are there? (Please enter a number.)";
$answers[18] = "100";

$questions[19] = "We elect a U.S. Senator for how many years? (Please enter a number.)";
$answers[19] = "6";

$questions[20] = "True or false: The current U.S. Senators from Illinois are Jesus Chuy Garcia and Tammy Duckworth.";
$answers[20] = "false";

$questions[21] = "The House of Representatives has how many voting members? (Please enter a number.)";
$answers[21] = "435";

$questions[22] = "We elect a U.S. Representative for how many years? (Please enter a number.)";
$answers[22] = "2";

$questions[23] = "True or false: Bobby Rush, Raja Krishnamoorthi, and Adam Kinzinger are all U.S. Representatives from Illinois.";
$answers[23] = "true";

$questions[24] = "True or false: A U.S. Senator only represents people from half of his or her state.";
$answers[24] = "false";

$questions[25] = "True or false: Some states have more Representatives than other states because they have more money.";
$answers[25] = "false";

$questions[26] = "We elect a President for how many years? (Please enter a number.)";
$answers[26] = "4";

$questions[27] = "In what month do we vote for President?";
$answers[27] = "Nov"; // This answer will include variations such as November or Nov.

$questions[28] = "What is the name of the President of the United States now?";
$answers[28] = "Trump";

$questions[29] = "What is the name of the Vice President of the United States now?";
$answers[29] = "Pence";

$questions[30] = "If the President can no longer serve, who becomes President?";
$answers[30] = "Vice"; // This answer will include variations such as Vice-President, Vice President, or vicepresident

$questions[31] = "If both the President and the Vice President can no longer serve, who becomes President?";
$answers[31] = "Speaker"; // This answer will include variations such as Speaker of the House or House Speaker

$questions[32] = "Who is the Commander in Chief of the military?";
$answers[32] = "President"; 

$questions[33] = "Who signs bills to become laws?";
$answers[33] = "President"; 

$questions[34] = "Who vetoes bills?";
$answers[34] = "President"; 

$questions[35] = "What does the President’s Cabinet do?";
$answers[35] = "advise"; // This answer will include variations such as advises the President or advisers

$questions[36] = "Which of the following is NOT a Cabinet-level position? Secretary of Defense, Secretary of State, Speaker of the House";
$answers[36] = "Speaker"; // This answer will include variations such as Speaker of the House

$questions[37] = "Which branch of government explains the laws and resolves disputes?";
$answers[37] = "judicial"; 

$questions[38] = "What is the highest court in the United States?";
$answers[38] = "Supreme"; // This answer will include variations such as Supreme Court or supremecourt

$questions[39] = "How many justices are on the Supreme Court? (Please enter a number.)";
$answers[39] = "9"; 

$questions[40] = "Who is the Chief Justice of the United States now?";
$answers[40] = "Roberts"; 

$questions[41] = "True or false: Under our Constitution, the federal
government has the power to print money, to declare war, and to make treaties.";
$answers[41] = "true"; 

$questions[42] = "True or false: Under our Constitution, the federal
government has the power to grant drivers licenses and provide education.";
$answers[42] = "false"; 

$questions[43] = "Who is the Governor of the State of Illinois now?";
$answers[43] = "Pritzker"; 

$questions[44] = "What is the capital of Illinois?";
$answers[44] = "Springfield"; 

$questions[45] = "The two major political parties in the United States? are Democratic and __________.";
$answers[45] = "Republican"; 

$questions[46] = "What is the political party of the President now?";
$answers[46] = "Republican"; 

$questions[47] = "What is the name of the Speaker of the House of Representatives now?";
$answers[47] = "Pelosi"; 

$questions[48] = "True or false: Citizens must be 21 or older to vote.";
$answers[48] = "false"; 

$questions[49] = "True or false: U.S. citizens must serve on a jury when called.";
$answers[49] = "true"; 

$questions[50] = "True or false: Non citizens have the right to vote.";
$answers[50] = "false"; 

$questions[51] = "True or false: Everyone living in the United States has the right to freedom of assembly.";
$answers[51] = "true"; 

$questions[52] = "True or false: When we say the Pledge of allegiance, we show loyalty to the United States.";
$answers[52] = "true"; 

$questions[53] = "True or false: When you become a United States citizen, you pledge to defend and serve the United States if needed.";
$answers[53] = "true";

$questions[54] = "What is the minimum age citizens have to be to vote for President? (Please enter a number.)";
$answers[54] = "18";

$questions[55] = "True or false: One way Americans can participate in government is to call their Senators or Representatives.";
$answers[55] = "true";

$questions[56] = "The last day you can send in federal income tax forms is the 15th day of which month?";
$answers[56] = "Apr"; // This answer will include variations such as April or Apr. 15.

$questions[57] = "All men between the ages of 18 and ___ must register for the Selective Service. (Please enter a number.)";
$answers[57] = "26";

$questions[58] = "True or false: Some colonists came to America to escape religious persecution.";
$answers[58] = "true";

$questions[59] = "True or false: No people lived in America before the Europeans arrived.";
$answers[59] = "false";

$questions[60] = "What group of people was taken to America and sold as slaves?";
$answers[60] = "Africa"; // This answer will include variations such Africans or people from Africa

$questions[61] = "True or false: One reason the colonists fought the British was because of taxes were too low.";
$answers[61] = "false"; 

$questions[62] = "Who wrote the Declaration of Independence?";
$answers[62] = "Jefferson";

$questions[63] = "The Declaration of Independence adopted on July 4th of what year?";
$answers[63] = "1776";

$questions[64] = "Which of the following was NOT one of the 13 original states: Massachusetts, Indiana, Pennsylvania";
$answers[64] = "Indiana";

$questions[65] = "What did the Founding Fathers write at the Constitutional Convention?";
$answers[65] = "Constitution";

$questions[66] = "In what year was the Constitution written?";
$answers[66] = "1787";

$questions[67] = "James Madison, Alexander Hamilton, and  John Jay were writers of the _____ Papers.";
$answers[67] = "Federalist";
  
$questions[68] = "Which founding father is famous for being the first Postmaster General of the United States and starting the first free libraries?";
$answers[68] = "Franklin";

$questions[69] = "Who is the Father of Our Country?";
$answers[69] = "Washington";

$questions[70] = "Who was the first President?";
$answers[70] = "Washington";

$questions[71] = "What territory did the United States buy from France in 1803?";
$answers[71] = "Louisiana";

$questions[72] = "True or false: The United States stayed out of the War of 1812.";
$answers[72] = "false";

$questions[73] = "The _____ War was fought between the north (Union) and the south (Confederacy).";
$answers[73] = "Civil";

$questions[74] = "True or false: The Civil War was fought over slavery,  economic reasons, and states&lsquo; rights.";
$answers[74] = "true";

$questions[75] = "Which President freed the slaves?";
$answers[75] = "Lincoln";

$questions[76] = " What did the Emancipation Proclamation do?";
$answers[76] = "slaves"; // This answer will include variations such as freed the slaves, freed slaves in the Confederacy, emancipated slaves

$questions[77] = "What did Susan B. Anthony do?";
$answers[77] = "right"; // This answer will include variations such as fought for women’s rights, fought for civil rights, fought for women's right to vote

$questions[78] = "Which of the following wars did the United States NOT fight in during the 1900s: World War II, Mexican Revolution, Vietnam War, Korean War"; 
$answers[78] = "Mex"; // This answer will include variations such as Mexico, Mexican, Mexican Revolution

$questions[79] = "Who was President during World War I?";
$answers[79] = "Wilson";

$questions[80] = "Who was President during the Great Depression and World War II?";
$answers[80] = "Roosevelt";

$questions[81] = "The United States fought against three countries in	World	War	II: Germany, Italy, and ______.";
$answers[81] = "Japan";

$questions[82] = "Which President served as a general in World War II?";
$answers[82] = "Eisenhower";

$questions[83] = "During the Cold War, what was the main concern of the United States?";
$answers[83] = "Communism"; 

$questions[84] = "What movement tried to end racial discrimination?";
$answers[84] = "civil rights"; 

$questions[85] = "What did Martin Luther King, Jr. do?";
$answers[85] = "civil rights"; 

$questions[86] = "What major event happened on September 11, 2001, in the United States?"; ##just pick an answer that includes the word 'terrorist'
$answers[86] = "terrorist"; // This answer will include variations such as terrorist attack on the United States or World Trade Center attacked by terrorists

$questions[87] = "True or false: The Cherokee, Navajo, Sioux, and Chippewa are examples of American Indian tribes.";
$answers[87] = "true"; 

$questions[88] = "True or false: The two longest rivers in the United States are the Missouri River and the Rio Grande.";
$answers[88] = "false";

$questions[89] = "What ocean is on the West Coast of the United States?";
$answers[89] = "Pacific";

$questions[90] = "What ocean is on the East Coast of the United States?";
$answers[90] = "Atlantic";

$questions[91] = "Puerto Rico, Guam, and the U.S. Virgin Islands are all ______ of the United States.";
$answers[91] = "territories";

$questions[92] = "Which of these states does NOT border Canada: Georgia, Maine, Michigan, Washington";
$answers[92] = "Georgia";

$questions[93] = "Which of these states does NOT border Mexico: Arizona, California, Colorado, Texas";
$answers[93] = "Colorado";

$questions[94] = "What is the capitol of the United States";
$answers[94] = "Washington"; // This answer will include variations such as Washington, D.C, or Washington DC

$questions[95] = "True or false: The Statue of Liberty is in Washington, D.C.";
$answers[95] = "false";

$questions[96] = "True or false: The United States flag has 13 stripes to represent the 13 original colonies.";
$answers[96] = "true";

$questions[97] = "True or false: The United States flag has 50 stars to commemorate the 50th anniversary of our country in 1826.";
$answers[97] = "false";

$questions[98] = "True or false: &ldquo;God Bless America&rdquo; is the national anthem.";
$answers[98] = "false";

$questions[99] = "We celebrate Independence Day on the fourth day of which month?";
$answers[99] = "Jul"; // This answer will include variations such as July or Jul. 4

$questions[100] = "True or false: Memorial Day, Labor Day, and Veterans Day are national U.S. holidays.";
$answers[100] = "false";




//shuffles the questions and answers, but makes sure that they correlate to each other
$count = count($questions); 
$order = range(1, $count);
shuffle($order);
array_multisort($order, $questions, $answers);

$answers = array_map('strtolower', $answers); //converts all answers to lowercase

$_SESSION['questions'] = $questions; //this stores all of the questions and answers from the array in the session. It does it in the same order that they are in AFTER having been randomized
$_SESSION['answers'] = $answers;





//lists all questions and provides input boxes for the user
?>
<form action="results.php" method="post" id="questions">
  
<div>
  
  
  <h2>
    Question 1: <?php echo $questions[10]; ?>
</h2>
<input type="text" name="name1" id = 'name1' value=''>
  </div>
  
  <div>
<h2>
  Question 2: <?php echo $questions[11]; ?>
</h2>
  
  <input type="text" name="name2" id="name2" value=''>
  </div>
  
  <div>
    
  
  <h2>
    Question 3: <?php echo $questions[12]; ?>
</h2>
  <input type="text" name="name3" id="name3"  value=''>
  
  </div>
  <div>
<h2>
  Question 4: <?php echo $questions[13]; ?>
</h2>
  
  <input type="text" name="name4" id="name4" value=''>
  </div>
  <div>
<h2>
  Question 5: <?php echo $questions[14]; ?>
</h2>
  
  <input type="text" name="name5" id="name5" value=''>
  </div>
  <div>
<h2>
  Question 6: <?php echo $questions[15]; ?>
</h2>
  
  <input type="text" name="name6" id="name6" value=''>
  </div>
  <div>
<h2>
  Question 7: <?php echo $questions[16]; ?>
</h2>
  
  <input type="text" name="name7" id="name7" value=''>
  </div>
  <div>
<h2>
  Question 8: <?php echo $questions[17]; ?>
</h2>
  
  <input type="text" name="name8" id="name8" value=''>
  </div>
  <div>
<h2>
Question 9: <?php echo $questions[18]; ?>
</h2>
  <input type="text" name="name9" id="name9" value=''>
  </div>
  <div>
<h2>
  Question 10: <?php echo $questions[19]; ?>
</h2>
  
  <input type="text" name="name10" id="name10" value=''>
  </div>
  <div id="lastone">
    
  </div>
  
<div style = "text-align:center;" class = "buttons" >
  
  
<input type="submit" value = "Submit Quiz" > 
  </div>
  <br>
  <br>
  <br>
</form>
<?php
?>

