<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of sphere calculator" />
  <meta name="keywords" content="math, icd2o" />
  <meta name="author" content="yi.zhou" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Volume of Sphere</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of Sphere</span>
      </div>
    </header>

    <main class="mdl-layout__content">
      <div class="page-content">
        <h2 class="formula">Formula</h2>
        <p class="formula-body">V = (4 / 3) × π × r³</p>

        <?php
          // Get radius from query string
          if (isset($_GET['radius']) && is_numeric($_GET['radius']) && $_GET['radius'] > 0) {
            $radius = floatval($_GET['radius']);

            // Calculate volume
            $volume = (4 / 3) * pi() * pow($radius, 3);
            $volumeRounded = round($volume, 2);

            // Output result
            echo "<p><strong>Radius:</strong> " . $radius . " cm</p>";
            echo "<p><strong>Volume:</strong> " . $volumeRounded . " cm³</p>";
          } else {
            echo "<p style='color: red;'>Please provide a valid positive number for radius in the URL using <code>?radius=VALUE</code></p>";
          }
        ?>

        <br />
        <img src="images/volume-sphere.png" alt="Sphere diagram" style="max-width: 300px;">
        </a>
      </div>
    </main>
  </div>
</body>

</html>
