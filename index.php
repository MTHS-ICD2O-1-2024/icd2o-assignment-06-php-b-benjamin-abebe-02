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

        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Another Bible Verse
        </button>

        <br /><br />

        <div class="page-content-answer">
          <div id="verse" style="font-size: 1.2em; padding: 1em;"></div>
        </div>
      </div>
    </main>
    </form>
  </div>

  <script src="./js/script.js"></script>
</body>

</html>