@component('mail::message')
<p>Thank you for your message!</p>

<p><strong>Name</strong> {{ $data['name'] }}</p>
<p><strong>Email</strong> {{ $data['email'] }}</p>

<p><strong>Message</strong> {{ $data['message'] }}</p>
@endcomponent
