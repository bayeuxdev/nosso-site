function scroll() {
  divBy2 = (window.scrollY / 1.5);
  el = document.getElementById("viewportFixed");

  setTimeout(() => {
    if (window.scrollY * 1.6 > divBy2) { //90vh 
      el.style.opacity = "0.99999";
    } else {
      el.style.opacity = "0.5";
    }

  }, 900);
  var topNav = document.getElementById('menu').offsetHeight;
  var movEl = el.offsetTop;
  var res = movEl - document.documentElement.scrollTop - topNav;

  console.log(movEl + "<--->" + document.body.offsetHeight);
  resFixed = null;
  if (resFixed != null) {
    console.log(resFixed);
  }
  if (res <= 0
    && window.scrollY < document.body.offsetHeight - vh * 2) {
    el.style = `position:fixed; margin-top:8vh; top:0;`;
    const resFixed = res;
  } else {
    el.style = `position:relative !important; `;
  }

}
