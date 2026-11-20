@extends('layouts.app', ['title' => 'Counterboard POS | About'])

@section('content')
<section class="page-heading">
    <p class="eyebrow">ABOUT THIS EXERCISE</p>
    <h1>Four pages, one clear<br><span>Laravel flow.</span></h1>
    <p>This project rebuilds a simple POS foundation using Laravel's MVC responsibilities. Each page begins with a route, passes work to a controller, and finishes in a Blade view.</p>
</section>

<section class="flow-list">
    <div><b>ROUTE</b><span>Chooses the URL and controller method.</span></div>
    <div><b>CONTROLLER</b><span>Prepares the page response and sample records.</span></div>
    <div><b>BLADE VIEW</b><span>Displays the content and loops through Eloquent records.</span></div>
</section>
@endsection
