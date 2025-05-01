const Socket = new WebSocket('ws://localhost:8000');
let color = Math.floor(Math.random() * 7);
let cursor = document.createElement('div');
document.body.append(cursor);

cursor.classList.add('cursor');
cursor.style.backgroundImage = 'url(\'img/cursor' + color + '.png\')';

let x = 0;
let y = 0;

window.addEventListener('mousemove', (e) => {
	x = e.pageX;
	y = e.pageY;
	cursor.style.left = e.pageX + 'px';
	cursor.style.top = e.pageY + 'px';
});
