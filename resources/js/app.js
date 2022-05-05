require('./bootstrap');

let items = document.querySelectorAll('img.slider-item');
let activeItem = 0;

document.getElementById('back-arrow').addEventListener('click', function() {
	slide(items, 'active', 'back' );
});


document.getElementById('next-arrow').addEventListener('click', function() {
	slide(items, 'active', 'next' );
});


/**
 * function that slides a carousel
 * @param {*} sliderItemList carousel items array
 * @param {*} className css class to be added on the current active item and removed on the previous active item
 * @param {*} direction sliding direction -> must be 'next' or 'back'
 */
function slide( sliderItemList, className, direction ) {
	sliderItemList[activeItem].classList.remove(className);
	if ( direction == 'next') {
		if ( activeItem === sliderItemList.length - 1 ){
			activeItem = 0;
		} else {
			activeItem++;
		}
	}
	if ( direction == 'back') {
		if ( activeItem === 0 ){
			activeItem = items.length - 1;
		} else {
			activeItem--;
		}
	}
	sliderItemList[activeItem].classList.add(className);
}