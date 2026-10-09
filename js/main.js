  function translateLanguage(lang) {
    const frame = document.querySelector('iframe.goog-te-banner-frame');
    if (frame) frame.remove(); // Remove Google’s top bar
    const select = document.querySelector('.goog-te-combo');
    if (select) {
      select.value = lang;
      select.dispatchEvent(new Event('change'));
    }
  }
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      autoDisplay: false
    }, 'google_translate_element');
  }
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      autoDisplay: false
    }, 'google_translate_element');
  }
  document.addEventListener('DOMContentLoaded', function () {
    const observer = new MutationObserver(() => {
      const bannerFrame = document.querySelector('iframe.goog-te-banner-frame');
      if (bannerFrame) {
        bannerFrame.remove(); // Remove banner
        document.body.style.top = '0px';
      }
    });
    observer.observe(document.body, { childList: true, subtree: true });
  });
  if (window.location.hash.indexOf('#googtrans') > -1) {
    history.replaceState(null, null, window.location.pathname);
  }