@if(Auth::user()->image_path)
<div class="container-avatar">
    <img src="{{ route('user.avatar', ['filename' => Auth::user()->image_path]) }}" class="avatar" alt="file-user">
</div>
@else
<div class="container-avatar">
    <h5>not image user</h5>
{{--    <img src="{{ url('') }}" alt="">--}}
</div>
@endif
