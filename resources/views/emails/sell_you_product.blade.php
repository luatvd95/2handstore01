@component('mail::message')

<h1>{{ __(':greet', ['greet' => __('Hello')]) }}</h1>
<p>{{ __('Your purchase was successful: ') }} <b>{{ $product->name }}</b></p>
<p>{{ __('Deal: ') }} <b>{{ $product->money }}</b></p>

@component('mail::button', ['url' => route('client.myproduct.index')])
{{ __('Click here to view') }}
@endcomponent

<p>{{ __('Thank you for using our application!') }}</p>
{{ __('regards') }}<br>
{{ config('app.name') }}

@endcomponent
