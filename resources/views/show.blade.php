<!DOCTYPE html>
<html>
<head>
    <style>
        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {background-color: #4CAF50;} /* Green */
        .button2 {background-color: #008CBA;} /* Blue */
    </style>
</head>
<body>
<form method="post" action="{{url('ss/'.$post->id)}}">
    {{ method_field('DELETE') }}
@csrf
<button type="submit" value="{{$post->id}}">delete</button>
    </form>


</body>
</html>