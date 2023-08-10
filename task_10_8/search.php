<?php
$apiKey = 'YOUR_YOUTUBE_API_KEY';
$query = isset($_GET['query']) ? $_GET['query'] : '';
$maxResults = 10;

if (!empty($query)) {
    $url = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&part=snippet&q=$query&maxResults=$maxResults";

    $response = file_get_contents($url);
    $data = json_decode($response, true);

    $totalResults = $data['pageInfo']['totalResults'];
    $items = $data['items'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>YouTube Search Results</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>YouTube Search Results</h1>
        <p>Total Results: <?php echo $totalResults; ?></p>

        <div class="results">
            <?php if (!empty($items)) {
                foreach ($items as $item) {
                    $title = $item['snippet']['title'];
                    $videoId = $item['id']['videoId'];
                    $thumbnailUrl = $item['snippet']['thumbnails']['default']['url'];
            ?>
                    <div class="card">
                        <img src="<?php echo $thumbnailUrl; ?>" alt="Thumbnail">
                        <h2><?php echo $title; ?></h2>
                        <a href="https://www.youtube.com/watch?v=<?php echo $videoId; ?>" target="_blank">Watch Video</a>
                    </div>
            <?php
                }
            } else {
                echo "<p>No results found.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
