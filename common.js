// コンテンツアニメーション
gsap.registerPlugin(ScrollTrigger); 
gsap.set('.smoothTrigger', {
    opacity: 0,
    y:50,
  });
  ScrollTrigger.batch('.smoothTrigger', {
    onEnter: batch => gsap.to(batch, {
      opacity: 1, 
      y: 0, 
      stagger: 0.1,
      overwrite: true,
    }),
    start: 'top 70%',
  });
// ページの内容がすべて読み込まれた後に実行するようにする
document.addEventListener('DOMContentLoaded', function () {
    // 変数の定義（html要素を取得）
    const navToggle = document.getElementById('navToggle');
    const navWrapper = document.getElementById('navWrapper');
  // クリックイベントリスナー：ハンバーガーメニューボタンがクリックされた時に実行される関数を設定
    navToggle.addEventListener('click', function () {
      // ナビゲーションメニューのラッパーに’active’クラスを追加したり削除したりする。’active’クラスが追加されるとメニューが表示される
      navWrapper.classList.toggle('active');
  //     aria-expanded属性の更新：aria-expanded属性を更新し、メニューが開いているか閉じているかを示します。アクセシビリティ（使いやすさ）のために重要
  //     const expanded = navToggle.getAttribute('aria-expanded') === 'true' || false;で現在の状態を取得し、navToggle.setAttribute('aria-expanded', !expanded);で新しい状態を設定。
      const expanded = navToggle.getAttribute('aria-expanded') === 'true' || false;
      navToggle.setAttribute('aria-expanded', !expanded);
    });
  });