@extends('layouts.app')

@section('page-class', 'contact')
@section('page-name', 'contact')

@section('content')
<h1>{{$title}}</h1>
{{-- <h2 class="page__title">Contact Us</h2> --}}
          <div class="contact-page">
            <section class="contact">
              <div class="contact contact__address">
                <ul>
                  <li>Head Office Address</li>
                  <li>Growthpoint BusinessPark,</li>
                  <li>2 Tonetti Street</li>
                  <li>Halfway House</li>
                  <li>Midrand</li>
                  <li>1685</li>
                </ul>
              </div>
              <div class="contact contact__details">
                <ul>
                  <li>Contact Details</li>
                  <li>Tel: +27 11 655 4190</li>
                  <li>Accounts : 086 126 6362</li>
                  <li>Email: info@bonema.co.za</li>
                </ul>
              </div>
            </section>
            <section class="form">
              <form action="#">
                <div class="input-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" />
                </div>
                <div class="input-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" />
                </div>
                <div class="input-group">
                  <label for="number">Contact Number</label>
                  <input type="tel" name="number" id="number" /><!--placeholder="Contact Number" -->
                </div>
                <div class="input-group">
                  <label for="query">Query</label>
                  <select name="query" id="">
                    <option value="">Choose</option>
                    <option value="">Choose</option>
                    <option value="">Choose</option>
                    <option value="">Choose</option>
                    <option value="">Choose</option>
                  </select>
                </div>
                <div class="input-group">
                  <label for="message">Message</label>
                  <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
                <input type="submit" value="SUBMIT" />
              </form>
            </section>
          </div>
@endsection

@section('map')
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3586.116829101447!2d28.123723314708084!3d-25.996990061893985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956e1027197aa5%3A0x5f89b32a55d4b126!2s2%20Tonetti%20St%2C%20Halfway%20House%2C%20Midrand%2C%201685!5e0!3m2!1sen!2sza!4v1597112907275!5m2!1sen!2sza" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
@endsection