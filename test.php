<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<form action="save.php" name="frmAdd" method="post">
<table width="284" border="1">
  <tr>
    <th width="120">CustomerID</th>
    <td width="238"><input type="text" name="txtCustomerID" size="5"></td>
    </tr>
  <tr>
    <th width="120">Name</th>
    <td><input type="text" name="txtName" size="20"></td>
    </tr>
  <tr>
    <th width="120">Email</th>
    <td><input type="text" name="txtEmail" size="20"></td>
    </tr>
  <tr>
    <th width="120">CountryCode</th>
    <td><input type="text" name="txtCountryCode" size="2"></td>
    </tr>
  <tr>
    <th width="120">Budget</th>
    <td><input type="text" name="txtBudget" size="5"></td>
    </tr>
  <tr>
    <th width="120">Used</th>
    <td><input type="text" name="txtUsed" size="5"></td>
    </tr>
  </table>
  <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
