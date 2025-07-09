// AOS
function animateOnscroll() {
	AOS.init({
		offset: 100,
		delay: 0,
		duration: 1500,
		once: true
	});
}
animateOnscroll();

// MANUS
function openNav() {
	document.getElementById("myNav").style.height = "100%";
}
function closeNav() {
	document.getElementById("myNav").style.height = "0%";
}

// SHOWCASE
var slideIndex = 0;
showSlides();

function showSlides() {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	if (slides.length > 0) {
		if (slideIndex > slides.length - 1) {
			slideIndex = 0;
		}
		if (slideIndex < 0) {
			slideIndex = slides.length - 1;
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slides[slideIndex].style.display = "block";
		slideIndex++;
		setTimeout(showSlides, 4000);
	}
}

// SMOOTHSCROLL
function smoothScroll(target, duration) {
	var target = document.querySelector(target),
		targetPosition = target.getBoundingClientRect().top,
		startPosition = window.pageYOffset,
		distance = targetPosition,
		startTime = null;
	function animation(currentTime) {
		if (startTime == null) {
			startTime = currentTime;
		}
		var timeElapsed = currentTime - startTime;
		var run = ease(timeElapsed, startPosition, distance - 42, duration);
		window.scrollTo(0, run);
		if (timeElapsed < duration) requestAnimationFrame(animation);
	}
	function ease(t, b, c, d) {
		t /= d / 2;
		if (t < 1) return c / 2 * t * t + b;
		t--;
		return -c / 2 * (t * (t - 2) - 1) + b;
	}
	requestAnimationFrame(animation);
}
const box1 = document.querySelector('.to-home'),
	box4 = document.querySelector('.to-spare'),
	box3 = document.querySelector('.to-rent'),
	box5 = document.querySelector('.to-login'),
	box2 = document.querySelector('.to-buy');

box1.addEventListener('click', function () {
	localStorage.setItem('activeTab', 'to-home');
	smoothScroll('.head', 1000);
});
box2.addEventListener('click', function () {
	localStorage.setItem('activeTab', 'to-buy');
	smoothScroll('#to-buy', 1200);
});
box3.addEventListener('click', function () {
	localStorage.setItem('activeTab', 'to-rent');
	smoothScroll('#to-hire', 1200);
});
box4.addEventListener('click', function () {
	localStorage.setItem('activeTab', 'to-spare');
	smoothScroll('#to-spare', 1200);
});
box5?.addEventListener('click', function () {
	localStorage.setItem('activeTab', 'to-login');
	smoothScroll('#to-login', 1200);
});

const activeTab = localStorage.getItem('activeTab');
switch (activeTab) {
	case 'to-home':
		box1.dispatchEvent(new MouseEvent('click'));
		break;
	case 'to-buy':
		box2.dispatchEvent(new MouseEvent('click'));
		break;
	case 'to-rent':
		box3.dispatchEvent(new MouseEvent('click'));
		break;
	case 'to-spare':
		box4.dispatchEvent(new MouseEvent('click'));
		break;
	case 'to-login':
		box5.dispatchEvent(new MouseEvent('click'));
		break;
	default:
		box1.dispatchEvent(new MouseEvent('click'));
		break;
}


// ACTIVE PAGE
function deactive() {
	box1.classList.remove('active-tab');
	box2.classList.remove('active-tab');
	box3.classList.remove('active-tab');
	box4.classList.remove('active-tab');
	box5?.classList.remove('active-tab');
}
var box1p = document.querySelector('.head').offsetTop,
	box4p = document.querySelector('.to-spare').offsetTop,
	box5p = document.querySelector('.to-login')?.offsetTop,
	box3p = document.querySelector('.to-rent').offsetTop,
	box2p = document.querySelector('.to-buy').offsetTop;
box1.classList.add('active-tab');
window.onscroll = () => {
	var height = window.pageYOffset;
	if (height > 420) {
		document.querySelector('header h1').style.display = 'none';
		document.querySelector('header').style.height = '44px';
		document.querySelector('header').style.background = '#fff';
		document.querySelector('header').style.position = 'fixed';
		document.querySelector('header').style.borderBottom = '1px solid #ccc';
	}
	else {
		document.querySelector('header h1').style.display = 'block';
		document.querySelector('header').style.height = '100vh';
		document.querySelector('header').style.backgroundImage = "url('/assets/Display_images/header.jpg')";
		document.querySelector('header').style.backgroundSize = "cover";
		document.querySelector('header').style.backgroundPosition = "center";
		document.querySelector('header').style.position = 'static';
	}

	const observerCallback = (entries, observer) => {
		entries.forEach(entry => {
			deactive();
			if (entry.isIntersecting) {
				switch (entry.target.id) {
					case 'to-buy':
						box2.classList.add('active-tab');
						break;
					case 'to-hire':
						box3.classList.add('active-tab');
						break;
					case 'to-spare':
						box4.classList.add('active-tab');
						break;
					case 'to-login':
						box5.classList.add('active-tab');
						break;
					default:
						box1.classList.add('active-tab');
						break;
				}

			}
		});
	};

	// 3. Define observer options (optional)
	const observerOptions = {
		root: null, // The viewport is the root
		rootMargin: '0px', // No margin around the root
		threshold: 0.6 // Trigger when 10% of the element is visible
	};

	// 4. Create a new IntersectionObserver instance
	const observer = new IntersectionObserver(observerCallback, observerOptions);

	[
		document.querySelector('.head'),
		document.querySelector('#to-buy'),
		document.querySelector('#to-hire'),
		document.querySelector('#to-spare'),
		document.querySelector('#to-login'),

	].forEach(targetElement => {
		if (targetElement) {
			observer.observe(targetElement);
		}
	})

	// 5. Start observing the target element




}

// STORIES
// const controls=document.querySelector(".stories-controls"),
// 	container=document.querySelector(".stories-container"),
// 	allBox=container.children,
// 	containerWidth=container.offsetWidth,
// 	margin=30;
var items = 0,
	totalItems = 0,
	jumpSlideWidth = 0;

responsive = [
	{ breakPoint: { width: 0, item: 2 } },
	{ breakPoint: { width: 700, item: 4 } },
	{ breakPoint: { width: 1000, item: 5 } }
]

function load() {
	for (let i = 0; i < responsive.length; i++) {
		if (window.innerWidth > responsive[i].breakPoint.width) {
			items = responsive[i].breakPoint.item
		}
	}
	// start();
}

function start() {
	var totalItemsWidth = 0;
	for (let i = 0; i < allBox.length; i++) {
		allBox[i].style.width = (containerWidth / items) - margin + "px";
		allBox[i].style.margin = (margin / 2) + "px";
		totalItemsWidth += containerWidth / items;
		totalItems++;
	}

	container.style.width = totalItemsWidth + "px";

	const allSlides = Math.ceil(totalItems / items);
	const ul = document.createElement("ul");
	for (let i = 1; i <= allSlides; i++) {
		const li = document.createElement("li");
		li.id = i;
		li.innerHTML = i;
		li.setAttribute("onclick", "controlSlides(this)");
		ul.appendChild(li);
		if (i == 1) {
			li.className = "active";
		}
		//console.log(li);
	}
	controls.appendChild(ul);
}

function controlSlides(ele) {
	const ul = controls.children;
	const li = ul[0].children

	var active;

	for (let i = 0; i < li.length; i++) {
		if (li[i].className == "active") {
			active = i;
			li[i].className = "";
		}
	}
	ele.className = "active";

	var numb = (ele.id - 1) - active;
	jumpSlideWidth = jumpSlideWidth + (containerWidth * numb);
	container.style.marginLeft = -jumpSlideWidth + "px";
	container.style.transition = "1s";
}

window.onload = load();

// LOGIN SINGUP tab swap
var login = document.querySelector('.login-signup .login'),
	signup = document.querySelector('.login-signup .signup');
if (login && signup) {
	login.addEventListener('click', function () {
		document.querySelector('.signup-form').style.display = 'none';
		document.querySelector('.login-form').style.display = 'block';
		login.classList.add('active-form');
		signup.classList.remove('active-form');
	});
	signup.addEventListener('click', function () {
		document.querySelector('.signup-form').style.display = 'block';
		document.querySelector('.login-form').style.display = 'none';
		login.classList.remove('active-form');
		signup.classList.add('active-form');
	});
}



// GALLARY IMAGES
var images = document.querySelectorAll('.gallary-img img'),
	windowWidth = window.innerWidth;

//console.log(images);
if (images) {
	images.forEach(function (image, index) {
		image.onclick = function () {
			var imageUrl = image.src;
			var cutUrl = imageUrl.replace("%20", " ");

			var container = document.body;
			var imageWindow = document.createElement('div');

			container.appendChild(imageWindow);
			imageWindow.setAttribute('class', 'full-view');
			imageWindow.setAttribute('onclick', 'closeView()');

			var fullImg = document.createElement('img');
			imageWindow.appendChild(fullImg);
			fullImg.setAttribute('src', cutUrl);
		}
	});
}
function closeView() {
	document.querySelector('.full-view').remove();
}


// PRODUCT CROSOL
/*
var products = document.querySelector('.products'),
	items = products.querySelectorAll('.item'),
	next_product = document.querySelector('#next-product'),
	pre_product = document.querySelector('#pre-product'),
	screenWidth = document.body.offsetWidth;

var header_nav = document.querySelector('header');
header_nav.style.width = screenWidth + 'px';

var width = (items.length + 1) * 210;
products.style.width = width + "px";

pre_product.style.color = "gray";

var pre_click = screenWidth;

var margin_now = 0;
next_product.addEventListener('click', function () {
	if (margin_now > -width + pre_click + 200) {
		margin_now -= pre_click;
		products.style.marginLeft = margin_now + "px";
		products.style.transition = "1s";
		pre_product.style.color = "green";
	}
	else {
		next_product.style.color = "gray";
	}
});
pre_product.addEventListener('click', function () {
	if (margin_now < 0) {
		margin_now += pre_click;
		products.style.marginLeft = margin_now + "px";
		products.style.transition = "1s";
		next_product.style.color = "green";
	}
	else {
		margin_now = 0;
		pre_product.style.color = "gray";
	}
});
*/