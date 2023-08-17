<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./resources/css/verify.css">
</head>
<body>
    <h1>PIN code 1.0</h1>
    <div class="pin-code">
        <input type="number" maxlength="1" autofocus>
        <input type="number" maxlength="1">
        <input type="number" maxlength="1">
        <input type="number" maxlength="1">
    </div>

    <script>
        var pinContainer = document.querySelector(".pin-code");
        console.log('There is ' + pinContainer.length + ' Pin Container on the page.');

        pinContainer.addEventListener('keyup', function (event) {
            var target = event.target;
            
            var maxLength = parseInt(target.getAttribute("maxlength"), 10);
            var myLength = target.value.length;

            if (myLength >= maxLength) {
                var next = target.nextElementSibling;
                if (next !== null && next.tagName.toLowerCase() === "input") {
                    next.focus();
                }
            }

            if (myLength === 0) {
                var prev = target.previousElementSibling;
                if (prev !== null && prev.tagName.toLowerCase() === "input") {
                    prev.focus();
                }
            }
        });

        pinContainer.addEventListener('keydown', function (event) {
            var target = event.target;
            target.value = "";
        });
    </script>
</body>
</html>
