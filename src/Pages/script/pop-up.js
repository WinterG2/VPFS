let x = document.getElementById("pop-up");

const fileTypes = [
    "image/jpeg",
    "image/jpg",
    "image/png"
];

function pop_up() {
    x.removeAttribute("hidden", "hidden");
}

function close_pop_up() {
    x.setAttribute("hidden", "hidden");
}

const input = document.getElementById("input-img");
const para = document.getElementById("file-Status");

function validFileType(file) {
    return fileTypes.includes(file);
}

function inputImg() {
    const curFiles = input.files[0].type;
    if (validFileType(curFiles)) {
        para.innerText = input.files[0].name;
    } else {
        para.innerText = "الملف يجب ان يكون بصيغة صورة";
        input.value = "";
    }
}

const date = new Date();
var day = date.getDate();
var month = date.toISOString();
month = month.substring(5, 7);

const dateInput = document.getElementById("restrictDate");
dateInput.valueAsDate = date;
dateInput.min = date.getFullYear() + "-" + month + "-" + day;
dateInput.max = date.getFullYear() + "-12-31";

const date2 = new Date(dateInput.valueAsDate);
var day2 = date.getDate();
var month2 = date.toISOString();
month2 = month2.substring(5, 7);

function restreictDate2() {
    const dateInput2 = document.getElementById("restrictDate2");
    dateInput2.valueAsDate = dateInput.valueAsDate;
    dateInput2.min = dateInput.valueAsDate.getFullYear() + "-" + month + "-" + day;
    dateInput2.max = dateInput.valueAsDate.getFullYear() + "-12-31";
}