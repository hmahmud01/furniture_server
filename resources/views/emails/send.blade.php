<h3>Hello {{$user}}</h3>

Your review has been taken. There will be an email sending to you requested email address that you have given to us. Please follow your email.
<br>
Thanks for your support!
<br>
<a href="furniturefm.com">FurnitureFM</a>

@foreach($files as $image)
<p>{{$image}}</p>
@endforeach   

<p>Sent via {{$help}}</p>