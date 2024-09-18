<?php
$projects = [
  'websites' => [
    [
      'images' => [
        'wavetoearth1.png',
        'wavetoearth2.png',
        'wavetoearth3.png',
        'wavetoearth4.png'
      ],
      'description' => 'This project presents an engaging multimedia experience on an entertaining Wave to Earth fan page. Links to the bands songs and in-depth profiles of each member are included. The website consists of dynamic album cover pictures and interactive components like clickable song names that take visitors to Spotify. To increase user engagement, it provides fans in-depth insights into Wave to Earth, tracing their story from formation to global success. All of this information is presented in an aesthetically pleasing and well-organized structure.'
    ]
  ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <style>
    body {
      background: linear-gradient(135deg, #1a1a1a, #1a1a1a, #0e0e39);
      color: #ffffff;
    }

    h1, h2 {
      font-weight: bold;
      color: #84b0b5;
      text-shadow: 2px 2px 4px #000000;
    }

    .project-container {
      margin-top: 20px;
    }

    .project-header {
      padding: 20px;
      background-color: #343a40;
      font-weight: bold;
      text-align: center;
      border-radius: 8px;
      font-size: 2.5rem;
      margin-bottom: 50px;
    }

    .project {
      margin-bottom: 20px;
      background-color: #212529;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
    }

    .project img {
      width: 100%;
      height: auto;
      border-radius: 8px;
    }

    .description {
      margin-top: 10px;
      background-color: #343a40;
      padding: 10px;
      border-radius: 8px;
      font-size: 1.1rem;
      line-height: 1.6;
      text-align: justify;
    }

    a {
      color: white;
      text-decoration: none;
    }

    a:hover {
      color: #ffffff;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="project-header">PROJECT</h1>

    <?php if (isset($projects['websites'])): ?>
      <div class="project-container">
        <h2>Website</h2>
        <?php foreach ($projects['websites'] as $item): ?>
          <div class="row project">
            <?php foreach ($item['images'] as $index => $image): ?>
              <div class="col-md-6 col-lg-3 mb-3">
                <img src="<?php echo htmlspecialchars($image); ?>" alt="Website Image" class="img-fluid">
              </div>
            <?php endforeach; ?>
          </div>
          <div class="description"><?php echo $item['description']; ?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</body>

</html>