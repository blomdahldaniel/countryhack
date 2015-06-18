<?php
include_once './resources/templates/header.php';
?>

<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
   <!--[if lt IE 8]>
   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
   <![endif]-->
   <?php
   include_once './resources/templates/top-nav.php';
   ?>
   <!-- Section konferensbild -->
   <section class="storbild">
    <div class="container" >
      <div class="row" style="margin-top: 70px;">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
        </div><!--// col -->
      </div><!--// row -->
    </div><!--// container -->
  </section> <!--// konferensbild -->
   <section class="primary-bg text-white">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h1 style="margin: 0px;">COUNTRYHACK</h1>
          <h4 style="margin: 0px;">- THE BIGEST LAN IN ASKLANDA -</h4>
        </div><!--// col -->
      </div><!--// row -->
    </div><!--// container -->
  </section> <!--// konferensbild -->


  <section class="white-bg shattered-bg">
    <div class="container">
      <div class="row-fluid">
      <div class="col-xs-12 text-center">
        <h1 class="gray">Nyheter</h1>
      </div>
      <?php
      for($n = 0; $n < 3; $n++){
      ?>
      <a href="#" class="nyhet">
        <div class="col-xs-12 col-md-4">
            <div class="inner">
              <h2>Ny design</h2>
              <p class="text-left">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo delectus, quo impedit praesentium asperiores aliquid nesciunt voluptatem tempore omnis dolor deserunt cupiditate harum officiis quidem!
              </p>
              <br><br>
              <img src="/img/quick.png" alt="CH" class="img-responsive center-block">
              <br><br><br>
            </div>
        </div>
      </a>
      <?php
      }
      ?>
        <div class="col-xs-12  grey-2 text-center">
          <br>
          <h1 class=" text-center">Återblick till CH Easter 15</h1>
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uBzP3UaiC0w?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-xs-12 text-right"><small>Film: Vår grymma filmkille</small></div>
          </p>
        </div><!-- // col -->
      </div><!--// row -->
    </div><!-- // container -->
  </section><!--  / #bakgrund -->
  <section class="tweed-bg text-white">
    <div class="container">
      <div class="row-fluid">
        <div class="col-xs-12 col-sm-6">
         <h3>Datorspel + Retrospel + Gött häng = Countryhack</h3>
          <p>
            Countryhack är en datorspelsfestival (eller LAN), belägen i hjärtat av Asklanda/Ornunga-bygden. Till Countryhack är alla välkomna (och om du är 14 eller äldre får du dessutom ta med din dator) och vårt främsta mål är att skapa en bra mötesplats, framförallt för ungdomar.
          </p>
          <p>
            Detta gör Countryhack till en datorspelsfestival olik de flesta andra av samma storlek då vi erbjuder en mängd olika aktiviteter. Givetvis kan du ta med din dator och lira mot både nya och gamla kompisar. Men vi bygger också upp en stor retrospelshörna med sköna soffor och en milt sagt respektabel samling av gamla klassiska spel och konsoler. Utöver detta har vi även bl. a. underhållning från scenen, Magic-hörna + turnering, (rund)pingis, discgolf, pärplattshörna med mera.
          </p>
          <p>
            För att spela dator på Countryhack behöver man köpa en biljett innan eventet här på hemsidan. Se bara till att registrera en användare först och gå sedan till <a href="#">Anmälan</a>.
          </p>
          <p>
            Om du inte vill lira goa spel som <b>Counter Strike</b> eller <b>League of Legends</b> (eller något annat datorspel) så räcker det med en dags- eller helg-biljett för att få ta del av allt Countryhack har att erbjuda. Och ja, det inkluderar retrospelshörnan! Det är bara att dyka upp i entrén och be om att få köpa en dags- eller helg-biljett. Ingen förbokning krävs!
          </p>
          <img src="img/retro2.jpg" class="img-responsive gray-darker-border">
          <h3>För gemenskap och E-sport</h3>
          <p>
            På Countryhack sätter vi gemenskapen först och vårt verktyg för att bilda detta är favorit-hobbyn E-sport. Genom att anordna två stora turneringar i <a href="http://blog.counter-strike.net/">Counter Strike: Global Offensive</a> och <a href="http://eune.leagueoflegends.com/">League of Legends</a> ges deltagarna en möjlighet att ha kul tillsammans, både med nya och gamla vänner.
          </p>
          <p>
            Trots det snabbt växande intresset för E-sport i Sverige så är datorspelandet fortfarande ett till viss del kontroversiellt ämne. Vi hoppas kunna bidra till att normalisera E-sporten och hjälpa till att införa E-sporten som en etablerad gren inom svensk sport. Därför uppmuntrar vi alla deltagares föräldrar att besöka Countryhack för att själva känna av den fantastiska stämningen som bara återfinns på E-sports-event. Under större delen av eventet är det dessutom <b>helt gratis</b> för alla att komma in och ta en titt!
          </p>
          <p>
            Hoppas vi ses på nästa event!
          </p>
          <p class="bye">
            Hälsningar,<br>
            <em>Johannes, Adam, Anders, Alexander, Daniel, Filip, Gustav, Mathias, Mikael och Tobias</em><br>
          (a.k.a. Countryhacks Crew)
          </p>
        </div>
        <div class="col-xs-12 col-sm-6 text-right">
            <img src="img/ehhser.jpg" class="img-responsive gray-darker-border">
          <h3>Tre dagar av magi</h3>
          <p>
            Vårt event har haft en tendens att utvecklas en hel del inför varje ny upplaga, något som helt beror på vårt dedikerade Crew. Som exempel kan nämnas vår Stream-studio som live-streamar kommenterade matcher under hela eventet, vår maxade scen och scenunderhållning, retrospelshörnan med fyra projektordukar och en tjock-TV samt den här hemsidan.
          </p>
          <p>
            Men inte ens ett dedikerat Crew hade räckt om vi inte haft våra fantastiska festival-deltagare. Det är den uppskattande responsen från alla våra deltagare som gör att vi i Crew orkar jobba vidare och göra Countryhack bättre. Efter varje event görs en enkätundersökning bland alla deltagare där de har chans att ge sin syn på eventet. Och den övergripande känslan bland deltagarna är tydlig: Countryhack är ett mycket uppskattat inslag i höst- och påsklov.
          </p>
          <blockquote class="text-left">
              Gött lan, goa lirare o gött häng!
          </blockquote>
          <div class="font-s-11 text-left" style="margin: -20px 0 10px 30px;">
           <em> Anonym deltagare, Countryhack Påsk 2015</em>
          </div>
          <blockquote class="text-left">
            Riktigt bra lan, ser redan fram emot nästa!
          </blockquote>
          <div class="font-s-11 text-left" style="margin: -20px 0 10px 30px;">
            <em>Anonym deltagare, Countryhack Halloween 2014</em>
          </div>
          <br>
            <img src="img/mtg.jpg" class="img-responsive gray-darker-border">
        </div>
      </div><!--// row -->
    </div><!--// container -->
  </section><!--  /.tweed-bg -->

  <section id="sponsorer" class="white-bg section-2">
    <div class="container">
      <div class="row-fluid">
        <div class="col-xs-12 text-center">
          <h1>Sponsorer</h1>
          <div class="orange-border center-block" style="margin-bottom: 35px;"></div>
        </div>
        <div class="col-xs-12">
          <img src="/img/bogalnet.png" alt="BogalNet" class="sponsorlogga">
        </div>
        <div class="col-xs-12 col-sm-6">
          <img src="/img/contage.png" alt="Contage" class="sponsorlogga">
        </div>
        <div class="col-xs-12 col-sm-6">
          <img src="/img/sparbankenalingsas.png" alt="Sparbanken Alingsås" class="sponsorlogga">
        </div>
        <div class="col-xs-12">
          <img src="/img/teamspeak.jpg" alt="TeamSpeak" class="sponsorlogga">
        </div>
      </div><!--// row -->
    </div><!--// container -->
