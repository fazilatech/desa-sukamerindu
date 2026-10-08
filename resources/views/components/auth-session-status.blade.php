@if (session('status'))
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ session('status') }}
    </div>
@endif
