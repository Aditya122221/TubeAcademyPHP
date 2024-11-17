var account = document.querySelector("#P-initial");
var edit = document.querySelector('#P-next')
var nonEditable = document.querySelector("#nonEditable");
var editable = document.querySelector("#P-right2o")
var save = document.querySelector(".P-save")
var right = document.querySelector(".P-right1");

const handleAccount = () => {
    account.style.background = "blue";
    account.style.color = "white";
    nonEditable.style.display = "block";
    editable.style.display = "none";
    edit.style.background = "white";
    edit.style.color = "black";
    right.innerHTML = "Account Info"
}

const handleEdit = () => {
    account.style.background = "white";
    account.style.color = "black";
    nonEditable.style.display = "none";
    editable.style.display = "block";
    edit.style.background = "blue";
    edit.style.color = "white";
    right.innerHTML = "Edit Info"
}

const handleSave = () => {
    account.style.background = "blue";
    account.style.color = "white";
    nonEditable.style.display = "block";
    editable.style.display = "none";
    edit.style.background = "white";
    edit.style.color = "black";
    right.innerHTML = "Account Info"
}