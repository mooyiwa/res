@component('mail::message')


<h2>Hello Buddy. Your peinmoney.com account has been created.</h2>
<p>Your Username is : <b>{{$details->username}}</b></p>
<p>Your password is: <b>{{$details->pass}}</b></p>
<p>Your <b>secret password </b> for password recovery purposes is: {{$details->secret}}</p>
<p>*Please change your password to a more secure one.</p>

@component('mail::button', ['url' => 'https://peinmoney.com/site/signin'])
Sign In
@endcomponent

@component('mail::panel', ['url' => 'https://peinmoney.com'])
PEIN. Together We're Better.
@endcomponent


Enjoy,<br>
{{ config('app.name') }}
@endcomponent
