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

<h2>Kullanıcılar</h2>

<table>
  <tr>
    <th>Adı</th>
    <th>Email</th>
    <th>Şifre</th>
  </tr>
    @foreach($products as $product)
  <tr>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->user[0]->name}}</td>
  </tr>
    @endforeach
</table>

</body>
</html>

