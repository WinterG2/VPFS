window.onload = function () {
    jsonFromPHP();
};

var eventsFromPhp;
var events_cards = document.getElementById("events-cards");

// TODO BUTTON SELECT MORE DARKER
var currentTab = 1;

let prevBtn = document.getElementById("prevBtn");
let firstBtn = document.getElementById("firstBtn");
let secondBtn = document.getElementById("secondBtn");
let thirdBtn = document.getElementById("thirdBtn");
let fourthBtn = document.getElementById("fourthBtn");
let fifthBtn = document.getElementById("fifthBtn");
let nextBtn = document.getElementById("nextBtn");


let firstTabNumb = 1;
let secondTabNumb = 2;
let thirdTabNumb = 3;
let fourthTabNumb = 4;
let fifthTabNumb = 5;

function emptyEvents() {
    events_cards.innerText = "لا يوجد حملات تطوعية";
    events_cards.style.fontSize = "40px";
    events_cards.style.fontWeight = "bold";
    events_cards.style.height = "123vh";
}

var rows;

var pages = Math.ceil(rows / 6);
let firstRowInTab;
let lastRowInTab;

var isSearch = false;


async function jsonFromPHP() {
    try {
        const response = await fetch('../Database/Event/phpToJS.php')
            .then(function (response) {
                return response.json();
            }).then(function (data) {
                eventsFromPhp = data;
                rows = eventsFromPhp.length;
                if (rows == 0) {
                    emptyEvents();
                    return;
                }
                assignVariables(rows);
                changeTab("firstBtn");
            });
    } catch (e) {
        emptyEvents();
        console.log(e.message);
    }
}

function assignVariables(r) {
    rows = r;
    pages = Math.ceil(r / 6)
    firstRowInTab = 1;
    lastRowInTab = 6;
}

function changeTab(str) {
    switch (str) {
        case "prevBtn":
            currentTab--;
            disableEnablePrevBtn();
            disableEnableNextBtn();
            changeTabsNum();
            calculateRowsInTab(currentTab);
            fetchDataFromDB();
            break;
        case "firstBtn":
            currentTab = firstTabNumb;
            disableEnablePrevBtn();
            disableEnableNextBtn();
            changeTabsNum();
            calculateRowsInTab(currentTab);
            fetchDataFromDB();
            break;
        case "secondBtn":
            currentTab = secondTabNumb;
            disableEnablePrevBtn();
            disableEnableNextBtn();
            changeTabsNum();
            calculateRowsInTab(currentTab);
            fetchDataFromDB();
            break;
        case "thirdBtn":
            currentTab = thirdTabNumb;
            disableEnablePrevBtn();
            disableEnableNextBtn();
            changeTabsNum();
            calculateRowsInTab(currentTab);
            fetchDataFromDB();
            break;
        case "fourthBtn":
            currentTab = fourthTabNumb;
            disableEnablePrevBtn();
            disableEnableNextBtn();
            changeTabsNum();
            calculateRowsInTab(currentTab);
            fetchDataFromDB();
            break;
        case "fifthBtn":
            currentTab = fifthTabNumb;
            disableEnablePrevBtn();
            disableEnableNextBtn();
            changeTabsNum();
            calculateRowsInTab(currentTab);
            fetchDataFromDB();
            break;
        case "nextBtn":
            currentTab++;
            disableEnablePrevBtn();
            disableEnableNextBtn();
            changeTabsNum();
            calculateRowsInTab(currentTab);
            fetchDataFromDB();
            break;
    }
}

function calculateRowsInTab(tabNumb) {
    firstRowInTab = (tabNumb * 6) - 5;
    lastRowInTab;

    if (firstRowInTab + 6 > rows) {
        lastRowInTab = rows;
    } else {
        lastRowInTab = firstRowInTab + 5;
    }
}

function disableEnablePrevBtn() {
    if (currentTab == "1") {
        prevBtn.disabled = true;
    } else {
        prevBtn.disabled = false;
    }
}

function disableEnableNextBtn() {
    if (currentTab == pages) {
        nextBtn.disabled = true;
    } else {
        nextBtn.disabled = false;
    }
}

