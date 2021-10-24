@extends('layouts.layout')

@section('title','All Events')

@section('content')

<div class="row">

<div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
      <h4 class="card-title text-uppercase">Create An Event</h4>

<div class="justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
              <table>  
                <tr><td>
              <input type="text" value="" class="form-control" placeholder="Event Name">
              </td></tr>
            <tr><td>
                  <input type="text" value="" class="form-control" placeholder="Event Date">
                  </td></tr>
<tr><td>
           <input type="text" value="" class="form-control" placeholder="Event Amount">
           </td></tr>
           <tr><td>
                <input type="text" value="" class="form-control" placeholder="Capacity ...Max participants">
                </td></tr>
           <tr><td>
                <input type="text" value="" class="form-control" placeholder="Event details">
                </td></tr>
           <tr><td>
                <button type="submit" class="btn btn-success btn-round">                  
                  Save Event
                </button>
                </td></tr>
           
            </table>
              </div>
            </form>
</div>
</div></div>
</div>
@endsection