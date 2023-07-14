
//show all data


const getData = ()=>{
  fetch('/customers')
  .then(response => response.json())
  .then(result => {
    let sl = 0;
    document.getElementById('tbody').innerHTML = result.map((data)=>{
      var {id,name,email,address,phone_no} = data;
      sl +=1
     return  (`
      <tr>
      <td>${sl}</td>
      <td>${name}</td>
      <td>${email}</td>
      <td>${address}</td>
      <td>${phone_no}</td>
      <td><a  onclick="dataEdit(${id})" style="cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="edit" class="btn btn-warning">Edit</a></td>
      <td><a onclick="dataDelete(${id})" style="cursor: pointer;" style="cursor: pointer;" class="btn btn-danger">Delete</a></td>
      </tr>
  `);
    }).join('');
  });
}
window.onload= getData();


// Create

const createForm = ()=>{
  return document.getElementById('model_content').innerHTML= (`<div class="modal-header">
  <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <form id="save-data">
     <div class="mb-3">
         <label for="message-text" class="col-form-label">Name</label>
         <input type="text" name="name" id="name"  class="form-control">
     </div>
     <div class="mb-3">
         <label for="message-text" class="col-form-label">Email</label>
         <input type="email" name="email" id="email"  class="form-control">
     </div>
     <div class="mb-3">
         <label for="message-text" class="col-form-label">Phone</label>
         <input type="number" name="phone" id="phone"  class="form-control">
     </div>
     <div class="mb-3">
         <label for="message-text" class="col-form-label">Address</label>
         <input type="text" name="address" id="address"  class="form-control">
     </div>
  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" onclick="savedata()"  id="save">Save</button>
</div>`)
}

//store Data


const savedata = (e)=>{
   
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const formdata = document.getElementById('save-data');
    var tr = '';

   
    const data = {
        name:name,
        email:email,
        phone_no:phone,
        address:address,
    }
    fetch('/added_customer', {
        method: 'POST', // Adjust the HTTP method as needed (e.g., GET, POST, PUT, DELETE)
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrfToken // Include the CSRF token if necessary
        },
        body: JSON.stringify(data) // Convert the data to JSON format
      })
        .then(response => response.json())
        .then(data => {
          let sl = 0;
         document.getElementById('tbody').innerHTML = data.map((datas)=>{
            var {name,email,phone_no,address,id} = datas;
            sl += 1;
            return (`
                <tr>
                <td>${sl}</td>
                <td>${name}</td>
                <td>${email}</td>
                <td>${address}</td>
                <td>${phone_no}</td>
                <td><a  onclick="dataEdit(${id})" style="cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="edit" class="btn btn-warning">Edit</a></td>
                <td><a onclick="dataDelete(${id})" style="cursor: pointer;" class="btn btn-danger">Delete</a></td>
                </tr>
            `);
          }).join('');
        })
        .catch(error => {
          // Handle any errors
          console.error(error);
        });
    formdata.reset();
    
    tbody.innerHTML =tr;
}



// Edit data 

const dataEdit = (id)=>{
  fetch('/customers_edit='+id)
  .then(response => response.json())
  .then(result => {
   return document.getElementById('model_content').innerHTML= (`<div class="modal-header">
   <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
   <form id="save-data">
      <div class="mb-3">
          <label for="message-text" class="col-form-label">Name</label>
          <input type="text" name="name" id="name" value="${result.name}" class="form-control">
      </div>
      <div class="mb-3">
          <label for="message-text" class="col-form-label">Email</label>
          <input type="email" name="email" id="email" value="${result.email}" class="form-control">
      </div>
      <div class="mb-3">
          <label for="message-text" class="col-form-label">Phone</label>
          <input type="number" name="phone" id="phone" value="${result.phone_no}" class="form-control">
      </div>
      <div class="mb-3">
          <label for="message-text" class="col-form-label">Address</label>
          <input type="text" name="address" id="address" value="${result.address}" class="form-control">
      </div>
   </form>
 </div>
 <div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
   <button type="button" class="btn btn-primary" onclick="updateData(${result.id})" id="update">Update</button>
 </div>`)
     });
}

//update data


const updateData = (id)=>{
  
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
console.log(name);
  var tr = '';
  const data = {
      name:name,
      email:email,
      phone_no:phone,
      address:address,
  }
  fetch('/customer_update='+id, {
    method: 'PUT', // Adjust the HTTP method as needed (e.g., GET, POST, PUT, DELETE)
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': csrfToken // Include the CSRF token if necessary
    },
    body: JSON.stringify(data) // Convert the data to JSON format
  })
    .then(response => response.json())
    .then(data => {
      let sl = 0
      document.getElementById('tbody').innerHTML = data.map((datas)=>{
        var {name,email,phone_no,address,id} = datas;
        sl +=1
        return (`
            <tr>
            <td>${sl}</td>
            <td>${name}</td>
            <td>${email}</td>
            <td>${address}</td>
            <td>${phone_no}</td>
            <td><a  onclick="dataEdit(${id})" style="cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="edit" class="btn btn-warning">Edit</a></td>
            <td><a onclick="dataDelete(${id})" style="cursor: pointer;" class="btn btn-danger">Delete</a></td>
            </tr>
        `);
      }).join('');
    })
    .catch(error => {
      // Handle any errors
      console.error(error);
    });
    const formdata = document.getElementById('exampleModal');
  formdata.innerHTML = ``;
  tbody.innerHTML =tr;
}

// Delete Data

const dataDelete = (id)=>{
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  fetch(`/delete_customer=${id}`, {
    method: 'DELETE',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrfToken
    },
})
.then(response => response.json())
.then(data => {
  let sl =0;
  document.getElementById('tbody').innerHTML = data.map((datas)=>{
    var {name,email,phone_no,address,id} = datas;
    sl += 1;
    return (`
        <tr>
        <td>${sl}</td>
        <td>${name}</td>
        <td>${email}</td>
        <td>${address}</td>
        <td>${phone_no}</td>
        <td><a  onclick="dataEdit(${id})" style="cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="edit" class="btn btn-warning">Edit</a></td>
        <td><a onclick="dataDelete(${id})" style="cursor: pointer;" class="btn btn-danger">Delete</a></td>
        </tr>
    `);
  }).join('');// Output the response message
})
.catch(error => {
    console.error('Error:', error);
});
}

