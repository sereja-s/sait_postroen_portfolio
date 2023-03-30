/* myLib start - набор повторяющихся элементов для повторного использования */
; (function () {

	// создаём глобальную переменную (пустой объект)
	window.myLib = {};


	// допишем в него повторяющиеся элементы и функции:

	window.myLib.body = document.querySelector('body');


	window.myLib.closestAttr = function (item, attr) {
		var node = item;

		while (node) {
			var attrValue = node.getAttribute(attr);
			if (attrValue) {
				return attrValue;
			}

			node = node.parentElement;
		}

		return null;
	};


	/**
	 * функция находит ближайший элемент у которого класс соответствует параметру переданному на вход 2-ым: className
	 * @param {*} item 
	 * @param {*} className 
	 * @returns 
	 */
	window.myLib.closestItemByClass = function (item, className) {
		var node = item;

		while (node) {
			if (node.classList.contains(className)) {
				return node;
			}

			node = node.parentElement;
		}

		return null;
	};

	// чтобы отключить прокручивание контента под открытым попапом, в функции добавляем(убираем) для body, класс: 
	// no-scroll (для которого прописано соответствующее св-во в main.css)
	window.myLib.toggleScroll = function () {
		myLib.body.classList.toggle('no-scroll');
	};
})();
/* myLib end */

//====================================================================================================================//

// #5 Верстка сайта для начинающих | JavaScript. Настройка попапов, скролл к элементам

/* popup start */
; (function () {

	var showPopup = function (target) {
		target.classList.add('is-active');
	};

	var closePopup = function (target) {
		target.classList.remove('is-active');
	};

	myLib.body.addEventListener('click', function (e) {
		var target = e.target;
		var popupClass = myLib.closestAttr(target, 'data-popup');

		if (popupClass === null) {
			return;
		}

		e.preventDefault();
		var popup = document.querySelector('.' + popupClass);

		if (popup) {
			showPopup(popup);
			myLib.toggleScroll();
		}
	});

	// закрытие попапа при нажатии на закрывающей кнопке открытого попапа или затемнённой области вокруг
	myLib.body.addEventListener('click', function (e) {
		var target = e.target;

		if (target.classList.contains('popup-close') ||
			target.classList.contains('popup__inner')) {
			var popup = myLib.closestItemByClass(target, 'popup');

			closePopup(popup);
			myLib.toggleScroll();
		}
	});

	// закрытие попапа при нажатии на клавишу: Esc (keyCode === 27)
	myLib.body.addEventListener('keydown', function (e) {
		if (e.keyCode !== 27) {
			return;
		}

		var popup = document.querySelector('.popup.is-active');

		if (popup) {
			closePopup(popup);
			myLib.toggleScroll();
		}
	});
})();

/* popup end */

/* scrollTo start - переход к конкретному месту сайта при нажатии на соответствующий пункт меню или кнопку */
; (function () {

	var scroll = function (target) {
		var targetTop = target.getBoundingClientRect().top;
		var scrollTop = window.pageYOffset;
		var targetOffsetTop = targetTop + scrollTop;
		var headerOffset = document.querySelector('.header-page').clientHeight;

		window.scrollTo(0, targetOffsetTop - headerOffset);
	}

	myLib.body.addEventListener('click', function (e) {
		var target = e.target;
		var scrollToItemClass = myLib.closestAttr(target, 'data-scroll-to');

		if (scrollToItemClass === null) {
			return;
		}

		e.preventDefault();
		var scrollToItem = document.querySelector('.' + scrollToItemClass);

		if (scrollToItem) {
			scroll(scrollToItem);
		}
	});
})();
/* scrollTo end */

//===================================================================================================================//

// #6 Верстка сайта для начинающих | JavaScript. Фильтр, динамические данные, яндекс карта

