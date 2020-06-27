@if(Auth::user()->image_path)
<div class="container-avatar">
    <img src="{{ route('user.avatar', ['filename' => Auth::user()->image_path]) }}" class="avatar" alt="file-user">
</div>
@else
<div class="container-avatar">
    <img src="{{ url('/images/not-user.jpg') }}" alt="not-user">
</div>
@endif
