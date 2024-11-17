var contacting = document.querySelector(".C-contacting")
var reachUs = document.querySelector(".C-reachUs")
var formBox = document.querySelector(".C-formBox")
var reachBox = document.querySelector(".C-reachBox")

const handleA = () => {
    contacting.style.backgroundColor = "#edecec"
    reachUs.style.backgroundColor = "white"
    formBox.style.display = "flex"
    reachBox.style.display = "none"
}

const handleB = () => {
    contacting.style.backgroundColor = "white"
    reachUs.style.backgroundColor = "#edecec"
    formBox.style.display = "none"
    reachBox.style.display = "flex"
}

//------------------------Message-------------------------------------

var z = document.querySelector("#z");
var y = document.querySelector("#y");

if (z.innerHTML.length <= 0) {
    z.classList.remove("C-suc");
} else {
    z.classList.add("C-suc");
}

if (y.innerHTML.length <= 0) {
    y.classList.remove("C-unsuc");
} else {
    y.classList.add("C-unsuc");
}