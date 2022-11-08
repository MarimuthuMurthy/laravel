<h1>Users page {{$name}}</h1>

@if($name=='anil')
<h3>hi {{$name}}</h3>
@elseif($name=='sam')
<h3>hello {{$name}}</h3>
@else
<h3>hi unknown</h3>
@endif


@for($i =1 ; $i<=5 ;$i++)
@for($j=1 ; $j<=$i ; $j++)
<h2>*</h2>
@endfor
<br>
@endfor 

<?php $names = ['hello','my','name','is','murthy'];
foreach($names as $name):
    echo $name;
endforeach
?>


