<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h2>Test blade</h2>

    <ul>

            @foreach($objs as $key => $val):
                <li>{{$val["name"]}} ** {{$val["phon"]}}</li>
            @endforeach;
    </ul>



</body>
</html>
