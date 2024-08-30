<?php
$title = 'rental';
$description = '説明（rental ページ）';
$path = '../';  //１つ上の階層
include $path.'inc/head.php'; // head.php の読み込み
?>  
<body>
  <div class="main-visual-aria">
  <?php include $path.'inc/header.php'; ?> 
       <main>
        <!-- レンタルページ見出し -->
        <section id="rental" class="rental-header">
            <h2 class="rental-h2">Rental</h2>
            <p class="rental-h2-p">季節の美しい花を、あなたのお部屋にお届けします。</p>
        </section>
        <section class="rental-process">
            <h3 class="rental-h3">レンタルの流れ</h3>
            <div class="process-steps">
                <div class="step">
                    <img src="<?php echo $path ?>/imgs/1.png" alt="Step 1">
                    <h4>お問い合わせ</h4>
                    <p>まずはお問い合わせフォームまたはお電話でご連絡ください。</p>
                </div>
                <div class="step">
                    <img src="<?php echo $path ?>imgs/2.png" alt="Step 2">
                    <h4>ヒアリング</h4>
                    <p>お部屋のイメージやご希望をお聞かせください。</p>
                </div>
                <div class="step">
                    <img src="<?php echo $path ?>imgs/3.png" alt="Step 3">
                    <h4>提案・お見積もり</h4>
                    <p>最適なプランとお見積もりをご提案します。</p>
                </div>
                <div class="step">
                    <img src="<?php echo $path ?>imgs/4.png" alt="Step 4">
                    <h4>配送・設置</h4>
                    <p>お選びいただいた花を配送し、設置します。</p>
                </div>
                <div class="step">
                    <img src="<?php echo $path ?>imgs/5.png" alt="Step 5">
                    <h4>定期的なメンテナンス</h4>
                    <p>レンタル期間中のメンテナンスもお任せください。</p>
                </div>
            </div>
        </section>
        <?php include $path.'inc/contact.php'; ?> <!--contact.php の読み込み -->
        <?php include $path.'inc/footer.php'; ?> <!-- footer.php の読み込み -->
  </body>
  </html>