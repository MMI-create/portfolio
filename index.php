<?php
require_once 'model/homemodel.php';
require_once 'controller/homecontroller.php';

// connect to the database to get the PDO instance
$pdo = require 'model/connect.php';

// execute a query home
$homeModel = new HomeModel($pdo);
$homeController = new HomeController($homeModel);
$title = $homeController->getTitle();
$subtitle = $homeController->getSubtitle();
$showicons = $homeController->getShowIcons();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio moderne, accessible et conforme aux normes.">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#home">Accueil</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#projects">Projets</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- Section home -->
        <section id="home" class="section">
            <div class="container">
                <img src="profil.webp">
                <h1 class="animated-title">Mathéo Oliva</h1>
            </div>
        </section>

        <!-- Section À propos -->
        <section id="about" class="section">
            <div class="about-title">
                <h2>A propos</h2>
                <div class="about-box">
                    <h3 class="about-intro">
                    Bienvenue sur mon portfolio ! Je vous invite à découvrir mes travaux et projets ci-dessous.
                    N'hésitez pas à me contacter si vous souhaitez des informations supplémentaires. Bonne visite !
                    </h3>
                </div>
            </div>
        </section>

        <!-- Section Projets -->
        <section id="projects" class="section">
            <div class="container">
                <h2>Mes Projets</h2>
                <div class="projects-grid">
                    <article class="project-card">
                        <h3>Projet 1</h3>
                        <p>Un site e-commerce optimisé pour une expérience utilisateur fluide.</p>
                        <a href="#" class="btn" aria-label="En savoir plus sur le projet 1">En savoir plus</a>
                    </article>
                    <article class="project-card">
                        <h3>Projet 2</h3>
                        <p>Une application mobile innovante pour la gestion de tâches.</p>
                        <a href="#" class="btn" aria-label="En savoir plus sur le projet 2">En savoir plus</a>
                    </article>
                    <article class="project-card">
                        <h3>Projet 3</h3>
                        <p>Un tableau de bord interactif pour l'analyse de données.</p>
                        <a href="#" class="btn" aria-label="En savoir plus sur le projet 3">En savoir plus</a>
                    </article>
                </div>
            </div>
        </section>

        <!-- Section Contact -->
        <section id="contact" class="section">
            <div class="container">
                <h2>Contactez-moi</h2>
                <form>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="login" required aria-required="true">

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required aria-required="true">

                    <label for="message">Message</label>
                    <textarea id="message" name="password" rows="0" required aria-required="true"></textarea>

                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Mon Portfolio.</p>
        </div>
    </footer>
</body>

</html>

