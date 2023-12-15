<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    <x-nav-link :href="route('dashboard')":active="request()->routeIs('dashboard')">{{ __('dashboard') }}</x-nav-link>
</div>
@hasrole('pustakawan')
<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"><x-nav-link :href="route('role')" :active="request()->routeIs('role')">{{ __('Role') }}</x-nav-link>
</div>
@endhasrole