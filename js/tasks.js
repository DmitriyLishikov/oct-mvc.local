window.onload = function () {
    var btn_index = document.getElementsByName('add_task');
    btn_index.onclick = function () {
        document.location.replace("http://oct-mvc.local/tasks/create");
    };
};



