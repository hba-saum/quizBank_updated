var qId = document.getElementById('qid');
var sid = document.getElementById('sid');

var qbox = document.getElementById('qbox');
var forms = qbox.getElementsByTagName('form');

var submitBtn = document.getElementById('submitBtn');
submitBtn.addEventListener('click', function () {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        console.log(xhttp.responseText);
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var index = xhttp.responseText;
            xhttp.abort();
            addAllAnswers(index);
            window.location.href = 'result.php?ai=' + index;//rederect to
        }

    }

    xhttp.open('get', '../controller/solve_con.php?question_paper_id=' + qId.value + '&priblem_solver_id=' + sid.value);
    xhttp.send();
});

function addAllAnswers(id) {
    //adding quesion 
    for (var i = 0; i < forms.length; i++) {
        var questionId = forms[1].getElementsByClassName('questionId')[0].value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {

        }
        var given_ans=0;
        for (var j = 1; j < 5; j++) {
            if (forms[i].getElementsByTagName('input')[j].checked === true) {
                given_ans = j - 1; break;
            }
        }
        var link = '../controller/solve_con.php?given_ans=' + j + '&question_id=' + questionId + '&answer_sheet_id=' + id;
        console.log(link);
        xhttp.open('get', link);
        xhttp.send();
    }
}