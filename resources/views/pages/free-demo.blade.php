@extends('layouts.app')

@section('page-class', 'demo-form')
@section('page-name', 'demo-form')

@section('content')

<form action="#" method="post">
  <p>Contact our experts for free consultation and demonstration</p>
  <div class="input-group">
    <input type="text" name="name" id="">
    <label for="name">Name</label>
  </div>
  <div class="input-group">
    <input type="email" name="email" id="">
    <label for="email">Email</label>
  </div>
  <div class="input-group">
    <input type="text" name="company" id="">
    <label for="company">Company</label>
  </div>
  <div class="input-group">
    <input type="text" name="country" id="">
    <label for="country">Country</label>
  </div>
  <div class="input-group">
    <input type="text" name="province" id="">
    <label for="province">Province</label>
  </div>
  <div class="input-group">
    <input type="tel" name="telephone" id="">
    <label for="telephone">Phone</label>
  </div>
  <div class="input-group">
    <input type="tel" name="assets" id="">
    <label for="assets">Number of Assets</label>
  </div>
  <button type="submit">GET A FREE DEMO</button>
</form>

@endsection