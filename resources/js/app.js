require('./bootstrap');

let items = document.querySelectorAll('img.slider-item');
let activeItem = 0;

document.getElementById('back-arrow').addEventListener('click', function() {
	slide(items, 'active', false );
});


document.getElementById('next-arrow').addEventListener('click', function() {
	slide(items, 'active', true );
});


/**
 * function that slides a carousel
 * @param {*} sliderItemList carousel items array
 * @param {*} className css class to be added on the current active item and removed on the previous active item
 * @param {*} isDirectionNext sliding direction: boolean value, if true slides next, if false slides back
 */
function slide( sliderItemList, className, isDirectionNext ) {
	sliderItemList[activeItem].classList.remove(className);
	if ( isDirectionNext === true) {
		if ( activeItem === sliderItemList.length - 1 ){
			activeItem = 0;
		} else {
			activeItem++;
		}
	}
	if ( isDirectionNext === false ) {
		if ( activeItem === 0 ){
			activeItem = items.length - 1;
		} else {
			activeItem--;
		}
	}
	sliderItemList[activeItem].classList.add(className);
}