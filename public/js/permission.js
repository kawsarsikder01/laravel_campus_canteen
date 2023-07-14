// $(document).ready(function(){
                
//     var permissions_box = $('#permissions_box');
//     var permissions_ckeckbox_list = $('#permissions_ckeckbox_list');

//     permissions_box.hide(); // hide all boxes


//     $('#role').on('change', function() {
//         var role = $(this).find(':selected');    
//         var role_id = role.data('role-id');
//         var role_slug = role.data('role-slug');

//         permissions_ckeckbox_list.empty();

//         $.ajax({
//             url: "/add_user",
//             method: 'get',
//             dataType: 'json',
//             data: {
//                 role_id: role_id,
//                 role_slug: role_slug,
//             }
//         }).done(function(data) {
            
//             console.log(data);
            
//             permissions_box.show();                        
//             // permissions_ckeckbox_list.empty();

//             $.each(data, function(index, element){
//                 $(permissions_ckeckbox_list).append(       
//                     '<div class="custom-control custom-checkbox">'+                         
//                         '<input class="custom-control-input" type="checkbox" name="permissions[]" id="'+ element.slug +'" value="'+ element.id +'">' +
//                         '<label class="custom-control-label" for="'+ element.slug +'">'+ element.name +'</label>'+
//                     '</div>'
//                 );

//             });
//         });
//     });
// });
function myFunction(e) {
    let id =  document.getElementById("role").value = e.options[e.selectedIndex].getAttribute("data-adr");
      fetch('/get_permission='+id)
      .then(response => response.json())
      .then(result => {
             document.getElementById('permissions_ckeckbox_list').innerHTML =result.map((data)=>{
              var {name,id} = data;
              return ( `<div class="custom-control custom-checkbox">                        
              <input class="" type="checkbox" name="permissions[]" id="${id}" value="${id}"> 
             <label class="" for="">${name}</label>
              </div>`)
             }).join('')
                         
         });
    }

