document.addEventListener("DOMContentLoaded", function() {

	//----------------------SLIDER-hero----------------------
		var mySwiper = new Swiper('.partners__slider', {
			slidesPerView: 2,
			slidesPerColumn: 3,
			pagination: {
				el: '.partners__pagination',
				clickable: 'true',
			},
			breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 2,
					slidesPerColumn: 3,
				},
				// when window width is >= 480px
				576: {
					slidesPerView: 3,
					slidesPerColumn: 3,
				},
				// when window width is >= 767px
				767: {
					slidesPerView: 4,
					slidesPerColumn: 3,
				},
				// when window width is >= 992px
				992: {
					slidesPerView: 5,
					slidesPerColumn: 3,
				},
				// when window width is >= 640px
				1200: {
					slidesPerView: 6,
					slidesPerColumn: 3,
				}
			}
		});

	
	//----------------------MODAL-----------------------
		const modals = (triggerSelector, modalSelector, closeSelector) => {
			const trigger = document.querySelectorAll(triggerSelector),
						modal = document.querySelector(modalSelector),
						close = document.querySelector(closeSelector);
	
			trigger.forEach(item => {
				item.addEventListener('click', (e) => {
					if (e.target) {
						e.preventDefault();
					}
					modal.style.display = 'flex';
					document.body.classList.add('modal--open')
				});
			})
	
			close.addEventListener('click', () => {
				modal.style.display = 'none';
				document.body.classList.remove('modal--open');
			});
	
			modal.addEventListener('click', (e) => {
				if (e.target === modal) {
					modal.style.display = 'none';
					document.body.classList.remove('modal--open');
				}
			});
	
		};
		modals('.order__open', '.modal--order', '.modal--order .modal__close');

	//----------------------SCROLL-----------------------
		const scrollTo = (scrollTo) => {
			let list = document.querySelector(scrollTo);
			
			if (list) {
				list = '.' + list.classList[0]  + ' a[href^="#"';
				document.querySelectorAll(list).forEach(link => {
					link.addEventListener('click', function(e) {
						e.preventDefault();
						const scrollMenu = document.querySelector(scrollTo);
	
						let href = this.getAttribute('href').substring(1);
	
						const scrollTarget = document.getElementById(href);
	
						// const topOffset = scrollMenu.offsetHeight;
						const topOffset = 70;
						const elementPosition = scrollTarget.getBoundingClientRect().top;
						const offsetPosition = elementPosition - topOffset;
	
						window.scrollBy({
								top: offsetPosition,
								behavior: 'smooth'
						});
	
						
						let button = document.querySelector('.hamburger'),
								nav = document.querySelector('.header__nav'),
								header = document.querySelector('.header');
	
						button.classList.remove('hamburger--active');
						nav.classList.remove('header__nav--active');
						header.classList.remove('header--menu');
					});
				});
			}

		};
		scrollTo('.hero__arrow');
	
	//----------------------FIXED-HEADER-----------------------
		const headerFixed = (headerFixed, headerActive) => {
			const header =  document.querySelector(headerFixed),
						active = headerActive.replace(/\./, '');
	
			window.addEventListener('scroll', function() {
				const top = pageYOffset;
				
				if (top >= 90) {
					header.classList.add(active);
				} else {
					header.classList.remove(active);
				}
	
			});
	
		};
		headerFixed('.header', '.header--active');
	
	//----------------------HAMBURGER-----------------------
		const hamburger = (hamburgerButton, hamburgerNav, hamburgerHeader) => {
			const button = document.querySelector(hamburgerButton),
						nav = document.querySelector(hamburgerNav),
						header = document.querySelector(hamburgerHeader);
	
			button.addEventListener('click', (e) => {
				button.classList.toggle('hamburger--active');
				nav.classList.toggle('header__nav--active');
				header.classList.toggle('header--menu');
			});
	
		};
		hamburger('.hamburger', '.header__nav', '.header');

});
	