//document.getElementById('courses').onclick = function () {
//    var xhr = new XMLHttpRequest();
//    xhr.open('GET', 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
//    xhr.onreadystatechange = function () {
//        if (xhr.readyState === 4) {
//            if (xhr.status === 200) {
//                var json_text = xhr.responseText;
//                var courses = JSON.parse(json_text); //разбирает строку на объект
//                for (var i = 0; i < courses.length; i++) {
//                    alert(courses[i].ccy); //TODO выводи как хочешь
//                }
//            } else {
//                alert('error : ' + xhr.statusText);
//            }
//        }
//    };
//    xhr.send();
//};

function showQuestions() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/api/questions');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var json_text = xhr.responseText;
                var questions = JSON.parse(json_text); //разбирает строку на объект              
                //TODO вывести в табличку
                var tbody = document.querySelector('#questions tbody');
                tbody.innerHTML = '';
                for (var i = 0; i < questions.length; i++) {
                    tbody.innerHTML += '<td>' + (i + 1) + '</td><td>' + questions[i].author + '</td><td>' + questions[i].text + '</td><td><form><button type="submit" name="delete"   value="' + questions[i].id + '">delete</button></form>';
                }
                //delete
                var delete_elem = document.getElementsByName('delete');
                for (var i = 0; i < delete_elem.length; i++) {
                    delete_elem[i].onclick = function () {
                        deleteQuestion();
                        event.preventDefault();
                    };
                }
            } else {
                return false;
            }
        }
    };
    xhr.send();
}
;
showQuestions();

function sendQuestion(author, text) {
    var post_data = 'author=' + author + '&text=' + text;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/api/addquestion');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                showQuestions();
            }
        }
    };
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(post_data);
}

function deleteQuestion(delete_elem) {
    var btn_id = 'id=' + delete_elem;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/api/deletequestion');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                showQuestions();
            }
        }
    };
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send(btn_id);
}


document.forms.question.onsubmit = function (event) {
    var form_elements = this.elements;
    var author = form_elements.author.value;
    var text = form_elements.text.value;
    this.reset();
    sendQuestion(author, text);
    event.preventDefault();
};



