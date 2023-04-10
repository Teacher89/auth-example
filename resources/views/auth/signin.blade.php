<h1>Sign In</h1>

<form method="POST">
  @csrf

  <input type="text" name="email" placeholder="Email"/>
  <input type="password" name="password" placeholder="Password"/>

  <input type="submit" value="Submit"/>
</form>

<a href="{{ route('signup') }}">Sign Up</a>
<a href="#">Forgot Password</a>