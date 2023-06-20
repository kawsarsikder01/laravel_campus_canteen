<x-master>
<section class=" mx-5 my-4 pt-5 ">
    <div class="container-fluid ">
        <div class="card mx-auto mt-5 shadow-lg rounded-0" style="width: 40rem;">
            <div class="card-header">
                Cart
            </div>
            <div class="card-body">
                <table class="table table-primary">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th class="text-center">Quantity</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody class="table-light">
                        <tr>
                            <td>1</td>
                            <td><img src="../global_assets/img/corn.jpg" class="" style="width: 30px;"></td>
                            <td>Corn Shup</td>
                            <td>
                                ৳<span class="price">10</span>
                                <input type="hidden" name="txtPrice" value=10>
                                <input type="hidden" name="totalTxtPrice" value=0>
                            </td>
                            <td class="text-center">
                                <i class="bi bi-cart-dash"></i>&nbsp;<input name="item" value=0 size="2">&nbsp<i class="bi bi-cart-plus-fill text-primary"></i>
                                <input type="hidden" name="txtItem" class="text-center" value=0>
                            </td>
                            <td><i class="fa-solid fa-trash-can ps-lg-3 " style="color: red;"></i></td>

                        </tr>

                        <tr>
                            <td>2</td>
                            <td><img src="../global_assets/img/rice.jpg" style="width: 30px;"></td>
                            <td>Rice</td>
                            <td>
                                ৳<span class="price">15</span>
                                <input type="hidden" name="txtPrice" value=15>
                                <input type="hidden" name="totalTxtPrice" value=0>
                            </td>
                            <td class="text-center">
                                <i class="bi bi-cart-dash"></i>&nbsp;<input name="item" value=0 size="2">&nbsp;<i class="bi bi-cart-plus-fill text-primary"></i>
                                <input type="hidden" name="txtItem" class="text-center" value=0>
                            </td>
                            <td><i class="fa-solid fa-trash-can ps-lg-3 " style="color: red;"></i></td>
                        </tr>
                        <tr >
                            <td colspan="3" class="text-end">Total Amount : </td>
                            <td>৳<span class="totalAmount">0</span></td>
                            <td colspan="3" class="text-center">Total quantity :  <span class="totalQuantity">0</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>

</x-master>