<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../ext/css/about_us.css">
    <link rel="stylesheet" href="../../ext/css/fonts/fruit/stylesheet.css">
    <link rel="stylesheet" href="../../ext/css/fonts/fontawesome/css/all.css">
    <title>About Karsten</title>
  </head>
  <body>

    <div class="page_wrapper">
      <div class="inside_page">

        <div class="heading">

          <div class="logoimage">
          <a href="../../index.php"><img src="../../content/images/karsten-logo2.png" alt="Karsten Logo"></a>
          </div>
          <h1>About Karsten</h1>

        </div>
        <div class="banner">
          <p>The Karsten Group is one of South Africa's leading agri-businesses respected both locally and internationally for the excellence of its products, cutting edge innovation and integrity in its dealings with staff, service providers and customers.
              Healthy profits are generated through a healthy workforce; which is why the “people factor” forms a key element in our philosophy.
              All activities are based on the principles of applying good agricultural practices that conform to the highest international standards and caring for a sensitive environment where technically advanced production practices exist in harmony with nature.
              Nurturing partnerships is the key to The Karsten Group’s success.</p>
        </div>

        <div class="executives">

          <?php
          $currentDate = date('Y');
          $pietk = $currentDate - 1948;
          $pieterk = $currentDate - 1975;
          $beliak = $currentDate - 1979;
          $pieterhm = $currentDate - 1979;
          $hermane = $currentDate - 1968;
          $foreignops = $currentDate - 2005;

          ?>

          <div class="card">
            <div class="card__side card__side--front pietk">

            </div>
            <div class="card__side card__side--back">
              <div class="card__picture pic">
              </div>
              <div class="card__text">
              <h1 class="card_heading">Piet Karsten</h1>
              <h2 class="card_sub-heading">Managing Director</h2>
              <p class="italicText">Founder of the group.</p>
              <p>Extensive businesses, marketing and production experience.</p>
            </div>
            </div>
          </div>
          <div class="card">
            <div class="card__side card__side--front pieterk">

            </div>
            <div class="card__side card__side--back one">
              <div class="card__picture pic">
              </div>
              <div class="card__text">
              <h1 class="card_heading">Pieter Karsten</h1>
              <h2 class="card_sub-heading">Deputy Management Director</h2>
              <p class="italicText">Joined the group in 1998 as a marketer.</p>
              <p>More than 20 years of international marketing experience</p>
            </div>
            </div>
          </div>
          <div class="card">
            <div class="card__side card__side--front beliak">

            </div>
            <div class="card__side card__side--back one">
              <div class="card__picture pic">
              </div>
              <div class="card__text">
              <h1 class="card_heading">Belia Karsten</h1>
              <h2 class="card_sub-heading">Executive Director: Corporate Services</h2>
              <p class="italicText">Joined in 2005.</p>
              <p>Qualified CA [SA] with extensive management and finance experience.</p>
            </div>
            </div>
          </div>
          <div class="card">
            <div class="card__side card__side--front hermane">

            </div>
            <div class="card__side card__side--back one">
              <div class="card__picture pic">
              </div>
              <div class="card__text">
              <h1 class="card_heading">Herman Engelbrecht</h1>
              <h2 class="card_sub-heading">Executive Director: Foreign Operations</h2>
              <p class="italicText">Joined in 2004.</p>
              <p>Qualified CA [SA] and Head of foreign operations for the past <?php echo $foreignops; ?> years.</p>
            </div>
            </div>
          </div>
          <div class="card">
            <div class="card__side card__side--front pieterhm">

            </div>
            <div class="card__side card__side--back one">
              <div class="card__picture pic">
              </div>
              <div class="card__text">
              <h1 class="card_heading">Pieter Holland-Muter</h1>
              <h2 class="card_sub-heading">Managing Director</h2>
              <p class="italicText">Joined in 2003 as an agricultural economist.</p>
              <p>More than 10 years of international marketing experience.</p>
            </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </body>
</html>
