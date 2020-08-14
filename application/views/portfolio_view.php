<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Портфолио</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <?php
            $dir = 'img/cats/';
            $cols = 4;
            $files = scandir($dir);
            echo "<table>";
            $k = 0;
            for ($i = 0; $i < count($files); $i++) {
                if (($files[$i] != ".") && ($files[$i] != "..")) {
                    if ($k % $cols == 0) echo "<tr>";
                    echo "<td>";
                    $path = $dir . $files[$i];
                    echo "<a href='$path'>";
                    echo "<img src='$path' alt='' width='250' />";
                    echo "</a>";
                    echo "</td>";
                    if ((($k + 1) % $cols == 0) || (($i + 1) == count($files))) echo "</tr>";
                    $k++;
                }
            }
            echo "</table>";
            ?>
        </div>
    </div>
</div>


<?php

/*foreach ($data as $row) {
    echo '<tr><td>' . $row['Year'] . '</td><td>' . $row['Site'] . '</td><td>' . $row['Description'] . '</td></tr>';
}*/
