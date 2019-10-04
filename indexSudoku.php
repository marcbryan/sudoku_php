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
        $cell_num = 1;
        $cells = array();
        for ($i=0; $i < 9; $i++) {
          if ($i == 2 || $i == 5) {
            echo "<tr class='bBottom'>";
          } else {
            echo "<tr>";
          }
          for ($j=0; $j < 9; $j++) {
            if ($j == 2 || $j == 5) {
              echo "<td id='cell".$cell_num."' class='bRight'></td>";
            } else {
              echo "<td id='cell".$cell_num."'></td>";
            }
            array_push($cells, $cell_num);
            $cell_num += 1;
          }
          echo "</tr>";
        }
        for ($i=0; $i < 20; $i++) {
          $index = rand(0, count($cells)-1);
          $num = rand(1, 9);
          $cell_pos = $cells[$index];
          echo "<script>document.getElementById('cell".$cell_pos."').innerHTML = ".$num."</script>";
          unset($cells[$index]);
          $cells = array_values($cells);
        }
       ?>
    </table>
  </body>
</html>
