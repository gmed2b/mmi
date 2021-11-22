<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/highlight.js@11.3.1/styles/github-dark.css" />
  <link rel="stylesheet" href="../exo_style.css" />
  <title>TP-Algo</title>
</head>

<body>
  <a href="./">RETOUR</a>
  <h2>Exo :<br> .</h2>
  <div class="container">
    
  </div>

  <div class="container">
    <h2>Resultat :</h2>
    <?php
    //create an array
    $t = array(12,11,13,14,8,6,15,2);

    // a function that print all elements from the array
    function print_array($t)
    {
      for ($i=0; $i < count($t); $i++) {
        echo $t[$i] . ", ";
      }
    }
    echo "Elements: [";
    echo print_array($t)."] <br>";

    // a function that calculates the average of an array
    function average($t) {
        $sum = 0;
        for ($i = 0; $i < count($t); $i++) {
            $sum += $t[$i];
        }
        $average = $sum / count($t);
        return $average;
    }
    echo "The average is: " . average($t) . "<br>";

    // a function that print number of elements superior to the average
    function greater($t, $number) {
        $count = 0;
        for ($i = 0; $i < count($t); $i++) {
            if ($t[$i] > $number) {
                $count++;
            }
        }
        return $count;
    }
    $num = 10;
    echo "Number of elements greater than ".$num.": " . greater($t, $num) . "<br>";

    // a function that print if a number exist
    function exist($t, $number) {
        for ($i = 0; $i < count($t); $i++) {
            if ($t[$i] == $number) {
                return true;
            }
        }
        return false;
    }
    $num = 20;
    echo exist($t, $num) ? "The number ".$num." exist." : "The number ".$num." doesn't exist.";

    // binary search function
    function binary_search($t, $number) {
        $low = 0;
        $high = count($t) - 1;
        while ($low <= $high) {
            $mid = floor(($low + $high) / 2);
            if ($t[$mid] == $number) {
                return true;
            } else if ($t[$mid] < $number) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }
        return false;
    }
    echo "<br><br>";

    function bubble_sort($t) {
      $max = count($t) - 1;
      while ($max > 0 && $counter != 0) {
      $counter = 0;
        for ($i=0; $i < $max; $i++) {
          if($t[$i] > $t[$i+1]) {
            $counter++;
            $temp = $t[$i];
            $t[$i] = $t[$i+1];
            $t[$i+1] = $temp;
            print_array($t);echo "<br>";
          }
        }
        $max--;
      }
      return $t;
    }

    $tb = array(12,10,8,26,54,13,32);
    bubble_sort($tb);
    // print_array(bubble_sort($tb)); echo"<br>";
    ?>
  </div>
  <pre style="padding: 50px 0;">
      <code style="text-align: start;"><?php
                                        echo htmlspecialchars(preg_replace("/<pre((.|\n)*)script>/i", "", file_get_contents(__file__)));
                                        ?></code>
    </pre>
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
  <script>
    hljs.highlightAll();
  </script>
</body>

</html>