function changeTabsNum() {
    if (currentTab < pages - 1 && currentTab > 2 && pages - 2 > 0) {
        firstTabNumb = currentTab - 2;
        secondTabNumb = currentTab - 1;
        thirdTabNumb = currentTab;
        fourthTabNumb = currentTab + 1;
        fifthTabNumb = currentTab + 2;

        firstBtn.innerText = firstTabNumb;
        secondBtn.innerText = secondTabNumb;
        thirdBtn.innerText = thirdTabNumb;
        fourthBtn.innerText = fourthTabNumb;
        fifthBtn.innerText = fifthTabNumb;

        selectedTab(thirdBtn);
    }

    if (currentTab == 2 && pages - 1 > 0) {
        firstTabNumb = currentTab - 1;
        secondTabNumb = currentTab;
        thirdTabNumb = currentTab + 1;
        fourthTabNumb = currentTab + 2;
        fifthTabNumb = currentTab + 3;

        firstBtn.innerText = firstTabNumb;
        secondBtn.innerText = secondTabNumb;
        thirdBtn.innerText = thirdTabNumb;
        fourthBtn.innerText = fourthTabNumb;
        fifthBtn.innerText = fifthTabNumb;

        selectedTab(secondBtn);
    }

    if (currentTab == pages - 1 && pages - 3 > 0) {
        firstTabNumb = currentTab - 3;
        secondTabNumb = currentTab - 2;
        thirdTabNumb = currentTab - 1;
        fourthTabNumb = currentTab;
        fifthTabNumb = currentTab + 1;

        firstBtn.innerText = firstTabNumb;
        secondBtn.innerText = secondTabNumb;
        thirdBtn.innerText = thirdTabNumb;
        fourthBtn.innerText = fourthTabNumb;
        fifthBtn.innerText = fifthTabNumb;

        selectedTab(fourthBtn);
    }

    if (currentTab == 1) {
        selectedTab(firstBtn);
    } else if (currentTab == pages) {
        selectedTab(fifthBtn);
    }
    disableResetTabs();
}

function disableResetTabs() {
    if (pages < 6) {
        switch (pages) {
            case 1:
                secondBtn.disabled = true;
                thirdBtn.disabled = true;
                fourthBtn.disabled = true;
                fifthBtn.disabled = true;

                secondBtn.style = "background-color: #143b1e;";
                thirdBtn.style = "background-color: #143b1e;";
                fourthBtn.style = "background-color: #143b1e;";
                fifthBtn.style = "background-color: #143b1e;";

                break;
            case 2:
                thirdBtn.disabled = true;
                fourthBtn.disabled = true;
                fifthBtn.disabled = true;

                thirdBtn.style = "background-color: #143b1e;";
                fourthBtn.style = "background-color: #143b1e;";
                fifthBtn.style = "background-color: #143b1e;";
                break;
            case 3:
                fourthBtn.disabled = true;
                fifthBtn.disabled = true;

                fourthBtn.style = "background-color: #143b1e;";
                fifthBtn.style = "background-color: #143b1e;";
                break;
            case 4:
                fifthBtn.disabled = true;

                fifthBtn.style = "background-color: #143b1e;";
                break;
        }
    }
}

function selectedTab(button) {
    resetTabColor();
    button.style = "background-color: #3fe26ddc;";
    button.disabled = true;
}

function resetTabColor() {
    firstBtn.style = "background-color: #39ca62a1;";
    secondBtn.style = "background-color: #39ca62a1;";
    thirdBtn.style = "background-color: #39ca62a1;";
    fourthBtn.style = "background-color: #39ca62a1;";
    fifthBtn.style = "background-color: #39ca62a1;";

    firstBtn.disabled = false;
    secondBtn.disabled = false;
    thirdBtn.disabled = false;
    fourthBtn.disabled = false;
    fifthBtn.disabled = false;
}

function fetchDataFromDB() {
    if (isSearch == true) {
        searchEvent(eventsFromPhp);
    } else {
        createNewPost(eventsFromPhp);
    }
}