/* catalog start - при нажатии на категорию выводятся товары данной категории */
; (function () {
	var catalogSection = document.querySelector('.section-catalog');

	if (catalogSection === null) {
		return;
	}


	/**
	 * функция удаляющая все дочерние злементы из показа (не будут выводиться на экран) для поданого на вход параметра
	 * @param {*} item 
	 */
	var removeChildren = function (item) {

		// Свойство firstChild обеспечивают быстрый доступ к первому дочернему элементу
		while (item.firstChild) {

			// Операция removeChild разрывает все связи между удаляемым узлом и его родителем
			item.removeChild(item.firstChild);
		}
	};

	/**
	 * функция обновляет содержимое элемента (для вывода на экран) в соответствии с запросом
	 * @param {*} item 
	 * @param {*} children 
	 */
	var updateChildren = function (item, children) {

		// сначала удалим все элементы каталога которые выводились ранее
		removeChildren(item);

		// в цикле добавим в каталог (выведем на экран) необходимые нам элементы каталога (соответствующие выбранной категории)
		for (var i = 0; i < children.length; i += 1) {
			item.appendChild(children[i]);
		}
	};


	var catalog = catalogSection.querySelector('.catalog');
	var catalogNav = catalogSection.querySelector('.catalog-nav');
	var catalogItems = catalogSection.querySelectorAll('.catalog__item');

	catalogNav.addEventListener('click', function (e) {

		// находим элемент по которому кликнули
		var target = e.target;

		// ближайшийЭлементПоклассу
		// находим ближайший элемент у которого класс: catalog-nav__btn
		var item = myLib.closestItemByClass(target, 'catalog-nav__btn');

		// Метод contains для проверки на вложенность (Синтаксис: var result = parent.contains(child);
		// Возвращает true, если parent содержит child или parent == child)
		// Если item равен null или содержит класс: is-active
		if (item === null || item.classList.contains('is-active')) {

			// выходим (на выполняем скрипт)
			return;
		}

		e.preventDefault();

		// получим значение атрибута переданного на вход в качестве параметра методу: getAttribute()
		var filterValue = item.getAttribute('data-filter');

		// найдём предыдущую активную кнопку
		var previousBtnActive = catalogNav.querySelector('.catalog-nav__btn.is-active');

		// удаляем класс: is-active у предыдущей активной кнопки
		previousBtnActive.classList.remove('is-active');

		// а текущей активной кнопке добавляем класс: is-active
		item.classList.add('is-active');

		if (filterValue === 'all') {

			// добавляем все элементы (все элементы каталога будут показаны (выведены на экран))
			updateChildren(catalog, catalogItems);
			return;
		}

		// если значение атрибута элемента на котором сработало событие: click не равно all, то
		var filteredItems = [];

		// в цикле 
		for (var i = 0; i < catalogItems.length; i += 1) {

			// получим текущий элемент
			var current = catalogItems[i];

			// если значение атрибута: data-category текущего элемента, равно значению атрибута полученного ранее: data-filter
			if (current.getAttribute('data-category') === filterValue) {

				// добавляем текущий элемент (в итоге получим массив с отфильтрованными элементами)
				filteredItems.push(current);
			}
		}
		// будут показаны только элементы каталога соответствующие выбранному фильтру
		updateChildren(catalog, filteredItems);
	});
})();

/* catalog end */

//===================================================================================================================//

/* map start - подключение карты с реализацией её загрузки только когда доскроллили до секции: section-contacts */
; (function () {
	var sectionContacts = document.querySelector('.section-contacts');

	var ymapInit = function () {
		if (typeof ymaps === 'undefined') {
			return;
		}

		ymaps.ready(function () {

			var ymap = document.querySelector('.contacts__map');
			var coordinates = ymap.getAttribute('data-coordinates');
			var address = ymap.getAttribute('data-address');

			var myMap = new ymaps.Map('ymap', {
				center: coordinates.split(','),
				zoom: 18
			}, {
				searchControlProvider: 'yandex#search'
			}),

				myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
					balloonContent: address
				}, {
					iconLayout: 'default#image',
					iconImageHref: ForJS.siteUrl + '/assets/img/common/' + ForJS.imgMap,
					iconImageSize: [145, 100],
					iconImageOffset: [-70, 125]
				});

			myMap.geoObjects.add(myPlacemark);

			myMap.behaviors.disable('scrollZoom');
		});
	};


	var ymapLoad = function () {
		var script = document.createElement('script');
		script.src = 'https://api-maps.yandex.ru/2.1/?lang=RU';
		myLib.body.appendChild(script);
		script.addEventListener('load', ymapInit);
	};


	var checkYmapInit = function () {
		var sectionContactsTop = sectionContacts.getBoundingClientRect().top;
		var scrollTop = window.pageYOffset;
		var sectionContactsOffsetTop = scrollTop + sectionContactsTop;

		if (scrollTop + window.innerHeight > sectionContactsOffsetTop) {
			ymapLoad();
			window.removeEventListener('scroll', checkYmapInit);
		}
	};


	window.addEventListener('scroll', checkYmapInit);
	checkYmapInit();
})();
/* map end */

//===================================================================================================================//

const swiper = new Swiper('.swiper', {


	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
		dynamicBullets: true,
	},

	// Navigation arrows
	/* navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}, */

	// And if we need scrollbar
	/* scrollbar: {
		el: '.swiper-scrollbar',
	}, */
	grabCursor: true,
	loop: true,
	autoplay: {
		delay: 7000,
	},
	speed: 5000,
	effect: 'fade',
	fadeEffect: {
		crossFade: true
	},
});