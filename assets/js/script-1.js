const toggleBtn = document.querySelector(".toggle-btn");
const toggleBtnIcon = document.querySelector(".name-username .toggle-btn i");
const userDropDown = document.querySelector(".user-dropdown");
toggleBtn.onclick =function(){ 
userDropDown.classList.toggle("open");
 const isOpen = userDropDown.classList.contains("open");
 toggleBtnIcon.classList = isOpen
 ?"fa-solid fa-xmark" 
 :"fa-solid fa-chevron-down" ;
};
document.querySelector(".toggle-btn").addEventListener("click", changeDiv);
function changeDiv(){
  var element = document.getElementById("user-dropdown");
  element.style.opacity = (element.style.opacity == 1) ? 0 : 1;
};