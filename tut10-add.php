<!DOCTYPE html>
<html lang="en">
  <head>
    <title>tut6-form html</title>
  </head>
  <body>
    <div>
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
      ?>
    </div>

    <div>
      <p>Foreach inside html to loop through names:</p>
      <?php
        $names = array('Gruffy','Sunny', 'Cubby');
        foreach ($names as $person) {
      ?>
        <p>The name of this person is <?php echo $person;?>, which is good</p>

      <?php
        }
      ?>
    </div>
  </body>
</html>
