@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>

    <h2>Hello World</h2>

@endsection

@section('scripts')
    @parent
    <Script>

    </Script>
@endsection
