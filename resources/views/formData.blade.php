<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Data from Form1</h2>

<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>

  </tr>
  <tr>
    <td><?php echo $_POST["fname"]; ?></td>
    <td><?php echo $_POST["lname"]; ?></td>
  </tr>

</table>
</body>
</html>
