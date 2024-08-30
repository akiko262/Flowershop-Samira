<?php
$title = 'lesson';
$description = '説明（lesson ページ）';
$path = '../';  //１つ上の階層
include $path.'inc/head.php'; // head.php の読み込み
?>  
<body>
  <div class="main-visual-aria">
  <?php include $path.'inc/header.php'; ?> 
       <main>
        <!-- レッスンページ見出し -->
        <section id="lesson" class="lesson-header">
            <h2 class="lesson-h2">Lesson</h2>
            <p class="lesson-h2-p">当店では、レッスンを提供しています。初心者から上級者まで、幅広く対応していますので、ぜひご参加ください。</p>
        </section>
        <section class="lesson-process">
            <h3 class="lesson-h3">レンタルの流れ</h3>
            <div class="process-steps">
                <div class="step">
                    <img src="<?php echo $path; ?>imgs/1.png" alt="Step 1">
                    <h4>お問い合わせ</h4>
                    <p>まずはお問い合わせフォームまたはお電話でご連絡ください。</p>
                </div>
                <div class="step">
                    <img src="<?php echo $path; ?>imgs/2.png" alt="Step 2">
                    <h4>レッスン内容の確認</h4>
                    <p>予約時にレッスン内容を確認し、必要な準備を行います。</p>
                </div>
                <div class="step">
                    <img src="<?php echo $path; ?>imgs/3.png" alt="Step 3">
                    <h4> レッスン参加</h4>
                    <p>当日は指定された場所にお越しいただき、レッスンにご参加ください。</p>
                </div>
                <div class="step">
                    <img src="<?php echo $path; ?>imgs/4.png" alt="Step 4">
                    <h4>完成作品の持ち帰り</h4>
                    <p>作成した作品はお持ち帰りいただけます。</p>
                </div>
                <div class="step">
                    <img src="<?php echo $path; ?>imgs/5.png" alt="Step 5">
                    <h4>フィードバック</h4>
                    <p>レッスン後にフィードバックをお聞かせください。次回に役立てます。</p>
                </div>
            </div>
        </section>
        <?php include $path.'inc/contact.php'; ?> <!--contact.php の読み込み -->
        <?php include $path.'inc/footer.php'; ?> <!-- footer.php の読み込み -->
  </body>
  </html>