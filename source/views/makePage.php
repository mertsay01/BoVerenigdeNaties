<?php
require_once("../source/connect.php");

function makepage() {
    $sdg = $_GET['sdg'];

    $connection = db_connect();
    $sql = "SELECT * FROM sdgs WHERE id = ?";
    $stmt = $connection->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $sdg);
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

        echo '<h1 class="page__title">'. $title .'</h1>
        <p class="page__text">'. $text .'</p>
        <img class="page__img" style="background: '. $color .';"src="img/'. $path .'" alt="">';
    }

    $stmt->close();
    $connection->close();
}
?>