function createNewPost(e) {
    events_cards.innerHTML = "";

    for (i = firstRowInTab - 1; i < lastRowInTab; i++) {
        var obj = eventsFromPhp[i];

        var org = obj[0];
        var title = obj[1];
        var img = "../Database/Event/" + obj[2];
        var city = obj[3];
        var address = obj[4];
        var google_map = obj[5];
        var number_req = obj[7];
        var number_curr = obj[8];
        var start_date = obj[9];
        var start_time = obj[11];
        var end_time = obj[12];
        var point = obj[17];

        start_time = start_time.substring(0, 5);
        end_time = end_time.substring(0, 5);


        addPostInHTML(img, org, title, img, city, address, google_map, number_req, number_curr,
            start_date, start_time, end_time, point, i);
    }
}

// TODO ADDRESS
function addPostInHTML(img, org, title, img, city, address, google_map, number_req, number_curr,
    start_date, start_time, end_time, point, i) {

    var card_section = document.createElement("div");
    card_section.className = "card-section";

    var card = document.createElement("div");
    card.className = "card";

    card_section.appendChild(card);

    var card_img = document.createElement("div");
    card_img.className = "card-img";

    var img1 = document.createElement("img");
    img1.src = img;
    img1.alt = "Post image";
    card_img.appendChild(img1);

    card.appendChild(card_img);


    var card_text_field = document.createElement("div");
    card_text_field.className = "card-text-field";

    var label1 = document.createElement("label");
    label1.innerText = title;
    card_text_field.appendChild(label1);

    var label4 = document.createElement("label");
    label4.innerText = org;
    card_text_field.appendChild(label4);

    var label2 = document.createElement("label");
    label2.innerText = city;
    card_text_field.appendChild(label2);

    var label5 = document.createElement("label");
    label5.innerText = start_date;
    card_text_field.appendChild(label5);

    var label6 = document.createElement("label");
    label6.innerText = " من " + start_time + " الى " + end_time;
    card_text_field.appendChild(label6);

    var label7 = document.createElement("label");
    label7.innerText = " عدد المتطوعين المطلوبين " + number_req + " - " + " المسجلين حاليا " + number_curr;;
    card_text_field.appendChild(label7);

    card.appendChild(card_text_field);

    var card_input_field = document.createElement("div");
    card_input_field.className = "card-input-field";


    var card_img_input = document.createElement("div");
    card_img_input.className = "card-img-input";

    google_a = document.createElement("a");
    google_a.href = google_map;

    img2 = document.createElement("img");
    img2.src = "../image/icon-google-map.png";
    img2.alt = "Google map image";

    google_a.appendChild(img2);
    card_img_input.appendChild(google_a);
    card_input_field.appendChild(card_img_input);

    var btn1 = document.createElement("button");
    btn1.innerText = "الانضمام";
    btn1.setAttribute("onClick", "joinEvent(" + i + ")");
    btn1.type = "submit";
    card_input_field.appendChild(btn1);

    var btn2 = document.createElement("button");
    btn2.innerText = "المزيد";
    btn2.setAttribute("onClick", "detailsEvent(" + i + ")");
    card_input_field.appendChild(btn2);

    var label1 = document.createElement("label");
    label1.innerText = "نقطة : " + point;
    card_input_field.appendChild(label1);

    card.appendChild(card_input_field);

    events_cards.appendChild(card_section);

}

function joinEvent(c) {
    var obj = eventsFromPhp[c];

    var org = obj[0];
    var title = obj[1];
    var city = obj[3];
    var address = obj[4];
    var google_map = obj[5];
    var number_curr = obj[8];
    var start_date = obj[9];
    var end_date = obj[10];
    var start_time = obj[11];
    var end_time = obj[12];
    var instructor_name = obj[13];
    var instructor_phone = obj[14];
    var instructor_email = obj[15];
    var hours = obj[16];
    var point = obj[17];
    var status = obj[18];

    var objj = {
        "organization_name": org,
        "title": title,
        "city": city,
        "address": address,
        "google_map": google_map,
        "start_date": start_date,
        "end_date": end_date,
        "start_time": start_time,
        "end_time": end_time,
        "instructor_name": instructor_name,
        "instructor_phone": instructor_phone,
        "instructor_email": instructor_email,
        "volunteer_hrs": hours,
        "point": point,
        "status": status,
        "number_curr": number_curr
    };

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Database/Event/join_event.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                const response = xhr.responseText;
                console.log(response);
                if(response.includes("Success")){
                    alert(title + " تم الانضمام في حملة");
                } else if(response.includes("Duplicate entry")){
                    alert(title + "  انت مضاف من قبل في حملة  ");
                } else {
                    console.log(response);
                    alert("حدث خطا في الانضمام الرجاء محاولة وقت اخر لاحقا");
                }
            } else {
                console.log("Error!");
                console.log(xhr.status);
            }
        }
    };
    xhr.send(JSON.stringify(objj));
}

