var qname = document.getElementById('qname');
var qnameErr = document.getElementById('qnameErr');
var qTitle = document.getElementById('qTitle');
var qTitleErr = document.getElementById('qTitleErr');
var titleBtn = document.getElementById('titleBtn');
var questionTitle = document.getElementById('questionTitle');

var addQuestion = document.getElementById('addQuestion');

var questionList = [];

class Question {
	constructor(_qTitle, _opt1, _opt2, _opt3, _opt4, _corrAns) {
		this.qTitle = _qTitle;
		this.opt1 = _opt1;
		this.opt2 = _opt2;
		this.opt3 = _opt3;
		this.opt4 = _opt4;
		this.corrAns = _corrAns;
	}
}



titleBtn.addEventListener('click', function () {
	//var index = 0;
	questionTitle.innerHTML = "<div class='row mt-3'><p class='mr-auto ml-3'>Name: " + qname.value + "</p><button class='btn btn-success mr-3' id='CompleteBtn'>Complete</button></div><h3 class='text-center mt-3'>" + qTitle.value + "</h3><hr>";
	addQuestion.classList.remove("invisible");
	questions.classList.remove("invisible");

	var CompleteBtn = document.getElementById('CompleteBtn');
	CompleteBtn.addEventListener('click', function () {

		//adding question paper
		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function () {
			console.log(xhttp.responseText);
			if (xhttp.readyState == 4 && xhttp.status == 200) {
				var index = xhttp.responseText;
				xhttp.abort();
				addAllQuestions(index);
				window.location.href = 'previous_questions.php?r=1';
			}

		}

		xhttp.open('get', '../controller/set_question_con.php?title=' + qTitle.value + '&name=' + qname.value);
		xhttp.send();

	});

});


function addAllQuestions(id) {
	//adding quesion 


	for (var i = 0; i < questionList.length; i++) {
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function () {

		}
		var link = '../controller/set_question_con.php?question=' + questionList[i].qTitle + '&question_paper_id=' + id + '&opt1=' + questionList[i].opt1 + '&opt2=' + questionList[i].opt2 + '&opt3=' + questionList[i].opt3 + '&opt4=' + questionList[i].opt4 + '&corrent_answer=' + questionList[i].corrAns;
		console.log(link);
		xhttp.open('get', link);
		xhttp.send();
	}
}


var questions = document.getElementById('questions');
var noQ = document.getElementById('noQ');

var addBtn = document.getElementById('addBtn');
var question = document.getElementById('question');
var opt1 = document.getElementById('opt1');
var opt2 = document.getElementById('opt2');
var opt3 = document.getElementById('opt3');
var opt4 = document.getElementById('opt4');
var correctAns = document.getElementById('corrAns');


addBtn.addEventListener('click', function () {
	var q = new Question(question.value, opt1.value, opt2.value, opt3.value, opt4.value, correctAns.value);
	questionList.push(q);

	var div = document.createElement('div');
	div.classList.add('mb-3');

	var titleRow = document.createElement('div');
	titleRow.classList.add('col-12');

	var title = document.createElement('p');
	title.classList.add('h5');



	var counter = document.createElement('span');
	counter.classList.add('count');
	var mainTitle = document.createElement('span');
	mainTitle.classList.add('main-title');
	mainTitle.textContent = question.value;

	var removeBtn = document.createElement('button');
	removeBtn.classList.add("btn");
	removeBtn.classList.add("btn-danger");
	removeBtn.classList.add("btn-sm");
	removeBtn.innerHTML = "Remove";

	var row = document.createElement('div');
	row.classList.add('row');

	var ul = document.createElement('ol');
	//ul.classList.add("list-inline");

	var o1 = document.createElement('li');
	//o1.classList.add("list-inline-item");
	o1.classList.add("col-md-3");

	o1.textContent = opt1.value;

	var o2 = document.createElement('li');
	//o2.classList.add("list-inline-item");
	o2.classList.add("col-md-3");
	o2.textContent = opt2.value;

	var o3 = document.createElement('li');
	//o3.classList.add("list-inline-item");
	o3.classList.add("col-md-3");
	o3.textContent = opt3.value;

	var o4 = document.createElement('li');
	//o4.classList.add("list-inline-item");
	o4.classList.add("col-md-3");
	o4.textContent = opt4.value;

	var corrAnsDiv = document.createElement('div');
	corrAnsDiv.classList.add('alert');
	corrAnsDiv.classList.add('alert-success');
	corrAnsDiv.textContent = 'Correct Ansewer: ' + (parseInt(correctAns.value) + 1);



	if (noQ) {
		noQ.remove();
	}


	questions.appendChild(div);
	div.appendChild(titleRow);
	titleRow.appendChild(title);
	title.appendChild(counter);
	title.appendChild(mainTitle);
	title.appendChild(removeBtn);
	div.appendChild(ul);
	ul.appendChild(row);
	row.appendChild(o1);
	row.appendChild(o2);
	row.appendChild(o3);
	row.appendChild(o4);
	div.appendChild(corrAnsDiv);
	makeSerial('count');



	//removing this elemnt
	removeBtn.addEventListener('click', function () {
		var index = questionList.indexOf(q);
		console.log(index);
		questionList.splice(index, 1);
		console.log(questionList);

		div.parentNode.removeChild(div);
		makeSerial('count');
	});

	//reset 
	question.value = '';
	opt1.value = '';
	opt2.value = '';
	opt3.value = '';
	opt4.value = '';
	correctAns.selectedIndex = '0';
});


function makeSerial(className) {
	var cls = document.getElementsByClassName(className);
	for (var i = 0; i < cls.length; i++) {
		cls[i].innerHTML = i + 1 + ". ";
	}
}