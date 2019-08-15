@component('mail::message')
# Password Recovery

A temporary password has been generated for you. Change the password to a desired one once you sign in.
<p>Your Username is : <b>{{$details->username}}</b></p>
<p>Your recovery password is: <b>{{$details->passcode}}</b></p>

@component('mail::button', ['url' => 'https://scribble57.com'])
Sign In
@endcomponent

@component('mail::panel', ['url' => 'https://scribble57.com'])
Scribble57. Growing a community of authors and readers.
@endcomponent

Enjoy,<br>
{{ config('app.name') }}
@endcomponent
