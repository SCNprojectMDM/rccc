<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title>LOGS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container-fluid">
    <div class="row text-center">
      <p>Hallo, <?php echo htmlspecialchars($_SESSION['username']); ?> welkom op de LOG pagina!</p>
      <div class="col-md-4">
        <br><br><br><br>
        <h3></h3>
        <p></p>
      </div>
      <div class="col-md-4">
        <h3>Algemene LOG</h3>
        <hr>
        <p>16-02-18 09:22 &rarr; Op internet gezocht naar (voorbeeld) forums.</p>
        <p>16-02-18 09:35&rarr; Forum gevonden.</p>
        <p>16-02-18 09:40&rarr; Begonnen met het maken van een voorpagina. <a href="old/forum/index.php" target="blank">(zien)</p></a>
        <p>16-02-18 10:36&rarr; Begonnen met het maken van een registratie pagina.</p>
        <p>16-02-18 10:51&rarr; Gevraagd aan een forum beheerder of het makkelijk is.</p>
        <p>16-02-18 11:04&rarr; Netflix.</p>
        <p>16-02-18 11:30&rarr; Afsluiten.</p>
        <hr>
        <p>23-02-18 09:10&rarr; YouTube</p>
        <p>23-02-18 10:33&rarr; Verder met de voorpagina. <a href="old/forum/index.php" target="blank">(zien)</a></p>
        <p>23-02-18 10:45&rarr; Directe contact gehad met een forum beheerder.</p>
        <p>23-02-18 11:00&rarr; Gestopt met huidig project.</p>
        <p>23-02-18 11:01&rarr; YouTube.</p>
        <p>23-02-18 11:30&rarr; Afsluiten.</p>
        <hr>
        <p>02-03-18 09:17&rarr; YouTube.</p>
        <p>02-03-18 10:00&rarr; Informatie gekregen van een forum beheerder.</p>
        <p>02-03-18 10:17&rarr; MyBB Geinstallerd.</p>
        <p>02-03-18 10:22&rarr; Alles testen.</p>
        <p>02-03-18 11:30&rarr; Afsluiten.</p>
        <hr>
        <p>09-03-18 09:17&rarr; Alles werkt dus eigenlijk klaar.</p>
        <p>09-03-18 09:51&rarr; Nieuw thema geinstallerd</p>
        <p>09-03-18 10:00&rarr; Netflix</p>
        <p>09-03-18 11:30&rarr; Afsluiten.</p>
        <hr>
        <p>16-03-18 09:17&rarr; Netflix &amp; YouTube</p>
        <p>16-03-18 10:00&rarr; Kop thee drinken</p>
        <p>16-03-18 11:30&rarr; Afsluiten.</p>
        <hr>
        <p>23-03-18 09:08&rarr; Begonnen met een nieuw project.</p>
        <br>
        <p>(Dit is ons huidige project,
        dit is geen forum maar een soort upload page, hier kun je allerlei verschillende dingen uploaden zoals weergegeven op de index pagina.)</p>
        <br>
        <p>23-03-18 09:12&rarr; Begonnen met het maken van de Header.</p>
        <p>23-03-18 10:00&rarr; Pauze.</p>
        <p>23-03-18 10:15&rarr; Verder met het maken van de Header.</p>
        <p>23-03-18 10:38&rarr; Op google gezocht naar icons</p>
        <p>23-03-18 10:41&rarr; Onderwerpen met icons toegevoegd aan de Header.</p>
        <p>23-03-18 11:13&rarr; Header en alle icons eiegn style gegeven.</p>
        <hr>
        <p>30-03-18 09:17&rarr; Begonnen met het maken van de Footer.</p>
        <p>30-03-18 09:58&rarr; Opgezocht hoe ik 3 rijen moest maken voor de Footer</p>
        <p>30-03-18 10:00&rarr; Pauze.</p>
        <p>30-03-18 10:15&rarr; Alle benodigheden aan de Footer toegevoegd.</p>
        <p>30-03-18 10:49&rarr; YouTube.</p>
        <p>30-03-18 11:30&rarr; Afsluiten.</p>
        <hr>
        <p>30-03-18 09:17&rarr; YouTube tutorials gekeken voor een inlog systeem</p>
        <p>30-03-18 09:20&rarr; Eerste tutorial bekeken en gevolgd (mislukt).</p>
        <p>30-03-18 10:00&rarr; Pauze.</p>
        <p>30-03-18 10:30&rarr; Netflix.</p>
        <p>30-03-18 11:30&rarr; Afsluiten</p>
        <hr>
        <p>06-04-18 09:10&rarr; Netflix.</p>
        <p>06-04-18 11:30&rarr; Afsluiten</p>
        <hr>
        <p>13-04-18 09:20&rarr; Include files gemaakt.</p>
        <p>13-04-18 10:00&rarr; Pauze.</p>
        <p>13-04-18 10:30&rarr; Begonnen met het Responsive maken van de website.</p>
        <p>13-04-18 11:30&rarr; Afsluiten</p>
        <hr>
        <h3>In mijn(ᴼᴿᴵᴳᴵᴻᴬᴸ Mike) eigen tijd</h3>
        <p>16-04-18 17:15&rarr; Begonnen met het volgen van een inlogsysteem tutorial.</p>
        <p>16-04-18 18:35&rarr; De tutorial gevolgd, ERROR&rarr;inlog geen succes.</p>
        <p>16-04-18 18:45&rarr; Eten.</p>
        <p>16-04-18 19:22&rarr; Alle login bestanden verwijderd en de inlog opnieuw proberen.</p>
        <p>16-04-18 20:58&rarr; Dit keer een andere error.</p>
        <p>16-04-18 21:10&rarr; Vorige error gefixt maar weer een nieuwe error.</p>
        <p>16-04-18 21:18&rarr; Die error gefixt en er kwam weer een nieuwe.</p>
        <p>16-04-18 21:22&rarr; Proberen alles weer ongedaan te maken.</p>
        <p>16-04-18 21:30&rarr; Meer dan 100 erros.</p>
        <p>16-04-18 21:50&rarr; Alles weer verwijderd en laptop dicht gedaan.</p>
        <p>16-04-18 22:10&rarr; Naar macdonalds voor afleiding.</p>
        <hr>
        <p>(nogsteedsmijneigentijd)</p>
        <hr>
        <p>17-04-18 15:10&rarr; Weer opnieuw de eerste tutorial gevolgd.</p>
        <p>17-04-18 15:58&rarr; Weer een error.</p>
        <p>17-04-18 16:00&rarr; Bestanden weer verwijderd.</p>
        <p>17-04-18 16:30&rarr; Nog een keer geprobeerd de tutorial te maken.</p>
        <p>17-04-18 17:30&rarr; Weer een error.</p>
        <p>17-04-18 17:45&rarr; Eten.</p>
        <p>17-04-18 18:00&rarr; De erros proberen te fixen.</p>
        <p>17-04-18 18:26&rarr; Johan Koster(MENTOR) geappt voor hulp.</p>
        <p>17-04-18 18:30&rarr; Mails met screenshots gestuurd naar mentor</p>
        <p>17-04-18 21:00&rarr; Nog steeds geen inlogsysteem.</p>
        <p>17-04-18 22:00&rarr; Opgegeven.</p>
        <hr>
        <p>(nogsteedsmijneigentijd)</p>
        <hr>
        <p>18-04-18 15:40&rarr; Nieuwe tutorial gevolgd.</p>
        <p>18-04-18 17:20&rarr; Succes het werkt!</p>
        <p>(Alleen was dit een registratie systeem er zit geen login bij) <a href="old/project/register.php" target="blank">(zien)</a>
        <p>18-04-18 21:40&rarr; Nieuwe tutorial op internet gevolgd.</p>
        <p>18-04-18 22:20&rarr; Werkend inlog &amp; registratie systeem!</p>
        <p>18-04-18 23:40&rarr; Opzoek naar een upload systeem.</p>
        <p>18-04-18 00:24&rarr; Afgesloten.</p>
        <hr>
      </div>
      <div class="col-md-4">
        <br><br><br><br>
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>

<div class="container-fluid">
    <div class="row text-center">
      <div class="col-md-4">
        <br><br><br><br>
        <h3></h3>
        <p></p>
      </div>
      <div class="col-md-4">
        <h3>BRONNEN</h3>
        <p><a href="bronnen.php">alle bronnen bekijken</a>
      </div>
      <div class="col-md-4">
        <br><br><br><br>
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>
  </body>
  </html>
