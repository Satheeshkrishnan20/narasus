<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Responsive Review Slider</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    /* Slider review */
    .review-slider {
      margin: 50px auto;
      position: relative;
      text-align: center;
      max-width: 1200px;
    }
    .review-slider h2 {
      color: #434f8a;
      margin-bottom: 40px;
    }
    .reviews-wrapper {
      overflow: hidden;
      position: relative;
    }
    .reviews-container {
      display: flex;
      transition: transform 0.5s ease;
    }
    .review-card {
      background: transparent;
      border-radius: 15px;
      padding: 25px;
      margin: 0 15px;
      flex: 0 0 400px;
      opacity: 0.4;
      transform: scale(0.9);
      box-shadow: none;
      transition: all 0.5s ease;
    }
    .review-card.active {
      background: #fff;
      opacity: 1;
      transform: scale(1);
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
      z-index: 10;
    }
    .review-card img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    .review-name {
      color: #283073;
      font-weight: 600;
      margin-bottom: 5px;
    }
    .review-product {
      font-weight: 700;
      color: #283073;
      margin-bottom: 15px;
      font-size: 0.9rem;
    }
    .review-stars {
      color: #ffcc00;
      margin-bottom: 15px;
    }
    .review-text {
      font-size: 0.85rem;
      color: #666;
      margin-bottom: 15px;
      min-height: 90px;
    }
    .review-date {
      font-size: 0.75rem;
      color: #9f9f9f;
    }
    /* Nav arrows */
    .nav-arrow {
      cursor: pointer;
      font-size: 2rem;
      position: absolute;
      top: 50%;
      color: #999;
      user-select: none;
      transition: color 0.3s ease;
      z-index: 15;
    }
    .nav-arrow:hover {
      color: #434f8a;
    }
    .nav-prev {
      left: 0;
      transform: translateY(-50%);
    }
    .nav-next {
      right: 0;
      transform: translateY(-50%);
    }
    /* Dots */
    .dots {
      margin-top: 20px;
    }
    .dot {
      display: inline-block;
      width: 10px;
      height: 10px;
      background: #ccc;
      border-radius: 50%;
      margin: 0 5px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .dot.active {
      background: #434f8a;
    }
    /* Responsive */
    @media (max-width: 992px) {
      .review-card {
        flex: 0 0 70%;
      }
    }
    @media (max-width: 576px) {
      .review-card {
        flex: 0 0 90%;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <div class="review-slider">
    <h2>Reviews</h2>
    <div class="reviews-wrapper">
      <div class="nav-arrow nav-prev">&#10094;</div>
      <div class="nav-arrow nav-next">&#10095;</div>
      <div class="reviews-container">
        <div class="review-card">
          <img src="https://randomuser.me/api/portraits/men/30.jpg" alt="Krishna" />
          <div class="review-name">Krishna</div>
          <div class="review-product">Product: <strong>Insta Strong</strong></div>
          <div class="review-stars">★★★☆☆</div>
          <div class="review-text">Lorem ipsum dolor sit amet consectetur. Dignissim quis vitae enim vitae fames. Ipsum a hendrerit tellus neque hendrerit nulla consequat posuere velit.</div>
          <div class="review-date">May 2025</div>
        </div>

        <div class="review-card active">
          <img src="https://randomuser.me/api/portraits/men/31.jpg" alt="Krishna" />
          <div class="review-name">Krishna</div>
          <div class="review-product">Product: <strong>Insta Strong</strong></div>
          <div class="review-stars">★★★★★</div>
          <div class="review-text">Lorem ipsum dolor sit amet consectetur. Dignissim quis vitae enim vitae fames. Ipsum a hendrerit tellus neque hendrerit nulla consequat posuere velit. Pharetra nulla nulla adipiscinet lectus.</div>
          <div class="review-date">May 2025</div>
        </div>

        <div class="review-card">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Krishna" />
          <div class="review-name">Krishna</div>
          <div class="review-product">Product: <strong>Insta Strong</strong></div>
          <div class="review-stars">★★★☆☆</div>
          <div class="review-text">Lorem ipsum dolor sit amet consectetur. Dignissim quis vitae enim vitae fames. Ipsum a hendrerit tellus neque hendrerit nulla consequat posuere velit.</div>
          <div class="review-date">May 2025</div>
        </div>

        <div class="review-card">
          <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Krishna" />
          <div class="review-name">Krishna</div>
          <div class="review-product">Product: <strong>Insta Strong</strong></div>
          <div class="review-stars">★★★★☆</div>
          <div class="review-text">Lorem ipsum dolor sit amet consectetur. Dignissim quis vitae enim vitae fames. Ipsum a hendrerit tellus neque hendrerit nulla consequat posuere velit.</div>
          <div class="review-date">May 2025</div>
        </div>
      </div>
    </div>

    <div class="dots mt-3"></div>
  </div>
</div>

<script>
$(function () {
  const $container = $('.reviews-container');
  const $cards = $('.review-card');
  const $dotsContainer = $('.dots');
  let currentIndex = 1; // start with the 2nd card active

  // Create dots
  for (let i = 0; i < $cards.length; i++) {
    $dotsContainer.append('<span class="dot"></span>');
  }
  const $dots = $('.dot');
  $dots.eq(currentIndex).addClass('active');

  // Update slider
  function updateSlider() {
    const containerWidth = $('.reviews-wrapper').width();
    const cardWidth = $cards.outerWidth(true);
    const offset = -(cardWidth * currentIndex - (containerWidth - cardWidth) / 2);

    $container.css('transform', `translateX(${offset}px)`);

    $cards.removeClass('active').css({
      'opacity': 0.4,
      'transform': 'scale(0.9)',
      'z-index': 0,
      'box-shadow': 'none'
    });

    $cards.eq(currentIndex).addClass('active').css({
      'opacity': 1,
      'transform': 'scale(1)',
      'box-shadow': '0 5px 20px rgba(0,0,0,0.15)',
      'z-index': 10
    });

    $dots.removeClass('active');
    $dots.eq(currentIndex).addClass('active');
  }

  // Initial load
  updateSlider();

  // Navigation
  $('.nav-prev').on('click', function () {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : $cards.length - 1;
    updateSlider();
  });

  $('.nav-next').on('click', function () {
    currentIndex = (currentIndex < $cards.length - 1) ? currentIndex + 1 : 0;
    updateSlider();
  });

  $dots.on('click', function () {
    currentIndex = $(this).index();
    updateSlider();
  });

  // Recalculate on resize
  $(window).on('resize', function () {
    updateSlider();
  });
});
</script>

</body>
</html>
