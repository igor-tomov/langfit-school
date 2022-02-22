

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
	menuButton.init();
});
