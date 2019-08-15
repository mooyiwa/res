@component('mail::message')


<h2>Hello Buddy. Your Scribble57 Reader account has been created.</h2>
<p>Your Username is : <b>{{$details->username}}</b></p>
<p>Your password is: <b>pass8008!</b></p>
<p>Your <b>secret password </b> for password recovery purposes is: {{$details->secret}}</p>
<p>*Please change your password to a more secure one once you sign in.</p>

@component('mail::button', ['url' => 'https://scribble57.com'])
Sign In
@endcomponent

@component('mail::panel', ['url' => 'https://scribble57.com'])
Scribble57. Growing a community of authors and readers.
@endcomponent


Enjoy,<br>
{{ config('app.name') }}
@endcomponent
