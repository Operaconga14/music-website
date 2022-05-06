<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Opera Music</title>
    <!-- Opera Music icon -->
    <link rel="icon" href="./assets/images/logo.svg" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- My styles -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

    

    <!-- Start your project here-->

    <header class="sticky-top">
      <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-sm navbar-md nav navbar-dark bg-dark sticky-top">
  <!-- Container wrapper -->
  <div class="container-fluid sticky-top">
    <!-- Toggle button -->
    <button
      class="navbar-toggler sticky-top"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0 logo-b-link" href="#">
        <img
          src="./assets/images/logo.svg"
          height="25"
          alt="OPERAMUSIC Logo"
          loading="lazy"
        />MUSIC
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">Music List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->

    <!-- Login Button -->
    <a class="btn btn-primary" href="./login.php" style="margin-right: 0.1in;">Login</a>


    <!-- Facebook Icon -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <img src="./assets/icons/facebook.svg" width="28" height="28">
      </a>

     <!-- Telegram Icon -->
     <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <img src="./assets/icons/telegram.svg" width="28" height="28">
      </a>

      <!-- Twitter Icon -->
      <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <img src="./assets/icons/twitter.svg" width="28" height="28">
      </a>
      
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
    </header>

    <!-- app root container -->
<div class="app-wrap" id="app" v-cloak>

  <!-- app player container -->
  <main class="player-wrap fx fx-fade-in" ref="playerWrap" style="opacity: 0">

    <!-- bg absolute elements -->
    <figure class="player-bg" ref="playerBg"></figure>
    <canvas class="player-canvas" ref="playerCanvas"></canvas>

    <!-- main player layout -->
    <section class="player-layout">

      <!-- player top header -->
      <header class="player-header flex-row flex-middle flex-stretch">
        <h2 class="text-clip flex-1"><i class="fa fa-headphones"></i> <span>Soma FM Player</span></h2>
        <button class="text-nowrap common-btn" @click="toggleSidebar( true )"><i class="fa fa-bars"></i></button>
      </header>

      <!-- player middle content area -->
      <main class="player-content flex-row">

        <!-- default greet message -->
        <section class="player-greet" v-if="!hasChannel && !hasErrors">
          <div class="fx fx-slide-left push-bottom"><h1>Pick a Station</h1></div>
          <div class="fx fx-slide-left fx-delay-1 push-bottom">This is a music streaming player for the channels provided by SomaFM.com. Just pick a station from the sidebar to the right to start listening.</div>
          <div class="fx fx-slide-up fx-delay-2 pad-top"><button class="cta-btn" @click="toggleSidebar( true )"><i class="fa fa-headphones">&nbsp;</i> View Stations</button></div>
        </section>

        <!-- show selected channel info if possible -->
        <section class="player-channel flex-1" v-if="hasChannel && !hasErrors" :key="channel.id">
          <div class="flex-autorow flex-middle flex-stretch">

            <!-- station details -->
            <div class="flex-item flex-1">
              <!-- station -->
              <div class="push-bottom pad-bottom border-bottom">
                <div class="flex-row flex-middle">
                  <img class="img-round fx fx-drop-in fx-delay-1" :src="channel.largeimage" width="80" height="80" :alt="channel.title" />
                  <div class="pad-left fx fx-slide-left fx-delay-2">
                    <div class="text-clip text-uppercase">{{ channel.genre | toSpaces }}</div>
                    <h2 class="text-clip">{{ channel.title }}</h2>
                  </div>
                </div>
              </div>
              <!-- description -->
              <div class="push-bottom pad-bottom border-bottom fx fx-slide-up fx-delay-3">
                {{ channel.description }}
              </div>
              <!-- current track -->
              <div class="push-bottom pad-bottom border-bottom fx fx-slide-up fx-delay-4" :key="track.date">
                <div><span class="text-faded">DJ:</span> <span class="text-default">{{ channel.dj | toText( 'N/A' ) }}</span></div>
                <div><span class="text-faded">Playing:</span> <span class="text-secondary">{{ track.title | toText( 'N/A' ) }}</span></div>
                <div><span class="text-faded">From:</span> <span class="text-bright">{{ track.album | toText( 'N/A' ) }}</span></div>
                <div><span class="text-faded">By:</span> <span class="text-default">{{ track.artist | toText( 'N/A' ) }}</span></div>
              </div>
              <!-- buttons -->
              <div class="push-bottom">
                <a class="cta-btn text-nowrap fx fx-slide-up fx-delay-5" :href="channel.twitter" title="Open link" target="_blank">
                  <i class="fa fa-twitter"></i> Twitter
                </a> &nbsp;
                <a class="cta-btn text-nowrap fx fx-slide-up fx-delay-6" :href="channel.infourl" title="Channel page" target="_blank">
                  <span class="fx fx-notx fx-ibk fx-drop-in fx-delay-1" :key="channel.listeners"><i class="fa fa-headphones"></i> {{ channel.listeners | toCommas( 0 ) }}</span>
                </a> &nbsp;
                <a class="cta-btn text-nowrap fx fx-slide-up fx-delay-7" :href="channel.plsfile" title="Download PLS" target="_blank">
                  <i class="fa fa-download"></i>
                </a> &nbsp;
              </div>
            </div>

            <!-- songs list -->
            <div class="flex-item flex-1">
              <div class="push-bottom">
                <h5 class="fx fx-slide-left fx-delay-1">Recent Tracks</h5>
              </div>
              <div class="card push-bottom" v-if="!hasSongs">
                There are no songs loaded yet for this station.
              </div>
              <ul class="player-tracklist push-bottom" v-if="hasSongs">
                <li v-for="( s, i ) of songsList" :key="s.date" class="card fx" :class="'fx-slide-left fx-delay-' + ( i + 2 )">
                  <div><span class="text-secondary">{{ s.title | toText( 'N/A' ) }}</span></div>
                  <div><span class="text-faded">From:</span> <span class="text-bright">{{ s.album | toText( 'N/A' ) }}</span></div>
                  <div><span class="text-faded">By:</span> <span class="text-default">{{ s.artist | toText( 'N/A' ) }}</span></div>
                </li>
              </ul>
            </div>

          </div>
        </section>

        <!-- show tracks for selected channel if possible -->
        <section class="player-errors flex-1 text-center" v-if="hasErrors" key="errors">
          <div class="push-bottom fx fx-drop-in fx-delay-1">
            <i class="fa fa-plug text-huge text-faded"></i>
          </div>
          <div class="push-bottom fx fx-slide-up fx-delay-2">
            <h3>Oops, there's a problem!</h3>
          </div>
          <hr />
          <div class="text-primary push-bottom fx fx-slide-up fx-delay-3" v-if="errors.init" v-text="errors.init"></div>
          <div class="text-primary push-bottom fx fx-slide-up fx-delay-4" v-if="errors.stream" v-text="errors.stream"></div>
          <hr />
          <button class="cta-btn text-nowrap fx fx-slide-up fx-delay-5" @click="tryAgain">
            <i class="fa fa-refresh"></i> Try again
          </button>
        </section>

      </main>

      <!-- player footer with controls -->
      <footer class="player-footer flex-row flex-middle flex-space">
        <!-- player controls -->
        <section class="player-controls flex-row flex-middle push-right" :class="{ 'disabled': !canPlay }">
          <button class="common-btn" @click="togglePlay()">
            <i v-if="playing" class="fa fa-stop fx fx-drop-in" key="stop"></i>
            <i v-else class="fa fa-play fx fx-drop-in" key="play"></i>
          </button>
          <div class="form-slider push-left">
            <i class="fa fa-volume-down"></i>
            <input class="common-slider" type="range" min="0.0" max="1.0" step="0.1" value="0.5" v-model="volume" />
            <i class="fa fa-volume-up"></i>
          </div>
          <div class="text-clip push-left">
            <span>{{ timeDisplay }}</span>
            <span class="fx fx-fade-in fx-delay-1" v-if="hasChannel" :key="channel.id">&nbsp;|&nbsp;{{ channel.title }}</span>
          </div>
        </section>
        <!-- player links -->
        <section class="player-links text-nowrap">
          <a class="common-btn text-faded" href="https://github.com/rainner/soma-fm-player" title="View on Github" target="_blank">
            <i class="fa fa-github"></i>
          </a> &nbsp;
          <a class="common-btn text-faded" href="https://codepen.io/rainner" title="Codepen Projects" target="_blank">
            <i class="fa fa-codepen"></i>
          </a>
        </section>
      </footer>

    </section> <!-- layout wrapper -->

    <!-- player stations overlay + sidebar -->
    <section class="player-stations" :class="{ 'visible': sidebar }" @click="toggleSidebar( false )">
      <aside class="player-stations-sidebar" @click.stop>
        <!-- sidebar search -->
        <header class="player-stations-header flex-row flex-middle flex-stretch">
          <div class="form-input push-right">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search station..." v-model="searchText" />
          </div>
          <button class="common-btn" @click="toggleSidebar( false )"><i class="fa fa-times-circle"></i></button>
        </header>
        <!-- sidebar stations list -->
        <ul class="player-stations-list">
          <li class="player-stations-list-item flex-row flex-top flex-stretch" v-for="c of channelsList" :key="c.id" @click="selectChannel( c )" :class="{ 'active': c.active }">
            <figure class="push-right if-small">
              <img class="img-round" width="70" height="70" :src="c.largeimage" :alt="c.title" />
            </figure>
            <aside class="flex-1">
              <div class="flex-row flex-middle flex-space">
                <h6 class="text-bright text-clip">{{ c.title }}</h6>
                <div class="text-secondary"><i class="fa fa-headphones"></i> {{ c.listeners | toCommas( 0 ) }}</div>
              </div>
              <div class="text-small">
                <span class="text-faded text-uppercase text-small">{{ c.genre | toSpaces }}</span> <br />
                {{ c.description }}
              </div>
            </aside>
          </li>
        </ul>
        <!-- sidebar sort options -->
        <footer class="player-stations-footer flex-row flex-middle flex-stretch">
          <div class="flex-1 push-right">
            <span @click="toggleSortOrder()" class="fa clickable" :class="{ 'fa-sort-amount-desc': sortOrder === 'desc', 'fa-sort-amount-asc': sortOrder === 'asc' }">&nbsp;</span>
            <span class="text-faded">Sort: &nbsp;</span>
            <span class="text-secondary popover">
              <span class="clickable">{{ sortLabel }}</span>
              <span class="popover-box popover-top">
                <button @click="sortBy( 'title', 'asc' )">Station Name</button>
                <button @click="sortBy( 'listeners', 'desc' )">Listeners Count</button>
                <button @click="sortBy( 'genre', 'asc' )">Music Genre</button>
              </span>
            </span>
          </div>
          <div>&nbsp;</div>
        </footer>
      </aside>
    </section>

  </main> <!-- player -->

</div> <!-- wrapper -->

    <footer class="bg-dark foot-set">Copyright &copy; 2021 Opera Music</footer>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
