<html>
<head></head>
<body>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost/php-acad-kotenko/samples/ajax/action.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
            }
            else {
                alert('Request failed.  Returned status of ' + xhr.status);
            }
        };
        xhr.send(JSON.stringify({name: "Dmytro", age: 28, position: "Senior PHP developer"}));
    </script>
</body>
</html>
