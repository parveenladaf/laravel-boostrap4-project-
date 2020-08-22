@extends('layouts.default')
@section('content')
<div class="row">
  <div class="col-sm-12">
    <h1 class="display-3">Contacts</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>title</td>
          <td>post</td>
        </tr>
      </thead>
      <tbody>
        @foreach($contents ?? '' as $content)
        <tr>
          <td>{{$content->title}}</td>
          <td>{{$content->post}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div>
    </div>



    @stop