<?php include "templates/head.php"; ?>

<body>
    <?php include "templates/header.php"; ?>
    <?php include "templates/menu.php"; ?>
    <div class="home-page-wrapper">
        <div class="container">
            <div class="home-page-content">
                <h1 class="title">Live Football Streaming HD - Watch Sport TV Today</h1>
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
                        <?php include "templates/LeftSidebar.php"; ?>
                        <div class="common-right-layout">
                            <!-- START LIVE TABLE  -->
                            <?php include "templates/liveTable.php"; ?>
                            <!-- END LIVE TABLE  -->

                            <!-- START HOT MATCH TABLE  -->
                            <?php include "templates/hotMatch.php"; ?>
                            <!-- END HOT MATCH TABLE  -->

                            <!-- START ALL MATCH TABLE  -->
                            <?php include "templates/allMatch.php"; ?>
                            <!-- END ALL MATCH TABLE -->
                        </div>
                    </div>
                    <!-- END FOOTBALL TAB  -->
                </div>
                <div id="tabs-2" class="main-tab-content">
                    <div class="common-main-layout">
                        <?php include "templates/LeftSidebar.php"; ?>
                        <div class="common-right-layout">
                            <!-- START LIVE TABLE  -->
                            <?php include "templates/otherLiveTable.php"; ?>
                            <!-- END LIVE TABLE  -->

                            <!-- START LIST UPCOMING MATCH OF OTHER SPORT -->
                            <?php include "templates/otherUpcommingTable.php"; ?>
                            <!-- START LIST UPCOMING MATCH OF OTHER SPORT -->
                        </div>
                    </div>
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
        $("#all-tabs").tabs();
        $("#other-sport-tabs").tabs()
    });

    $(".btn-show-list-league").on('click', function() {
        $(".show-list-league").toggle()
    })

    $(".show-list-league .box-list-league .league-item").on('click', function() {
        const text = $(this).find('.league-name').text()
        $(".statistic-league-header-wrapper .league-info .league-detail-name").text(text)
        $(".show-list-league").toggle()
    })
    </script>
</body>


</html>