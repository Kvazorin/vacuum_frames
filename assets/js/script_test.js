document.onclick = () => applyCursorRippleEffect(event);

function applyCursorRippleEffect(e) {
  const ripple = document.createElement("div");

  ripple.className = "ripple";
  document.body.appendChild(ripple);

  ripple.style.left = `${e.clientX}px`;
  ripple.style.top = `${e.clientY}px`;
  ripple.style.animation = `ripple-effect .2s  linear`;
  ripple.onanimationend = () => {
    document.body.removeChild(ripple);
  };
}

var cursor = document.getElementById("cursor");
document.addEventListener("mousemove", function (e) {
  var x = e.clientX;
  var y = e.clientY;
  cursor.style.left = x + "px";
  cursor.style.top = y + "px";
});

// If you remove this part you will realise  the ripple overlap. If you select the h1 element in the body the ripple is triggered. Perhaps you don't want that behaviour (the event bubbling down to body children), and so you may add this code. ITS DANGEROUS: for this occasion you may want, but there is specific cases wherein you don't want it at all. Its annoying, just like the discussion o Dev.to pointed out. This pen is simple, so it hasn't such problems. Links, buttons, css hovers, still work, but the ripple don't, that is, it will trigger only where you specifiy: body. As I said, there are possibily occasions you will have to specifiy which kind of elements won't receive this behaviour. This part is general, all elements in body don't receive propagation from its father.

var coll = document.getElementsByClassName("section__collapsible-btn");
var c;
for (c = 0; c < coll.length; c++) {
  coll[c].addEventListener("click", function () {
    this.classList.toggle("section__collapsible-btn_active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  })
};
