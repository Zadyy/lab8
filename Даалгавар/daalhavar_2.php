<html>

<head>
    <title>Listbox transfer</title>
</head>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <select name="first_list">
            <option value="apple">Apple</option>
            <option value="orange">Orange</option>
            <option value="kiwi">Kiwi</option>
            <option value="watermelon">Watermelon</option>
            <option value="grape">Grape</option>
        </select>
        <select name="second_list">
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $selectedfruit = $_POST["first_list"];
                echo "<option value='$selectedfruit'>$selectedfruit</option> ";
            }
            ?>
        </select>
        <input type="submit" value="Add to list box!" />
    </form>





</body>

</html>