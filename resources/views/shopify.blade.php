@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">

    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/data-list-view.css">
@endsection

@section('content')
  <form action="" method="POST" id="delete-form">
      @csrf
      @method('DELETE')
  </form>

  <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">

          <div class="content-header row">

              <div class="content-header-left col-md-9 col-12 mb-2">
                  <div class="row breadcrumbs-top">
                      <div class="col-12">
                          <h2 class="content-header-title float-left mb-0">Shopify Stores</h2>
                          {{-- <div class="breadcrumb-wrapper col-12">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Stores</a>
                                  </li>
                                  <li class="breadcrumb-item"><a href="#">Shopify</a>
                                  </li>
                                  
                              </ol>
                          </div> --}}
                      </div>
                  </div>
              </div>

          </div>

          <div class="content-body">
              <!-- Data list view starts -->
              <section id="data-list-view" class="data-list-view-header">
                  {{-- <div class="action-btns d-none">
                      <div class="btn-dropdown mr-1 mb-1">
                          <div class="btn-group dropdown actions-dropodown">
                              <button type="button"
                                  class="btn btn-white px-1 py-1 waves-effect waves-light"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Delete 
                              </button> --}}
                              {{-- <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                  <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                  <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                  <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                              </div> --}}
                          {{-- </div>
                      </div>
                  </div> --}}

                  <!-- DataTable starts -->
                  <div class="table-responsive">
                      <table class="table data-list-view">
                          <thead>
                              <tr>
                                  <th></th>
                                  <th>id</th>
                                  <th>STORE NAME</th>
                                  <th>CATEGORY</th>
                                  {{-- <th>GENERIC APIs (GET)</th> --}}
                                  <th>STATUS</th>
                                  <th>CREATED AT</th>
                                  <th>ACTION</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($stores as $store)
                                <tr>
                                    

                                    <td></td>
                                    <td><b>{{ $store->id }}</b></td>
                                    <td class="store_name">{{ $store->name }}</td>
                                    <td class="store_category"> {{ $store->category }} </td>
                                    {{-- <td><a href="javascript:void(0)" onclick="alert('Intended to modify later -Alpha Verison')">{{ env('APP_URL') }}admin/api/2021-04/{resource}.json</a></td> --}}
                                    <td>
                                        <div class="chip chip-{{ ($store->active == 1) ? 'success' : 'danger'  }}">
                                            <div class="chip-body">
                                                <div class="chip-text">{{ ($store->active == 1) ? 'Active' : 'Inactive'  }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ date('jS M, Y', strtotime($store->created_at)) }}</td>
                                    <td class="product-action">

                                        <div class="store_domain" style="display: none">{{ $store->domain }}</div>
                                        <div class="store_key" style="display: none">{{ $store->key }}</div>
                                        <div class="store_secret" style="display: none">{{ $store->secret }}</div>

                                        
                                        <span class="action-edit" style="font-size: 16px" data-id="{{ $store->id }}"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete" data-id="{{ $store->id }}"  style="font-size: 16px; margin-left: 6px" ><i class="feather icon-trash"></i></span>
                                        
                                    </td>
                                
                                </tr>
                                
                              @endforeach
                             
                          </tbody>
                      </table>
                  </div>
                  <!-- DataTable ends -->

                  <!-- add new sidebar starts -->
                  <div class="add-new-data-sidebar">
                      <div class="overlay-bg"></div>
                      <div class="add-new-data">
                          <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                              <div>
                                  <h4 class="text-uppercase form-add">Add Store</h4>
                              </div>
                              <div class="hide-data-sidebar">
                                  <i class="feather icon-x"></i>
                              </div>
                          </div>
                          <form action="{{ route('store.store') }}" method="POST" id="form">
                            @csrf
                            <div class="data-items pb-3">
                              <div class="data-fields px-2 mt-3">
                                  <div class="row">

                                      <div class="col-sm-12 data-field-col">
                                          <label for="data-name">Store Name</label>
                                          <input type="text" class="form-control" id="input-name" required placeholder="Italiano" name="name">
                                      </div>

                                      <div class="col-sm-12 data-field-col">
                                          <label for="data-category">Store Category</label>
                                          <input type="text" class="form-control" id="input-category" placeholder="Clothing" name="category">
                                      </div>
                                      <div class="col-sm-12 data-field-col">
                                        <label for="data-status">Domain w/ Protocol </label>
                                        <input type="text" class="form-control" id="input-domain" required placeholder="https://store.com or http://store.com"  name="domain">
                                      </div>
                                      <div class="col-sm-12 data-field-col">
                                          <label for="data-status">API Key</label>
                                          <input type="text" class="form-control" id="input-key" required placeholder="7f6da456075a7b05655ad2f2aa566c9c" name="key">
                                      </div>
                                      <div class="col-sm-12 data-field-col">
                                        <label for="data-status">API Secret</label>
                                        <input type="password" class="form-control" id="input-secret" required placeholder="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" name="secret">
                                      </div>
                                      <div class="col-sm-12 data-field-col">
                                        <div class="custom-control custom-switch switch-lg custom-switch-success">
                                        
                                          <input type="checkbox" class="custom-control-input" id="customSwitch100" checked name="status">
                                          <label class="custom-control-label" for="customSwitch100" >
                                              <span class="switch-text-left">Active</span>
                                              <span class="switch-text-right">Inactive</span>
                                          </label>
                                        </div>
                                      </div>
                                      
                                      
                                  </div>
                              </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary form-add" type="submit">Add Store</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button type="button" class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </div>
                          </form>
                          

                      </div>
                  </div>
                  <!-- add new sidebar ends -->
              </section>
              <!-- Data list view end -->

          </div>
      </div>
  </div>
  <style>
    .dt-checkboxes-cell{
      display: none
    }
  </style>

