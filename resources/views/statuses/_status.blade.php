<li class="media mt-4 mb-4">
    <a href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="mr-3 gravatar">
    </a>
    <div class="media-body">
        //$status->created_at->diffForHumans() 该方法的作用是将日期进行友好化处理
        //"1998-12-06 03:15:31.000000"  $created_at->diffForHumans()  结果"21 years ago"
        <h5 class="mt-0 mb-1">{{ $user->name }}<small> / {{ $statuses->created_at->diffForHumans() }}</small></h5>
        {{ $status->content }}
    </div>
</li>