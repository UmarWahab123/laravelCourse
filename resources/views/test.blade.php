@include('headers')  <!--use to include view inside other view-->

<h1>Test Blade</h1>

<!-- to create a varible inside blade template view-->
@php
$name = 'umar';
$country="pakistan";
$phone='03459161916';
$age = 15;


$colours = array('yellow','green','blue','purple','red','white','black');
@endphp

<h2>{{$name}}</h2>
<h2>{{$country}}</h2>
<h2>{{$phone}}</h2>
<!--to create an array variable-->
<h2>colours</h2>
@foreach($colours as $color)
<ul>
<li>{{$color}}</li>
</ul>
@endforeach

<!-- to print a number from 1 to 4 by using forloop -->
<br>
@for($i=1;$i<=4;$i++)
{{$i}} <br>
@endfor

<!-- if statement-->
<br>
@if(count($colours)==1)
  we have only single colours
  @elseif(count($colours)>1)
  we have multiple colours
  @else
  there are no color
  @endif
<br>

 <!--ternary statement-->
{{ $age >= 18 ? 'you are adault':'you are not adault'}}
