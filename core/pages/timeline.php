<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="../../ext/css/swiper/swiper.min.css">
  <link rel="stylesheet" href="../../ext/css/timeline.css">

  <!-- Demo styles -->

</head>
<body>
<div class="timeline-wrapper">
  <div class="timeline-heading">
    <h1>Karsten History</h1>
  </div>
  <div class="logoimage">
  <a href="../../index.php"><img src="../../content/images/karsten-logo2.png" alt="Karsten Logo"></a>
  </div>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">

      <div id="slide1" class="swiper-slide"
      style="background-image: url(../../content/images/History/History01.jpg);
      background-size: 100%">

        <div class="swiper-slide-content">
          <span class="timeline-top">1968</span>
          <span class="timeline-current">1968</span>
          <span class="timeline-previous">2019</span>
          <span class="timeline-next">1980</span>

          <h4 class="timeline-title">The start of a legacy</h4>
          <p class="timeline-text">Piet and Babsie Karsten founded
            their family farming business on Kanoneiland west
            of Upington along the Orange River.</p>
        </div>

      </div> <!-- Slide 1 - 1968 -->

        <div id="slide2" class="swiper-slide" style="background-image: url(../../content/images/History/History02.jpg); background-size: 100%">
          <div class="swiper-slide-content">
            <span class="timeline-top">1980</span>
            <span class="timeline-current">1980</span>
            <span class="timeline-previous">1968</span>
            <span class="timeline-next">1983</span>
            <h4 class="timeline-title">Roepersfontein</h4>
            <p class="timeline-info">Piet and Babsie Karsten bought the farm Roepersfontein, which is now The Karsten Group’s head quarters.</p>
            <p class="timeline-quote">
              “Excellence is the result of caring more than others think is wise,
              Risking more than others think is safe,
              Dreaming more than others think is practical,
              And expecting more than others think is possible”
              – <u>Piet Karsten, founder of the The Karsten Group</u></p>
          </div>
        </div> <!-- Slide 1 - 1980 -->

        <div id="slide3" class="swiper-slide" style="background-image: url(../../content/images/History/History11.jpg); background-size: 100%">
          <div class="swiper-slide-content">
            <span class="timeline-top" style="color: green">2019</span>
            <span class="timeline-current">2019</span>
            <span class="timeline-previous">2018</span>
            <span class="timeline-next">1968</span>
            <h4 class="timeline-title">Green Valley Nuts</h4>
            <p class="timeline-info">Our <a href="Products.php#pecan_page">pecan</a> farm is situated east of the Orange river, near Prieska. From June 2014, we commenced with pecan processing and we can process up to a hundred tons per month.
            The Karsten Group is proud to announce majority ownership stake in 2019!
            </p>

          </div>
        </div> <!-- Slide 1 - 1980 -->

    </div>
    <!-- Add Pagination -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</div>
  <!-- Swiper JS -->
  <script src="../../ext/css/swiper/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      direction: 'vertical',
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        dynamicBullets: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>
