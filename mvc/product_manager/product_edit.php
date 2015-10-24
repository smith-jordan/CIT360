<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Product</h1>
    <form action="." method="post" id="add_product_form">
        <input type="hidden" name="action" value="update_product">

            <label>Category ID:</label>
            <select name="category_id">
        <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryID']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>

            <label>Code:</label>
            <input type="text" name="code" value="<?php echo $product_code; ?>" ><br>

            <label>Name:</label>
            <input type="text" name="productName" value="<?php echo $products['productName']; ?>" ><br>

            <label>List Price:</label>
            <input type="text" name="price" value="<?php echo $products['listPrice']; ?>" ><br>
            
            <label>&nbsp;</label>
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            
            <label>&nbsp;</label>
            <input type="submit" value="Update Product"><br>
        </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>