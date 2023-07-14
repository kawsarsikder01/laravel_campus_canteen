const deleteProduct = (id)=>{
    const xhr = new XMLHttpRequest;
    xhr.open('get',`/delete_product=${id}`,true);
    xhr.setRequestHeader('Accept', 'application/json');
    xhr.onload = ()=>{
        if(xhr.status == 200){
           
           
            console.log('hello')
          
        }
       
    }
    xhr.send();
}





