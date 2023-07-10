
const submit = document.getElementById('submit');

const saveData = (e)=>{
    e.preventDefault(e);
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;
    const token = document.getElementById('token').value;
    const form = document.getElementById('form_data');
    // console.log(token)
    let csrfToken = '{{ csrf_token() }}';
    const data = {
        token: token,
        name:name,
        email:email,
        phone:phone,
        message:message
    }
    
    fetch('/send_message', {
        method: 'POST', // Adjust the HTTP method as needed (e.g., GET, POST, PUT, DELETE)
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN':token // Include the CSRF token if necessary
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
    form.reset();
}
submit.addEventListener('click',saveData);