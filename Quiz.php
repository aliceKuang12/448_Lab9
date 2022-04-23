<html>
 
<head>
 
 <title>Quiz Results</title>
 
</head>
 
<body>
 
          <?php
            if(_POST["submit"])
			{
            $answer1 = $_POST['Question1'];
            $answer2 = $_POST['Question2'];
            $answer3 = $_POST['Question3'];
            $answer4 = $_POST['Question4'];
            $answer5 = $_POST['Question5'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "Michelangelo") { $totalCorrect++; }
            if ($answer2 == "Louis the 14th") { $totalCorrect++; }
            if ($answer3 == "Johann Wolfgang von Goethe") { $totalCorrect++; }
            if ($answer4 == "Joseph Hadyn") { $totalCorrect++; }
            if ($answer5 == "John Locke") { $totalCorrect++; }
            
			$percent = $totalCorrect *20;
			
			echo "Your score is ".$totalCorrect. "/5<br>";
			echo "<div> Your score is: ".$percent. "%<br><br>";
			
			echo "Question 1: Who painted the ceilings in the Sistine Chapel?<br>";
			echo "Your answer was: ".$answer1. "<br>"
            echo "The correct answer is: Michelangelo <br><br>"
			
			echo "Question 2: Who brought ballet to its peak?<br>";
			echo "Your answer was: ".$answer2. "<br>"
            echo "The correct answer is: Louis the 14th <br><br>"
			
			echo "Question 3: Who is associated with the `Sturm and Drung movement`?<br>";
			echo "Your answer was: ".$answer3. "<br>"
            echo "The correct answer is: Johann Wolfgang von Goethe <br><br>"
			
			echo "Question 4: Who is considered “Father of the Symphony”?<br>";
			echo "Your answer was: ".$answer4. "<br>"
            echo "The correct answer is: Joseph Hadyn<br><br>"
			
            echo "Question 5: Who was an enlightenment thinker?<br>";
			echo "Your answer was: ".$answer5. "<br>"
            echo "The correct answer is: John Locke<br><br>"
            echo "</div>"
        }
		?>
		
 
</body>
 
</html>