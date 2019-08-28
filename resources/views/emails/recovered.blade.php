@component('mail::message')
# Password Recovery

A temporary password has been generated for you. Change the password to a desired one once you sign in.
<p>Your Username is : <b>{{$details->username}}</b></p>
<p>Your recovery password is: <b>{{$details->passcode}}</b></p>

@component('mail::button', ['url' => 'http://peinmoney.com'])
Sign In
@endcomponent

@component('mail::panel', ['url' => 'http://peinmoney.com'])
PEIN. Together We're Better.
@endcomponent

Enjoy,<br>
{{ config('app.name') }}
@endcomponent
