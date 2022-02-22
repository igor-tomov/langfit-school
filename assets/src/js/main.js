// import { gsap } from 'gsap';
// import { CSSRulePlugin } from 'gsap/CSSRulePlugin';
// import { ScrollToPlugin } from 'gsap/ScrollToPlugin';
// import { ScrollTrigger } from 'gsap/ScrollTrigger';

// gsap.registerPlugin(CSSRulePlugin, ScrollToPlugin, ScrollTrigger);


// const settings = {
// 	/**
// 	 * Settings
// 	 */
// 	init() {
// 		/* Aging circle animation */
// 		const circleList = document.querySelector('.circle__list');
// 		if (circleList) {
// 			const circleBoxes = circleList.querySelectorAll('.circle');

// 			function circleDescription(circleId) {
// 				const circleDescriptionBoxes = circleList.querySelectorAll('.description-box');
// 				for (let i = 0; i < circleDescriptionBoxes.length; i++) {
// 					circleDescriptionBoxes[i].classList.remove('active');
// 				}

// 				switch (circleId) {
// 				case 0:
// 					circleDescriptionBoxes[0].classList.add('active');
// 					break;
// 				case 1:
// 					circleDescriptionBoxes[1].classList.add('active');
// 					break;
// 				case 2:
// 					circleDescriptionBoxes[2].classList.add('active');
// 					break;
// 				case 3:
// 					circleDescriptionBoxes[3].classList.add('active');
// 					break;
// 				case 4:
// 					circleDescriptionBoxes[4].classList.add('active');
// 					break;
// 				}
// 			}

// 			circleBoxes.forEach((circlebox, i) => {
// 				circlebox.addEventListener('pointerover', (event) => {
// 					for (let i = 0; i < circleBoxes.length; i++) {
// 						circleBoxes[i].classList.remove('active');
// 					}
// 					document.querySelector('.circle__list .box-start').classList.add('hidden');
// 					circlebox.classList.add('active');
// 					circleDescription(i);
// 				});
// 			});

// 			circleList.addEventListener('mouseleave', () => {
// 				document.querySelector('.circle__list .box-start').classList.remove('hidden');
// 				circleBoxes.forEach((circlebox) => {
// 					circlebox.classList.remove('active');
// 				});

// 				const circleDescriptionBoxes = circleList.querySelectorAll('.description-box');
// 				circleDescriptionBoxes.forEach((circlebox) => {
// 					circlebox.classList.remove('active');
// 				});
// 			});
// 		}

// 		/* Animation for elements on mobile */
// 		if (window.matchMedia('(max-width: 992px)').matches) {
// 			gsap.utils.toArray('p, h2, h3, h4, .button__line, .molecule-anim').forEach((section) => {
// 				const sock = gsap.timeline();

// 				ScrollTrigger.create({
// 					animation: sock,
// 					trigger: section,
// 					start: 'top 90%',
// 					end: 'bottom 70%',
// 					// markers: true,
// 					scrub: 1,
// 				});

// 				sock
// 					.fromTo(section, {
// 						opacity: 0,
// 						y: '-10%',
// 					}, {
// 						y: '0',
// 						opacity: 1,
// 						duration: 0.4,
// 					}, 0);
// 			});
// 		}

// 		function animationImage() {
// 			gsap.utils.toArray('.entry-content img, .team__item').forEach((section) => {
// 				const sock = gsap.timeline();

// 				ScrollTrigger.create({
// 					animation: sock,
// 					trigger: section,
// 					start: 'top 90%',
// 					end: 'bottom 70%',
// 					// markers: true,
// 					scrub: 1,
// 				});

// 				sock
// 					.fromTo(section, {
// 						opacity: 0,
// 						y: '-10%',
// 					}, {
// 						y: '0',
// 						opacity: 1,
// 						duration: 0.4,
// 					}, 0);
// 			});
// 		}
// 		animationImage();

// 		/* Tabs */
// 		const tabs = document.querySelectorAll('[data-tab-target]');
// 		const tabContents = document.querySelectorAll('[data-tab-content]');

