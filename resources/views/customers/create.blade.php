@extends('layouts.app', ['title' => 'Counterboard POS | Create Customer'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">CUSTOMER ACCOUNTS / NEW</p>
    <h1>Create a customer</h1>
    <p>Complete the required fields, then save the account.</p>
</section>
<form class="account-form" method="POST" action="{{ route('customers.store') }}">
    @csrf
    @include('customers._form')
    <button class="button" type="submit">Save customer</button>
</form>
@endsection
