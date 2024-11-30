<?php
// Si un traitement est sélectionné dans l'URL
$treatment = isset($_GET['treatment']) ? $_GET['treatment'] : null;
?>

<!-- Page principale avec les images des traitements -->
<?php if (!$treatment): ?>
    <h1>Les traitements</h1>

    <article>
        <section class="alopecia-treatments">
            <h2>Traitements de l'alopécie</h2>
            <!-- Lien vers LED -->
            <a href="?page=treatments&treatment=led">
                <img src="../img/img-1.jpg" alt="LED" class="treatment-img">
                <p>LED</p>
            </a>
            <!-- Lien vers Mésothérapie -->
            <a href="?page=treatments&treatment=mesotherapy">
                <img src="../img/img-1.jpg" alt="Mésothérapie" class="treatment-img">
                <p>Mésothérapie</p>
            </a>
            <!-- Lien vers PRP -->
            <a href="?page=treatments&treatment=prp">
                <img src="../img/img-1.jpg" alt="PRP" class="treatment-img">
                <p>PRP</p>
            </a>
            <!-- Lien vers Mésogreffe -->
            <a href="?page=treatments&treatment=mesograft">
                <img src="../img/img-1.jpg" alt="Mésogreffe" class="treatment-img">
                <p>Mésogreffe</p>
            </a>

            <!-- Lien vers Greffe -->
            <a href="?page=treatments&treatment=graft">
                <img src="../img/img-1.jpg" alt="Greffe" class="treatment-img">
                <p>Greffe</p>
            </a>
        </section>
        <section class="aesthetics-treatments">
            <h2>Traitements esthétique du visage</h2>
            <!-- Lien vers Injections -->
            <a href="?page=treatments&treatment=injections">
                <img src="../img/img-1.jpg" alt="Injections d'Acide Hyaluronique" class="treatment-img">
                <p>Injections d'Acide Hyaluronique</p>
            </a>
            <!-- Lien vers Fils Tenseurs -->
            <a href="?page=treatments&treatment=tensor-threads">
                <img src="../img/img-1.jpg" alt="Fils tenseurs" class="treatment-img">
                <p>Fils tenseurs</p>
            </a>

            <!-- Lien vers Peeling -->
            <a href="?page=treatments&treatment=peeling">
                <img src="../img/img-1.jpg" alt="Peeling" class="treatment-img">
                <p>Peeling</p>
            </a>
            <!-- Lien vers LED -->
            <a href="?page=treatments&treatment=led">
                <img src="../img/img-1.jpg" alt="LED" class="treatment-img">
                <p>LED</p>
            </a>
            <!-- Lien vers Carboxythérapie -->
            <a href="?page=treatments&treatment=carboxytherapy">
                <img src="../img/img-1.jpg" alt="Carboxythérapie" class="treatment-img">
                <p>Carboxythérapie</p>
            </a>
            <!-- Lien vers Toxine botulique -->
            <a href="?page=treatments&treatment=botulinum-toxin">
                <img src="../img/img-1.jpg" alt="Toxine botulique" class="treatment-img">
                <p>Toxine botulique</p>
            </a>
            <!-- Lien vers Crèmes et Sérums -->
            <a href="?page=treatments&treatment=creams-and-serums">
                <img src="../img/img-1.jpg" alt="Crèmes et Sérums" class="treatment-img">
                <p>Crèmes et Sérums</p>
            </a>
            <!-- Lien vers Laser Médical -->
            <a href="?page=treatments&treatment=medical-laser">
                <img src="../img/img-1.jpg" alt="Laser Médical" class="treatment-img">
                <p>Laser Médical</p>
            </a>
            <!-- Lien vers Injection de Radiesse® -->
            <a href="?page=treatments&treatment=radiess-injection">
                <img src="../img/img-1.jpg" alt="Injection de Radiesse®" class="treatment-img">
                <p>Injection de Radiesse®</p>
            </a>
            <!-- Lien vers Injection de Mésothérapie -->
            <a href="?page=treatments&treatment=mesotherapy">
                <img src="../img/img-1.jpg" alt="Mésothérapie" class="treatment-img">
                <p>Mésothérapie</p>
            </a>
        </section>
        <section class="aesthetics-treatments">
            <h2>Traitements esthétique du corps</h2>
            <!-- Lien vers Epilation laser -->
            <a href="?page=treatments&treatment=laser-hair-removal">
                <img src="../img/img-1.jpg" alt="Epilation laser" class="treatment-img">
                <p>Epilation laser</p>
            </a>

            <!-- Lien vers ATTIVA -->
            <a href="?page=treatments&treatment=attiva">
                <img src="../img/img-1.jpg" alt="ATTIVA" class="treatment-img">
                <p>ATTIVA</p>
            </a>

            <!-- Lien vers HIFU -->
            <a href="?page=treatments&treatment=hifu">
                <img src="../img/img-1.jpg" alt="HIFU" class="treatment-img">
                <p>HIFU</p>
            </a>

            <!-- Lien vers Cryolipolyse -->
            <a href="?page=treatments&treatment=cryolipolysis">
                <img src="../img/img-1.jpg" alt="Cryolipolyse" class="treatment-img">
                <p>Cryolipolyse</p>
            </a>

            <!-- Lien vers Inshape -->
            <a href="?page=treatments&treatment=inshape">
                <img src="../img/img-1.jpg" alt="Inshape" class="treatment-img">
                <p>Inshape</p>
            </a>

            <!-- Lien vers LED -->
            <a href="?page=treatments&treatment=led">
                <img src="../img/img-1.jpg" alt="LED" class="treatment-img">
                <p>LED</p>
            </a>

            <!-- Lien vers Laser Médical -->
            <a href="?page=treatments&treatment=medical-laser">
                <img src="../img/img-1.jpg" alt="Laser Médical" class="treatment-img">
                <p>Laser Médical</p>
            </a>

        </section>
    </article>
