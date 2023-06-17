
<body>

    
<h2>HomePage</h2>

{{-- This is example of if else inside blade --}}

{{-- <h3>{{$result}}</h3> --}}
{{-- 
@if($result == 100)
    <p>This is Hundred</p>

@elseif ($result == 1000)
    <p>This is Thousand</p>

@elseif ($result == 100000)
    <p>This is Lac</p>

    @else
        <p>This is not in range</p>
@endif --}}


{{---------------------- Example of for loop ----------------------}}

@for ($i = 0; $i < 10; $i++)
    <button>{{$i}}</button>
@endfor

{{---------------------- Example of foreach loop ----------------------}}
<ul>
@foreach ($users as $eachuser)
    <li>User name is : {{$eachuser['name']}}<br>City : {{$eachuser['city']}}</li>
@endforeach
</ul>
</body>


