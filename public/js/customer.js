

const save = document.getElementById('save');

const savedata = (e)=>{
    e.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const formdata = document.getElementById('save-data');

    let csrfToken = '{{ csrf_token() }}';
    // const xhr = new XMLHttpRequest;
    // xhr.open('POST','added_customer',true);
    // xhr.setRequestHeader('Content-Type', 'application/json');
    // xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
    // xhr.onload=()=>{
    //     if(xhr.response == 200){
    //         console.log(xhr.responseText);
    //     }else{
    //         console.log('some problem');
    //     }
    // }
    // console.log(name);
    const data = {
        name:name,
        email:email,
        phone:phone,
        address:address,
    }
    // const jsondata = JSON.stringify(data);
    // xhr.send(jsondata);
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
          // Handle the response data
          console.log(data);
        })
        .catch(error => {
          // Handle any errors
          console.error(error);
        });
    formdata.reset();
}
save.addEventListener('click',savedata);