</section><!-- /#sponsorer -->

<!-- Section #footer -->
<section id="footer" class="gray-darker-bg text-white">
  <div class="container">
    <div class="col-xs-9 col-sm-6 col-md-3 col-xs-offset-3 col-sm-offset-0">
      <img src="/img/quick_dark.png" alt="CountryHack logo dark" class="img-responsive">
    </div>
    <div class="col-xs-9 col-sm-6 col-md-3 col-xs-offset-3 col-sm-offset-0">
      <ul class="list-unstyled footer-link">
          <li><a href="#">Hem</a></li>
          <li><a href="#">Vad är Countryhack?</a></li>
          <li><a href="#">Vem anordnar Countryhack?</a></li>
          <li><a href="#">Anmälan</a></li>
          <li><a href="#">Hjälp till</a></li>
        </ul>
    </div>
    <div class="col-xs-9 col-sm-6 col-md-3 col-xs-offset-3 col-sm-offset-0">
      <ul class="list-unstyled footer-link">
          <li><a href="#">Medlem</a></li>
          <li><a href="#">Logga in</a></li>
          <li><a href="#">Bli medlem</a></li>
          <li><a href="#">Skapa lag</a></li>
          <li><a href="#">Din anmälan</a></li>
          <li><a href="#">Medlemslista</a></li>
        </ul>
    </div>
    <div class="col-xs-9 col-sm-6 col-md-3 col-xs-offset-3 col-sm-offset-6 col-md-offset-0">
      <ul class="list-unstyled footer-link">
          <li><a href="#">Countryhacks Crew</a></li>
          <li><a href="#">Om Crew</a></li>
          <li><a href="#">Kontakta oss</a></li>
        </ul>
    </div>
  </div>
</section>

<?php include_once './resources/templates/footer.php' ?>
