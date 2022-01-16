<section class="get-in-touch">
    <h1 class="title">Get in touch</h1>
    <form class="contact-form row" action="/index" method="POST" enctype="multipart/form-data">
      @csrf
       <div class="form-field col x-50">
          <input id="name" name="name" class="input-text js-input" type="text" required>
          <label class="label" for="name">Name</label>
       </div>
       <div class="form-field col x-50">
          <input id="email" name="email" class="input-text js-input" type="email" required>
          <label class="label" for="email">E-mail</label>
       </div>
       <div class="form-field col x-100">
          <input id="message" name="message" class="input-text js-input" type="text" required>
          <label class="label" for="message">Message</label>
       </div>
       <div class="form-field col x-100 align-center">
          <input class="submit-btn" type="submit" value="Submit">
       </div>
    </form>
 </section>
