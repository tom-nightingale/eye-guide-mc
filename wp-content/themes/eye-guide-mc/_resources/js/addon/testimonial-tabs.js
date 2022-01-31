const tabs = document.querySelectorAll('.tab');

function toggleDisplay(e) {
	e.preventDefault();

	//show and hide relevant tabs
	let targetTab = e.target.dataset.tab;
	document.querySelectorAll('.tab-content').forEach((tab) => {
		tab.classList.remove('flex');
		tab.classList.add('hidden');
	});
	document.querySelector('.'+targetTab).classList.remove('hidden');
	document.querySelector('.'+targetTab).classList.add('flex');

	//change active states
	tabs.forEach((tab) => {
		tab.classList.remove('text-primary-lightest');
		tab.classList.add('opacity-50');
	});
	e.target.classList.add('text-primary-lightest');
	e.target.classList.remove('opacity-50');
}

tabs.forEach((tab) => {
	tab.addEventListener('click', toggleDisplay);
});
