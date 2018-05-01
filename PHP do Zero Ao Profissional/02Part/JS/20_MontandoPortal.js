/*
CODIGO no console Do Chrome: Descobrindo o tamanho da area dos slideshows(4 figuras lado a lado)
 com javascripty
document.getElementById("slideshow");
<div class=​"slideshow" id=​"slideshow">​…​</div>​
document.getElementById("slideshow").offsetWidth;
753
*/
var slideItem = 0;//definir variavel para exibir qual slide está sendo mostrado
window.onload = function(){
	//a cada 2 segundos mudar o slide
	setInterval(passarSlide,2000);

	var slidewidth = document.getElementById("slideshow").offsetWidth;
	var objs = document.getElementsByClassName("slide");
//definindo uma figura ao lado da outra
	for(var i in objs){
		objs[i].style.width = slidewidth;
			//definindo a largura em todos os slides
	}
}

 function passarSlide()
 {//ela vai pegar os dados do slideshow padrão e pegar a largura
		var slidewidth = document.getElementById("slideshow").offsetWidth;
		//Definir o slide que vai aparecer, a partir do slide item
			if (slideItem >= 3){//se o slideItem for igual a 0 ou maior ele volta para slide inicial
				slideItem = 0;
			}else{//caso contrario soma mais um (outra imagem é exibida)
				slideItem++;
			}

			document.getElementsByClassName("slideshowArea")[0].style.marginLeft = "-" + (slidewidth * slideItem) + "px";
 }

 	function mudarSlide(pos)
 	{
 		var slidewidth = document.getElementById("slideshow").offsetWidth;
 		slideItem = pos;
 		document.getElementsByClassName("slideshowArea")[0].style.marginLeft = "-" + (slidewidth * slideItem) + "px";

 	}

 	function toggleMenu(){
 		var menu = document.getElementById("menu");

 		if (menu.style.display == 'none' || menu.style.display == ''){//se o menu estiver invisivel
 			menu.style.display = "block";//eu torno ele visivel

 		}else{
 			menu.style.display = "none";
 		}
 	}
