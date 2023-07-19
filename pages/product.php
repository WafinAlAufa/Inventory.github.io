<div class="container-main">
    <div class="main_content_box">
        <div class="header_p">
            <div class="product_header_text">
                <div class="product_text_box">
                    <h1 class="product_header_t">
                        Product List
                    </h1>
                </div>
                <div class="product_text_box-2">
                    <h1 class="product_header_t-2">
                        (4)
                    </h1>
                </div>
            </div>
            <div class="header_fd">
                <div class="batch_h">
                    <div class="batch_h_b">
                        <select name="batch" id="batch_s" class="batch_s">
                            <option value="batch" disabled selected>Select Vendor</option>
                        </select>
                    </div>
                </div>
                <div class="product_h">
                    <div class="product_h_b">
                        <select name="product" id="product_s" class="product_s">
                            <option value="product" disabled selected>Select Size</option>
                        </select>
                    </div>
                </div>
                <div class="type_h">
                    <div class="type_h_b">
                        <select name="type" id="type_s" class="type_s">
                            <option value="type" disabled selected>Select Category</option>
                        </select>
                    </div>
                </div>
                <div class="box_export_add-h">

                    <div class="add_menu">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa-regular fa-square-plus"></i> Add</button>
                    </div>
                    <div class="export_menu">
                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-file-export"></i> Export</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttom_box_content">
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col"><input type="checkbox" name="sample" id="check_all" class="check_all" onchange="checkAll(this)"></th>
                        <th scope="col">NAME</th>
                        <th scope="col">VENDOR</th>
                        <th scope="col">ITEM SIZE</th>
                        <th scope="col">CATEGORY</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">STOCK</th>
                        <th scope="col">EDIT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><input type="checkbox" name="sample[]" id="check_1" class="check_1"></th>
                        <td>
                            <h6>Backpack JOJO</h6>
                        </td>
                        <td>
                            <h6>PT.Buka Lapak</h6>
                        </td>
                        <td>
                            <h6>Small</h6>
                        </td>
                        <td>
                            <h6>Backpack</h6>
                        </td>
                        <td>
                            <div class="box_img_i">
                                <img src="assets/img/backpack.png" alt="..." class="img-thumbnail">
                            </div>
                        </td>
                        <td>
                            <h6>Rp.100.000</h6>
                        </td>
                        <td>
                            <h6>100</h6>
                        </td>
                        <td>
                            <div class="box_all_crud">
                                <div class="edit_menu">
                                    <button type="button" class="btn btn-success">EDIT</button>
                                </div>
                                <div class="delete_menu">
                                    <button type="button" class="btn btn-danger">DELETE</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><input type="checkbox" name="sample[]" id="check_1" class="check_1"></th>
                        <td>
                            <h6>Backpack JOJO</h6>
                        </td>
                        <td>
                            <h6>PT.Buka Lapak</h6>
                        </td>
                        <td>
                            <h6>Small</h6>
                        </td>
                        <td>
                            <h6>Backpack</h6>
                        </td>
                        <td>
                            <div class="box_img_i">
                                <img src="assets/img/clothe.png" alt="..." class="img-thumbnail">
                            </div>
                        </td>
                        <td>
                            <h6>Rp.100.000</h6>
                        </td>
                        <td>
                            <h6>100</h6>
                        </td>
                        <td>
                            <div class="box_all_crud">
                                <div class="edit_menu">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop_edit">EDIT</button>
                                </div>
                                <div class="delete_menu">
                                    <button type="button" class="btn btn-danger" onclick="hapus()">DELETE</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- add menu pop up -->
<!-- add product -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add New Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="boxAllAdd">
                    <div class="boxAdd_all">
                        <label for="nameAdd">Name</label>
                        <input type="text" name="nameAdd" id="nameAdd">
                    </div>
                    <div class="boxAdd_all">
                        <label for="vendorAdd">Vendor</label>
                        <select name="vendorAdd" id="vendorAdd">
                            <option value="" disabled selected>Selection Vendor</option>
                            <option value="vendorAdd">PT.jojo</option>
                            <option value="vendorAdd">PT.Bizzard</option>
                            <option value="vendorAdd">PT.Adventure</option>
                        </select>
                    </div>
                    <div class="boxAdd_all">
                        <label for="sizeAdd">Select Size</label>
                        <select name="sizeAdd" id="sizeAdd">
                            <option value="" disabled selected>Selection Size Item</option>
                            <option value="sizeAdd">Small</option>
                            <option value="sizeAdd">Medium</option>
                            <option value="sizeAdd">Large</option>
                        </select>
                    </div>
                    <div class="boxAdd_all">
                        <label for="categoryAdd">Select Category</label>
                        <select name="categoryAdd" id="categoryAdd">
                            <option value="" disabled selected>Selection Category</option>
                            <option value="categoryAdd">Backpack</option>
                            <option value="categoryAdd">Shoes</option>
                        </select>
                    </div>
                    <div class="boxAdd_all">
                        <label for="imageAdd">Upload Image</label>
                        <input type="file" name="imageAdd" id="imageAdd">
                    </div>
                    <div class="boxAdd_all">
                        <label for="Price">Price</label>
                        <input type="number" name="Price" id="Price" maxlength="10" minlength="4">
                    </div>
                    <div class="boxAdd_all">
                        <label for="stockAdd">Stock</label>
                        <input type="number" name="stockAdd" maxlength="3" minlength="1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Change</button>
            </div>
        </div>
    </div>
</div>
<!-- edit -->
<div class="modal fade" id="staticBackdrop_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="boxAllAdd">
                    <div class="boxAdd_all">
                        <label for="nameAdd">Name</label>
                        <input type="text" name="nameAdd" id="nameAdd" value="test" readonly>
                    </div>
                    <div class="boxAdd_all">
                        <label for="vendorAdd">Vendor</label>
                        <input type="text" name="vendorAdd" id="vendorAdd" readonly>
                    </div>
                    <div class="boxAdd_all">
                        <label for="sizeAdd">Select Size</label>
                        <input type="text" name="sizeAdd" id="sizeAdd" readonly>
                    </div>
                    <div class="boxAdd_all">
                        <label for="categoryAdd">Select Category</label>
                        <input type="text" name="categoryAdd" id="categoryAdd">
                    </div>
                    <div class="boxAdd_all">
                        <label for="imageAdd">Upload Image</label>
                        <input type="file" name="imageAdd" id="imageAdd">
                    </div>
                    <div class="boxAdd_all">
                        <label for="Price">Price</label>
                        <input type="number" name="Price" id="Price" maxlength="10" minlength="4">
                    </div>
                    <div class="boxAdd_all">
                        <label for="stockAdd">Stock</label>
                        <input type="number" name="stockAdd" maxlength="3" minlength="1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Save Change</button>
            </div>
        </div>
    </div>
</div>
<script>
    var checkboxes = document.querySelectorAll("input[type = 'checkbox']");

    function checkAll(myCheckbox) {
        if (myCheckbox.checked == true) {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        } else {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
    }
    // input number 
</script>