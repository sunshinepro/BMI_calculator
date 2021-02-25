<!DOCTYPE html>
<html>
    <head>
        <title>Hello World</title>
    </head>
    <body>

    <form action="index.php" method="POST">
            <label for="height">Enter your height (in m):</label><br>
            <input type="text" id="fname" name="height"><br>
            <label for="weight">Enter your weight (in kg):</label><br>
            <input type="text" id="fname" name="weight" ><br>
            <input type="submit" value="Submit ">
     </form>
     
            <!-- Atsispausdiname parametrą siųstą iš formos -->
        <?php 
        //   print_r($_POST['height'] );
        //   print('<br>');
        //   print_r($_POST['weight']);
        ?>
        
        <p>
            <?php 
            $bmi = round (($_POST['weight'] / ($_POST['height'] * $_POST['height'])), 2);

             if($bmi < 13 or $bmi > 50)
             echo "Wrong data" . "<br>"; 
             else 
              if ($bmi < 18.5)
              echo "Your BMI is = " . $bmi . "   Your BMI category is underweight"; 
              else if ($bmi >= 18.5 and $bmi < 25)
              echo "Your BMI is = " . $bmi . "   Your BMI category is normal weight"; 
              else if ($bmi >= 25 and $bmi < 30)
              echo "Your BMI is = " . $bmi . "   Your BMI category is overweight"; 
              else if ($bmi >=  30)
               echo "Your BMI is = " . $bmi . "   Your BMI category is obesity"; 
             ?>

        </p>
    </body>
</html>