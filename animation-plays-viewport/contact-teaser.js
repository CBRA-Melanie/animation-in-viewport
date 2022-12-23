const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const arrow = entry.target.querySelector('#arrow');

    if (entry.isIntersecting) {
      arrow.classList.add('arrow-animation');
	  return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    arrow.classList.remove('arrow-animation');
  });
});

observer.observe(document.querySelector('.cb-arrow__wrapper'));
