<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test Sayfası</title>
</head>
<body>

<h1>Laravel Test </h1>
Id No: {{$id}} <br>
Name : {{$name}}
<br>
<?php
echo "Id Number :", $id;
echo "<br> Name :", $name;
for($i=1;$i<=$id;$i++)
{
    echo "<br> $i - $name";
}
?>
<br>
<a href="{{route('home')}}">Ana Sayfa </a>


</body>
</html>
