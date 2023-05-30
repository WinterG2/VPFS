const form = document.querySelector("form"),
    nextBtn = form.querySelector(".nextBtn"),
    backBtn = form.querySelector(".backBtn"),
    allInput = form.querySelectorAll(".first input");
const printer = document.querySelector(".datafromjs");
const addBtn = form.querySelector(".nextBtnn");
let printerText = "";
let counter = 1;

nextBtn.addEventListener("click", () => {
    allInput.forEach(input => {
        if (input.value != "") {
            form.classList.add('secActive');
        } else {
            form.classList.remove('secActive');
        }
    })
})


function addStudent(event) {
    event.preventDefault();
    let fname = document.getElementById("gfname").value;
    let sname = document.getElementById("gsname").value;
    let lname = document.getElementById("glname").value;

    printerText += counter + "- " + fname + " " + sname + " " + lname + "<br>";
    console.log(fname);
    counter++;

    printer.innerHTML = printerText;

    if (counter > 3) {
        addBtn.disabled = true;
        alert("Max ERROR");
    }
}