
let selectPosition = document.querySelector(".select-position");
let inputsDivplayerGk = document.querySelector(".player-gk");
let inputsDivplayerCm = document.querySelector(".player-cm");
let showForm = document.querySelector(".showForm");
let fromData = document.querySelector(".fromData");
let btnEnter = document.querySelector(".btn-enter");
let card = document.querySelector(".card");
let showInfoPlayer = document.querySelector(".show-info-player");
let hideInfoPlayer = document.querySelector(".hide-info-player");
console.log('hello');


selectPosition.addEventListener("change", () => {
if (selectPosition.value === "GK") {
inputsDivplayerGk.style.display = "block";
inputsDivplayerCm.style.display = "none";
} else {
inputsDivplayerGk.style.display = "none";
inputsDivplayerCm.style.display = "block";
}
});

showForm.addEventListener("click", () => {

  fromData.style.display = "block";
  card.style.display = "none";

});
btnEnter.addEventListener("click", () => {

  fromData.style.display = "none";
  
});
showInfoPlayer.addEventListener("click", () => {
  
  card.style.display = "block";

  

});
hideInfoPlayer.addEventListener("click", () => {
  
  card.style.display = "none";
  
  

});


