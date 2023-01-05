let video = document.querySelectorAll(".video");
let reddead = document.querySelectorAll(".reddead");

for (let i = 0; i < reddead.length; i++){
reddead[i].addEventListener('mouseover' , ()=>{
    reddead[i].style.display = 'none'
    video[i].play();
})}


for (let v = 0; v < reddead.length; v++){
video[v].addEventListener('mouseout' , ()=>{
    reddead[v].style.display = 'block'
    video[v].pause();
})}


//  video.addEventListener('mouseover' , ()=>{
//      video.play();
//  })
