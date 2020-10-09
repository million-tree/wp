$(document).ready(function(){$('.image-link').magnificPopup({type:'image'});});
// Start - Right download fixed button
var mybutton=document.getElementById("download_fixed_btn");window.onscroll=function(){scrollFunction()};function scrollFunction(){if(document.body.scrollTop>500||document.documentElement.scrollTop>500){mybutton.style.display="block";}else{mybutton.style.display="none";}}
// Start - FAQ active panel
var acc=document.getElementsByClassName("panel-title");var i;for(i=0;i<acc.length;i++){acc[i].addEventListener("click",function(){this.classList.toggle("active");var panel=this.nextElementSibling;if(panel.style.display==="block"){panel.style.display="none";}else{panel.style.display="block";}});}
// Start Read-more & read-less button
function myFunctionOne_1(){
	var one_dots=document.getElementById("one_dots_1");
	var one_moreText=document.getElementById("one_more_1");
	var one_btnText=document.getElementById("one_myBtn_1");
	if(one_dots.style.display==="none"){
		one_dots.style.display="inline";
		one_btnText.innerHTML="Read more";
		one_moreText.style.display="none";
	}else{
		one_dots.style.display="none";
		one_btnText.innerHTML="Read less";
		one_moreText.style.display="inline";
	}
}

function myFunctionOne_2(){
	var one_dots=document.getElementById("one_dots_2");
	var one_moreText=document.getElementById("one_more_2");
	var one_btnText=document.getElementById("one_myBtn_2");
	if(one_dots.style.display==="none"){
		one_dots.style.display="inline";
		one_btnText.innerHTML="Read more";
		one_moreText.style.display="none";
	}else{
		one_dots.style.display="none";
		one_btnText.innerHTML="Read less";
		one_moreText.style.display="inline";
	}
}

function myFunctionOne_3(){
	var one_dots=document.getElementById("one_dots_3");
	var one_moreText=document.getElementById("one_more_3");
	var one_btnText=document.getElementById("one_myBtn_3");
	if(one_dots.style.display==="none"){
		one_dots.style.display="inline";
		one_btnText.innerHTML="Read more";
		one_moreText.style.display="none";
	}else{
		one_dots.style.display="none";
		one_btnText.innerHTML="Read less";
		one_moreText.style.display="inline";
	}
}

function myFunctionOne_4(){
	var one_dots=document.getElementById("one_dots_4");
	var one_moreText=document.getElementById("one_more_4");
	var one_btnText=document.getElementById("one_myBtn_4");
	if(one_dots.style.display==="none"){
		one_dots.style.display="inline";
		one_btnText.innerHTML="Read more";
		one_moreText.style.display="none";
	}else{
		one_dots.style.display="none";
		one_btnText.innerHTML="Read less";
		one_moreText.style.display="inline";
	}
}

// function myFunctionTwo(){var two_dots=document.getElementById("two_dots");var two_moreText=document.getElementById("two_more");var two_btnText=document.getElementById("two_myBtn");if(two_dots.style.display==="none"){two_dots.style.display="inline";two_btnText.innerHTML="Read more";two_moreText.style.display="none";}else{two_dots.style.display="none";two_btnText.innerHTML="Read less";two_moreText.style.display="inline";}}
// function myFunctionThree(){var three_dots=document.getElementById("three_dots");var three_moreText=document.getElementById("three_more");var three_btnText=document.getElementById("three_myBtn");if(three_dots.style.display==="none"){three_dots.style.display="inline";three_btnText.innerHTML="Read more";three_moreText.style.display="none";}else{three_dots.style.display="none";three_btnText.innerHTML="Read less";three_moreText.style.display="inline";}}
// function myFunctionFour(){var four_dots=document.getElementById("four_dots");var four_moreText=document.getElementById("four_more");var four_btnText=document.getElementById("four_myBtn");if(four_dots.style.display==="none"){four_dots.style.display="inline";four_btnText.innerHTML="Read more";four_moreText.style.display="none";}else{four_dots.style.display="none";four_btnText.innerHTML="Read less";four_moreText.style.display="inline";}}
// Back to top
var btn=$('#back-button');$(window).scroll(function(){if($(window).scrollTop()>300){btn.addClass('show');}else{btn.removeClass('show');}});btn.on('click',function(e){e.preventDefault();$('html, body').animate({scrollTop:0},'300');});

// When the user scrolls the page, execute myHeader
window.onscroll = function() {myHeader()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}