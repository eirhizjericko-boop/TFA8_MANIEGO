@extends('layouts.app', ['title' => 'Counterboard POS | Customers'])

@section('content')
<section class="page-heading compact-heading">
    <p class="eyebrow">ACCOUNT DIRECTORY / CUSTOMERS</p>
    <h1>Customer accounts</h1>
    <p>Customer records are retrieved through the <code>Customer</code> Eloquent model. Create a new account or edit an existing one.</p>
</section>

<div class="page-actions"><a class="button" href="{{ route('customers.create') }}">Create customer</a></div>
<div class="account-table">
    <div class="table-row table-head"><span>Full name</span><span>Email</span><span>Phone</span><span>Action</span></div>
    @foreach ($customerAccounts as $account)
        <div class="table-row">
            <span class="person-name">{{ $account->full_name }}</span>
            <span>{{ $account->email }}</span>
            <span><em class="phone">{{ $account->phone ?: 'Not provided' }}</em></span>
            <a class="edit-link" href="{{ route('customers.edit', $account) }}">Edit</a>
        </div>
    @endforeach
</div>
@endsection
