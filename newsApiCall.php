<?php
function crousalNews(){

// $url ="http://newsapi.org/v2/top-headlines?country=in&category=entertainment&apiKey=7509099feb234f76ba342446a56c1b94";
$url = "http://newsapi.org/v2/top-headlines?sources=google-news-in&apiKey=7509099feb234f76ba342446a56c1b94";
$response = file_get_contents($url);
if ($response) {
    $newsData = json_decode($response);

    $arrayTitle = [];
    $arrayDescription = [];
    $arrayImage = [];
    $arrayUrl = [];
    $arrayContent = [];
    foreach ($newsData->articles as $News) {
        $title = $News->title;
        $des = $News->description;
        $img = $News->urlToImage;
        $url = $News->url;
        $content = $News->content;
        // echo "<br />";
        // echo $News->description;
        // echo "<br />";
        // echo $News->content;
        // echo "<br />";
        // echo $News->urlToImage;
        // echo "<hr>";
        array_push($arrayTitle, $title);
        array_push($arrayDescription, $des);
        array_push($arrayImage, $img);
        array_push($arrayUrl, $url);
        array_push($arrayContent, $content);
    }
} else {
    //echo "<script>window.open('UserPanel.php','_self')</script>";
}
?>



<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
 
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="5000">
            <img src="<?php echo $arrayImage[0]; ?>" class="d-block w-100" alt="..." height="350px">
            <div class="carousel-caption d-md-block">
                <h5><?php echo $arrayTitle[0]; ?></h5>
                <p><?php echo $arrayDescription[0]; ?></p>
            </div>
        </div>
        <?php
        for ($i = 1; $i < count($arrayTitle); $i++) {
        ?>
            <div class="carousel-item" data-interval="5000">
                <img src="<?php echo $arrayImage[$i]; ?>" class="d-block w-100" alt="..." height="350px">
                <div class="carousel-caption d-md-block">
                    <h5><?php echo $arrayTitle[$i]; ?></h5>
                    <p><?php echo $arrayDescription[$i]; ?></p>
                </div>
            </div>
        <?php } ?>


    </div>


</div>


<?php } ?>









<?php


function mainNews(){

// $url ="http://newsapi.org/v2/top-headlines?country=in&category=entertainment&apiKey=7509099feb234f76ba342446a56c1b94";
$url = "http://newsapi.org/v2/top-headlines?sources=google-news-in&apiKey=7509099feb234f76ba342446a56c1b94";
$response = file_get_contents($url);
if ($response) {
    $newsData = json_decode($response);

    $arrayTitle = [];
    $arrayDescription = [];
    $arrayImage = [];
    $arrayUrl = [];
    $arrayContent = [];
    foreach ($newsData->articles as $News) {
        $title = $News->title;
        $des = $News->description;
        $img = $News->urlToImage;
        $url = $News->url;
        $content = $News->content;
        // echo "<br />";
        // echo $News->description;
        // echo "<br />";
        // echo $News->content;
        // echo "<br />";
        // echo $News->urlToImage;
        // echo "<hr>";
        array_push($arrayTitle, $title);
        array_push($arrayDescription, $des);
        array_push($arrayImage, $img);
        array_push($arrayUrl, $url);
        array_push($arrayContent, $content);
    }
} else {
    //echo "<script>window.open('UserPanel.php','_self')</script>";
}
?>



<div class="container">
    <?php
      $j = 1;
    for ($i = 0; $i < count($arrayTitle); $i += 2) {

      // echo "<script>console.log('val' + $i)</script>";
      // echo "<script>console.log($j)</script>";
    ?>
      <div class="row border p-2 m-2 divcol">
        <div class="col-md-9">
          <h2><a class="text-dark text-decoration-none" href="<?php echo $arrayUrl[$i]; ?>"><?php echo $arrayTitle[$i]; ?></a></h2>
          <h5><?php echo $arrayDescription[$i]; ?></h5>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
          <img src="<?php echo $arrayImage[$i]; ?>" alt="News Thumbnail" class="img-fluid img-thumbnail" style="height: auto">
        </div>
      </div>


      <div class="row border p-2 m-2 divcol">
        <div class="col-md-3 d-flex justify-content-center">
          <img src="<?php echo $arrayImage[$j]; ?>" alt="News Thumbnail" class="img-fluid img-thumbnail" style="height: auto">
        </div>
        <div class="col-md-9">
          <h2><a class="text-dark text-decoration-none" href="<?php echo $arrayUrl[$j]; ?>"><?php echo $arrayTitle[$j]; ?></a></h2>
          <h5><?php echo $arrayDescription[$j]; ?></h5>
        </div>
      </div>
    <?php
    $j+=2;
    }
    ?>
  </div>


<?php } ?>



