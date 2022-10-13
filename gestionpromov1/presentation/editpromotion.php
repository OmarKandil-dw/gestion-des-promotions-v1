<?php require_once '../data-access/promotionDAL.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="cont">
        <h1>Modifier promotion</h1>
        <div class="form_div">
            <form action="../busniss/update.php" method="POST">
                <label>nom:
                    <?php
                    $select_query = "SELECT * FROM promotion WHERE id_promotion = " . $_GET["edit_id"];
                    $select_res = $conn->query($select_query);
                    if ($select_res->num_rows > 0) {
                        while ($row = $select_res->fetch_assoc()) {
                    ?>
                <input type="text" name="nom" value="<?php echo $row["nom"]; ?>">
                </label>
                <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                <input type="submit" value="Submit" name="update_prom">
        <?php
                        }
                    }
        ?>

            </form>
        </div>
    </div>

</body>

</html>