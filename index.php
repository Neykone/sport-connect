<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Sport Connect - Espaces sportifs de proximité</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!-- Barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="fas fa-futbol me-2"></i>
            <strong>Sport Connect</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fas fa-user"></i> <?= htmlspecialchars($_SESSION['user_name']) ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i> Déconnexion
                        </a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <i class="fas fa-sign-in-alt"></i> Connexion
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light text-primary px-3 mx-2" href="register.php">
                            <i class="fas fa-user-plus"></i> Inscription
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<header class="hero-section text-white text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-4">
            Le sport à portée de main
        </h1>
        <p class="lead mb-4">
            Louez des espaces sportifs près de chez vous et pratiquez votre sport préféré
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="spaces.php" class="btn btn-light btn-lg">
                <i class="fas fa-search"></i> Explorer les espaces
            </a>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="add_space.php" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-plus-circle"></i> Ajouter mon espace
                </a>
            <?php endif; ?>
        </div>
    </div>
</header>

<!-- Problématique Section -->
<section class="problem-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="problem-card p-4">
                    <i class="fas fa-exclamation-triangle fa-3x text-warning mb-3"></i>
                    <h2 class="h3 mb-3">Manque d'infrastructures sportives de proximité</h2>
                    <p class="lead">
                        Trop peu d'espaces pour pratiquer le sport près de chez soi.
                        Sport Connect transforme les espaces inutilisés en terrains de sport.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fonctionnalités -->
<section class="features py-5">
    <div class="container">
        <h2 class="text-center mb-5">Nos solutions</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-home fa-3x text-primary"></i>
                    </div>
                    <h3>Airbnb du sport</h3>
                    <p>Louez jardins, parkings et espaces inutilisés pour vos activités sportives</p>
                    <a href="spaces.php" class="btn btn-outline-primary">Découvrir →</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-map-marked-alt fa-3x text-primary"></i>
                    </div>
                    <h3>Carte intelligente</h3>
                    <p>Trouvez les espaces disponibles autour de vous en temps réel</p>
                    <a href="map.php" class="btn btn-outline-primary">Explorer →</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-robot fa-3x text-primary"></i>
                    </div>
                    <h3>Coach IA de quartier</h3>
                    <p>Programmes personnalisés utilisant le mobilier urbain</p>
                    <a href="coach.php" class="btn btn-outline-primary">Essayer →</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-qrcode fa-3x text-primary"></i>
                    </div>
                    <h3>Conteneurs connectés</h3>
                    <p>Modules sportifs mobiles accessibles par QR code</p>
                    <a href="container.php" class="btn btn-outline-primary">Accéder →</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-card text-center p-4">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-trophy fa-3x text-primary"></i>
                    </div>
                    <h3>Tournois express</h3>
                    <p>Organisez et rejoignez des matchs spontanés dans votre quartier</p>
                    <a href="tournaments.php" class="btn btn-outline-primary">Participer →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
    <div class="container text-center">
        <p class="mb-0">© 2024 Sport Connect - Le sport accessible à tous</p>
        <small class="text-muted">Solution innovante contre le manque d'infrastructures sportives</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
