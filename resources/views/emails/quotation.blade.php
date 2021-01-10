<h3>Qotation Request</h3>

<h2>A client has requested quotation for following products</h2>
@foreach($images as $image)
<p>{{$image}}</p>
@endforeach 
<br>

<h3>Following is the clients informaiton</h3>
<p>Name: {{$name}}</p>
<p>Email: {{$email}}</p>
<p>Phone: {{$phone}}</p>
<p>Notes: {{$notes}}</p>
<br>
Request ASAP!
<br>
<a href="furniturefm.com">FurnitureFM</a>

<p>Sent via helpfurniturefm@gmail.com</p>