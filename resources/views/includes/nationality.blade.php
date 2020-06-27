@if(Auth::user()->city && Auth::user()->country)
    <p class="profile-city-country">{{ Auth::user()->city .' | '.Auth::user()->country  }}</p>
@else
    <p>{{ 'Ciudad: - | País: -' }}</p>
@endif
