<h1>Sign Up</h1>

<form method="POST">
  @csrf

  <input type="text" name="name" placeholder="Name"/>
  <input type="text" name="email" placeholder="Email"/>
  <input type="password" name="password" placeholder="Password"/>
  <input type="password" name="confirmation" placeholder="Confirm Password"/>

  <input type="submit" value="Submit"/>
</form>

<a href="{{ route('signin') }}">🔙 Back</a>