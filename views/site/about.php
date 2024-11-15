<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Acerca de';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <!-- Hero Section -->
    <div class="hero-section" style="background-image: url('https://almomento.mx/wp-content/uploads/2024/05/Estrenos-Netflix-mayo-de-2024.jpg'); background-size: cover; background-position: center; height: 100vh; color: white; text-align: center; display: flex; justify-content: center; align-items: center; flex-direction: column; position: relative;">
        <!-- Overlay para mejorar la visibilidad -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
        
        <div style="position: relative; z-index: 2;">
            <!-- Título con sombra y mejor contraste -->
            <h1 class="display-4 font-weight-bold mb-3" style="text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.8);"><?= Html::encode($this->title) ?></h1>
            
            <!-- Subtítulo con sombra -->
            <p class="lead" style="font-size: 1.5rem; text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);"><?= Html::encode($this->title) ?></p>
            
            <!-- Botón que activa el efecto en las cards -->
            <a href="#features" class="btn btn-danger btn-lg mt-4" style="z-index: 2; padding: 12px 30px; font-size: 1.2rem; border-radius: 30px; text-transform: uppercase; box-shadow: 0 4px 10px rgba(0,0,0,0.3); transition: all 0.3s ease-in-out;">Ver nuestras opciones</a>
        </div>
    </div>

    <!-- Sección de Características -->
    <div id="features" style="padding: 100px 0; background-color: #f8f9fa; animation: fadeIn 2s;">
        <div class="container">
            <h2 class="text-center mb-4" style="color: #333; animation: fadeInUp 1s;">Nuestros servicios</h2>
            <p class="lead text-muted text-center">Explora las opciones que tenemos para ti. Desde contenido exclusivo hasta una experiencia personalizada.</p>

            <!-- Cards con bordes y animaciones -->
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4 card-container">
                    <div class="card shadow-lg" style="transition: transform 0.3s ease-in-out; border: 3px solid #e50914; border-radius: 10px; overflow: hidden; height: 100%; display: flex; flex-direction: column;">
                        <img class="card-img-top" src="https://via.placeholder.com/400x300" alt="Películas y Series">
                        <div class="card-body">
                            <h5 class="card-title">Películas y Series</h5>
                            <p class="card-text">Accede a una enorme biblioteca de títulos que actualizamos constantemente. ¡Nunca te quedarás sin opciones!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 card-container">
                    <div class="card shadow-lg" style="transition: transform 0.3s ease-in-out; border: 3px solid #e50914; border-radius: 10px; overflow: hidden; height: 100%; display: flex; flex-direction: column;">
                        <img class="card-img-top" src="https://via.placeholder.com/400x300" alt="Contenido Exclusivo">
                        <div class="card-body">
                            <h5 class="card-title">Contenido Exclusivo</h5>
                            <p class="card-text">Disfruta de contenido original que solo podrás encontrar en nuestra plataforma. ¡No te lo pierdas!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 card-container">
                    <div class="card shadow-lg" style="transition: transform 0.3s ease-in-out; border: 3px solid #e50914; border-radius: 10px; overflow: hidden; height: 100%; display: flex; flex-direction: column;">
                        <img class="card-img-top" src="https://via.placeholder.com/400x300" alt="Ver en cualquier lugar">
                        <div class="card-body">
                            <h5 class="card-title">Ver en cualquier lugar</h5>
                            <p class="card-text">Sigue viendo tu contenido favorito en cualquier dispositivo: TV, móvil, tablet o computadora.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; <?= date('Y') ?> Todos los derechos reservados. | <a href="#" class="text-white">Política de privacidad</a> | <a href="#" class="text-white">Términos de uso</a></p>
        </div>
    </footer>
</div>

<!-- Script para el desplazamiento suave -->
<script>
    document.querySelector('.btn-danger').addEventListener('click', function(e) {
        e.preventDefault(); 
        document.querySelector('#features').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
</script>

<!-- Animaciones CSS -->
<style>
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .card:hover {
        transform: scale(1.05); /* Efecto de hover para las cards */
        box-shadow: 0 8px 20px rgba(0,0,0,0.3); /* Sombra al hacer hover */
    }

    .card-container {
        opacity: 0;
        animation: fadeInUp 0.8s forwards;
        animation-delay: 0.3s;
    }

    .card-container:nth-child(2) {
        animation-delay: 0.5s;
    }

    .card-container:nth-child(3) {
        animation-delay: 0.7s;
    }
</style>
