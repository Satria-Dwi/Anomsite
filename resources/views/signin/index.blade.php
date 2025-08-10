@extends('layouts.mainmenu.main')

@section('container')
  <div class="form mt-10 mb-10">
    <form class="card">
      <h1>Welcome</h1>
      <p>Please Sign in</p>
  
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="nama@contoh.com" required>
  
      <label for="password">Password</label>
      <input type="password" id="password" placeholder="••••••••" required>
  
      <div class="actions">
        <label><input type="checkbox"> Remember me</label>
        <a href="#">Forget Password?</a>
      </div>
  
      <button class="btn" type="submit">Sign in</button>
  
      <div class="alt">
        Not Registered yet ? <a href="/signup">sign up</a>
      </div>
    </form>
  </div>
@endsection
