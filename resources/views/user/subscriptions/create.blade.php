<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden rounded shadow">
                <div class="px-6 py-4">
                    <h3 class="font-semibold text-center">
                        New Subscription
                    </h3>
                </div>

                <form action="">
                    <div class="lg:px-10 lg:py-8 border-y border-neutral-200">
                        <div>
                            <x-input-label value="{{ __('Category') }}" />
                        </div>

                        <div class="mt-4">
                            <x-input-label value="{{ __('Subscription Plan') }}" />
                        </div>

                        <div class="mt-4">
                            <x-input-label value="{{ __('Link') }}" />
                            <x-text-input type="url" name="link" class="block w-full mt-1" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                            <div>
                                <x-input-label value="{{ __('Quantity') }}" />
                                <x-text-input type="text" name="quantity" class="block w-full mt-1"
                                    inputmode="numeric" />
                            </div>
                            <div>
                                <x-input-label value="{{ __('Price') }}" />
                                <x-text-input type="text" name="price" class="block w-full mt-1" disabled />
                            </div>
                        </div>

                        <div class="flex text-sm mt-5">
                            <x-input-label for="affirm">
                                <div class="flex items-center space-x-2">
                                    <x-checkbox name="affirm" id="affirm" />
                                    <p class="text-gray-500 font-semibold">I affirm that i do not have an active
                                        subscription with the link provided</p>
                                </div>
                            </x-input-label>
                        </div>
                    </div>
                    <div class="flex justify-end px-6 py-4 bg-neutral-100">
                        <x-primary-button>
                            {{ __('Subscribe') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
