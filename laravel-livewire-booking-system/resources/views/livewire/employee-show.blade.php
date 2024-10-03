<div class="space-y-10">

    <div>
        <h2 class="text-xl font-medium">Or, choose a service from {{ $employee->name }}</h2>

        <div class="grid grid-col-2 md:grid-cols-5 gap-8 mt-6">

            @foreach ($employee->services as $service)
                <x-service :href="route('checkout', [$service, $employee])" :service="$service" />
            @endforeach
        </div>
    </div>
</div>
