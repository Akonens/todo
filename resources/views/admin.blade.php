<ul>
  @foreach ($users as $user)
    @if ($user ->name=="janis")
      <li>{{ $user->name }} <a href="mailto:{{$user->email}}">({{ $user->email }})</a> </li>
    @endif
  @endforeach
</ul>
