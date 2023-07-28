<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@400;700&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../style.css">

</head>
<body class="body">
    <div class="body__background"></div>
<?php include "../php/_header.php"?>
    <main>
        <!-- Search -->
        <div class="character__srch">
            <section id="search" class="search">
                <h2 id="selection-ttl" class="search__ttl">Selection</h2>
                
                <input class="search__bar" type="text" id="name" name="name" placeholder="Selectionnez un héro" required
                    minlength="3" size="30">
                
                <ul id="search-list" class="search__list"></ul>
                <button id="btn-random" class="button search__button-random">Random</button>
            </section>
        </div>
        <!-- Selection Heroes -->
        <!-- <div id="selection-heroes__background"> -->
        <section class="selection combat-design" id="selection">
            <div class="combat-background display-none">
            </div>
            <div class="speed__selection">
                <img class="play__button" src="../img/play.png" alt="">
                <img class="speed__button" src="../img/play.png" alt="">
            </div>
            <div class="selection__heroes">
                <div class="heroes__container">
                    <!-- Selection Hero1 -->
                    <div id="hero1" class="selection__hero">
                        <p id="cross" class="display-none hero__name"></p>
                        <div class="hero__life-container display-none">
                            <img class="health-img-1" src="../img/coeur.png">
                            <div class="life__progress-container">
                                <p class="progress__life-point"></p>
                                <div class="progress__life-bar">
                                    <div class="life-bar__modular green"></div>
                                </div>
                            </div>
                        </div>
                        <div id="hero1-container" class="hero__container">

                            <div class="hero__anim">
                                <img id="aargh-hero1" class="anim__aargh-1 display-none" src="../img/AARGH!.png" alt="">
                                <img id="bam-hero1" class="anim__bam-1 display-none" src="../img/BAM!.png" alt="">
                                <img id="oops-hero1" class="anim__oops-1 display-none" src="../img/OOPS!.png" alt="">
                                <img id="bang-hero1" class="anim__bang-1 display-none" src="../img/BANG!.png" alt="">
                                <img id="miss-hero1" class="anim__miss-1  display-none " src="../img/bulle_miss2.png"
                                    alt="">
                                <div class="miss-1"></div>
                            </div>
                            <picture class="hero__picture"><img id="anim1" class=" hero__img"
                                    src="../img/Choix perso mobile.png" alt=""></picture>
                            <img src="../img/pngegg.png" class="hero__cross-1" alt="">
                            <ul id="character-card" class="display-none hero__character-card"></ul>
                        </div>
                        <div class="hero__delete">
                            <button class="delete__button">Delete Hero</button>
                        </div>
                        <!-- <button class="display-none btn-stat">Stats</button> -->
                    </div>
                    <!-- Img VS & Img Fight & Fight Text & Button -->
                    <div class="versus__container">
                        <img id="versus" class="versus__img" src="../img/logo-vs.png" alt="versus">
                        <img id="versus" class="fight__img" src="../img/fight-logo.png" alt="fight">
                        <button class="button" id="button-combat">
                            <p>Combat</p>
                        </button>
                    </div>
                    <!-- Selection Hero2 -->
                    <div id="hero2" class="selection__hero">
                        <p id="cross" class="display-none hero__name"></p>
                        <div class="hero__life-container display-none">
                            <img class="health-img-2" src="../img/coeur.png">
                            <div class="life__progress-container">
                                <p class="progress__life-point"></p>
                                <div class="progress__life-bar">
                                    <div class="life-bar__modular green"></div>
                                </div>
                            </div>
                        </div>
                        <div id="hero2-container" class="hero__container">

                            <div class="hero__anim">
                                <img id="aargh-hero2" class="anim__aargh-2 display-none" src="../img/AARGH!.png" alt="">
                                <img id="bam-hero2" class="anim__bam-2 display-none" src="../img/BAM!.png" alt="">
                                <img id="oops-hero2" class="anim__oops-2 display-none" src="../img/OOPS!.png" alt="">
                                <img id="bang-hero2" class="anim__bang-2 display-none" src="../img/BANG!.png" alt="">
                                <img id="oops-hero2" class="anim__oops-2 display-none" src="../img/OOPS!.png" alt="">
                                <img id="miss-hero2" class="anim__miss-2  display-none" src="../img/bulle_miss.png" alt="">
                                <div class="miss-2"></div>
                            </div>
                            <picture class="hero__picture"><img id="anim2" class="hero__img"
                                    src="../img/Choix perso mobile.png" alt=""></picture>
                            <img src="../img/pngegg.png" class="hero__cross-2" alt="">
                            <ul id="character-card" class="display-none hero__character-card"></ul>
                        </div>
                        <div class="hero__delete">
                            <button class="delete__button">Delete Hero</button>
                        </div>
                        <!-- <button class="display-none btn-stat">Stats</button> -->
                    </div>
                </div>
                <!-- Resume fight -->
                <div class="resume">
                    <button id="resume__button" class="resume__button display-none"><strong> Resumé du
                            combat</strong></button>
                    <p id="selection-combat-text" class="resume__text display-none">
                    </p>
                </div>

            </div>
        </section>
        <!-- </div> -->
        <span class="margin-bottom" id="margin-bottom"></span>
    </main>
    <?=include "../php/_footer.php";?>
</body>
<script src="../script.js"></script>

</html>