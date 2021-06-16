@component('mail::message')
    <p> I am {{ Auth::user()->name }} (Admin) </p>
    Your problem was: {{$data['problem']}}
    Your Solution is: {{$data['msg']}}
@endcomponent
