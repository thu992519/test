我是flighte

@foreach($flights as $key => $flight)
  <li>{{$flight->name}}</li>
  <li>{{$flight->code}}</li>
@endforeach