const darkModeToggle = document.getElementById('theme');
const body = document.body;
const logo = document.getElementById('logo');
const logo2 = document.getElementById('logo2');
const instagram = document.getElementById('instagram');
const linkedin= document.getElementById('linkedin');
const gmail = document.getElementById('gmail');
const cpet = document.getElementById('cpet');
const chome = document.getElementById('chome');
const chealth = document.getElementById('chealth');
const header = document.getElementById('header');
const linkcomingsoon = document.getElementById('linkcomingsoon');
const linkcomingsoon2 = document.getElementById('linkcomingsoon2');
const linkcomingsoon3 = document.getElementById('linkcomingsoon3');
const linkcomingsoon4 = document.getElementById('linkcomingsoon4');

function enableDarkMode() {
     body.classList.add('lightmode');
     darkModeToggle.src = 'Aset/darkmode.png';
     logo.src = 'Aset/connect lightmode.png';
     logo2.src = 'Aset/connect lightmode.png';
     instagram.src = 'Aset/instagram - lightmode.png';
     linkedin.src = 'Aset/linkedin - darkmode.png';
     gmail.src = 'Aset/gmail - lighmode.png';
     cpet.src = 'Aset/1 - d.png';
     chome.src = 'Aset/2 - d.png';
     chealth.src = 'Aset/3 - d.png';
     header.src = 'Aset/header - lightmode.png';
     localStorage.setItem('lightmode', 'enabled');
}

function disableDarkMode() {
     body.classList.remove('lightmode');
     darkModeToggle.src = 'Aset/lightmode.png';
     logo.src = 'Aset/connect - tulisan.png';
     logo2.src = 'Aset/connect - tulisan.png';
     instagram.src = 'Aset/instagram.png';
     linkedin.src = 'Aset/linkedin.png';
     gmail.src = 'Aset/gmail.png';
     cpet.src = 'Aset/1.png';
     chome.src = 'Aset/2.png';
     chealth.src = 'Aset/3.png';
     header.src = 'Aset/header.png';
     localStorage.setItem('lightmode', 'disabled');
}

function toggleDarkMode() {
    if (localStorage.getItem('lightmode') === 'enabled') {
        disableDarkMode();
    } else {
        enableDarkMode();
    }
}

darkModeToggle.addEventListener('click', toggleDarkMode);

if (localStorage.getItem('lightmode') === 'enabled') {
    enableDarkMode();
} else {
    disableDarkMode();
}

linkcomingsoon.addEventListener('click', function (event) {
     event.preventDefault();
     alert('COMING SOON'); 
 });

 linkcomingsoon2.addEventListener('click', function (event) {
     event.preventDefault(); 
     alert('COMING SOON'); 
 });
 linkcomingsoon3.addEventListener('click', function (event) {
     event.preventDefault(); 
     alert('COMING SOON'); 
 });
 linkcomingsoon4.addEventListener('click', function (event) {
     event.preventDefault();
     alert('COMING SOON'); 
 });

function toggleText() {
     var signupText = document.getElementById("signupText");
 
     if (signupText.innerHTML === "Sign Up") {
         signupText.innerHTML = "Coming Soon";
     } else {
         signupText.innerHTML = "Sign Up";
     }
 }

const gambarheader = document.querySelector('.gambarheader');

window.addEventListener('scroll', () => {
     const scrollPos = window.scrollY;
     gambarheader.style.transform = `translateY(${scrollPos * 0.6}px)`;
});

     const nothidden = document.getElementById('nothidden');
     const hiddenText = document.getElementById('hidden');

          nothidden.addEventListener('click', () => {
               if (hiddenText.style.display === 'none') {
                    hiddenText.style.display = 'block';
               } else {
                    hiddenText.style.display = 'none';
               }
          });