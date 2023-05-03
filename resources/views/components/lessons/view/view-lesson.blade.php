@extends('layouts.app')
@section('content')

<div id="page-content" style="display:none;" class="row">
<div class="col-12">
<div class="card">
<div class="card-body">

    <h4 class="card-title">Lessons</h4>
    
   
<table class="table  table-bordered dt-responsive nowrap" id="datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<thead>
    <tr>
        <th>Title</th>
        <!-- <th>Rationale</th>
        <th>Introduction</th>
        <th>Tip</th>
        <th>Lesson Development</th>
        <th>Practical Activities</th>
        <th>Exercise</th>
        <th>Summary</th>
        <th>References</th> -->
        <th>Actions
            
        </th>
    </tr>
</thead>
  <tbody>
     <tr>
         <td>Transpose a matrix</td>
         
         <td>
            <a href="#" class="btn btn-primary small preview"><i class="ri ri-eye-line mx-2"></i>preview</a>
            <a href="#" class="btn btn-primary small edit"><i class="ri ri-pencil-line mx-2"></i>edit</a>
            <a href="#" class="btn btn-primary small delete"><i class="ri ri-delete-bin-line mx-2"></i>delete</a>
        </td>
         
       <!-- <td>This is rationale</td>
        <td>This is introduction</td>
        <td>This is tip</td>
        <td>This is lesson development</td>
        <td>This is practical activities</td>
        <td>This is exercise</td>
        <td>This is Summary</td>
        <td>This is References</td> -->
    </tr>
  </tbody>
 
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function() {
    $('#page-content').DataTable({
        "paging": true, // enable pagination
        "pageLength": 10, // set number of rows per page
        "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ], // add show entries dropdown
        "searching": true // enable search feature
    });
});
</script>

<style>
.delete{
    background-color:red;
}

.delete:hover{
    background-color:crimson;
}

.preview{
    background-color:cadetblue;
}

.preview:hover{
    background-color:burlywood;
}

.edit:hover{
    background-color:cadetblue;
}
</style>
@endsection