<style>
  .dataTables_wrapper .dataTables_paginate .paginate_button{
    padding: -0.5em 0em !important;
  }
</style>


@extends('admin/layouts/contentLayoutMaster')

@section('title', 'Category')

@section('vendor-style')
        {{-- vendor css files --}}

@endsection

@section('page-style')
         {{-- Page Css files --}}

@endsection

@section('content')
  <!-- Basic example section start -->
<section id="basic-examples">
  <div class="card">
    <div class="card-content">
      <div class="card-body">

        <div class="row">
          <div class="col-12">
          <a href="{{ route('category.create')}}" class="float-right">
            <button type="button"  class="btn bg-gradient-primary mr-1 mb-1 waves-effect waves-light pull-right">Create</button>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <table class="table table-striped table-bordered" style="width:100%" id="users-table">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Caregory Level</th>
                      <th>Logo</th>
                      <th>Active</th>
                      <th>Display On Menu</th>
                      <th>Action</th>
                  </tr>
              </thead>
          </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- // Basic example section end -->

@endsection
@section('vendor-script')

{{-- vendor files --}}
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset(mix('js/scripts/pages/category.js')) }}"></script>
@endsection
