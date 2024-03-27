<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Calculating Salary">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Niko (original author: Ms Raffin)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Salary in PHP</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
    <?php 
      echo "<h1>Salary in PHP</h1>";
      echo "<h3>This program will calculate the Your Pay.</h3>";
    ?>
    <!-- form to get hours worked and wage from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=hours">Hours:</label>
      <input type="text" id="hours" placeholder="Enter your Hours" name="hours"><br><br>
      <label for="wage">Wage:$</label>
      <input type="text" id="wage" placeholder="Enter your Wage" name="wage"><br><br>
      <input type="submit" value="Calculate Pay">
    </form>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
        
      </iframe>
     
  </body>
</html>