<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <table>
    <tr>
      <td>Images</td>
      <td>
        <input type="file" multiple>
      </td>
    </tr>
    <tr>
      <td>Product Name</td>
      <td>
        <input type="text" name="name" >
        <p class="input-error"><?php echo $validationErrors['name'] ?? '' ?></p>
      </td>
    </tr>
    <tr>
      <td>Product Description</td>
      <td>
        <textarea name="description" rows="10" ></textarea>
        <p class="input-error"><?php echo $validationErrors['description'] ?? '' ?></p>
      </td>
    </tr>
    <tr>
      <td>Product Price in USD</td>
      <td>
        <input type="number" name="price" />
        <p class="input-error"><?php echo $validationErrors['price'] ?? '' ?></p>
      </td>
    </tr>
    <tr>
      <td>Shipping Included</td>
      <td>
        <label>
          Yes
          <input name="shipping" type="radio" value="yes">
        </label>
        <label>
          no
          <input name="shipping" type="radio" value="no">
        </label>
        <p class="input-error"><?php echo $validationErrors['shipping'] ?? '' ?></p>
      </td>
    </tr>
    <tr>
      <td>Category</td>
      <td>
        <select name="category[]" multiple>
          <option value="Laptops">Laptops</option>
          <option value="Apple Laptops">Apple Laptops</option>
          <option value="Motors">Motors</option>
          <option value="Fashion">Fashion</option>
          <option value="Art">Art</option>
          <option value="Music">Music</option>
        </select>
        <p class="input-error"><?php echo $validationErrors['category'] ?? '' ?></p>
      </td>
    </tr>
    <tr>
      <td>Condition</td>
      <td>
        <select name="condition">
          <option value="New">New</option>
          <option value="Used">Used</option>
          <option value="Refurbished">Refurbished</option>
        </select>
        <p class="input-error"><?php echo $validationErrors['condition'] ?? '' ?></p>
      </td>
    </tr>
    <tr>
      <td>Payment methods</td>
      <td>
        <label>
          Cash
          <input name="payment[]" type="checkbox" value="cash">
        </label>
        <label>
          Card
          <input name="payment[]" type="checkbox" value="card">
        </label>
        <label>
          Paypal
          <input name="payment[]" type="checkbox" value="paypal">
        </label>
        <p class="input-error"><?php echo $validationErrors['payment'] ?? '' ?></p>
      </td>
    </tr>
    <tr>
      <td>Selling start date</td>
      <td>
        <input type="date" name="selling_date">
        <p class="input-error"><?php echo $validationErrors['selling_date'] ?? '' ?></p>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <button>Submit</button>
      </td>
    </tr>
  </table>

</form>
