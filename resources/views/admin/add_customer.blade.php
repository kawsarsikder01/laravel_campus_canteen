<x-sg-master>
 
    <div class="content">
         <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="createForm()" data-bs-target="#exampleModal">Add Customer</button>
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog">
             <div class="modal-content" id="model_content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="save-data">
                   <div class="mb-3">
                       <label for="message-text" class="col-form-label">Name</label>
                       <input type="text" name="name" id="name" class="form-control">
                   </div>
                   <div class="mb-3">
                       <label for="message-text" class="col-form-label">Email</label>
                       <input type="email" name="email" id="email" class="form-control">
                   </div>
                   <div class="mb-3">
                       <label for="message-text" class="col-form-label">Phone</label>
                       <input type="number" name="phone" id="phone" class="form-control">
                   </div>
                   <div class="mb-3">
                       <label for="message-text" class="col-form-label">Address</label>
                       <input type="text" name="address" id="address" class="form-control">
                   </div>
                   <input type="hidden" name="token" id="token" value="{{csrf_token()}}">
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save">Save</button>
              </div>
             </div>
           </div>
         </div>
         <!-- Table-->
         <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th  scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody id="tbody">
             
              
            </tbody>
          </table>
            
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{asset('js/customer.js')}}"></script>
    <script>
        const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `Add Customer`
    modalBodyInput.value = recipient
  })
}
    </script>
</x-sg-master>