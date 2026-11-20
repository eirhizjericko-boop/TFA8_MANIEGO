@extends('layouts.app', ['title' => 'Counterboard POS | Edit Customer'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">CUSTOMER ACCOUNTS / EDIT</p>
    <h1>Edit customer</h1>
    <p>Update the existing customer information.</p>
</section>
<form class="account-form" method="POST" action="{{ route('customers.update', $customer) }}">
    @csrf
    @method('PUT')
    @include('customers._form')
    <button class="button" type="submit">Update customer</button>
</form>
@endsection
