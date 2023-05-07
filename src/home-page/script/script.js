// const toggleIconBtn = document.querySelector(''); //TODO Redirect back to home

// ------Variable------
// Div bar-iocn
const btn = document.querySelector('.btn');
// Div dropdown-menu 
const menuBtn = document.querySelector('.dropdown');
// Div icon button
const webBtn = document.querySelector('.web-logo');
// ------//Variable//------

webBtn.onclick = function(){
    // Open code
    console.log("HG");
}


// User clicked on the bars will display the bar list
btn.onclick = function(){
    // Open code
    menuBtn.classList.toggle('open');
}




// TODO Remove
async function f(){
    while(true){
        const windowWidth = window.innerWidth;
        console.log(windowWidth);
        await sleep(1000);
    } 
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}