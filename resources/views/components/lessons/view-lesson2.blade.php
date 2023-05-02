@extends('layouts.app')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th>Lesson Title</th>
      <th>Actions</th>
     
    </tr>
  </thead>
  <tbody id="table-body">
  </tbody>
</table>

<script>
  // define the data array
  var data = [
    {name: 'John', age: 25 },
    {name: 'Sarah', age: 30, },
    {name: 'Mike', age: 20 },
    {name: 'John', age: 25 },
    {name: 'Sarah', age: 30},
    {name: 'Mike', age: 20 }
  ];

  // get a reference to the table body
  var tableBody = document.getElementById('table-body');

  // loop through the data array and create a row for each item
  for (var i = 0; i < data.length; i++) {
    // create a new table row
    var row = document.createElement('tr');

    // create a cell for the name
    var nameCell = document.createElement('td');
    nameCell.innerHTML = data[i].name;
    row.appendChild(nameCell);

    // create a cell for the age
    var ageCell = document.createElement('td');
    ageCell.innerHTML = data[i].age;
    row.appendChild(ageCell);

    // create a cell for the email
    var emailCell = document.createElement('td');
    emailCell.innerHTML = data[i].email;
    row.appendChild(emailCell);

    // add the row to the table body
    tableBody.appendChild(row);
  }
</script>
@endsection