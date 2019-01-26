<html>
<head>
 <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

 Name:<?php echo $_GET["name"]; ?><br>
Gender: <?php echo $_GET["gender"]; ?>
Address:<?php echo $_GET["address"]; ?><br>
phone number:<?php echo $_GET["phn"]; ?><br>
Type of payment you opted:<?php echo $_GET["pay"]; ?><br>
 <table>

<tr>

<th>item</th>

<th>Qty</th> 

<th>cost</th>

</tr>

<tr>

<td>USB pendrive</td>

<td><?php echo $_GET["usb"]; ?></td> 

<td><?php echo $_GET["usb"]*300; ?></td>

 </tr>

 <tr>

 <td>wireless mouse</td>

 <td><?php echo $_GET["mouse"]; ?></td> 

 <td><?php echo $_GET["mouse"]*200; ?></td>
  </tr>

 <tr>

 <td>keyboard</td>

 <td><?php echo $_GET["kb"]; ?></td> 

<td><?php echo $_GET["kb"]*400; ?></td>

 </tr>

 <tr>

<td>laptop</td>
<td><?php echo $_GET["lt"]; ?></td> 
<td><?php echo $_GET["lt"]*33000; ?></td>
 </tr>
  <tr>
<td>Total cost:<?php echo $_GET["usb"]*300+$_GET["mouse"]*200+$_GET["kb"]*400+$_GET["lt"]*33000; ?>
</tr>
</table>
</body>
</html>
