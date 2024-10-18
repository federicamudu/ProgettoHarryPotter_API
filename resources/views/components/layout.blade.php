<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>Potterianesimo</title>
</head>
<body>
    <x-navbar></x-navbar>
    {{$slot}}
@vite(['resources/js/app.js'])
</body>
</html>