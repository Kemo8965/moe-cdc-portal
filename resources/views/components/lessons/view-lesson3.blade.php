
@extends('layouts.app')
@section('content')

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <!-- Include the Bootstrap CSS and JS files -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

        <!-- Include the DataTables CSS and JS files -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    </head>
    <body>
    <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Lesson Name</th>
                <th>Lesson Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="table-body">
        </tbody>
    </table>

        
        <script src="" async defer></script>
    </body>
</html>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "paging": true,         // Enable pagination
            "searching": true,      // Enable search feature
            "ordering": true,       // Enable sorting by column
            "info": true,           // Enable showing "Showing x to y of z entries" info
            "lengthChange": true,   // Enable changing number of entries per page
            "lengthMenu": [5, 10, 25, 50, 100], // Define options for number of entries per page
            "language": {           // Customize text for DataTables features
                "paginate": {
                    "previous": "<",
                    "next": ">",
                },
                "lengthMenu": "Show _MENU_ entries",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "search": "Search:",
            },
        });
    });
</script>

<script>
  // define the data array
  var data = [
    {name: 'Transpose a matrix', age: 1, },
    {name: 'Simplify algebraic expressions', age: 2, },
    {name: 'Factorize algebraic expressions', age: 3, }
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

    // // create a cell for the email
    // var emailCell = document.createElement('td');
    // emailCell.innerHTML = data[i].email;
    // row.appendChild(emailCell);

    // create action buttons for each row   
    const tdElement = document.createElement('td');

    // Create a new div element
    const divElement = document.createElement('div');
    divElement.className = 'button-container';

    // Create three button elements
    const button1 = document.createElement('button');
    // button1.textContent = 'preview';
     button1.className='preview ri ri-eye-fill';
    
    
    const link1 = document.createElement('a');
    link1.href ='/create-lesson2';
    link1.textContent='preview';
    link1.style.color='white';
    button1.appendChild(link1);

   

    const button2 = document.createElement('button');
   // button2.textContent = 'edit';
    button2.className='edit ri ri-ball-pen-fill';
    
    const link2 = document.createElement('a');
    link2.href ='/create-lesson2';
    link2.textContent='edit';
    link2.style.color='white';
    button2.appendChild(link2);

    const button3 = document.createElement('button');
   // button3.textContent = 'delete';
    button3.className='delete ri  ri-delete-bin-6-fill';

    const link3 = document.createElement('a');
    link3.href ='/create-lesson2';
    link3.textContent='delete';
    link3.style.color='white';
    button3.appendChild(link3);


    // Add the buttons to the div element
    divElement.appendChild(button1);
    divElement.appendChild(button2);
    divElement.appendChild(button3);

    // Add the div element to the td element
    tdElement.appendChild(divElement);

    row.appendChild(tdElement);


    // add the row to the table body
    tableBody.appendChild(row);
  }
</script>

<script>
    function preview(){
        console.log('preview selected!')
    }
</script>



<style>

.button-container{
    margin-left: 3px;
    margin-right: 3px;
}

.preview{
    background-color: cornflowerblue;
    color:aliceblue;
    border-radius:10%;
    margin-left: 3px;
    margin-right: 3px;
    width: 30%;
    height:fit-content;
    border-color: antiquewhite;
}

.edit{
    background-color:cadetblue;
    color:aliceblue;
    border-radius:10%;
    margin-left: 3px;
    margin-right: 3px;
    width:30%;
    height:fit-content;
    border-color: antiquewhite;
}

.delete{
    background-color:red;
    color:aliceblue;
    border-radius:10%;
    margin-left: 3px;
    margin-right:3px;
    width:30%;
    height:fit-content;
    border-color: antiquewhite;
}

.preview:hover{
    background-color:aquamarine;
    
}

.edit:hover{
    background-color:cornflowerblue;
    
}

.delete:hover{
    background-color:crimson;
   
}


</style>
@endsection