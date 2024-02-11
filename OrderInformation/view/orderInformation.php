
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<fieldset>
  <legend>Order Information</legend>
<table>
  <tr>
    <td>Product:<br></td>
    <td>  <label for="product"></label>
  <select>
    <option value="p1">Product 1</option>
    <option value="p2">Product 2</option>
  </select></td>
  </tr>
  
  <tr>
    <td><label for="quantity">Quantity:</label><br></td>
    <td><input type="text" id="quantity" ><br></td>
  </tr>
  
  <tr>
    <td><label for="fname">Full Name:</label><br></td>
    <td><input type="text" id="fname" ><br></td>
  </tr>
  
  <tr>
    <td><label for="email">Email Address:</label><br></td>
    <td><input type="text" id="email" ><br></td>
  </tr>
  
  <tr>
    <td><label for="phone">Phone Number:</label><br></td>
    <td><input type="text" id="phone" ><br></td>
  </tr>
  
  <tr>
    <td><label for="add">Address:</label><br></td>
    <td><textarea rows="4" cols="20"  ></textarea></td>
  </tr>
  
  <tr>
    <td><label for="bill">Billing Address:</label><br></td>
    <td><textarea rows="4" cols="20" name="text" ></textarea></td>
  </tr>
  
  <tr>
  <td><label for="bill">Shipping Option:</label><br></td>
  <td><input type="radio" checked="checked" color="blue">Standard Shipping
  	  <input type="radio">Express Shipping (additional charges may apply)</td>
  </tr>
  
    <tr>
    <td><label for="time">Preffered Delivery Time:</label><br></td>
    <td>  <label for="time"></label>
  <select >
    <option value="morning">Morning</option>
    <option value="day">Day</option>
  </select></td>
  </tr>
  
  <tr>
    <td><label for="bill">Special Instructions:</label><br></td>
    <td><textarea rows="4" cols="20" name="text" ></textarea></td>
  </tr>
  
  <tr>
  <td><input type="checkbox" >
  <label>Request express shipping (additional charges may apply)</label><br></td>
  <td><input type="checkbox" >
  <label>Gift Wrapping (additional charges may apply)</label><br></td>
  </tr>

  <tr>
  <td><label for="agreement">I agree to the terms and conditions</label><br></td>
  <td><input type="checkbox" >
  </tr>
  
  <tr>
  <td></td>
  <td>  <input type="submit" value="Submit">
 	    <input type="submit" value="Reset"> 
  </td>
  </tr>
</table>
</fieldset>

</body>
</html>

