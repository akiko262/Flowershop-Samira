<?php
$title = 'Top';
$description = '説明（トップページ）';
$is_home = true; //トップページの判定用の変数
$path = './';
include $path.'inc/head.php'; // head.php の読み込み
?>
<body>
  <div class="loading-wrapper" id="loading-anime-wrap">
    <div class="loading js_2">
    <div class="loading__inner">
      <h2 class="js_1">
        <p class="loading-p">花で、多くの方に笑顔を</p>
        <figure><img class="loading-logo "src="<?php echo $path ?>imgs/loading-logo.png" alt="logo"></figure>
      </h2>
    </div>
  </div>
  <div class="fv-slide"></div>
  </div>
  <?php include $path.'inc/header.php'; ?> 
   <main>
        <div class="main-visual-aria">
       <div class="main-view">
        <div class="catchphrase">
          <p>美しい花々をあなたへ。</p>
         <p>最高の花を提供します</p>
      </div>
      <figure>
          <img src="<?php echo $path ?>imgs/img12.jpg" alt="Beautiful Flowers" class="main-image">
      </figure>
       </div>
  </div>
       <div class="swiper gallery-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="<?php echo $path ?>imgs/img1.jpg"></div>
            <div class="swiper-slide"><img src="<?php echo $path ?>imgs/img2.jpg"></div>
            <div class="swiper-slide"><img src="<?php echo $path ?>imgs/img3.jpg"></div>
            <div class="swiper-slide"><img src="<?php echo $path ?>imgs/img4.jpg"></div>
            <div class="swiper-slide"><img src="<?php echo $path ?>imgs/img5.jpg"></div>
            <div class="swiper-slide"><img src="<?php echo $path ?>imgs/img6.jpg"></div>
            <div class="swiper-slide"><img src="<?php echo $path ?>imgs/img7.jpg"></div>
            <div class="swiper-slide"><img src="<?php echo $path ?>imgs/img8.jpg"></div>
        </div>
    </div>
    <section class="About ScrollTrigger-section">
      <h2>About</h2>
      <p class="About-ttl">花で、多くの方に笑顔を</p>
      <div class="About-wrapper">
        <div class="About-wrapper-txt">
          <p>私たちは、寄せ植え専門の花屋です。</p>
          <p>自宅で、心を込めて一つ一つ丁寧にお作りしています。</p>
          <p>忙しい毎日の中、ふと目に入る花々が心を和ませ、癒しをくれる。</p>
          <p>私たちが提供する寄せ植えは、季節ごとの美しさを感じられるよう、自然な色彩とバランスを大切にしています。</p>
          <p>どのお花も、お客様のライフスタイルに寄り添い、</p>
          <p>長く楽しんでいただけるよう工夫しています。</p>
          <p>自宅やオフィスで手軽に楽しめるような寄せ植えをご提案しております。</p>
          <p>日々の生活に華やかさをプラスし、</p>
          <p>心を豊かにするお手伝いができれば幸いです。</p>
          <p>あなたのためだけに作られた、</p>
          <p>世界で一つの寄せ植えをぜひお楽しみください。</p>
        </div>
        <figure class="About-img"><img src="<?php echo $path ?>imgs/About-img.png" alt=""></figure>
      </div>
    </section>
    <section class="service ScrollTrigger-section">
      <h2>Service</h2>
      <div class="topics-area">
          <article class="smoothTrigger">
              <a href="<?php echo $path; ?>rental/index.php">
                  <div class="topics-block">
                      <h3>Rental Flower</h3>
                  </div>
              </a>
          </article>
          <article class="smoothTrigger">
              <a href="<?php echo $path; ?>order/index.php">
                  <div class="topics-block">
                      <h3>Order Flower</h3>
                  </div>
              </a>
          </article>
          <article class="smoothTrigger">
              <a href="<?php echo $path; ?>lesson/index.php">
                  <div class="topics-block">
                      <h3>Lesson</h3>
                  </div>
              </a>
          </article>
      </div>
  </section>
  <section class="gallery ScrollTrigger-section">
    <h2>gallery</h2>
    <div class="gallery-images">
      <div class="div1 box-big2"><img src="<?php echo $path ?>imgs/img14.jpg" alt=""> </div>
      <div class="div2 box-big3"><img src="<?php echo $path ?>imgs/img9.jpg" alt=""> </div>
      <div class="div3 box-big4"><img src="<?php echo $path ?>imgs/img4.jpg" alt=""> </div>
      <div class="div4 box-big5"><img src="<?php echo $path ?>imgs/img16.jpg" alt=""> </div>
      <div class="div5 box-big6"><img src="<?php echo $path ?>imgs/img18.jpg" alt=""> </div>
      <div class="div6 box-big7"><img src="<?php echo $path ?>imgs/img17.jpg" alt=""> </div>
      <div class="div7 box-big8"><img src="<?php echo $path ?>imgs/img10.jpg" alt=""> </div>
      <div class="div8 box-big9"><img src="<?php echo $path ?>imgs/img11.jpg" alt=""> </div>
      <div class="div9 box-big10">          
      <div class="message">
          <p>"Beautiful flowers, just for you.</p>
      </div>
      </div>
    </div>
  </section>
  <?php include 'inc/contact.php'; ?> <!--contact.php の読み込み -->
  <?php include 'inc/footer.php'; ?> <!-- footer.php の読み込み -->
  <script src="<?php echo $path ?>script.js" defer></script>
  </body>
  </html>