function formatText(tag) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + tag + '>' + selected_txt + '</' + tag + '>' + after_txt;
}
function preview() {
	var textbox , view ;
    textbox = document.getElementById('poruke_sadrzaj');
	view = document.getElementById("preview");
	view.innerHTML = textbox.value
}

function onload(){
	var textarea = document.getElementById("poruke_sadrzaj");
	textarea.onkeypress = function(e){
		if( e.which === 13)
		{
			this.value += "<br>";
		}
	}
}

function olist(tag){
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + tag +'>' + '\n' + '<' + 'li' + '>' + selected_txt + '</' + 'li' + '>' + '\n' + '</' + tag +'>'  + after_txt;
}

function Vlada(emo){
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
      myTextArea.value = before_txt + emo   + selected_txt   + after_txt;
}

function myCenter(center) {
  var myTextArea = document.getElementById('poruke_sadrzaj');
  var myTextAreaValue = myTextArea.value;
  var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
  var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
  var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
  myTextArea.value = before_txt + '<' + center +'' + ' ' + 'align="center"' + '>' + selected_txt +   '</' + center +'>'  + after_txt;
 }
function myLeft(left) {
  var myTextArea = document.getElementById('poruke_sadrzaj');
  var myTextAreaValue = myTextArea.value;
  var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
  var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
  var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
  myTextArea.value = before_txt + '<' + left +'' + ' ' + 'align="left"' + '>' + selected_txt +   '</' + left +'>'  + after_txt;
 }
function myRight(right) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + right +'' + ' ' + 'align="right"' + '>' + selected_txt +   '</' + right +'>'  + after_txt;
}

function kode(kod){
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + kod + '>' + selected_txt + '</' + kod + '>' + after_txt;
}

function myGreen(green) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + green +'' + ' ' + 'class="green"' + '>' + selected_txt +   '</' + green +'>'  + after_txt;
}

function myYellow(yellow) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + yellow +'' + ' ' + 'class="yellow"' + '>' + selected_txt +   '</' + yellow +'>'  + after_txt;
}
function myBr(br) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + br +'>' ;
}
function myHr(hr) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + hr +'>' ;
}

function Table(ta){
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + ta +'>' + '\n' + '<' + 'td' + '>' + selected_txt + '</' + 'td' + '>' + '\n' + '</' + ta +'>'  + after_txt;
}

function myRed(red) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + red +'' + ' ' + 'class="red"' + '>' + selected_txt +   '</' + red +'>'  + after_txt;
}

function myBlue(blue) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + blue +'' + ' ' + 'class="blue"' + '>' + selected_txt +   '</' + blue +'>'  + after_txt;
}

function myLink(link) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + link +'' + ' ' + 'href=" "' + '>' + selected_txt + ' ' + '</' + link +'>'  + after_txt;
}

function myW(w) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + w +'' + ' ' + 'style="color: #ffffff"' + '>' + selected_txt +   '</' + w +'>'  + after_txt;
}

function myR(r) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + r +'' + ' ' + 'style="color: red"' + '>' + selected_txt +   '</' + r +'>'  + after_txt;
}

function myG(g) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + g +'' + ' ' + 'style="color: green"' + '>' + selected_txt +   '</' + g +'>'  + after_txt;
}

function myB(b) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + b +'' + ' ' + 'style="color: blue"' + '>' + selected_txt +   '</' + b +'>'  + after_txt;
}

function myO(o) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + o +'' + ' ' + 'style="color: orange"' + '>' + selected_txt +   '</' + o +'>'  + after_txt;
}

function myP(p) {
   var myTextArea = document.getElementById('poruke_sadrzaj');
   var myTextAreaValue = myTextArea.value;
   var selected_txt = myTextAreaValue.substring(myTextArea.selectionStart, myTextArea.selectionEnd);
   var before_txt = myTextAreaValue.substring(0, myTextArea.selectionStart);
   var after_txt = myTextAreaValue.substring(myTextArea.selectionEnd, myTextAreaValue.length);
   myTextArea.value = before_txt + '<' + p +'' + ' ' + 'data-lang="HTML"' + '>' + selected_txt +   '</' + p +'>'  + after_txt;
}
