<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClientFlow Manager | Gestion Clients Simplifiée</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-people-fill me-2"></i>ClientFlow
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Factures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Statistiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paramètres</a>
                    </li>
                </ul>
                <div class="ms-3">
                    <button class="btn btn-outline-light rounded-pill px-3">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Connexion
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5 bg-gradient-primary text-white">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Gérez vos clients en toute simplicité</h1>
                    <p class="lead mb-4">ClientFlow Manager vous offre tous les outils nécessaires pour suivre, analyser et développer votre relation client.</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-light btn-lg rounded-pill px-4 text-primary fw-bold">
                            Essai gratuit <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                        <button class="btn btn-outline-light btn-lg rounded-pill px-4">
                            Voir la démo <i class="bi bi-play-circle ms-2"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="http://static.photos/technology/1024x576/42" alt="Dashboard ClientFlow" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Fonctionnalités puissantes</h2>
                <p class="text-muted lead">Tout ce dont vous avez besoin pour une gestion client optimale</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-person-lines-fill fs-4"></i>
                            </div>
                            <h4 class="fw-bold">Gestion des contacts</h4>
                            <p class="text-muted">Centralisez toutes les informations de vos clients en un seul endroit sécurisé.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-file-earmark-text fs-4"></i>
                            </div>
                            <h4 class="fw-bold">Facturation</h4>
                            <p class="text-muted">Créez et envoyez des factures professionnelles en quelques clics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 mb-3" style="width: 60px; height: 60px;">
                                <i class="bi bi-graph-up fs-4"></i>
                            </div>
                            <h4 class="fw-bold">Analytique</h4>
                            <p class="text-muted">Suivez les performances et identifiez les opportunités de croissance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Ils nous font confiance</h2>
                <p class="text-muted lead">Découvrez ce que nos clients disent de nous</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="http://static.photos/people/200x200/1" class="rounded-circle me-3" width="50" height="50" alt="Client">
                                <div>
                                    <h5 class="mb-0 fw-bold">Marie Dupont</h5>
                                    <small class="text-muted">CEO, Entreprise A</small>
                                </div>
                            </div>
                            <p class="mb-0">"ClientFlow a révolutionné notre gestion client. Tout est maintenant centralisé et accessible en un clic."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="http://static.photos/people/200x200/2" class="rounded-circle me-3" width="50" height="50" alt="Client">
                                <div>
                                    <h5 class="mb-0 fw-bold">Jean Martin</h5>
                                    <small class="text-muted">Directeur, Société B</small>
                                </div>
                            </div>
                            <p class="mb-0">"L'outil de facturation nous fait gagner un temps précieux chaque mois. Très intuitif et complet."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="http://static.photos/people/200x200/3" class="rounded-circle me-3" width="50" height="50" alt="Client">
                                <div>
                                    <h5 class="mb-0 fw-bold">Sophie Leroy</h5>
                                    <small class="text-muted">Responsable Commercial, Compagnie C</small>
                                </div>
                            </div>
                            <p class="mb-0">"Les rapports d'analytique nous aident à prendre des décisions éclairées pour développer notre activité."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container py-5 text-center">
            <h2 class="fw-bold mb-4">Prêt à transformer votre gestion client ?</h2>
            <p class="lead mb-5">Rejoignez des milliers d'entreprises qui utilisent déjà ClientFlow Manager</p>
            <button class="btn btn-light btn-lg rounded-pill px-5 fw-bold">
                Commencer maintenant <i class="bi bi-arrow-right ms-2"></i>
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">
                        <i class="bi bi-people-fill me-2"></i>ClientFlow
                    </h5>
                    <p class="text-muted">La solution tout-en-un pour une gestion client optimale et efficace.</p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="text-white"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-linkedin fs-5"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram fs-5"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h6 class="fw-bold mb-3">Produit</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Fonctionnalités</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Tarifs</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">FAQ</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Mises à jour</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h6 class="fw-bold mb-3">Entreprise</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">À propos</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Blog</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Carrières</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h6 class="fw-bold mb-3">Support</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Centre d'aide</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Tutoriels</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">API</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Statut</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-bold mb-3">Légal</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Confidentialité</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">CGU</a></li>
                        <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Cookies</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 bg-secondary">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-muted mb-0">© 2023 ClientFlow Manager. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="text-muted mb-0">Made with <i class="bi bi-heart-fill text-danger"></i> in France</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>