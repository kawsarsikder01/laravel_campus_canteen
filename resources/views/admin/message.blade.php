<x-sg-master>
 
    <div class="content">
         <h3 class="text-center">Messages</h3>
         <!-- Table-->
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Message</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody id="tbody">
              
            </tbody>
          </table>
            
    </div>
   
    <script>
     const getData = ()=>{
  fetch('/get_messages')
  .then(response => response.json())
  .then(result => {
    let sl = 0;
    document.getElementById('tbody').innerHTML = result.map((data)=>{
      var {id,name,email,phone,message} = data;
      sl +=1
     return  (`
      <tr>
      <td>${sl}</td>
      <td>${name}</td>
      <td>${email}</td>
      <td>${phone}</td>
      <td>${message}</td>
      <td><a onclick="dataDelete(${id})" style="cursor: pointer;" class="btn btn-danger">Delete</a></td>
      </tr>
  `);
    }).join('');
  });
}
window.onload= getData();

// Delete Message

const dataDelete = (id)=>{
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  fetch(`/delete_message=${id}`, {
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
    var {name,email,phone,message,id} = datas;
    sl += 1;
    return (`
        <tr>
        <td>${sl}</td>
        <td>${name}</td>
        <td>${email}</td>
        <td>${phone}</td>
        <td>${message}</td>
        <td><a onclick="dataDelete(${id})" style="cursor: pointer;" class="btn btn-danger"  >Delete</a></td>
        </tr>
    `);
  }).join('');// Output the response message
})
.catch(error => {
    console.error('Error:', error);
});
}

    </script>
</x-sg-master>