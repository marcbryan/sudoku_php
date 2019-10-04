<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sudoku</title>
    <link rel="stylesheet" href="css/sudoku.css">
  </head>
  <body>
    <table>
      <?php
        $cells = 0;
        for ($i=0; $i < 9; $i++) {
          if ($i == 2 || $i == 5) {
            echo "<tr class='bBottom'>";
          } else {
            echo "<tr>";
          }
          for ($j=0; $j < 9; $j++) {
            if ($j == 2 || $j == 5) {
              echo "<td class='bRight'>&nbsp;&nbsp;&nbsp;</td>";
            } else {
              echo "<td>&nbsp;&nbsp;&nbsp;</td>";
            }
            $cells += 1;
          }
          echo "</tr>";
        }
       ?>
    </table>
  </body>
</html>
