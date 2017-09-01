$(window).scroll(function() {
  if ($(document).scrollTop() <410) {
    $('#ele1').addClass('active_li');
  }else{
    $('#ele1').removeClass('active_li');
  }
  if($(document).scrollTop() >410 && $(document).scrollTop()<680) {
    $('#ele2').addClass('active_li');
  }
  else{
    $('#ele2').removeClass('active_li');
  }
  if($(document).scrollTop() >680 && $(document).scrollTop()<890) {
    $('#ele3').addClass('active_li');
  }
  else{
    $('#ele3').removeClass('active_li');
  }
  if($(document).scrollTop() >890 && $(document).scrollTop()<1070) {
    $('#ele4').addClass('active_li');
  }
  else{
    $('#ele4').removeClass('active_li');
  }
  if($(document).scrollTop() >1070 && $(document).scrollTop()<1320) {
    $('#ele5').addClass('active_li');
  }
  else{
    $('#ele5').removeClass('active_li');
  }
  if($(document).scrollTop() >1320 && $(document).scrollTop()<2170) {
    $('#ele6').addClass('active_li');
  }
  else{
    $('#ele6').removeClass('active_li');
  }
  if($(document).scrollTop() >2170) {
    $('#ele7').addClass('active_li');
  }
  else{
    $('#ele7').removeClass('active_li');
  }
});
function display(id){
	// alert(id);
			// var active = document.getElementsByTagName('li');
			// for (var i = 0 ; i < active.length; i++) {
			// 	active[i].removeAttribute("class");
			// }

			document.getElementById(id).setAttribute("class","active_li");
			// var disp_text=document.getElementsByClassName('display_content');
			// for (var i = 0; i < disp_text.length; i++) {
			// 	disp_text[i].style.display="none";
			// }
			// if (id=='ele1') {
			// 	document.getElementById("academic").style.display='block';
			// }
			// else if(id=='ele2'){
			// 	document.getElementById("hostel").style.display='block';
			// }
			// else if(id=='ele3'){
			// 	document.getElementById("dining").style.display='block';
			// }
			// else if(id=='ele4'){
			// 	document.getElementById("ground").style.display='block';
			// }
			// else if(id=='ele5'){
			// 	document.getElementById("medical").style.display='block';
			// }
			// else if(id=='ele6'){
			// 	document.getElementById("library").style.display='block';
			// }
			// else if(id=='ele7'){
			// 	document.getElementById("gym").style.display='block';
			// }
		}
