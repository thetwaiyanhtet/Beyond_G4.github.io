
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./resources/lib/tailwind/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./resources/css/addCategory.css">
</head>

<body  class="flex justify-center h-screen  items-center ">
    <div class="w-96 border rounded-xl shadow-xl">
        <div class=" bg-blue-600 rounded-xl rounded-b-none">
        <img class="py-3 px-16 " src="./resources/img/save.png" alt="">
        </div>
        <div class="flex flex-col items-center bg-white space-y-5 justify-center">
            <p class="Font-bold text-3xl">Save Change</p>
            <p>Do you want save the change?</p>
            <div class="space-x-5 pb-10">
                <button id="yes" class="bg-blue-600 rounded-lg px-7 py-2 shadow-2xl" >Save</button>
                <button id="no" class=" border rounded-lg bg-slate-400 px-7 py-2 shadow-xl">No</button>
            </div>
        </div>
    </div>
</body>
</html>