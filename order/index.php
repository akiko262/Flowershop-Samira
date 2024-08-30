<?php
$title = 'lesson';
$description = '説明（order ページ）';
$path = '../';  //１つ上の階層
include $path.'inc/head.php'; // head.php の読み込み
?>  
<body>
  <div class="main-visual-aria">
  <?php include $path.'inc/header.php'; ?> 
      <section id="rental" class="rental-header">
        <h2 class="rental-h2">Order</h2>
        <p class="rental-h2-p">私たちのオーダーサービスを利用して、あなたにぴったりの花をお選びください。</p>
    </section>
    <section class="order-process">
        <h3 class="order-h3">レンタルの流れ</h3>
        <div class="process-steps">
            <div class="step">
                <img src="<?php echo $path ?>imgs/1.png" alt="Step 1">
                <h4>お問い合わせ</h4>
                <p>まずはお問い合わせフォームまたはお電話でご連絡ください。</p>
            </div>
            <div class="step">
                <img src="<?php echo $path ?>imgs/2.png" alt="Step 2">
                <h4>デザイン提案</h4>
                <p>お客様のご要望に基づいて、デザイン案を提案します。</p>
            </div>
            <div class="step">
                <img src="<?php echo $path ?>imgs/3.png" alt="Step 3">
                <h4>確認・お見積もり</h4>
                <p>デザイン案とお見積もりを確認し、ご承認いただきます。</p>
            </div>
            <div class="step">
                <img src="<?php echo $path ?>imgs/4.png" alt="Step 4">
                <h4>制作・配送</h4>
                <p>オーダーを元に制作し、配送いたします。</p>
            </div>
            <div class="step">
                <img src="<?php echo $path ?>imgs/5.png" alt="Step 5">
                <h4>アフターサポート</h4>
                <p>納品後もサポートが必要な場合は、お気軽にご連絡ください。</p>
            </div>
        </div>
    </section>
    <?php include $path.'inc/contact.php'; ?> <!--contact.php の読み込み -->
        <?php include $path.'inc/footer.php'; ?> <!-- footer.php の読み込み -->
  </body>
  </html>