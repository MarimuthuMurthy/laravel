
@include('headers')
<h1>Test blade</h1>
@php
    $name = 'murthy';
    $fruits = array('Mango','Apple','Banana','pine apple');
    $age = 11
@endphp
<p>Name : {{$name}}</p>
<p>Fruits : </p>
@foreach ($fruits as $fruit)
<ul>
<li><p>{{$fruit}}</p></li>
</ul>
@endforeach
<br>
@for ($i = 0; $i < 5; $i++)
   {{$i}}<br>
@endfor

@if(count($fruits)==1)
    Single fruit
@elseif (count($fruits)>1)
    more than one fruit
@else
    no fruit
@endif

<br>

{{$age >=18 ? 'you are adult':'you are not adult'}}
<br>
