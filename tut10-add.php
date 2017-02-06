<!DOCTYPE html>
<html lang="en">
  <head>
    <title>tut6-form html</title>
  </head>
  <body>
    <div>
      <!-- <h3>Isset()</h3>
      <p>isset($_GET['num1']) checks if something is typed in and if not makes it 0:</p>
      <p>Tutorial 10: This form uses 'get' and isset:</p>
      <form action = "tut10-add.php" method="GET">
        <input type="number" name="num1" size="5"/></br>
        <input type="number" name="num2" size="5"/></br>
        <input type="submit"/>
      </form>

      <?php
        if (isset($_GET['num1']) and isset($_GET['num2'])){
          $num1 =$_GET['num1'];
          $num2 =$_GET['num2'];
          $total = $num1+$num2;
          echo "the total is $total";
        }
      ?> -->
    </div>




    <div>
      <!-- <h3>Embedding php in html</h3>
      <p>Foreach inside html to loop through names:</p>
      <?php
        $names = array('Gruffy','Sunny', 'Cubby');
        foreach ($names as $person) {
      ?>
        <p>The name of this person is
          <?php echo $person;?>, which is good
        </p>

      <?php
        }
      ?> -->
    </div>



    <div>
      <h3>Embedding php in html example 2</h3>
      <p>Pic a color from the form and display the text with it:</p>
      <form action = "tut10-add.php" method="GET">
        <input type="text" name="color" placeholder="type your color"/></br>
        <input type="submit"/>
      </form>

      <?php
        $color = $_GET['color'];
      ?>

        <b> <font color="<?php echo $color; ?>">
          You picked <?php echo $color; ?></font>
        </b>
    </div>
  </body>
</html>
