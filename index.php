<!-- Is This a Leap Year? -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is This a Leap Year?</title>
    <style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: black;
    }
    #main-content {
      margin: 30px;
      text-align: center;
      color: skyblue;
    }
    #main-content h1 {
      font: 40px Arial, Helvetica, sans-serif;
    }
    #main-content p {
      font: 24px "Times New Roman", Times, Georgia, serif;
    }
    #main-content p strong {
      font-size: 70px;
      color: white;
    }
  	</style>
  </head>
  <body>
    <div id="main-content">
      <h1>Is This a Leap Year?</h1>
      
      <p>
        <?php date_default_timezone_set("America/Toronto"); ?>

        <?php
        function is_leap_year($year) {
          // $year = date("Y");  // date("Y") give the 4 digit year
          if($year % 4 > 0) {
            // $is_leap_year = false;    // 2015
            return false; // 2015
          } elseif($year % 100 > 0) {
            // $is_leap_year = true;     // 1984 (divisible by 4 = leap year)
            return true; // 1984
          } elseif($year % 400 > 0) {
            // $is_leap_year = false;    // 2100 (exception: divisible by 4, divisible by 100 but not divisible by 400 = not a leap year)
            return false; // 2100
          } else {
            // $is_leap_year = true;     // 2000 (divisible by 4, and divisible by 100 & 400 = leap year)
            return true; // 2000
          }
        }

        if(isset($_GET["year"])) {
          $year = intval($_GET["year"]);
        } else {
          $year = date('Y');
        }
 
        if(is_leap_year($year)) {
            echo "Yes, {$year} is a leap year.";
          } else {
            echo "No, {$year} is not a leap year.";
          }
        ?>
      </p>

      <form action="" method="get">
      Enter a year to find out if it is a leap year:<br /><br />
      <input type="text" name="year" value="<?php echo $year; ?>" />
      <input type="submit" value="Submit" />
      </form>
      
    </div>
    
  </body>
</html>
