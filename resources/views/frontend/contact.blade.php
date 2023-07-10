<x-master>
    <section id="contact">
        <h3>Contact</h3>
        <div class="container contact">
            <form id="form_data">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text"name="name" class="form-control" id="name">
                      </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input type="email"name="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <input type="hidden" name="_token" id="token" value="{{csrf_token()}}" >
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mobile</label>
                  <input type="number" name="phone" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                
                <button type="submit" id="submit" class="button px-4">Submit</button>
              </form>
        </div>
        
      </section>
      <script src="js/message.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</x-master>