window.onload = function () {
    document.getElementById('add_task').onclick = function () {
        document.location.replace("http://oct-mvc.local/tasks/create");
    };
    var list = document.getElementsByClassName('list');
    for (var i = 0; i < list.length; i++) {
        list[i].onclick = function () {
            document.location.replace("http://oct-mvc.local/tasks/edit");
            alert(document.getElementsByClassName('list').textContent);
        };
    }
};



