var xmlHttp;
function typing(){
    // All data must be deleted
    var exam = document.getElementById('exam');
    exam.style.display = 'none';
    // Objects for typing the name
    var name = document.getElementById('name1');
    if (name.value.length>0) {
        // If the name field is not empty, we get the list with ajax
        xmlHttp=new XMLHttpRequest();
        var url="ajax2.php?op=list&name3="+name.value+"&sid="+Math.random();
        xmlHttp.onreadystatechange=listFill;
        xmlHttp.open("GET",url,true);
        xmlHttp.send(null);
    }
    else {
        document.getElementById("list1").innerHTML = "";
    }
}
function listFill() { 
    if (xmlHttp.readyState==4) { 
        document.getElementById("list1").innerHTML = xmlHttp.responseText;
    }
}
function choose(){
    // Value associated with the chosen name 
	var list = document.getElementById('list1');
    var index = list.options[list.selectedIndex].value;
    // We get the data with Ajax
    xmlHttp=new XMLHttpRequest();
    var url="ajax2.php?op=data&index="+index+"&sid="+Math.random();
    xmlHttp.onreadystatechange=dataFill;
    xmlHttp.open("GET",url,true);
    xmlHttp.send(null);
}
function dataFill() {
    // The data must be filled in based on the answer
    var separator = xmlHttp.responseText.indexOf("|");
    var time = document.getElementById('time1');
    time.innerHTML = xmlHttp.responseText.substr(0, separator);
    var venue = document.getElementById('venue1');
    venue.innerHTML =   xmlHttp.responseText.substr(separator + 1);
    // display the data
    var exam = document.getElementById('exam');
    exam.style.display = 'block';
}
