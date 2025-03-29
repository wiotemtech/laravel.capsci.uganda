$('.content').hide();

$('.slider').click(function () {
    $(this).next('.content').slideToggle();
    this.toggle = !this.toggle;
    $(this).children("span").text(this.toggle ? "-" : "+");
    return false;
});



    // Intersection Observer to animate cards on scroll
    const observerOptions = {
                                                                                                    root: null, // Observe from the viewport
                                                                                                    rootMargin: '0px',
                                                                                                    threshold: 0.1 // 10% of the card should be in the viewport before animation triggers
                                                                                                  };

const cards = document.querySelectorAll('.team-card');

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      if (entry.target.classList.contains('left')) {
        entry.target.classList.add('animate-left');
      } else if (entry.target.classList.contains('right')) {
        entry.target.classList.add('animate-right');
      } else if (entry.target.classList.contains('top')) {
        entry.target.classList.add('animate-top');
      } else if (entry.target.classList.contains('bottom')) {
        entry.target.classList.add('animate-bottom');
      }
    }
  });
}, observerOptions);

cards.forEach(card => observer.observe(card));



