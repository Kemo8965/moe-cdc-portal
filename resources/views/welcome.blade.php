<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Grade Options | eLearners Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <section>
          <body>
         
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
            <button  class="btn btn-primary fade pl-4">
                 Logout
            </button>
                </x-responsive-nav-link>
            </form>
            
            <h3 class="choice"> <span class="user" href="#">Welcome, {{ Auth::user()->name }}.</span> </br>Choose what Grade to view</h3>
            
        <section class="main">
        <!-- <div class="card">
            
            <h4 class="grade-names">Choose what Grade to view</h4>
            </div> -->

        <div class="card rounded-sm">
           <a href="{{route('dashboard')}}">
           <img class="img-fluid" src="assets/auth/images/boy.jpg" height="230" >

            <h4 class="grade-names">Grade 10</h4>
           </a>
            </div>

            <div class="card">
            <img class="img-fluid" src="assets/auth/images/students1.jpg" height="230" style="--color:#4ECDC4" >

            <h4 class="grade-names">Grade 11</h4>
            </div>

            <div class="card">
            <img class="img-fluid" src="assets/auth/images/study-group.jpg" height="230" style="--color:#FF6B6B" >


            <h4 class="grade-names">Grade 12</h4>
            </div>
        </section>
            
            
    </body>

    </section>

</html>

<style>
  .user{
    color:darkblue;
  } 
.grade-names{
    margin-left: 5rem;
}

.card{
  border-radius: 10%;
}

.choice{
    margin-left: 2.8rem;  
}

.fade {
  background-color: beige;
  box-shadow: 3px 3px 7px 2px rgba(0,0,0,.8);
  font-family:'Times New Roman', Times, serif;
  font-weight: 700;
  font-size: medium;
  width: 15%;
  height: 20%;
  border-radius: 10px 15px 10px 15px;
  color: black;
  transition: background-color .4s;
  margin-left: 2.8rem;
}

.fade:hover {
  background-color: #004363;
  color: beige;
}

.fade:focus,
.fade:active {
  background-color: black;
  transition: none;
}
   
a{
    text-decoration: none;
    color: black;
}

a:hover{
    text-decoration: none;
    color: black;
}


.main {
    font-family: 'Nunito Sans';
    width: 100%;
    padding-left: 35px;
    display: flex;
}

.img-fluid{
  border-radius: 5%;
}

img {
  --color: #8A9B0F; /* the border color */
  --border: 10px;   /* the border thickness*/
  --offset: 20px;   /* control the offset*/
  --gap: 5px;       /* the gap on hover */
  
  --_c: var(--color) var(--border), #0000 0 calc(100% - var(--border)),var(--color) 0;
  --_o: calc(3*var(--offset));
  padding: 
    calc(var(--gap) + var(--border))
    calc(var(--gap) + var(--border) + var(--offset))
    calc(var(--gap) + var(--border) + var(--offset))
    calc(var(--gap) + var(--border));
  background: 
    linear-gradient(      var(--_c)) var(--_o) var(--_o), 
    linear-gradient(90deg,var(--_c)) var(--_o) var(--_o);
  background-size: calc(100% - var(--_o)) calc(100% - var(--_o));
  background-repeat: no-repeat;
  filter: grayscale(.5);
  transition: .3s;
  cursor: pointer;
  border-radius: 5%;
}




img:hover {
  background-position: 0px 0px;
  background-size: calc(100% - var(--offset)) calc(100% - var(--offset));
  filter: grayscale(0);
  border-radius: 5%;
}

/* .card:hover {
  background-position: 0px 0px;
  background-size: calc(100% - var(--offset)) calc(100% - var(--offset));
  filter: grayscale(0);
} */

body {
  background:beige;
  display: grid;
  gap: 40px;
  height: 100vh;
  margin: 0;
  grid-auto-flow: column;
  place-content: center;
}
</style>