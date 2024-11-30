<?php
// Si un traitement est sélectionné dans l'URL
$treatment = isset($_GET['treatment']) ? $_GET['treatment'] : null;
?>

<!-- Page principale avec les images des traitements -->
<?php if (!$treatment): ?>
    <h1>Les traitements</h1>

    <article>
    <h2 class="treatment-title">Traitements de l'alopécie</h2>
        <section class="grid">
            <!-- Lien vers LED -->
            <figure>
                <a href="?page=treatments&treatment=led">
                    <img src="../img/img-3.png" alt="LED">
                    <figcaption>LED</figcaption>
                </a>
            </figure>
            <!-- Lien vers Mésothérapie -->
            <figure>
                <a href="?page=treatments&treatment=mesotherapy">
                    <img src="../img/img-3.png" alt="Mésothérapie">
                    <figcaption>Mésothérapie</figcaption>
                </a>
            </figure>
            <!-- Lien vers PRP -->
            <figure>
                <a href="?page=treatments&treatment=prp">
                    <img src="../img/img-3.png" alt="PRP">
                    <figcaption>PRP</figcaption>
                </a>
            </figure>
            <!-- Lien vers Mésogreffe -->
            <figure>
                <a href="?page=treatments&treatment=mesograft">
                    <img src="../img/img-3.png" alt="Mésogreffe">
                    <figcaption>Mésogreffe</figcaption>
                </a>
            </figure>

            <!-- Lien vers Greffe -->
            <figure>
                <a href="?page=treatments&treatment=graft">
                    <img src="../img/img-3.png" alt="Greffe">
                    <figcaption>Greffe</figcaption>
                </a>
            </figure>
        </section>
        <h2 class="treatment-title">Traitements esthétique du visage</h2>
        <section class="grid">
            <!-- Lien vers Injections -->
            <figure>
                <a href="?page=treatments&treatment=injections">
                    <img src="../img/img-3.png" alt="Injections d'Acide Hyaluronique">
                    <figcaption>Injections d'Acide Hyaluronique</figcaption>
                </a>
            </figure>
            <!-- Lien vers Fils Tenseurs -->
            <figure>
                <a href="?page=treatments&treatment=tensor-threads">
                    <img src="../img/img-3.png" alt="Fils tenseurs">
                    <figcaption>Fils tenseurs</figcaption>
                </a>
            </figure>

            <!-- Lien vers Peeling -->
            <figure>
                <a href="?page=treatments&treatment=peeling">
                    <img src="../img/img-3.png" alt="Peeling">
                    <figcaption>Peeling</figcaption>
                </a>
            </figure>
            <!-- Lien vers LED -->
            <figure>
                <a href="?page=treatments&treatment=led">
                    <img src="../img/img-3.png" alt="LED">
                    <figcaption>LED</figcaption>
                </a>
            </figure>
            <!-- Lien vers Carboxythérapie -->
            <figure>
                <a href="?page=treatments&treatment=carboxytherapy">
                    <img src="../img/img-3.png" alt="Carboxythérapie">
                    <figcaption>Carboxythérapie</figcaption>
                </a>
            </figure>
            <!-- Lien vers Toxine botulique -->
            <figure>
                <a href="?page=treatments&treatment=botulinum-toxin">
                    <img src="../img/img-3.png" alt="Toxine botulique">
                    <figcaption>Toxine botulique</figcaption>
                </a>
            </figure>
            <!-- Lien vers Crèmes et Sérums -->
            <figure>
                <a href="?page=treatments&treatment=creams-and-serums">
                    <img src="../img/img-3.png" alt="Crèmes et Sérums">
                    <figcaption>Crèmes et Sérums</figcaption>
                </a>
            </figure>
            <!-- Lien vers Laser Médical -->
            <figure>
                <a href="?page=treatments&treatment=medical-laser">
                    <img src="../img/img-3.png" alt="Laser Médical">
                    <figcaption>Laser Médical</figcaption>
                </a>
            </figure>
            <!-- Lien vers Injection de Radiesse® -->
            <figure>
                <a href="?page=treatments&treatment=radiess-injection">
                    <img src="../img/img-3.png" alt="Injection de Radiesse®">
                    <figcaption>Injection de Radiesse®</figcaption>
                </a>
            </figure>
            <!-- Lien vers Injection de Mésothérapie -->
            <figure>
                <a href="?page=treatments&treatment=mesotherapy">
                    <img src="../img/img-3.png" alt="Mésothérapie">
                    <figcaption>Mésothérapie</figcaption>
                </a>
            </figure>
        </section>
        <h2 class="treatment-title">Traitements esthétique du corps</h2>
        <section class="grid">
            <!-- Lien vers Epilation laser -->
            <figure>
                <a href="?page=treatments&treatment=laser-hair-removal">
                    <img src="../img/img-3.png" alt="Epilation laser">
                    <figcaption>Epilation laser</figcaption>
                </a>
            </figure>

            <!-- Lien vers ATTIVA -->
            <figure>
                <a href="?page=treatments&treatment=attiva">
                    <img src="../img/img-3.png" alt="ATTIVA">
                    <figcaption>ATTIVA</figcaption>
                </a>
            </figure>

            <!-- Lien vers HIFU -->
            <figure>
                <a href="?page=treatments&treatment=hifu">
                    <img src="../img/img-3.png" alt="HIFU">
                    <figcaption>HIFU</figcaption>
                </a>
            </figure>

            <!-- Lien vers Cryolipolyse -->
            <figure>
                <a href="?page=treatments&treatment=cryolipolysis">
                    <img src="../img/img-3.png" alt="Cryolipolyse">
                    <figcaption>Cryolipolyse</figcaption>
                </a>
            </figure>

            <!-- Lien vers Inshape -->
            <figure>
                <a href="?page=treatments&treatment=inshape">
                    <img src="../img/img-3.png" alt="Inshape">
                    <figcaption>Inshape</figcaption>
                </a>
            </figure>

            <!-- Lien vers LED -->
            <figure>
                <a href="?page=treatments&treatment=led">
                    <img src="../img/img-3.png" alt="LED">
                    <figcaption>LED</figcaption>
                </a>
            </figure>

            <!-- Lien vers Laser Médical -->
            <figure>
                <a href="?page=treatments&treatment=medical-laser">
                    <img src="../img/img-3.png" alt="Laser Médical">
                    <figcaption>Laser Médical</figcaption>
                </a>
            </figure>

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