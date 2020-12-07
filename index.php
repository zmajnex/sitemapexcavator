<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP SitemapExcavator</title>
</head>

<body class="home">
    <div class="container mt-4">
        <h1>PHP Sitemap Excavator</h1>
        <p>version 1.0.0</p>
    </div>
    <div class="container">
        <form method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="url">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php 
    // sitemap url or sitemap file
$sitemap = $_POST['url'];
// get sitemap content
$content = file_get_contents($sitemap);
// parse the sitemap content to object
$xml = simplexml_load_string($content);
// retrieve properties from the sitemap object
//$results = [];
foreach ($xml->url as $urlElement) {
    // get properties
    $url = $urlElement->loc;
    // print out the properties
    echo  $url . '<br>';
    //echo '<br>---<br>';
    //$results= array("url" => $url);
}
//print_r($results);

?>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>