<!DOCTYPE html>
<!-- Random Bible Verse -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Random Bible Verse Generator" />
  <meta name="keywords" content="Bible, API, ICD2O" />
  <meta name="author" content="Benjamin Abebe" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css">
  <title>Random Bible Verse</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <form action="./answer.php" method="get">
          <span class="mdl-layout-title">Random Bible Verse</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="center-content" style="text-align: center; margin: 2em;">
        <img src="./bible.jpg" alt="Bible" />
        <p class="page-content">Click the button below to see a Bible verse!</p>

        <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          href="./index.php" type="button">
          Another Bible Verse
        </a>

        <br /><br />
          <?php
          // Randomly pick a verse ID
          $verses = ["JHN.3.16", "PSA.23.1", "ROM.8.28", "MAT.6.33", "PHI.4.13"];
          $randomVerseId = $verses[array_rand($verses)];

          $apiKey = "ac9bf9be9a365d3bfec89c6837e17f1a";
          $bibleId = "de4e12af7f28f599-02"; 

          // API URL
          $url = "https://api.scripture.api.bible/v1/bibles/$bibleId/verses/$randomVerseId";

          $options = [
            "http" => [
              "method" => "GET",
              "header" => "api-key: $apiKey\r\n"
            ]
          ];

          $context = stream_context_create($options);

          // Make the request
          $response = file_get_contents($url, false, $context);

          // Decode the JSON
          if ($response !== false) {
            $data = json_decode($response, true);
            $reference = $data["data"]["reference"];
            $content = $data["data"]["content"];
          } else {
            $reference = "Error";
            $content = "Could not fetch verse.";
          }
          ?>

          <div class="page-content-answer">
            <div id="verse" ></div>
          </div>
      </div>
    </main>
    </form>
  </div>

  <script src="./js/script.js"></script>
</body>

</html>