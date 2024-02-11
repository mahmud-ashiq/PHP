<?php include '../controller/process.php'; ?>
<html>

<head>

</head>

<body>
  <form method="POST" action="">
    <fieldset>
      <legend>Order Information</legend>
      <table>
        <tr>
          <td>Product:<br></td>
          <td> <label for="product"></label>
            <select>
              <option value="p1">Product 1</option>
              <option value="p2">Product 2</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Quantity:<br></td>
          <td><input type="text" name="quantity">
            <?php echo $quantityError; ?>
            <?php echo $quantity; ?></td>
        </tr>

        <tr>
          <td>Full Name:</td>
          <td><input type="text" name="fname">
            <?php echo $nameError; ?>
            <?php echo $name; ?></td>
        </tr>

        <tr>
          <td>Email Address:</td>
          <td><input type="text" name="email">
            <?php echo $emailError; ?>
            <?php echo $email; ?></td>
        </tr>

        <tr>
          <td>Phone Number:</td>
          <td><input type="text" name="phone">
            <?php echo $phoneError; ?>
            <?php echo $phone; ?></td>
        </tr>

        <tr>
          <td>Address:</td>
          <td><textarea rows="4" cols="20"></textarea>
            <?php echo $addressError; ?>
            <?php echo $address; ?></td>
        </tr>

        <tr>
          <td>Billing Address:</td>
          <td><textarea rows="4" cols="20" name="text"></textarea>
            <?php echo $b_addressError; ?>
            <?php echo $b_address; ?></td>
        </tr>

        <tr>
          <td><label for="bill">Shipping Option:</label><br></td>
          <td><input type="radio" checked="checked" color="blue">Standard Shipping
            <input type="radio">Express Shipping (additional charges may apply)
          </td>
        </tr>

        <tr>
          <td><label for="time">Preffered Delivery Time:</label><br></td>
          <td> <label for="time"></label>
            <select>
              <option value="morning">Morning</option>
              <option value="day">Day</option>
            </select>
          </td>
        </tr>

        <tr>
          <td><label for="bill">Special Instructions:</label><br></td>
          <td><textarea rows="4" cols="20" name="text"></textarea></td>
        </tr>

        <tr>
          <td><input type="checkbox">
            <label>Request express shipping (additional charges may apply)</label><br>
          </td>
          <td><input type="checkbox">
            <label>Gift Wrapping (additional charges may apply)</label><br>
          </td>
        </tr>

        <tr>
          <td><label for="agreement">I agree to the terms and conditions</label><br></td>
          <td><input type="checkbox">
        </tr>

        <tr>
          <td></td>
          <td> <input type="submit" value="Submit" name="submit">
            <input type="submit" value="Reset" name="reset">
          </td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>

</html>