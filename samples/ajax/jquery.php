<html>
<head>
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
</head>
<body>
<script>
    $.ajax({
        url: 'http://localhost/php-acad-kotenko/samples/ajax/jquery-action.php',
        method: 'post',
        responseType: 'application/json',
        data: {name: 'Dmytro', age: 28},
        success: function (answer) {
            alert(answer.name)
        }
    })
</script>
</body>
</html>
