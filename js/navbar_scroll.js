var sections = document.querySelectorAll("section");

onscroll = function () {
  var scrollPosition = document.documentElement.scrollTop;

  sections.forEach((section) => {
    if (
      scrollPosition >= section.offsetTop - section.offsetHeight * 0.25 &&
      scrollPosition <
        section.offsetTop + section.offsetHeight - section.offsetHeight * 0.25
    ) {
      var currentId = section.attributes.id.value;
      removeAllActiveClasses();
      addActiveClass(currentId);
    }
  });
};

var removeAllActiveClasses = function () {
  document.querySelectorAll("nav ul li a").forEach((el) => {
    el.classList.remove("active");
    el.classList.remove("rounded-pill");
    el.classList.remove("bg-light");
    el.classList.remove("px-3");
    el.classList.remove("mx-2");
});
};

var addActiveClass = function (id) {
  // console.log(id);
  var selector = `nav a[href="#${id}"]`;
  document.querySelector(selector).classList.add("active");
  document.querySelector(selector).classList.add("rounded-pill");
  document.querySelector(selector).classList.add("bg-light");
  document.querySelector(selector).classList.add("px-3");
  document.querySelector(selector).classList.add("mx-2");
};

var navLinks = document.querySelectorAll("nav ul li a");

navLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    var currentId = e.target.attributes.href.value;
    var section = document.querySelector(currentId);
    var sectionPos = section.offsetTop;
    // section.scrollIntoView({
    //   behavior: "smooth",
    // });

    window.scroll({
      top: sectionPos,
      behavior: "smooth",
    });
  });
});