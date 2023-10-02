<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <title>dataEmail</title>
</head>
<body>
  <div class="container align-items-center">
    <h1 class="dark">The information of Email </h1>
    <hr>
    <div style="background-color: rgb(240, 240, 240); text-align: center ;height: 300px;">
        <p> Name: {{ $data['name_email'] }}</p>
        <p> Email: {{ $data['email'] }}</p>
        <p> Subject: {{ $data['subject__email'] }}</p>
        <p> Message: {{ $data['message__email'] }}</p>
    </div>



  </div>


</body>
</html>

