function generateRandomString() {
	const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	let result = '';
	for (let i = 0; i < 10; i++) {
		const randomIndex = Math.floor(Math.random() * characters.length);
		result += characters.charAt(randomIndex);
	}
	return result;
}

let ID = generateRandomString();

function createcursor(a) {
	let cursorId = a;
	let color = Math.floor(Math.random() * 7);
	let cursor = document.createElement('div');
	document.body.append(cursor);
	cursor.classList.add('cursor');
	cursor.id = cursorId;
	cursor.style.backgroundImage = 'url(\'img/cursor' + color + '.png\')';

	return cursor;
}

let x = 0;

let y = 0;
UserCursor = createcursor(ID);

if (UserCursor.id == ID) {
	UserCursor.style.display = 'none';
}

window.addEventListener('scroll', (e) => {
	x = e.pageX;
	y = e.pageY;
	UserCursor.style.left = e.pageX + 'px';
	UserCursor.style.top = e.pageY + 'px';
});

window.addEventListener('mousemove', (e) => {
	x = e.pageX;
	y = e.pageY;
	UserCursor.style.left = e.pageX + 'px';
	UserCursor.style.top = e.pageY + 'px';
});

let ghost = document.getElementById("ghost");
let pfp = document.getElementById("pfp");
let clickCount = 0;

function Fun(){
	clickCount++;

	function Bye(){
		console.log("Bye boo :(")
		ghost.style.display = "none";
		pfp.style.display = "block";
	}

	if (clickCount > 2){
		console.log("BOO!");
		ghost.style.display = "block";
		pfp.style.display = "none";
		setTimeout(Bye, 2000)
		clickCount = 0;
	}

}

pfp.addEventListener("click", Fun)