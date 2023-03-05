<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= <div id="app">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Styles -->

    <title>Document</title>



 <style>
    body {
        --tw-bg-opacity : 1;
       background-color: rgb(15 23 42/var(--tw-bg-opacity));
    }
    label {
  display: block;
}
 </style>




</head>

<body >
    <h1 style="text-align: center ; color: white ; font-size :24 px ">OpenAi Chat</h1>
   
    <div class="main-chat" style="width: 70% ; position : absolute ; margin-left : 15%">
        <div class="form-group"  , style="align-content: center ; width : 100%">
            <form id="message-form" method="GET" action="{{ route('OpenAi') }}" style="height: 100%">
                <div style="height: 150px">
                    <label for="Text" style="color: white ;font-size: 15px ;">your question:</label>
                    <input type="text" id="message" name="message" value={{ $searsh }} style=" width: 100% ;--tw-bg-opacity: 1; background-color: rgb(30 41 59/var(--tw-bg-opacity));color:white">
                </div>

                <button type="submit" style="width: 50px ;margin-left : 40% ;color : white">Send</button>
            </form>
        </div>
        <div id="message-response" style="">
            <div type="text" style="--tw-bg-opacity: 1; background-color: rgb(30 41 59/var(--tw-bg-opacity)); width: 100% ;height: 300px ;color : white">
                {{ $text }}
            </div>
        </div>
    </div>



    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</body>

</html>
