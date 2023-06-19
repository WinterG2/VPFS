const form = document.querySelector("form"),
    nextBtn = form.querySelector(".nextBtn"),
    backBtn = form.querySelector(".backBtn"),
    allInput = form.querySelectorAll(".first input");
const printer = document.querySelector(".datafromjs");
const addBtn = form.querySelector(".nextBtnn");

const addStudentBtn = document.getElementById("addStudents");

let printerText = "";
let counter = 1;
let reverseCounter = 3;

nextBtn.addEventListener("click", () => {
    allInput.forEach(input => {
        if (input.value != "") {
            form.classList.add('secActive');
        } else {
            form.classList.remove('secActive');
        }
    })
})

fillSchoolSelector();

async function fillSchoolSelector() {
    const selector = document.getElementById("schoolname");

    try {
        const response = await fetch('../Database/phpToJSschool.php')
        .then(function (response) {
            return response.json();
        }).then(function (data) {
            console.log(data.length);
            for(i = 0; i < data.length; i++){
                var optionEle = document.createElement("option");
                optionEle.textContent = data[i];
                selector.appendChild(optionEle);
            }
        });
    } catch (e) {
        console.log(e.message);
    }
}