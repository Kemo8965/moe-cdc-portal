
<div class="row">

<div class="col-xl-12">
<div class="card">
<div class="card-body">

<h4 class="card-title">Exercise</h4>
<p class="card-title-desc">Use the tab JavaScript plugin—include
it individually or through the compiled <code class="highlighter-rouge">bootstrap.js</code>
file—to extend our navigational tabs and pills to create tabbable panes
of local content, even via dropdown menus.</p>

<!-- Nav tabs -->
<ul class="nav nav-pills nav-justified" role="tablist">
<li class="nav-item waves-effect waves-light">
<a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
<span class="d-none d-sm-block">True or False</span> 
</a>
</li>
<li class="nav-item waves-effect waves-light">
<a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
<span class="d-none d-sm-block">Multiple Choice</span> 
</a>
</li>
<li class="nav-item waves-effect waves-light">
<a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">
<span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
<span class="d-none d-sm-block">Short Word Answer</span>   
</a>
</li>
<li class="nav-item waves-effect waves-light">
<a class="nav-link" data-bs-toggle="tab" href="#settings-1" role="tab">
<span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
<span class="d-none d-sm-block">Fill In The Blanks</span>    
</a>
</li>
</ul>

<!-- Tab panes -->
<div class="tab-content p-3 text-muted">
<div class="tab-pane active" id="home-1" role="tabpanel">
 <div>
 <p class="mb-2">
 <input placeholder="enter question..."/>
</p>

<p class="mb-2">
 <select class="form-control select2">
 <option>Correct answer</option>
       
            <option value="True">True</option>
            <option value="False">False</option>
      
 </select>
</p>

<a href="#" class="btn btn-primary medium"> Save</a>
</div>
</div>
<div class="tab-pane" id="profile-1" role="tabpanel">
<div>

<label>Question</label>
 <p class="mb-2">
 <input placeholder="enter question..."/>
</p>

<label>Options</label>
<p class="mb-2">
 Option A<input placeholder="option A..."/>
</p>

<p class="mb-2">
 Option B<input placeholder="option B..."/>
</p>

<p class="mb-2">
 Option C<input placeholder="option C..."/>
</p>

<p class="mb-2">
 Option D<input placeholder="option D..."/>
</p>

<label>Correct Answer</label>
<p class="mb-2">
 <input placeholder="answer..."/>
</p>

<a href="#" class="btn btn-primary medium"> Save</a>
</div>
</div>
<div class="tab-pane" id="messages-1" role="tabpanel">
<div>
 <p class="mb-2">
 <input placeholder="enter question..."/>
</p>

<p class="mb-2">
<input placeholder="enter correct answer..."/>
</p>

<a href="#" class="btn btn-primary medium"> Save</a>
</div>
</div>
<div class="tab-pane" id="settings-1" role="tabpanel">
<div>
 <p class="mb-2">
 <input placeholder="enter question..."/>
</p>

<p class="mb-2">
<input placeholder="enter correct answer..."/>
</p>

<a href="#" class="btn btn-primary medium"> Save</a>
</div>
</div>
</div>

</div>
</div>
</div>
</div>