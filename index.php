<?php
$navItems = [
  'home' => 'HOME',
  'projects' => 'PROJECT',
  'aboutme' => 'ABOUT'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <style>
    body {
      background: linear-gradient(135deg, #1a1a1a, #1a1a1a, #0e0e39);
      color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
      margin: 0;
      overflow: auto;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      background: linear-gradient(135deg, #1a1a1a, #f0efd6);
    }

    #nav-title {
      color: #bf4341;
      font-weight: bold;
      font-size: 1.5rem;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .nav-item {
      color: white;
      font-weight: bold;
    }

    .nav-item :hover {
      transform: scale(1.2);
      text-decoration: underline;
      transition: transform 0.3s ease
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
      <span id="nav-title">PORTFOLIO</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <?php foreach ($navItems as $key => $value): ?>
            <li class="nav-item mx-3">
              <a class="nav-link" href="?page=<?php echo htmlspecialchars($key); ?>"><?php echo htmlspecialchars($value); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container mt-5 pt-5">
    <?php
    // Default page is 'home'
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    // Include content based on the URL parameter
    switch ($page) {
      case 'projects':
        include('projects.php');
        break;
      case 'aboutme':
        include('aboutme.php');
        break;
      default:
        include('home.php');
        break;
    }
    ?>
  </div>
</body>

</html>