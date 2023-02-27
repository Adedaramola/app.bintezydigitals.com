<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded shadow">
                <div class="bg-white px-6 py-4">
                    <p class="font-semibold">Overview</p>
                </div>
                <div class="grid grid-cols-4 gap-8 p-8 bg-neutral-100 border-t border-neutral-200">
                    <div class="flex flex-col">
                        <div class="text-sm font-semibold">
                            <span class="text-gray-500">Remaining Balance</span>
                        </div>
                        <div class="text-3xl font-semibold">&#8358;245.00</div>
                    </div>
                    <div class="flex flex-col">
                        <div class="text-sm font-semibold">
                            <span class="text-gray-500">Total Orders</span>
                        </div>
                        <div class="text-3xl font-semibold">0</div>
                    </div>
                    <div class="flex flex-col">
                        <div class="text-sm font-semibold">
                            <span class="text-gray-500">Completed Orders</span>
                        </div>
                        <div class="text-3xl font-semibold">0</div>
                    </div>
                    <div class="flex flex-col">
                        <div class="text-sm font-semibold">
                            <span class="text-gray-500">Amount Spent</span>
                        </div>
                        <div class="text-3xl font-semibold">&#8358;6,000</div>
                    </div>
                </div>
            </div>

            <div class="mt-10 overflow-hidden rounded shadow">
                <div class="bg-white px-6 py-4">
                    <p class="font-semibold">Recent Transactions</p>
                </div>
                <div class="p-8 bg-neutral-100 border-t border-neutral-200"></div>
            </div>
        </div>
    </div>
</x-app-layout>
