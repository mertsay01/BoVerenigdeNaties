<?php
require_once("../source/connect.php");

function makeTiles() {
    $sdg = 
    shuffle($numberArray);

    $connection = db_connect();

    for ($i = 0; $i < 3; $i++) {
        $currentNumber = $numberArray[$i];
        $sql = "SELECT * FROM sdgs WHERE id = ?";
        $stmt = $connection->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("i", $currentNumber);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $text = $row['text'];
                    $color = $row['color'];
                    $path = $row['img'];
                    $title = $row['title'];
                }
            } else {
                echo "Query failed: " . $connection->error;
            }

            echo '<h1>'. $title .'</h1>
            <p>'. $text .'</p>
            <img style="background: '. $color .';"src="img/'. $path .'" alt="">';
        }
    }

    $stmt->close();
    $connection->close();
}
?>