function detailsEvent(c) {
    var objj = eventsFromPhp[c];

    var org = objj[0];
    var title = objj[1];
    var img = "../Database/Event/" + objj[2];
    var city = objj[3];
    var address = objj[4];
    var google_map = objj[5];
    var description = objj[6];
    var number_req = objj[7];
    var number_curr = objj[8];
    var start_date = objj[9];
    var end_date = objj[10];
    var start_time = objj[11];
    var end_time = objj[12];
    var instructor_name = objj[13];
    var instructor_phone = objj[14];
    var instructor_email = objj[15];
    var hours = objj[16];
    var point = objj[17];
    var status = objj[18];



    detailsEvent_create(img, org, title, img, city, address, google_map, number_req, number_curr,
        start_date, end_date, start_time, end_time, instructor_name, instructor_phone, instructor_email, status, hours, point, description);
}


function detailsEvent_create(img, org, title, img, city, address, google_map, number_req, number_curr,
    start_date, end_date, start_time, end_time, instructor_name, instructor_phone, instructor_email, status, hours, point, description) {

    const container_details = document.createElement("div");
    container_details.className = "container-details";

    const overlay = document.createElement("div");
    overlay.className = "overlay";

    container_details.appendChild(overlay);

    var details = document.createElement("div");
    details.className = "details";

    var header = document.createElement("header");
    header.innerText = title;

    details.appendChild(header);

    var close_tab = document.createElement("div");
    close_tab.className = "close-tab";

    var close_btn = document.createElement("button");
    close_btn.setAttribute("onClick", "close_tab()");
    close_btn.innerText = "X";

    close_tab.appendChild(close_btn);
    details.appendChild(close_tab);

    var event_img_googlemap = document.createElement("div");
    event_img_googlemap.className = "event-img-googlemap";

    var event_img_googlemap_a = document.createElement("a");

    event_img_googlemap_a.src = google_map;

    var img1 = document.createElement("img");
    img1.src = "../image/icon-google-map.png";
    img1.alt = "Event google map";
    event_img_googlemap_a.appendChild(img1);
    event_img_googlemap_a.href = google_map;

    event_img_googlemap.appendChild(event_img_googlemap_a);

    details.appendChild(event_img_googlemap);

    var event_img = document.createElement("div");
    event_img.className = "event-img"

    var img2 = document.createElement("img");
    img2.src = img;
    img2.alt = "Event image";
    event_img.appendChild(img2);

    details.appendChild(event_img);

    var event_info = document.createElement("div");
    event_info.className = "event-info";

    var labelT = document.createElement("label");
    labelT.innerText = "اسم المنشآة: " + org;
    event_info.appendChild(labelT);

    var labelS = document.createElement("label");
    labelS.innerText = "حالة: " + status;
    event_info.appendChild(labelS);

    var label1 = document.createElement("label");
    label1.innerText = "المدينة: " + city;
    event_info.appendChild(label1);

    var labelA = document.createElement("label");
    labelA.innerText = "العنوان: " + address;
    event_info.appendChild(labelA);

    var label2 = document.createElement("label");
    label2.innerText = "تاريخ بداية الحملة: " + start_date;
    event_info.appendChild(label2);

    var labelF = document.createElement("label");
    labelF.innerText = "تاريخ نهاية الحملة: " + end_date;
    event_info.appendChild(labelF);

    var label3 = document.createElement("label");
    label3.innerText = "وقت بداية الحملة: " + start_time;
    event_info.appendChild(label3);

    var label4 = document.createElement("label");
    label4.innerText = "وقت نهاية الحملة: " + end_time;
    event_info.appendChild(label4);

    var labelH = document.createElement("label");
    labelH.innerText = "الساعات: " + hours;
    event_info.appendChild(labelH);

    var label5 = document.createElement("label");
    label5.innerText = "نقاط المستحقة : " + point + " نقطة";
    event_info.appendChild(label5);

    var label6 = document.createElement("label");
    label6.innerText = "اسم المشرف: " + instructor_name;
    event_info.appendChild(label6);

    var label7 = document.createElement("label");
    label7.innerText = "رقم التواصل المشرف: " + instructor_phone;
    event_info.appendChild(label7);

    var label8 = document.createElement("label");
    label8.innerText = "بريد الالكتروني المشرف: " + instructor_email;
    event_info.appendChild(label8);

    var label9 = document.createElement("label");
    label9.innerText = "وصف الحملة: " + description;
    event_info.appendChild(label9);

    details.appendChild(event_info);

    var event_button = document.createElement("div");
    event_button.className = "event-button";

    var label10 = document.createElement("label");
    label10.innerText = number_req + " :عدد المتطوعين المطلوبين";
    event_button.appendChild(label10);

    var label11 = document.createElement("label");
    label11.innerText = number_curr + " :عدد المتطوعين المسجلين";
    event_button.appendChild(label11);

    var btn1 = document.createElement("button");
    btn1.setAttribute("onClick", "join_tab(e)");
    btn1.innerText = "الانضمام";
    event_button.appendChild(btn1);

    var btn2 = document.createElement("button");
    btn2.setAttribute("onClick", "close_tab()");
    btn2.innerText = "الغاء";
    event_button.appendChild(btn2);

    details.appendChild(event_button);
    container_details.appendChild(details);

    var sub_container = document.getElementById("sub-container");
    sub_container.appendChild(container_details);
}

