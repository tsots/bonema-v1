<div class="contact-page">
  <div class="inner">
    <h1>{{$title}}</h1>
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
        <div class="input-field">
          <input type="text" name="name" id="name"/>
          <label for="name">Name</label>
        </div>
        <div class="input-field">
          <input type="email" name="email" id="email" />
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <input type="tel" name="number" id="number" /><!--placeholder="Contact Number" -->
          <label for="number">Contact Number</label>
        </div>
        <div class="input-group select">
          <label for="query">Query</label>
          <select name="query" id="">
            <option value="">Choose</option>
            <option value="">Choose</option>
            <option value="">Choose</option>
            <option value="">Choose</option>
            <option value="">Choose</option>
          </select>
        </div>
        <div class="input-group message">
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
</div>