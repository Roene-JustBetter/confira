
@props(['label' => false])
<label {{ $attributes->only(['v-if', 'v-else', 'v-else-if', 'class'])->merge(['class' => 'relative flex flex-col gap-y-1.5 sm:gap-y-2 text-sm']) }}>
    <input {{ $attributes->merge([
        'id' => $attributes->get('name'),
        'placeholder' => $attributes->get('name'),
        'type' => 'text',
        'dusk' => $attributes->get('v-bind:dusk') ? null : $attributes->get('name'),
        'class' => 'rounded-md shadow-sm peer border border-ct-border !bg-white pt-7 pb-2.5 px-5 text-sm outline-none transition-all !ring-0 placeholder-transparent focus:border-ct-border disabled:bg-ct-disabled disabled:text-ct-inactive [&:input:-internal-autofill-selected]:bg-white font-medium disabled:pr-12 [&:not(:focus):not(:placeholder-shown):invalid]:bg-ct-error-100 [&:not(:focus):not(:placeholder-shown):invalid]:border-ct-error-110',
    ]) }}>
    @if ($label)
        <x-rapidez-ct::input.label :required="$attributes->get('required')" class="pointer-events-none transition-all absolute left-5 top-1/2 text-xs -translate-y-5 peer-focus:text-xs peer-focus:-translate-y-5 peer-placeholder-shown:text-sm peer-placeholder-shown:-translate-y-1/2 peer-[&:not(:focus):not(:placeholder-shown):invalid]:text-ct-error">
            @lang($label)
        </x-rapidez-ct::input.label>
    @endif
    {{ $slot }}
    <x-heroicon-o-lock-closed class="absolute text-ct-inactive right-5 top-1/2 -translate-y-1/2 hidden h-4 peer-disabled:block" />
</label>
