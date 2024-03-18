<?php

include('./config/remote.php');
$sql = "SELECT id, name, price FROM items1";

//query the db and add the result to a php array
$result = mysqli_query($conn, $sql);
$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
//  print_r($items);
//free result from memory and close SQL connection
mysqli_free_result($result);
mysqli_close($conn);

?>
<html>
    <link rel="stylesheet" href="./assets/style.css">
    <div class="wrapper">
<table>
    <tr>
        <th>ITEMS</th>
        <th>PRICE</th>

    </tr>
    <tr>
        <td>
            <?php foreach ($items as $item) : ?>
                <p><?php echo $item["name"] ?></p>
            <?php endforeach ?>
        </td>
        <td>
        <?php foreach ($items as $item) : ?>
                <p><?php echo $item["price"] ?></p>
            <?php endforeach ?>
        </td>
    </tr>

</table>
</div>

<!-- <?php foreach ($items as $item) : ?>
    <h2><?php echo $item["name"] ?></h2>
<?php endforeach ?> -->

</html>