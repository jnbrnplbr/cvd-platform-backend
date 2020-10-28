@component('mail::message')

#Registration Successfully!



Please check your account credentials below.

Email: {{ $email }}

Password: {{ $password }}



@component('mail::button',['url' => 'localhost:8080'])
   Visit Ebora Hotel
@endcomponent


Note: Initial login will prompt you to change your current password to your desired password.


Thanks,<br>
Ebora Hotel Management

@endcomponent