// 		tabs.forEach((tab) => {
// 			tab.addEventListener('click', () => {
// 				tabContents.forEach((tabContent) => {
// 					tabContent.classList.remove('active');
// 				});
// 				tabs.forEach((tabin) => {
// 					tabin.classList.remove('active');
// 				});
// 				tab.classList.add('active');
// 				const targetData = `[data-tab-content="${tab.dataset.tabTarget}"]`;
// 				const target = document.querySelector(targetData);
// 				target.classList.add('active');
// 				animationImage();
// 			});
// 		});

// 		/* Move molecule */
// 		const moveMolecule = document.querySelector('.molecule-overflow');
// 		if (moveMolecule) {
// 			let timeout;

// 			function parallaxIt(e, target, movement) {
// 				const stick_el = moveMolecule.getBoundingClientRect();
// 				const relX = e.layerX - stick_el.left + document.body.scrollLeft;
// 				const relY = e.layerY - stick_el.top + document.body.scrollTop;

// 				// console.log(e);
// 				gsap.to(target, {
// 					x: (relX - stick_el.width / 2) / stick_el.width * movement,
// 					y: (relY - stick_el.height / 2) / stick_el.height * movement,
// 					duration: 2,
// 				});
// 			}

// 			function callParallax(e) {
// 				parallaxIt(e, '.atom-anim-1', 100);
// 				parallaxIt(e, '.atom-anim-2', 100);
// 				parallaxIt(e, '.atom-anim-3', 100);
// 				parallaxIt(e, '.atom-anim-4', 100);
// 				parallaxIt(e, '.atom-anim-5', 100);
// 			}

// 			function movecursor(e) {
// 				if (timeout) {
// 					clearTimeout(timeout);
// 				}
// 				setTimeout(callParallax.bind(null, e), 0);
// 			}

// 			const panel = document.querySelectorAll('.panel');
// 			if (panel) {
// 				panel.forEach((element) => {
// 					element.addEventListener('pointermove', movecursor);
// 				});
// 			}
// 		}



// 		/* Preloader */
// 		class Preloader {
// 			#c = 0;

// 			#percentage = 0;

// 			#length = 0;

// 			#elements = [];

// 			#loaderStep = () => { };

// 			#loadingFinished = () => { };

// 			#step = (c, p) => {
// 				setTimeout(() => {
// 					this.#loaderStep(c, p);
// 					if (Math.round(p) == 100) {
// 						setTimeout(() => {
// 							this.#loadingFinished();
// 						}, 100);
// 					}
// 				}, c * 100);
// 			};

// 			handleLoad() {
// 				this.#percentage = (++this.#c * 100) / this.#length;
// 				this.#step(this.#c, this.#percentage);
// 			}

// 			constructor(numOfAjaxRequests, loaderStep, loadingFinished) {
// 				this.#elements = [
// 					...document.querySelectorAll('link'),
// 					...document.querySelectorAll('img:not([loading="lazy"])'),
// 					...document.querySelectorAll('object:not([loading="lazy"])'),
// 					...document.querySelectorAll('iframe:not([loading="lazy"])'),
// 					...document.querySelectorAll('video:not([loading="lazy"])'),
// 					...document.querySelectorAll('audio:not([loading="lazy"])')
// 				];
// 				this.#length = this.#elements.length + numOfAjaxRequests;

// 				if (typeof loaderStep === 'function') this.#loaderStep = loaderStep;
// 				if (typeof loadingFinished === 'function') this.#loadingFinished = loadingFinished;

// 				for (const elem of this.#elements) {
// 					if (elem.isConnected) this.handleLoad();
// 					else elem.addEventListener('load', this.handleLoad.bind(this));
// 				}
// 			}
// 		}

// 		const preloader = new Preloader(
// 			0,
// 			((c, p) => {
// 				document.querySelector('.preloader__percent').innerHTML = `${Math.round(p)}%`;
// 			}),
// 			(() => {
// 				setTimeout(() => {
// 					gsap.to('.preloader', { duration: 1.4, x: '-100%' });
// 					document.querySelector('.preloader').classList.add('hidden');
// 				}, 300);
// 			})
// 		);




// 		/* Load more */
// 		/* global posts, current_page, max_page, ajaxurl */
// 		const loadmore__button = document.querySelector('#posts__loadmore');
// 		if (loadmore__button) {
// 			/* Loader */
// 			function loader() {
// 				const loader_box = document.querySelector('.loader');
// 				loader_box.classList.toggle('active');
// 			}

