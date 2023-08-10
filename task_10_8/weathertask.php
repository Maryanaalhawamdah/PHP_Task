<!DOCTYPE html>
<html>
<head>
    <title>Weather Forecast</title>
</head>
<body>
    <h1>Weather Forecast</h1>

    <form method="POST">
        <label for="city">Enter City Name: </label>
        <input type="text" id="city" name="city" required>
        <button type="submit">Get Forecast</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $apiKey = 'YOUR_OPENWEATHERMAP_API_KEY';
        $city = $_POST['city'];
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if ($data) {
            $cityName = $data['name'];
            $temperature = $data['main']['temp'];
            $humidity = $data['main']['humidity'];
            $minTemp = $data['main']['temp_min'];
            $maxTemp = $data['main']['temp_max'];
            $windSpeed = $data['wind']['speed'];

            echo "<h2>Weather Information for $cityName</h2>";
            echo "Temperature: $temperature &#8451;<br>";
            echo "Humidity: $humidity%<br>";
            echo "Minimum Temperature: $minTemp &#8451;<br>";
            echo "Maximum Temperature: $maxTemp &#8451;<br>";
            echo "Wind Speed: $windSpeed m/s<br>";
        } else {
            echo "<p>City not found. Please try again.</p>";
        }
    }
    ?>
</body>
</html>
