<form action="/admin/">
  Meklēt:
  <input type="text" name="search">
  <br>

  <input type="submit" value="Submit">
</form>

  <ul>
    @foreach ($users as $user)
      <li>{{ $user->name }} <a href="mailto:{{$user->email}}">({{ $user->email }})</a> </li>
    @endforeach
  </ul>
