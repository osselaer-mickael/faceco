<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS_TABLETTE/style_tablette.css">
    <script src="https://kit.fontawesome.com/0fa7bf339b.js" crossorigin="anonymous"></script>
    <title>Fac'eco</title>
</head>

<body>

    <!--Creation of header.  -->
    <!--Création de l'entête de page. -->

    <header>
        <div id="container_top">
            <img id="logo_faceco" src="IMG/Logo_FACEco.png" alt="logo_faceco">
        </div>
    </header>

    <!--Creation of main container, it will contain the drop-down menus. -->
    <!--Création du container principal, il contiendra les menus déroulant. -->

    <!-- Creation of the drop-down menu of the "Everyday ecos gesture" tab. -->
    <!-- Création du menu déroulant de l'onglet "Les écos gestes du quotidien". -->

    <div id="principal_container">
        <div class="ecos_gesture">
            <img src="IMG/logo_eco_gestes.png" alt="ecos_geste" class="ecos_gestes">
            <h2>éco-gestes au quotidien</h2>
            <div  class="arrow">
                <button id="arrow_gesture">
                    <i class="fas fa-sort-down"></i>
                </button>
            </div>
        </div>
        <div id="drop_down_ecos_gesture">
            <ul>
                <li class="drop_down_ecos_gestures_li">
                    <i class="fas fa-bed"></i>
                    <span id="chambre">Chambre</span>
                </li>
                <div id="temperature">
                    <ul>
                        <li class="temperature_li">
                            <a href="./PHP/chambre_agir_sur_la_temperature.php">
                                <span>Agir sur la température</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="drop_down_ecos_gestures_li">
                    <i class="fas fa-bath"></i>
                    <span id="salle_de_bain">Salle de bain</span>
                </li>
                <div id="drop_down_salle_de_bain">
                    <ul>
                        <li class="temp_li" id="temperature_salle_de_bain">
                            <a href="./PHP/salle_de_bain_agir_sur_la_temperature.php?container_temperature">
                                <span>Agir sur la température</span>
                            </a>
                        </li>
                        <li class="elec_li"  id="electricite_salle_de_bain">
                            <a href="./PHP/salle_de_bain_agir_sur_la_temperature.php?container_elec">
                                <span>Agir sur l'éléctricité</span>
                            </a>
                        </li>
                        <li class="eau_li"  id="eau_salle_bain">
                            <a href="./PHP/salle_de_bain_agir_sur_la_temperature.php?container_eau">
                                <span>Agir sur l'eau</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="drop_down_ecos_gestures_li">
                    <i class="fas fa-tv"></i>
                    <span id="salon">Salon</span>
                </li>
                <div id="drop_down_salon">
                   <ul>
                       <li class="elec_li">
                           <a href="./PHP/salon.php?container_elec">
                               <span>Agir sur l'éléctricité</span>
                           </a>
                       </li>
                       <li class="air_li">
                           <a href="./PHP/salon.php?container_air">
                               <span>Agir sur la qualitée de l'air</span>
                           </a>
                       </li>
                   </ul>
                </div>
                <li class="drop_down_ecos_gestures_li">
                        <i class="fas fa-utensils"></i>
                        <span id="cuisine">Cuisine</span>
                </li>
                <div id="drop_down_cuisne">
                    <ul>
                        <li class="elec_li">
                            <a href="./PHP/cuisine.php?container_elec">
                                <span>Agir sur l'éléctricité</span>
                            </a>
                        </li>
                        <li class="eau_li">
                            <a href="./PHP/cuisine.php?container_eau">
                                <span>Agir sur l'eau</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="drop_down_ecos_gestures_li">
                    <i class="fas fa-tshirt"></i>
                    <span id="buandrie">Buanderie</span>
                </li>
                <div id="drop_down_buandrie">
                    <ul>
                        <li class="eau_li">
                            <a href="./PHP/buandrie.php">
                                <span>Agir sur la température</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="drop_down_ecos_gestures_li">
                    <i class="fas fa-sort-amount-down"></i>
                    <span id="infos">Infos pratique</span>
                </li>
                <div id="drop_down_infos">
                    <ul>
                        <li class="eau_li">
                            <a href="./PHP/infos_budget.php?energie">
                                <span>Budget énergie d'un ménage</span>
                            </a>
                        </li>
                        <li class="elec_li">
                            <a href="./PHP/infos_budget.php?electricite">
                                <span>Plus d'éléctricité consommé</span>
                            </a>
                        </li>
                        <li class="eau_li">
                            <a href="./PHP/infos_budget.php?eau">
                                <span>L'eau potable de plus en plus utilisé</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="drop_down_ecos_gestures_li">
                    <i class="fas fa-euro-sign"></i>
                    <a href="./PHP/petits_equipement_astucieux.php">
                        <span id="equipement">Petits équipements astucieux</span>
                    </a>
                </li>
            </ul>
        </div>

    <!-- Creation of the drop-down menu of the "Selective sorting" tab. -->
    <!-- Création du menu déroulant de l'onglet "Tri selectif". -->

        <div class="selective_sorting">
            <img src="IMG/logo_tri.png" alt="tri_selectif" class="tri_selectif">
            <h2>Tri-sélectif</h2>
            <div class="arrow">
                <button id="arrow_selective">
                    <i class="fas fa-sort-down"></i>
                </button>
            </div>
        </div>
        <div id="drop_down_selective_sorting">
            <ul>
                <li class="drop_down_selective_sorting_li">
                    <i class="fas fa-globe-europe"></i>
                    <span id="dechet">Trier ses déchets</span>
                </li>
                <div id="drop_down_dechet">
                    <ul>
                        <li class="trie_dechet">
                            <a href="#">
                                <span>Les différentes poubelles</span>
                            </a>
                        </li>
                        <li class="trie_dechet">
                            <a href="#">
                                <span>Les consignes de tri</span>
                            </a>
                        </li>
                        <li class="trie_dechet">
                            <a href="#">
                                <span>Comment réduire ses déchets ?</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <li class="drop_down_selective_sorting_li">
                    <a href="#">
                        <i class="fas fa-gamepad"></i>
                        <span>Jeu</span>
                    </a>
                </li>
            </ul>
        </div>

    <!-- Creation of the drop-down menu for the "My follow-up" tab. -->
    <!-- Création du menu déroulant de l'onglet "Mon suivi". -->

        <div class="my_follow_up">
            <img src="IMG/logo_mon_suivi.png" alt="eclair" class="eclair">
            <h2>Mon suivi</h2>
            <div class="arrow">
                <button id="arrow_follow_up">
                    <i class="fas fa-sort-down"></i>
                </button>
            </div>
        </div>
        <div class="drop_down_follow_up">
            <ul>
                <li class="drop_down_follow_up_li">
                    <a href="./PHP/mon_suivi_electricite.php">
                        <i class="fas fa-bolt"></i>
                        <span>Consommation d'éléctricité</span>
                    </a>
                </li>
                <li class="drop_down_follow_up_li">
                    <a href="./PHP/mon_suivi_eau.php">
                        <i class="fas fa-hand-holding-water"></i>
                        <span>Consommation d'eau</span>
                    </a>
                </li>
                <li class="drop_down_follow_up_li">
                    <a href="./PHP/mon_suivi_gaz.php">
                        <i class="fas fa-burn"></i>
                        <span>Consommation de gaz</span>
                    </a>
                </li>
                <li id="drop_down_follow_up_li" class="drop_down_follow_up_li">
                    <a href="#">
                        <i class="fas fa-user"></i>
                        <span>Mon compte</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!--Creation of the footer. -->
    <!--Création du bas de page.  -->

    <footer>
        <div id="container_bottom">
            <div id="facebook">
                <a href="https://www.facebook.com/facethierache">
                    <img src="IMG/index_1.png" alt="facebook" class="facebook">
                </a>
            </div>
            <div id="face_thierache">
                <a href="https://www.facethierache.org">
                    <img src="IMG/logoFace.png" alt="logo_face" class="logo_face">
                </a>
            </div>
            <div id="twitter">
                <a href="https://twitter.com/Facethierache">
                    <img src="IMG/Twitter.png" alt="twitter" class="twitter">
                </a>
            </div>
        </div>
    </footer>

    <script src="JS/app.js"></script>

</body>
</html>
