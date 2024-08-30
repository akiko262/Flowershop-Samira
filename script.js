// 自ドメインの定義
const myDomain = 'blue-border.lovepop.jp';
// リファラの取得とチェック
const referrer = document.referrer;
const shouldSkipAnimation = referrer.includes(myDomain);
const hasSeenAnimation = sessionStorage.getItem('hasSeenAnimation') === 'true';

// アニメーションを実行する関数
function runOpeningAnimation() {
  console.log("runOpeningAnimation called"); // デバッグ用

  // GSAPコード
  // ロゴを初期状態で非表示にする
  gsap.set(".loading-logo", {
    opacity: 0,
    scale: 0.8,
  });
  // トグルを初期状態で非表示にする
  gsap.set(".nav__toggle", { autoAlpha: 0 });
  gsap.set(".site-header", { autoAlpha: 0 });

  // テキストアニメーションの準備
  const paragraph = document.querySelector(".loading-p");
  const textContent = paragraph.textContent;
  const newTextContent = [...textContent]
    .map((char) => `<span>${char}</span>`)
    .join("");
  paragraph.innerHTML = newTextContent;

  // テキストアニメーションのタイムライン
  const textTimeline = gsap.timeline({
    onComplete: () => {
      // テキストアニメーションが完了したらロゴのアニメーションを開始
      gsap.fromTo(
        ".loading-logo",
        {
          opacity: 0,
          scale: 0.8,
        },
        {
          opacity: 1,
          scale: 1,
          duration: 1,
          ease: "power1.out",
          onComplete: () => {
            // トップページの要素を初期状態で非表示に設定
            gsap.set(".main-visual-aria", {
              opacity: 0,
              visibility: "visible", // 初期設定で表示状態にする
            });
            // カーテンのスライド
            gsap.timeline()
              .to(".js_1", {
                duration: 0.8,
                opacity: 0,
                y: 50,
              }, 0)
              .to(".js_2", {
                duration: 0.8,
                display: "none",
              }, 0)
              .to(".fv-slide", {
                duration: 1.2,
                left: "0%",
                ease: "power2.inOut",
              }, 0.5)
              .to(".fv-slide", {
                duration: 1.2,
                left: "100%",
                ease: "power2.inOut",
                onComplete: () => {
                  gsap.set(".fv-slide", { display: "none" });
                  gsap.delayedCall(0.2, ScrollTrigger.refresh)
                  // トップページの要素を表示するタイムライン
                  gsap.timeline()
                    .to(".main-visual-aria", {
                      duration: 1,
                      scale: 1,
                      opacity: 1,
                      ease: "power2.out",
                    }, 0)
                    .fromTo(".catchphrase", {
                      x: -50,
                      opacity: 0,
                    }, {
                      duration: 1,
                      x: 0,
                      opacity: 1,
                      ease: "power2.out",
                    }, 0)
                    .call(() => {
                      // トグルをアニメーションで表示する
                      gsap.to(".nav__toggle", {
                        autoAlpha: 1,
                        duration: 0.5,
                        ease: "power2.out",
                      });
                      // ヘッダを表示するアニメーション
                      gsap.to(".site-header", {
                        autoAlpha: 1, // visibilityとopacityを設定
                        duration: 0.5, // アニメーションの持続時間
                        ease: "power2.out",
                        onComplete: () => {
                          console.log("site-header animation completed");
                        }
                      });
                    });
                }
              });
          }
        }
      );
    }
  });

  // テキストのアニメーション
  textTimeline.fromTo(
    ".loading-p span",
    {
      autoAlpha: 0,
      scale: 0,
    },
    {
      autoAlpha: 1,
      scale: 1,
      stagger: 0.2,
      duration: 1,
      repeat: 0,
      repeatDelay: 1.2,
    }
  );
}

// ページロード時の処理
window.onload = function() {
  console.log("Referrer: ", referrer);
  console.log("Should skip animation: ", shouldSkipAnimation);
  console.log("Has seen animation: ", hasSeenAnimation);

  if (!shouldSkipAnimation && !hasSeenAnimation) {
    // アニメーションを実行する
    runOpeningAnimation();
    // アニメーションが実行されたことを sessionStorage に保存
    sessionStorage.setItem('hasSeenAnimation', 'true');
  } else {
    console.log("アニメーションをスキップします");
    // アニメーションをスキップする場合の処理
    gsap.set(".loading-logo", { opacity: 1, scale: 1 });
    gsap.set(".nav__toggle", { autoAlpha: 1 });
    gsap.set(".site-header", { autoAlpha: 1 });
    gsap.set(".main-visual-aria", { opacity: 1, visibility: "visible" });
    gsap.set(".fv-slide", { display: "none" });
    gsap.set(".js_1", { opacity: 0, y: 50 });
    gsap.set(".js_2", { display: "none" });
  }
};

// swiper
const swiper = new Swiper('.gallery-slider', {
  loop: true,
  speed: 5000,
  spaceBetween: 0,
  centeredSlides: true,
  initialSlide: 5,
  autoplay: {
    delay: 0,
  },
  breakpoints: {
    0: {
      slidesPerView: '1.5',
    },
    500: {
      slidesPerView: 'auto',
    },
  },
});
console.log(sessionStorage.getItem('hasSeenAnimation'));
// ページロード完了後に実行
window.addEventListener('load', function() {
  // 少し遅延させてScrollTriggerを設定
  setTimeout(() => {
    // すべてのセクションに適用
    document.querySelectorAll('.ScrollTrigger-section').forEach(section => {
      gsap.fromTo(
        section,
        {
          scale: 0.9,
          autoAlpha: 0,
        },
        {
          scale: 1.0,
          autoAlpha: 1,
          scrollTrigger: {
            trigger: section,
            toggleActions: "play none none reverse",
            start: "top 80%", // 画面の下から20%の位置で開始
          },
        }
      );
    });

    // ScrollTriggerを更新
    ScrollTrigger.refresh();
  }, 100); // 100ミリ秒後に実行
});

// ウィンドウのサイズが変わったときにも更新
window.addEventListener('resize', function() {
  ScrollTrigger.refresh();
});