<div class="grid gap-5 sm:grid-cols-2">
    <template v-if="billingAndShippingAreTheSame">
        <x-rapidez-ct::card.address v-bind:address="checkout.shipping_address" shipping billing check>
            <x-rapidez-ct::button.link v-on:click.prevent="toggleEdit">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::card.address>
        <button v-on:click.prevent="toggleEdit" class="flex flex-col items-center justify-center gap-y-2 font-medium text-ct-inactive bg-ct-inactive-100 rounded-xl max-sm:hidden">
            <span>+</span>
            <span>@lang('Add new address')</span>
        </button>
    </template>
    <template v-else>
        <x-rapidez-ct::card.address v-bind:address="checkout.shipping_address" shipping check>
            <x-rapidez-ct::button.link v-on:click.prevent="toggleEdit">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::card.address>
        <x-rapidez-ct::card.address v-bind:address="checkout.billing_address" billing check>
            <x-rapidez-ct::button.link v-on:click.prevent="toggleEdit">
                @lang('Edit')
            </x-rapidez-ct::button.link>
        </x-rapidez-ct::card.address>
    </template>
</div>

@include('rapidez-ct::checkout.partials.address-cards-popup')
