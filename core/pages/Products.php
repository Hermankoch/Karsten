<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Karsten Products</title>
  <link rel="stylesheet" href="../../ext/css/products.css">
  <link rel="stylesheet" href="../../ext/css/fonts/InkFree/style.css">
  <link rel="stylesheet" href="../../ext/css/fonts/fontawesome/css/all.css">
</head>

<body>
  <div class="topContent">
  <div class="logoimage">
  <a href="../../index.php"><img src="../../content/images/karsten-logo2.png" alt="Karsten Logo"></a>
  </div>
  <div class="fresh">
    <a class="logoLink" href="#fresh_products"><h1 class="mainLink">Fresh Produce</h1></a>
  </div>
  <div class="livestock">
    <a class="logoLink" href="#livestock_page"><h1 class="mainLink">Livestock</h1></a>
  </div>
</div>

  <div class="wrapper">
    <div class="insidepage">
    <div class="content">
      <div><img src="../../content/images/products1.jpg" alt="Karsten Logo"></div>
      <div><img src="../../content/images/products2.jpg" alt="Karsten Logo"></div>
      <div><img src="../../content/images/products3.jpg" alt="Karsten Logo"></div>
      <div><img src="../../content/images/products4.jpg" alt="Karsten Logo"></div>
      <div><img src="../../content/images/livestock1.jpg" alt="Karsten Logo"></div>
      <div><img src="../../content/images/livestock2.jpg" alt="Karsten Logo"></div>
      <div><img src="../../content/images/livestock3.jpg" alt="Karsten Logo"></div>
      <div><img src="../../content/images/livestock4.jpg" alt="Karsten Logo"></div>
    </div>
   </div>
  </div>
  <hr>

  <div id="fresh_products" class="freshwrapper">
    <div class="fresh_page">

      <?php include("grapes.php");
            include("cherries.php");
            include("apples.php");
            include("citrus.php");
            include("dates.php");
            include("melons.php");
            include("pears.php");
            include("pecan_nuts.php");
            include("plums.php");
            include("watermelon.php");
            include("livestock.php"); ?>

    </div> <!-- Freshpage -->
  </div> <!--freshwrapper -->

  <script>
  function hideShowDiv(){
    var x = document.getElementsByClassName("hiddenLink");
    var i = 0;

    if (x[0].style.display == "block"){
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
  }else {
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "block";
    }
  }
  console.log(x.length);
}

  </script>

</body>
</html>
