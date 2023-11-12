<html>

<head>
    <title>Temperature Conversion</title>
</head>

<?php

$temperature = "";
$type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $type = $_POST["type"];

    if (!is_numeric($temperature)) {
        print("Please enter numbers for the temperature value");
    } else {
        if ($type === "fahrenheit") {
            $celsius = ($temperature - 32) * 5 / 9;
            printf("%.2fF is %.2fC", $temperature, $celsius);
        } elseif ($type === "Celsius") {
            $fahrenheit = $temperature * 9 / 5 + 32;
            printf("%.2fC is %.2fF", $temperature, $fahrenheit);
        }
    }
}

?>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Enter temperature:
        <input type="text" id="temperature" name="temperature" value="<?php echo $temperature ?>"> <br />
        The temperature is in
        <select id="type" name="type">
            <option value="fahrenheit" <?php echo ($type == "fahrenheit") ? "selected" : "" ?> >Fahrenheit</option>
            <option value="Celsius" <?php echo ($type == "Celsius") ? "selected" : "" ?> >Celsius</option>
        </select><br />


        <button type="submit">Convert to other</button>

    </form>

</body>

</html>