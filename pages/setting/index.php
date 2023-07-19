<div class="container-main">
    <div class="main_content_box vendorGap">
        <div class="header_p">
            <div class="product_header_text">
                <div class="product_text_box">
                    <h1 class="product_header_t">
                        Users List
                    </h1>
                </div>
                <div class="product_text_box-2">
                    <h1 class="product_header_t-2">
                        (<?php echo count($users) ?>)
                    </h1>
                </div>
            </div>
            <div class="box_export_add-h">
                <div class="add_menu">
                    <a href="index.php?nav=setting&setSub=add">
                        <button type="button" class="btn btn-primary">
                            <i class="fa-regular fa-square-plus"></i> Add</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="button_box_card_box">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <td>#</td>
                        <td>NAME</td>
                        <td>USERNAME</td>
                        <td>ROLES</td>
                        <td>EDIT</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $user["nama"]; ?></td>
                            <td><?php echo $user["username"]; ?></td>
                            <td><?php echo $user["role"]; ?></td>
                            <td>
                                <div class="box_all_crud">
                                    <div class="edit_menu">
                                        <!-- onclick=showEdit() -->
                                        <a href="index.php?nav=setting&setSub=update&id=<?php echo $user['id']; ?>">
                                            <button type="button" class="btn btn-success">EDIT</button>
                                        </a>
                                    </div>
                                    <div class="delete_menu">
                                        <a href="index.php?nav=setting&setSub=delete&id=<?php echo $user['id']; ?>">
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php $i++;
                        ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>