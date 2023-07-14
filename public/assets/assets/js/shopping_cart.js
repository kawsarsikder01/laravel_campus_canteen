let cart = document.querySelector('.shopping-cart');
let cartItems = document.querySelector('.cart-items');
cart.addEventListener("click",()=>{
    cartItems.classList.toggle('active');
    userItem.classList.remove('active');
});
let user = document.querySelector('.users');
let userItem = document.querySelector('.user');
user.addEventListener('click',()=>{
    userItem.classList.toggle('active');
    cartItems.classList.remove('active');
});
// const product = [
//     {
//         id:0,
//         image:'images/chicken_sand.jpg',
//         title:'Chicken Sandwich',
//         price:150,
//     },
//     {
//         id:1,
//         image:'images/pizz_bbq.jpg',
//         title:'BBQ Pizza',
//         price:150,
//     },
//     {
//         id:2,
//         image:'images/cheerwine-drink.jpg',
//         title:'Cheerwine Drink',
//         price:150,
//     },
//     {
//         id:3,
//         image:'images/orange.jpg',
//         title:'Chicken Sandwich',
//         price:150,
//     },
//     {
//         id:4,
//         image:'images/plain-bread.png',
//         title:'Plain Bread',
//         price:150,
//     },
//     {
//         id:5,
//         image:'images/pound-cake.jpg',
//         title:'Pound Cake',
//         price:150,
//     },
//     {
//         id:6,
//         image:'images/fried_chicken.jpg',
//         title:'Fried Chicken',
//         price:150,
//     },
//     {
//         id:7,
//         image:'images/mango.jpg',
//         title:'Mango Juice',
//         price:150,
//     },
// ];
// const categores = product.map((item)=>{
//     return item;
// });
// let i = 0;
// document.getElementById('products').innerHTML =categores.map((item)=>{
//     var {image,title,price} = item;
//     return (
//         `<div class="card"style="width:18rem;">
//             <img src="${image}"height="300" class="card-img-top" alt="...">
//             <div class="card-body">
//                 <h5 class="card-title">${title}</h5>`+
//                 "<a href='#' class='btn btn-primary d-inline-block' onclick='addToCard("+(i++)+")'>Add to Cart</a>"+
//                ` <p>tk ${price}</p>
//             </div>
//         </div>
//             `
//     );
// }).join('');
// function addToCard(a){
//     shoppingCart.push(categores[a]);
//     displayCart();
// }
// function deleteElement(a){
//     shoppingCart.splice(a,1);
//     displayCart();
// }
// var shoppingCart = [];
// function displayCart(a){
//     let j = 0;
//     if(shoppingCart.length == 0 ){
//         document.getElementById('cart-items').innerHTML = "<h2>Your Card Is Empty</h2>";
//     }else{
//         document.getElementById('cart-items').innerHTML = shoppingCart.map((item)=>{
//             var {image,title,price} = item;
//             return (
//                 `<div class="cart-item">`+
//                     "<span class='fas fa-times' onclick='deleteElement("+(j++)+")'></span>"
//                    + `<img src="${image}"height="50px"width="50px" alt="">
//                     <div class="content">
//                         <h3>${title}</h3>
//                         <div class="price" id="price">tk ${price}</div>
//                     </div>
//                 </div>
//                 `
//             );
//         }).join('');
//     }
// }

