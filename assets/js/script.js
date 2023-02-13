var coll = document.getElementsByClassName("section__collapsible-btn");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("section__collapsible-btn_active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

$('.section_recent-jobs__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 3,
    autoplay: true,
    variableWidth: true,
    autoplaySpeed: 3500,
    prevArrow:'<span class="recent-jobs__slider_prev"></span>',
    nextArrow: '<span class="recent-jobs__slider_next"></span>',
    centerMode: true,
    dots: true
    
});

