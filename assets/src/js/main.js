import Swiper from 'swiper/bundle';

const settings = {
	/**
	 * General settings
	 */
	init() {
		/* Price toggle */
		const pricesBoxs = document.querySelectorAll('.price__box');
		function changePrice(currency) {
			pricesBoxs.forEach((box) => {
				const boxPrice = box.querySelector('.price');
				const { uah } = boxPrice.dataset;
				const { usd } = boxPrice.dataset;
				const { eur } = boxPrice.dataset;

				boxPrice.classList.add('load');

				setTimeout(() => {
					if (currency === 'uah') {
						boxPrice.innerHTML = uah;
					} else if (currency === 'usd') {
						boxPrice.innerHTML = usd;
					} else if (currency === 'eur') {
						boxPrice.innerHTML = eur;
					}

					boxPrice.classList.remove('load');
				}, 300);
			});
		}

		const pricesButtons = document.querySelectorAll('.button__price');
		pricesButtons.forEach((button) => {
			button.addEventListener('click', (event) => {
				const currency = button.dataset.price;
				const { target } = event;
				for (let i = 0; i < pricesButtons.length; i++) {
					pricesButtons[i].classList.remove('active');
				}
				target.classList.add('active');
				changePrice(currency);
			});
		});

		/* Swiper */
		const homeSwiperBox = document.querySelector('.reviews__swiper');
		if (homeSwiperBox) {
			const homeSwiper = new Swiper(homeSwiperBox, {
				slidesPerView: 1,
				loop: true,
				spaceBetween: 10,
				speed: 1000,
				threshold: 10,
				autoHeight: true,
				navigation: {
					nextEl: '.arrow-right',
					prevEl: '.arrow-left',
				},
				autoplay: {
					delay: 4000,
					disableOnInteraction: true
				},
				centeredSlides: true,
				breakpoints: {
					976: {
						autoHeight: false
					}
				},
			});
		}

		// add anchors
		document.querySelectorAll('a[href^="#"]').forEach((trigger) => {
			trigger.onclick = function (e) {
				e.preventDefault();
				const hash = this.getAttribute('href');
				const target = document.querySelector(hash);
				const headerOffset = 0;
				const elementPosition = target.offsetTop;
				const offsetPosition = elementPosition + headerOffset;

				window.scrollTo({
					top: offsetPosition,
					behavior: 'smooth',
				});
			};
		});
	},
};

const modal = {
	/**
	 * Toggle modal
	 */
	init() {
		function modalToggle(elem) {
			if (elem.getAttribute('aria-hidden') === 'true') {
				elem.setAttribute('aria-hidden', 'false');
			} else {
				elem.setAttribute('aria-hidden', 'true');
			}
		}

		const modalButtons = document.querySelectorAll('[data-modal]');
		modalButtons.forEach((button) => {
			const windowModal = document.querySelector(`[data-modal-window="${button.dataset.modal}"`);
			if (windowModal) {
				const buttonModalClose = windowModal.querySelector('.button__modal-close');
				const modalOverlay = windowModal.querySelector('.modal__overlay');

				buttonModalClose.addEventListener('click', () => {
					windowModal.setAttribute('aria-hidden', 'true');
				});

				modalOverlay.addEventListener('click', () => {
					windowModal.setAttribute('aria-hidden', 'true');
				});

				button.addEventListener('click', () => {
					const modalFormName = button.dataset.form;
					const modalForm = windowModal.querySelector('.field-form-name');
					if (modalForm) {
						modalForm.value = modalFormName + " " + window.location.search.slice(1);
					}
					modalToggle(windowModal);
				});
			}
		});

		const defaultContactForm = document.querySelector('.free__form form');

		if (defaultContactForm) {
			const inputFormName = defaultContactForm.querySelector('.field-form-name');

			if (inputFormName) {
				setTimeout(
					() => inputFormName.value = 'Default form ' + window.location.search.slice(1),
					3000
				);
			}
		}
	},
};


document.addEventListener('DOMContentLoaded', () => {
	modal.init();
	settings.init();
});