@endsection

@section('scripts')
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>

    <script src="../../../app-assets/js/scripts/ui/data-list-view.js"></script>

    <script>
        
        $(document).on('click', function(){
            $('.selected').removeClass('selected')
        });

        $('.action-delete').on('click', function(){
            let confirms = confirm('Do you want to delete the store?\nThis action cannot be undone...')
            if(confirms){
                $('#delete-form').attr('action', '{{ env("APP_URL") . "store/" }}' + $(this).data('id'))
                $('#delete-form').submit()
            }
        })

        // Avoid Sidebar click changing when sidebar is open
        let opened = false;
        $('.add-new-data').on('click', function(){
            opened = true
        })
        // Close sidebar
        $(".hide-data-sidebar, .cancel-data-btn, .overlay-bg").on("click", function() {
            $(".add-new-data").removeClass("show")
            $(".overlay-bg").removeClass("show")

            let token = $('input[name="_token"]').val()
            let status = $('input[name="status"]').val()
            $("input").val("")
            $('input[name="_token"]').val(token)
            $('input[name="status"]').val(status)

            $("#data-category, #data-status").prop("selectedIndex", 0)
            opened = false;
            
            $('#form').find('#method_input').remove()
        })

        // On Add
        $(document).on('click', function() {
            
            if($('.add-new-data').hasClass('show') && !opened){
                
                let token = $('input[name="_token"]').val()
                let status = $('input[name="status"]').val()
                $("input").val("")
                $('input[name="_token"]').val(token)
                $('input[name="status"]').val(status)

                $('#form').attr('action', '{{ route("store.store") }}')
                $('#form').find('#method_input').remove()
                $('.form-add').text('Add Store')
            }
        })

        // On Edit
        $('.action-edit').on("click",function(e){
            e.stopPropagation();
            let id = $(this).data('id');
            // $('#data-name').val('Altec Lansing - Bluetooth Speaker');
            // $('#data-price').val('$99');
            
            $('#input-name').val($(this).parents('tr').find('.store_name').text())
            $('#input-category').val($(this).parents('tr').find('.store_category').text())
            $('#input-domain').val($(this).parents('.product-action').find('.store_domain').text())
            $('#input-key').val($(this).parents('.product-action').find('.store_key').text())
            $('#input-secret').val($(this).parents('.product-action').find('.store_secret').text())


            if($(this).parents('tr').find('.chip-text').text() == 'Active'){
                $('#customSwitch100').attr('checked', true);
            }else{
                $('#customSwitch100').attr('checked', false);
            }
            


            $('#form').attr('action', '{{ env("APP_URL") . "store/" }}' + id)
            $('#form').prepend(
                `
                <input type="hidden" name="_method" id="method_input" value="PUT">
                `
            )
            $(".add-new-data").addClass("show");
            $(".overlay-bg").addClass("show");
            
            $('.form-add').text('Update Store')
        });
    </script>
@endsection
