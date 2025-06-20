//animasi placeholder cari gim

const placeholderText = "Cari Game Yang kamu Sukai disini...";
const input = document.getElementById("animatedInput");
let index = 0;

function animatePlaceholder() {
  if (index < placeholderText.length) {
    input.setAttribute("placeholder", placeholderText.substring(0, index + 1));
    index++;
    setTimeout(animatePlaceholder, 300); //atur kecepat kemunculnyanyah
  }
}

// memulai animasi
window.onload = animatePlaceholder;
