@extends('layouts.app')
@section('content')

<table class="table table-editable table-nowrap align-middle table-edits">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <tr data-id="1">
            <td data-field="id" style="width: 80px">1</td>
            <td data-field="name">David McHenry</td>
            <td data-field="age">24</td>
            <td data-field="gender">Male</td>
            <td style="width: 100px">
                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </td>
        </tr>
        <tr data-id="2">
            <td data-field="id">2</td>
            <td data-field="name">Frank Kirk</td>
            <td data-field="age">22</td>
            <td data-field="gender">Male</td>
            <td>
                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </td>
        </tr>
        <tr data-id="3">
            <td data-field="id">3</td>
            <td data-field="name">Rafael Morales</td>
            <td data-field="age">26</td>
            <td data-field="gender">Male</td>
            <td>
                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </td>
        </tr>
        <tr data-id="4">
            <td data-field="id">4</td>
            <td data-field="name">Mark Ellison</td>
            <td data-field="age">32</td>
            <td data-field="gender">Male</td>
            <td>
                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </td>
        </tr>
        <tr data-id="5">
            <td data-field="id">5</td>
            <td data-field="name">Minnie Walter</td>
            <td data-field="age">27</td>
            <td data-field="gender">Female</td>
            <td>
                <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>

<script>
  // define the data array
  var data = [
    {name: 'John', age: 25, email: 'john@example.com'},
    {name: 'Sarah', age: 30, email: 'sarah@example.com'},
    {name: 'Mike', age: 20, email: 'mike@example.com'}
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

    var actionCell = document.createElement('td');
    emailCell.innerHTML = divElement;
    row.appendChild(actionCell);

    // add the row to the table body
    tableBody.appendChild(row);
  }
</script>

<script>
  // Create a new div element
const divElement = document.createElement('div');

// Set some properties on the div element
divElement.id = 'myDiv';
divElement.className = 'my-class';

// Add some content to the div element
divElement.innerHTML = '<h1>Hello, world!</h1>';

// Add the div element to the document body
document.body.appendChild(divElement);

</script>

@endsection