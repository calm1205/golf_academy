const menuButton = document.getElementById('menuButton');
const expandedMenu = document.getElementById('expandedMenu');
const prevent = (event) => event.preventDefault();

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
  expandedMenu.classList.toggle('fixed');
  expandedMenu.classList.toggle('hidden');

  // スクロール制御
  const isOpen = expandedMenu.classList.contains('fixed');
  isOpen ? disableScroll() : toScrollable();
};

menuButton.addEventListener('click', onClickMenuButton);
