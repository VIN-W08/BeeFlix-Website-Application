<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .content{
            padding: 35px;
            margin-top: 15px;
            background-color: rgb(237, 237, 237);
        }
    </style>
</head>
<body>
    @include("layout.header")
    <div class="content">
        @yield("content")
    </div>
    @include("layout.footer")
</body>
</html>