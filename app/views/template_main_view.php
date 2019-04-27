<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../css/question.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/tasks.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>My site</h1>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/tasks">Tasks</a></li>
                <li><a href="/questions">Questions</a></li>
            </ul>
        </nav>
        <main>
            <?php include_once 'app' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $content_view . '.php'; ?>
        </main>           
    </body>
</html>
