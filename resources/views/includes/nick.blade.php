@if(Auth::user()->nick)
    <p class="profile-nick">{{ Auth::user()->nick }}</p>
@else
    <p>{{ 'Nick: -' }}</p>
@endif
