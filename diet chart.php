<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Chart</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin:5px;
            padding:2px;
            background-image:url('diet.jpg');
            background-attachment: fixed;
            background-size: cover;
        }


        #container 
        {
            max-width: 500px;
            margin-top:120px;
            margin-left:250px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 
        {
            text-align: center;
        }

        form 
        {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label 
        {
            margin-bottom: 5px;
        }

        input 
        {
            margin-bottom: 15px;
            padding: 8px;
            width: 80%;
        }

        button 
        {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table 
        {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td 
        {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div id="container">
        <h2>Diet Chart</h2>
        <form action="" method="post">
        <label for="breakfast_time">Breakfast Time:</label>
        <input type="text" name="breakfast_time" required>

        <label for="lunch_time">Lunch Time:</label>
        <input type="text" name="lunch_time" required>

        <label for="dinner_time">Dinner Time:</label>
        <input type="text" name="dinner_time" required>

            <button type="submit">Generate Diet Chart</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $breakfastTime = $_POST["breakfast_time"];
            $lunchTime = $_POST["lunch_time"];
            $dinnerTime = $_POST["dinner_time"];

            // Sample data, you can replace this with your actual data
            $dietData = array(
                "Breakfast" => array("Oatmeal", "300 calories"),
                "Lunch" => array("Chicken Salad", "500 calories"),
                "Dinner" => array("Grilled Salmon", "400 calories")
            );
        ?>
            <table>
                <tr>
                    <th>Meal</th>
                    <th>Food Name</th>
                    <th>Calories</th>
                </tr>
                <?php
                foreach ($dietData as $meal => $data) {
                    echo "<tr>";
                    echo "<td>$meal</td>";
                    echo "<td>{$data[0]}</td>";
                    echo "<td>{$data[1]}</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        <?php
        }
        ?>
    </div>
</body>
</html>