<?php else: ?>
    <!-- Si un traitement est sélectionné, afficher son contenu -->
    <?php
    switch ($treatment) {
        case 'led':
            echo '<h1>LED - Photobiomodulation</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="LED">
                    <p>
La photobiomodulation par LED est une méthode de traitement utilisant un rayonnement électromagnétique non ionisant basé sur l’émission de sources optiques non cohérentes du spectre visible et proche infra rouge.

Le principe de la photobiomodulation est de convertir l’énergie apportée par une source lumineuse en énergie biochimique utilisable par les cellules. La photothérapie est un principe naturel qui est à l’action au quotidien sur Terre grâce à l’énergie reçu du soleil par les être vivants. 
                    </p>
                  </article>';
            break;
        case 'mesotherapy':
            echo '<h1>Mésothérapie</h1>';
            echo '<article class="presa">
                        <img src="../img/img-2.png" alt="Mésothérapie">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                        </p>
                      </article>';
            break;
        case 'prp':
            echo '<h1>PRP</h1>';
            echo '<article class="presa">
                            <img src="../img/img-2.png" alt="PRP">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                            </p>
                          </article>';
            break;
        case 'mesograft':
            echo '<h1>Mésogreffe</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="Mésogreffe">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;

        case 'graft':
            echo '<h1>Greffe</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="Greffe">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'injections':
            echo '<h1>Injection</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="Injections d\'Acide Hyaluronique">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'tensor-threads':
            echo '<h1>Fils tenseurs</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'peeling':
            echo '<h1>Peeling</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'carboxytherapy':
            echo '<h1>Carboxythérapie</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'botulinum-toxin':
            echo '<h1>Toxine botulique</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'creams-and-serums':
            echo '<h1>Crèmes et Sérums</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'medical-laser':
            echo '<h1>Laser médical</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'radiess-injection':
            echo '<h1>Injection de Radiesse®</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'radiess-injection':
            echo '<h1>Injection de Radiesse®</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'laser-hair-removal':
            echo '<h1>Épilation laser</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'attiva':
            echo '<h1>ATTIVA</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'hifu':
            echo '<h1>HIFU</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'cryolipolysis':
            echo '<h1>Cryolipolyse</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;
        case 'inshape':
            echo '<h1>Inshape</h1>';
            echo '<article class="presa">
                    <img src="../img/img-2.png" alt="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla voluptas vel neque iure, corrupti a minus! Impedit magni, necessitatibus officiis eligendi id laboriosam at soluta aspernatur explicabo repellat similique consequatur.
                    </p>
                  </article>';
            break;

        default:
            echo '<p>Traitement non disponible.</p>';
            break;
    }
    ?>
<?php endif; ?>