// 			const loadmore__text = loadmore__button.innerHTML;
// 			const posts_items = document.querySelector('#posts__items');

// 			function posts__loadmore() {
// 				const data = new FormData();
// 				data.append('action', 'loadmorebutton');
// 				data.append('query', posts);
// 				data.append('page', current_page);

// 				fetch(ajaxurl, {
// 					method: 'POST',
// 					body: data,
// 				})
// 					.then((response) => response.text()) // parse response as JSON (can be res.text() for plain response)
// 					.then((response) => {
// 						if (response) {
// 							posts_items.innerHTML += response; // append items
// 							current_page++; // add current page
// 							loadmore__button.innerHTML = loadmore__text; // reset loadmore button text
// 							loadmore__button.classList.remove('active');

// 							// url replace
// 							const cur_url = document.URL;
// 							let cur_url_filter;
// 							if (cur_url.indexOf('?') > -1) {
// 								cur_url_filter = cur_url.replace(/\/stories\S*\?/g, `/stories/page/${current_page}/?`);
// 							} else {
// 								cur_url_filter = cur_url.replace(/\/stories\S*/, `/stories/page/${current_page}/`);
// 							}
// 							history.pushState(null, null, cur_url_filter);
// 							setTimeout(() => {
// 								loader();
// 							}, 800);

// 							console.log('success load more');

// 							// remove button if last page
// 							if (current_page == max_page) {
// 								loadmore__button.style.display = 'none';
// 							}
// 						} else {
// 							loadmore__button.style.display = 'none';
// 						}
// 					})
// 					.catch((error) => {
// 						console.log(error);
// 					});
// 				return false;
// 			}

// 			if (loadmore__button) {
// 				const loadmore__loading = loadmore__button.dataset.loading;
// 				// click loadmore
// 				loadmore__button.addEventListener('click', () => {
// 					loadmore__button.innerHTML = loadmore__loading;
// 					loadmore__button.classList.add('active');
// 					loader();
// 					posts__loadmore();
// 				});
// 			}

// 			// disable loadmore button
// 			if (current_page == max_page) {
// 				loadmore__button.style.display = 'none';
// 			}
// 		}
// 	},
// };

// const custom = {
// 	/**
// 	 * GSAP
// 	 */
// 	init() {
// 		const havePanel = document.querySelector('section.panel');
// 		if (havePanel) {
// 			const sections = gsap.utils.toArray('.panel');
// 			let currentSection = sections[0];
// 			gsap.defaults({ overwrite: 'auto', duration: 0.3 });

// 			// stretch out the body height according to however many sections there are.
// 			gsap.set('body', { height: `${sections.length * 100}%` });

// 			const moleculeOverflow = document.querySelector('.molecule-overflow');
// 			const starsBg = document.querySelector('.stars-bg');
// 			const agingBg = document.querySelector('.aging-bg');
// 			const scrollDown = document.querySelector('.button__scrolldown');

