
const submit = document.getElementById('submit');

const saveData = (e)=>{
    e.preventDefault(e);
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const message = document.getElementById('message');
    const form = document.getElementById('form_data');
    const data = {
        name:name,
        email:email,
        phone:phone,
        message:message
    }
    let csrfToken = '{{ csrf_token() }}';
    fetch('/send_message',
    {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken // Include the CSRF token if necessary
          },
          body: JSON.stringify(data)
    }).then(response=>response.json())
    .then(data=>{
        console.log(data);
    })
    .catch(error=>{
        console.error(error)
    })
    form.reset();
}
submit.addEventListener('click',saveData);