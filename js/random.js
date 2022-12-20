const dog_btn = document.getElementById('picture_btn');
const dog_result = document.getElementById('picture_result');

dog_btn.addEventListener('click', getRandomPicture);


function getRandomPicture() {
	fetch('https://random.imagecdn.app/v1/image?width=500&height=500&category=buildings&format=json')
		.then(res => res.json())
		.then(data => {
			if(data.url.includes('.mp4')) {
				getRandomPicture();
			}
			else {
				dog_result.innerHTML = `<img src=${data.url} alt="picture" />`;
			}
		});
}
