const menuButtonOpen = document.getElementById('menuButtonOpen');
const menuButtonClose = document.getElementById('menuButtonClose');
const expandedMenu = document.getElementById('expandedMenu');
const prevent = (event) => event.preventDefault();

// 表示・非表示の制御
const toggleDisplay = (dom) => {
  dom.classList.toggle('flex');
  dom.classList.toggle('hidden');
};

// スクロール禁止
const disableScroll = () => {
  document.addEventListener('touchmove', prevent, { passive: false });
  document.addEventListener('mousewheel', prevent, { passive: false });
};

// スクロール解除
const toScrollable = () => {
  document.removeEventListener('touchmove', prevent, { passive: false });
  document.removeEventListener('mousewheel', prevent, { passive: false });
};

/** メニューの開閉 */
const onClickMenuButton = () => {
  toggleDisplay(menuButtonOpen);
  toggleDisplay(menuButtonClose);
  expandedMenu.classList.toggle('fixed');
  expandedMenu.classList.toggle('hidden');

  // スクロール制御
  const isOpen = expandedMenu.classList.contains('fixed');
  isOpen ? disableScroll() : toScrollable();
};

menuButtonOpen.addEventListener('click', onClickMenuButton);
menuButtonClose.addEventListener('click', onClickMenuButton);
