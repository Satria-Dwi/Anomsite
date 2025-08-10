@extends('layouts.mainmenu.main')

@section('container')
  <div class="form mt-10 mb-10">
    <form class="card">
      <h1>Sign up</h1>
      <p>Create Your Account</p>
  
      <label for="username">Username</label>
      <input type="username" id="username" placeholder="Anomsite" required>

      <label for="email">Email</label>
      <input type="email" id="email" placeholder="nama@contoh.com" required>
  
      <div class="flex gap-4">
        <div class="flex-1">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="••••••••" required>
        </div>
        <div class="flex-1">
          <label for="password">Confirm Your Password</label>
          <input type="password" id="password" placeholder="••••••••" required>
        </div>
      </div>
      <div class="actions">
        <a href="#">Forget Password?</a>
      </div>
  
      <button class="btn" type="submit">Create Acccount</button>
  
      <div class="alt">
        Already Registered ? <a href="/signin">Sign in</a>
      </div>
    </form>
  </div>
@endsection
