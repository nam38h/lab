<?php
include_once "database.php";
$sql = "SELECT `id`, `name`` FROM `categories`";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="index.php">
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <?php
            foreach ($row as $value) {


            ?>
                <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
            <?php } ?>


        </select>
        <input type="text" placeholder="Intro" name="intro">
        <input type="text" placeholder="Description" name="description">
        <input type="text" placeholder="Price" name="price">
        <input type="submit" placeholder="Sửa">
    </form>
    <?php
    include_once "database.php";
    $Name = $_POST['name'];
    $intro = $_POST['intro'];
    $des = $_POST['description'];
    $price = $_POST['price'];
    $sqli = "SELECT * FROM `tour`";
    $result = $conn->query($sqli);
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $sql = "UPDATE `tours` SET `name`='[$Name]',`intro`='[$intro]',`description`='[$des]',`price`='[$price]' WHERE `id`=$id";
    mysqli_query($conn, $sql);
    ?>
</body>

</html>