// 			// create a ScrollTrigger for each section
// 			sections.forEach((section, i) => {
// 				ScrollTrigger.create({
// 					start: () => (i - 0.5) * innerHeight,
// 					end: () => (i + 0.5) * innerHeight,
// 					onToggle: (self) => {
// 						self.isActive && setSection(section);
// 					},
// 					onEnter: () => {
// 						if (starsBg) {
// 							if (i === 2) {
// 								moleculeOverflow.classList.add('active');
// 								starsBg.classList.add('active');
// 								starsBg.classList.remove('star-3');
// 							} else if (i === 3) {
// 								moleculeOverflow.childNodes[3].classList.add('molecule-2');
// 								starsBg.classList.add('star-2');
// 								starsBg.classList.remove('star-3');
// 							} else if (i === 4) {
// 								moleculeOverflow.childNodes[3].classList.remove('molecule-2');
// 								moleculeOverflow.childNodes[3].classList.add('molecule-3');
// 								starsBg.classList.add('star-3');
// 								starsBg.classList.remove('star-2');
// 								scrollDown.classList.remove('hidden');
// 							} else if (i === 5) {
// 								scrollDown.classList.add('hidden');
// 								starsBg.classList.remove('star-3');
// 								moleculeOverflow.classList.remove('active');
// 								starsBg.classList.remove('active');
// 							} else {
// 								starsBg.classList.remove('star-3');
// 								moleculeOverflow.classList.remove('active');
// 								starsBg.classList.remove('active');
// 							}
// 						}
// 						section.classList.add('active');
// 					},
// 					onEnterBack: () => {
// 						if (starsBg) {
// 							if (i === 1) {
// 								starsBg.classList.remove('active');
// 								moleculeOverflow.classList.remove('active');
// 							} else if (i === 2) {
// 								moleculeOverflow.childNodes[3].classList.remove('molecule-2');
// 								starsBg.classList.remove('star-2');
// 							} else if (i === 3) {
// 								moleculeOverflow.childNodes[3].classList.add('molecule-2');
// 								moleculeOverflow.childNodes[3].classList.remove('molecule-3');
// 								starsBg.classList.add('star-2');
// 								starsBg.classList.remove('star-3');
// 							} else if (i === 4) {
// 								moleculeOverflow.classList.add('active');
// 								moleculeOverflow.childNodes[3].classList.remove('molecule-2');
// 								moleculeOverflow.childNodes[3].classList.add('molecule-3');
// 								starsBg.classList.add('star-3');
// 								starsBg.classList.remove('star-2');
// 								starsBg.classList.add('active');
// 								scrollDown.classList.remove('hidden');
// 							} else {
// 								starsBg.classList.remove('star-3');
// 								starsBg.classList.remove('active');
// 								moleculeOverflow.classList.remove('active');
// 							}
// 						}
// 						section.classList.add('active');
// 					},
// 					onLeave: () => {
// 						section.classList.remove('active');
// 					},
// 					onLeaveBack: () => {
// 						section.classList.remove('active');
// 					},
// 				});
// 			});

// 			function setSection(newSection) {
// 				if (newSection !== currentSection) {
// 					gsap.to(currentSection, {
// 						scale: 1.05,
// 						autoAlpha: 0,
// 						duration: 0.9,
// 					});
// 					gsap.to(newSection, {
// 						scale: 1,
// 						autoAlpha: 1,
// 						duration: 0.9,
// 					});
// 					currentSection = newSection;
// 				}
// 			}


// 			const buttonsScroll = document.querySelectorAll('.button__scrolldown');
// 			buttonsScroll.forEach((button) => {
// 				button.addEventListener('click', (buttonclick) => {
// 					window.scrollBy(0, window.innerHeight);
// 				});
// 			});
// 		}
// 	},
// };

const menuButton = {
	/**
	 * Toggle menu
	 */
	init() {
		// Menu toggle button
		function navigation_togge() {
			const siteNavigation = document.querySelector('.site__header-nav-box');
			const button = document.querySelector('.site__header-menu-button');
			const menu = siteNavigation.getElementsByTagName('ul')[0];

			if (!menu.classList.contains('nav-menu')) {
				menu.classList.add('nav-menu');
			}

			function toggled_menu() {
				siteNavigation.classList.toggle('active');
				const overflow = document.querySelector('body');

				if (button.getAttribute('aria-expanded') === 'true') {
					button.setAttribute('aria-expanded', 'false');
					overflow.style.removeProperty('overflow');
				} else {
					button.setAttribute('aria-expanded', 'true');
					overflow.style.overflow = 'hidden';
				}
			}

			// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
			button.addEventListener('click', () => {
				toggled_menu();
			});

			// Toogle when click # tag
			// document.querySelectorAll('.site__header-nav-box a[href^="#"]').forEach((event) => {
			// 	event.addEventListener('click', function () {
			// 		siteNavigation.classList.remove('active');
			// 		button.setAttribute('aria-expanded', 'false');
			// 		document.querySelector('body').style.removeProperty('overflow');
			// 	});
			// });

			const hasChildren = document.querySelectorAll('.menu-item-has-children > a');
			if (hasChildren) {
				hasChildren.forEach((children) => {
					children.after(document.createElement('span'));
				});

				const hasSpan = document.querySelectorAll('.menu-item-has-children > span');
				hasSpan.forEach((event) => {
					event.addEventListener('click', () => {
						event.classList.toggle('active');
						event.nextElementSibling.classList.toggle('active');
					});
				});
			}
		}
		navigation_togge();
	},
};


document.addEventListener('DOMContentLoaded', () => {
	// settings.init();
	// custom.init();
	menuButton.init();
	// backSide.init();
});
