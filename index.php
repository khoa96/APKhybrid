<?php include "templates/head.php"; ?>

<body>
    <?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>
    <div class="home-page-wrapper">
        <div class="container">
            <div class="home-page-content">
                <h2 class="title">Live Football Streaming HD - Watch Sport TV Today</h2>
            </div>

            <div id="tabs">
                <ul class="main-tab">
                    <li class="main-tab-item">
                        <a href="#tabs-1">
                            <img src="./images/football-icon.png" alt="" class="icon-image">
                            <span class="label">Football</span>
                        </a>
                    </li>
                    <li class="main-tab-item">
                        <a href="#tabs-2">
                            <img src="./images/tennis-icon.png" alt="" class="icon-image">
                            <span class="label">Tennis</span>
                        </a>
                    </li>
                    <li class="main-tab-item">
                        <a href="#tabs-3">
                            <img src="./images/baseball-icon.png" alt="" class="icon-image">
                            <span class="label">Baseball</span>
                        </a>
                    </li>
                    <li class="main-tab-item">
                        <a href="#tabs-4">
                            <img src="./images/racket-icon.png" alt="" class="icon-image">
                            <span class="label">Racket</span>
                        </a>
                    </li>
                    <li class="main-tab-item">
                        <a href="#tabs-5">
                            <img src="./images/swim-icon.png" alt="" class="icon-image">
                            <span class="label">Swim</span>
                        </a>
                    </li>
                    <li class="main-tab-item">
                        <a href="#tabs-6">
                            <img src="./images/basketball-icon.png" alt="" class="icon-image">
                            <span class="label">Basketball</span>
                        </a>
                    </li>
                    <li class="main-tab-item">
                        <a href="#tabs-7">
                            <img src="./images/racing-car-icon.png" alt="" class="icon-image">
                            <span class="label">Racing car</span>
                        </a>
                    </li>
                    <li class="main-tab-item">
                        <a href="#tabs-8">
                            <img src="./images/other-icon.png" alt="" class="icon-image">
                            <span class="label">Other</span>
                        </a>
                    </li>
                </ul>
                <div id="tabs-1" class="main-tab-content">
                    <!-- START FOOTBALL TAB  -->
                    <div class="common-main-layout">
                        <div class="common-left-layout">
                            <div class="box-common box-list-league">
                                <div class="league-item">
                                    <img src="./images/play-icon.png" alt="" class="league-image">
                                    <span class="league-name">Live</span>
                                    <img src="./images/fire-icon.png" alt="" class="fire-icon">
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-1.png" alt="" class="league-image">
                                    <span class="league-name">Result</span>
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-2.png" alt="" class="league-image">
                                    <span class="league-name">Premier League</span>
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-3.png" alt="" class="league-image">
                                    <span class="league-name">Bundesliga</span>
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-4.png" alt="" class="league-image">
                                    <span class="league-name">Ligue 1</span>
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-5.png" alt="" class="league-image">
                                    <span class="league-name">La Liga</span>
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-6.png" alt="" class="league-image">
                                    <span class="league-name">Serie A</span>
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-7.png" alt="" class="league-image">
                                    <span class="league-name">V-League</span>
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-8.png" alt="" class="league-image">
                                    <span class="league-name">Champions League</span>
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-9.png" alt="" class="league-image">
                                    <span class="league-name">Europa League</span>
                                </div>
                                <div class="league-item">
                                    <img src="./images/league-10.png" alt="" class="league-image">
                                    <span class="league-name">World Cup</span>
                                </div>
                            </div>
                        </div>
                        <div class="common-right-layout">right layout</div>
                    </div>
                    <!-- END FOOTBALL TAB  -->
                </div>
                <div id="tabs-2" class="main-tab-content">
                    <p>tab2</p>
                </div>
                <div id="tabs-3" class="main-tab-content">
                    tab3
                </div>
                <div id="tabs-4" class="main-tab-content">
                    tab4
                </div>
                <div id="tabs-5" class="main-tab-content">
                    tab5
                </div>
                <div id="tabs-6" class="main-tab-content">
                    tab6
                </div>
                <div id="tabs-7" class="main-tab-content">
                    tab7
                </div>
                <div id="tabs-8" class="main-tab-content">
                    tab8
                </div>
            </div>
        </div>
    </div>
    <?php include "templates/subFooter.php"; ?>
    <?php include "templates/footer.php"; ?>
    <script>
    $(function() {
        $("#tabs").tabs();
    });
    </script>
</body>


</html>