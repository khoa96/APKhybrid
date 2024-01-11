<?php include "templates/head.php"; ?>

<body>
  <?php include "templates/header.php"; ?>
  <div class="news-page__wrapper">
    <div class="container">
      <!-- CATEGORY LIST START -->
      <div class="common-list-category">
        <a href="#" target="">
          <div class="category-item">
            <span>Home</span>
          </div>
        </a>
        <div class="arrow">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4.50002 9C4.50002 9 7.49999 6.79053 7.5 5.99998C7.50001 5.20942 4.5 3 4.5 3" stroke="#6B7280"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </div>
        <a href="#" target="">
          <div class="category-item">
            <span>Articles</span>
          </div>
        </a>
      </div>
      <!-- CATEGORY LIST END -->

      <!-- PAGE TITLE -->
      <h2 class="common-page-title">Articles</h2>
      <!-- PAGE TITLE -->

      <!-- MAIN CONTENT START -->
      <div class="common-layout__wrapper">
        <!-- LEFT SIDEBAR START  -->
        <div class="common-layout__left">
          <div class="list-news__wrapper">
            <a href="#" target="" title="" class="common-news-item">
              <div class="common-news-item__image-wrapper">
                <img src="./images/news-1.png" class="common-news-item__image" alt="">
              </div>
              <div class="common-news-item__info-wrapper">
                <h3 class="common-news-item__title">Reverse: 1999 Version 1.2 Update: New Character </h3>
                <p class="common-news-item__description">
                  Rediscover Fear with Reverse: 1999's Latest Update Featuring Tooth
                </p>
              </div>
            </a>
            <a href="#" target="" title="" class="common-news-item">
              <div class="common-news-item__image-wrapper">
                <img src="./images/news-2.png" class="common-news-item__image" alt="">
              </div>
              <div class="common-news-item__info-wrapper">
                <h3 class="common-news-item__title">Reverse: 1999 Version 1.2 Update: New Character Tooth Fairy,
                  Thrilling Events, Rewards and More Rediscover Fear with Reverse 1999's Latest Update Featuring Tooth
                  Fairy and More!</h3>
                <p class="common-news-item__description">
                  Rediscover Fear with Reverse: 1999's Latest Update Featuring Tooth Fairy and More! Rediscover Fear
                  with Reverse: 1999's Latest Update Featuring Tooth Fairy and More!
                </p>
              </div>
            </a>
            <a href="#" target="" title="" class="common-news-item">
              <div class="common-news-item__image-wrapper">
                <img src="./images/news-3.png" class="common-news-item__image" alt="">
              </div>
              <div class="common-news-item__info-wrapper">
                <h3 class="common-news-item__title">Rediscover Fear with Reverse 1999's Latest Update Featuring Tooth
                  Fairy and More!</h3>
                <p class="common-news-item__description">
                  Rediscover Fear with Reverse: 1999's Latest Update Featuring Tooth Fairy and More! Rediscover Fear
                  with Reverse: 1999's Latest Update Featuring Tooth Fairy and More!
                </p>
              </div>
            </a>
          </div>
          <div class="common-center-layout">
            <button class="btn-see-more">See more</button>
          </div>
        </div>
        <!-- LEFT SIDEBAR START  -->

        <!-- RIGHT SIDEBAR START -->
        <div class="common-layout__right">
          <div class="common-right-sidebar-block__wrapper">
            <h3 class="common-right-sidebar-block__title">Top new games</h3>
            <div class="common-right-sidebar-block__content">
              <div class="list-news__wrapper">
                <a href="#" target="" title="" class="common-news-item small-news">
                  <div class="common-news-item__image-wrapper">
                    <img src="./images/news-1.png" class="common-news-item__image" alt="">
                  </div>
                  <div class="common-news-item__info-wrapper">
                    <h3 class="common-news-item__title">Reverse: 1999 Version 1.2 top New Character </h3>
                  </div>
                </a>
                <a href="#" target="" title="" class="common-news-item small-news">
                  <div class="common-news-item__image-wrapper">
                    <img src="./images/news-2.png" class="common-news-item__image" alt="">
                  </div>
                  <div class="common-news-item__info-wrapper">
                    <h3 class="common-news-item__title">Reverse: 1999 Version 1.2 top New Character Reverse: 1999
                      Version 1.2 top New Character </h3>
                  </div>
                </a>
                <a href="#" target="" title="" class="common-news-item small-news">
                  <div class="common-news-item__image-wrapper">
                    <img src="./images/news-3.png" class="common-news-item__image" alt="">
                  </div>
                  <div class="common-news-item__info-wrapper">
                    <h3 class="common-news-item__title">Reverse: 1999 Version 1.2 top New Character Reverse: 1999
                      Version 1.2 top New Character Reverse: 1999 Version 1.2 top New Character Reverse: 1999 Version
                      1.2 top New Character </h3>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- RIGHT SIDEBAR END-->
      </div>
      <!-- MAIN CONTENT END-->
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
  <script>
    $(function () {
      // PC
      var sliderBanner = $(
        ".slider-banner-block__wrapper .slider-banner-block__list"
      ).slick({
        speed: 600,
        autoplaySpeed: 6000,
        autoplay: false,
        infinite: true,
        swipe: true,
        fade: false,
        dots: false,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        variableWidth: true,
        responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            autoplay: true,
            dots: true,
          },
        },
        ],
      });

      $(".slider-banner-block__wrapper .btn-next").on("click", function () {
        sliderBanner.slick("next");
      });
    });
  </script>

</body>


</html>