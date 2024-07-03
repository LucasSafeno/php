var menuItems = document.getElementById("menuItems");

menuItems.style.maxHeight = "0px";

function menucelular(){
  if(menuItems.style.maxHeight == "0px"){
    menuItems.style.maxHeight = "200px";
  }else{
    menuItems.style.maxHeight = "0px";
  }
}
 
var produtoImg = document.getElementById("produtoimg");
var produtoMiniatura = document.getElementsByClassName("produtoMiniatura");

produtoMiniatura[0].onclick = function(){
  produtoImg.src = produtoMiniatura[0].src;
}

produtoMiniatura[1].onclick = function(){
  produtoImg.src = produtoMiniatura[1].src;
}

produtoMiniatura[2].onclick = function(){
  produtoImg.src = produtoMiniatura[2].src;
}

produtoMiniatura[3].onclick = function(){
  produtoImg.src = produtoMiniatura[3].src;
}