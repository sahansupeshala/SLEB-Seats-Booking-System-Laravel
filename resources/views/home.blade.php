@extends('layouts.AgentNav')

@section('content')
<style>
        .abc{
           
          background-color: #EDF1D6;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding:90px;
            z-index:1500;
            height:600px
           
        }

        .carousel-inner > .item {
   height: 100px;
}


 </style>





<div class=" abc col-sm-10    " style="width:auto">

<div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
  <div class="col">
    <div class="card text-dark bg-secondary  border-dark h-100">
      
      <div class="card-body">
        <h5 class="card-title">Step 1</h5>
        <p class="card-text">Click the "Add New Bus" and fill the details.Then press "Next" button.You can add only one bus as a bus manager.
</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">SLEB </small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card text-dark bg-secondary border-dark h-100">
      
      <div class="card-body ">
        <h5 class="card-title">Step 2</h5>
        <p class="card-text">Now you can set first "Route and Time schedule" for your bus.Then click the "Add New Bus schedule" and you can set other schedules. </p>
      </div>
      <div class="card-footer">
        <small class="text-muted"> SLEB </small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card text-dark bg-secondary border-dark h-100">
     
      <div class="card-body">
        <h5 class="card-title">Step 3</h5>
        <p class="card-text">Now click the "View Bus schedule" and you can view the schedules you add also can Update,Delete,Schedule and Manage seats of bus.</p>
      </div>
      <div class="card-footer">
      <small class="text-muted">SLEB </small>
      </div>
    </div>
  </div>
</div>
        <div>

        </div>

</div>




@endsection
