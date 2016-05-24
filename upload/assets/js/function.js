function add_div()
{
	var lastChild = document.getElementById("articlefields").lastChild.id;
	//var lastChildID = lastChild.id;
	alert(lastChild);
	var children = document.getElementById("articlefields").children;
	if (children.length > 1) {
		alert(children[0].id);
	var first = children[0].id;
    var last = children[children.length - 1];
    var second = children[1];
}
	//document.getElementById("demo").innerHTML = list;
	/*
var article_name_label = document.createElement("Label");
article_name_label.innerHTML = "Article Name";
var article_name_text = document.createElement("input");

var article_title_label = document.createElement("Label");
article_title_label.innerHTML = "Article Title";
var article_title_text = document.createElement("input");

var breakline = document.createElement("br");	

var element = document.getElementById("articlelables");
element.appendChild(breakline);
element.appendChild(breakline);
element.appendChild(article_title_label);
var element = document.getElementById("articlefields");
element.appendChild(breakline);
element.appendChild(breakline);
element.appendChild(article_title_text);
element.appendChild(breakline);
element.appendChild(breakline);
var element = document.getElementById("articlelables");
element.appendChild(breakline);
element.appendChild(breakline);
element.appendChild(article_name_label);
var element = document.getElementById("articlefields");
element.appendChild(breakline);
element.appendChild(breakline);
element.appendChild(article_name_text);
*/
}