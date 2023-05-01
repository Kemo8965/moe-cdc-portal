@extends('scripts.scripts')
 
 
<!-- User details -->
<div id="outcomes" class="user-profile text-center mt-3">
    <div class="">
        <a href="/" class="auth-logo">
            <img src="assets/auth/images/coa.png" height="100" class="logo-dark mx-auto" alt="">
            <img src="assets/auth/images/coa.png" height="100" class="logo-light mx-auto" alt="">
        </a>
    </div>
    <!-- @if( auth()->check() )
    <li class="nav-item">
        <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
    </li>
    @endif -->
</div>

<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Ministry of Education</li>

        <li>
            <a <a href="/dashboard" onclick="g10Dashboard()" class="waves-effect">
                <i class="ri-apps-fill"></i><span class="badge rounded-pill bg-success float-end">Home</span>
                <span>Dashboard</span>
            </a>
        </li>


        <li class="menu-title">e-Content Management</li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-layout-3-line"></i>
                <span>Lesson Management</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
               

                


       

<ul class="sub-menu" aria-expanded="true">


<ul class="sub-menu" aria-expanded="true">
   <li>
       <a href="{{ url('/initialize-lesson') }}"><i class="ri  ri-compass-3-fill"></i>Initialize Lesson</a>
      
   </li>

   <li>
       <a href="javascript: void(0);"><i class="ri  ri-ball-pen-line"></i>Create Lesson</a>
      
   </li>

   <li>
       <a href="javascript: void(0);"><i class="ri  ri-compass-3-fill"></i>View Lessons</a>
      
   </li>

</ul>





            </ul>
</div>


