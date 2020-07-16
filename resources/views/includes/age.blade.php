@if(Auth::user()->age)
    <p class="profile-age">{{ Auth::user()->age.' años' }}</p>
@else
    <p>{{ 'Edad: -' }}</p>
@endif
