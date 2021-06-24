<h1>Hi, {{ $data['fname'] }}!</h1>
<p>Please find below your info:</p>
<ul>
    <li>Name: {{ $data['fname'] . ' ' . $data['lname'] }}</li>
    <li>Email: {{$data['email'] }}</li>
    <li>Phone Number: {{$data['phone'] }}</li>
    <li>City: {{$data['city']}}</li>
</ul>