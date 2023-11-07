<?php
require_once("../source/connect.php");

function makeTiles() {
    $numberArray = range(1, 17);
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
                    $number = $row['id'];
                    $color = $row['color'];
                    $path = $row['img'];
                }
            } else {
                echo "Query failed: " . $connection->error;
            }

            echo '
            <article class="tile__article" style="background:' . $color . ';">
                <a class="tile__link" href="page.php?sdg=' . $number . '">
                    <img class="tile__img" src="img/' . $path . '" alt="een foto van 1 van de sdgs">
                </a>
            </article>';
        }
    }

    $stmt->close();
    $connection->close();
}
?>