// const toggleIconBtn = document.querySelector(''); //TODO Redirect back to home

// ------Variable------
// Div bar-iocn
const btn = document.querySelector('.btn');
// Div dropdown-menu 
const menuBtn = document.querySelector('.dropdown');

// ------//Variable//------


// User clicked on the bars will display the bar list
btn.onclick = function(){
    // Open code
    menuBtn.classList.toggle('open');
}
