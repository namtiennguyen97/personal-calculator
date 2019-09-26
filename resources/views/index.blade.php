<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form method="post">
    @csrf
    <h1>Simple calculator</h1>
    <table border="1">
        <tr>
            <th><input type="text" placeholder="First Number" name="firstNum"
                       onkeydown="this.style.backgroundColor='yellow'"
                       onkeyup="this.style.backgroundColor='white'"></th>
        </tr>
        <tr>
            <th><select name="type" style="width: 100%">
                    <option name="add">+</option>
                    <option name="sub">-</option>
                    <option name="div">/</option>
                    <option name="multi">x</option>
                </select></th>
        </tr>
        <tr>
            <th><input type="text" placeholder="Second Number" name="secNum"
                       onkeydown="this.style.backgroundColor='yellow'"
                       onkeyup="this.style.backgroundColor='white'"></th>
        </tr>
        <tr>
            <th><input type="submit" value="Check" style="width: 100%; border-radius: 9px;background-color: limegreen">
            </th>
        </tr>

    </table>
    <a>Ket qua la: {{$result}}</a>
</form>
</body>
</html>
