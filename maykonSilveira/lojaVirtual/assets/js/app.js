var menuItems = document.getElementById("menuItems");

menuItems.style.maxHeight = "0px";

function menucelular(){
  if(menuItems.style.maxHeight == "0px"){
    menuItems.style.maxHeight = "200px";
  }else{
    menuItems.style.maxHeight = "0px";
  }
}

