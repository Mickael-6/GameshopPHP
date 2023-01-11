let video = document.querySelectorAll(".video");
let imagejeu = document.querySelectorAll(".imagejeu");
let promo = document.querySelectorAll(".promo");

for (let i = 0; i < imagejeu.length; i++){
imagejeu[i].addEventListener('mouseover' , ()=>{
    imagejeu[i].style.display = 'none'
    promo[i].style.display = 'none'
    video[i].play();
})}


for (let v = 0; v < imagejeu.length; v++){
video[v].addEventListener('mouseout' , ()=>{
    imagejeu[v].style.display = 'block'
    promo[v].style.display = 'block'
    video[v].pause();
})}


//  video.addEventListener('mouseover' , ()=>{
//      video.play();
//  })
