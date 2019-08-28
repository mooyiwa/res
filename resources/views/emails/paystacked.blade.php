@component('mail::message')

<h2>Hello {{$details->username}}. Congratulations on your Peinmoney investment of {{$details->credit}} at {{$details->rate}}.</h2>
<p><b>Your Investment Details:</b></p>
<p>Investment Period: <b>{{$details->period}}</b></p>
<p>Start Date: <b>{{$details->start}}</b></p>
<p>Maturity Date: <b>{{$details->finish}}</b></p>

<p>Payout on Maturity: <b>{{$details->credit_out}}</b></p>

<p>Thank you for investing with Peinmoney. Your investment is safe with us.</p>



@component('mail::panel', ['url' => 'https://peinmoney.com'])
PEIN. Together We're Better.
@endcomponent


Enjoy,<br>
{{ config('app.name') }}
@endcomponent