const search = document.getElementById("search");

function searchEvent(e) {
    const searchS = search.value;

    if (searchS.length == 0) {
        isSearch = false;
        return;
    }
    isSearch = true;

    const arrayCollected = [];

    // Title Search
    for (i = 0; i < eventsFromPhp.length; i++) {
        var obj = eventsFromPhp[i];

        var orgTemp = obj[0] + "";
        var titleTemp = obj[1] + "";
        var cityTemp = obj[3] + "";

        if (cityTemp.includes(searchS)) {
            console.log(cityTemp);
            arrayCollected.push(i);
            continue;
        }

        if (titleTemp.includes(searchS)) {
            console.log(titleTemp);
            arrayCollected.push(i);
            continue;
        }

        if (orgTemp.includes(searchS)) {
            console.log(orgTemp);
            arrayCollected.push(i);
            continue;
        }
    }

    if (arrayCollected.length != 0) {
        fillNewEvents(arrayCollected);
    } else {
        alert("لا يوجد مطابقة لهذا النص " + searchS + "\n الرجاء البحث عن مدينة, عنوان حملة, او اسم منشأة");
    }
}

function fillNewEvents(arr) {
    events_cards.innerHTML = "";
    for (i = firstRowInTab - 1; i < lastRowInTab && i < arr.length; i++) {
        var pointer = arr[i];

        var obj = eventsFromPhp[pointer];

        var org = obj[0];
        var title = obj[1];
        var img = "../Database/Event/" + obj[2];
        var city = obj[3];
        var address = obj[4];
        var google_map = obj[5];
        var number_req = obj[7];
        var number_curr = obj[8];
        var start_date = obj[9];
        var start_time = obj[11];
        var end_time = obj[12];
        var point = obj[17];

        start_time = start_time.substring(0, 5);
        end_time = end_time.substring(0, 5);

        addPostInHTML(img, org, title, img, city, address, google_map, number_req, number_curr,
            start_date, start_time, end_time, point, i);

    }
}

function close_tab() {
    var sub_container = document.getElementById("sub-container");
    sub_container.innerText = "";
}

function calcHours(t1, t2) {
    const tt1 = '2022-01-01T' + t1;
    const tt2 = '2022-01-01T' + t2;

    const constTime1 = new Date(tt1);
    const constTime2 = new Date(tt2);

    const Time = Math.abs(constTime2.getTime() - constTime1.getTime());

    return Math.floor(Time / (1000 * 60 * 60));
}