@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
@endsection


@section('content')

    <div class="app-content content" style="position: relative; top: -10px">
        <div class="content-overlay"></div>
        {{-- <div class="header-navbar-shadow"></div> --}}
        <div class="content-wrapper">

            <style>
              .side-menu, .doc {
                  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
                  background: #fff;
                  border-radius: 4px;
                  text-align: center; 
                  height: 75vh;
                  overflow: auto;
              }
              .side-menu-items {
                list-style: none;
                padding: 0
              }
              .side-menu-item {
                font-size: 16px;
                padding: 20px 0px;
                position: relative;
                
              }
              .side-menu-item:after {
                position: absolute;
                width: 100%;
                height: 1px;
                background: #ddd;
                content: '';
                bottom: 0;
                left: 0;

              }
              a{
                color: inherit;
              }
              .side-menu-item.active {
                  background: #7367f0;
                  color: #fff
              }
              .side-menu-item.active a:hover {
                color: #fff !important
              }
      
          </style>
            <div class="content-body">
              <div class="row">
                <div class="col-3">
                    @include('partials.side_menu')
                </div>
                <div class="col-9">
                  @if (request()->mode == 'categories')
                    @include('documentation.category')
                  @endif
                  @if (request()->mode == 'authorization')
                    @include('documentation.authorization')
                  @endif
                  @if (request()->mode == 'products')
                    @include('documentation.products')
                  @endif
                  @if (request()->mode == 'collects')
                    @include('documentation.collects')
                  @endif
                  @if (request()->mode == 'price_rules')
                    @include('documentation.price_rule')
                  @endif
                  @if (request()->mode == 'discount_codes')
                    @include('documentation.discount_codes')
                  @endif
                 
                </div>
            </div>
            </div>
        </div>
    </div>
    <style>
      .doc {
        padding: 20px 30px;
        text-align: left;

      }
      .header {
        font-size: 34px;
        font-weight: 500;
        margin-bottom: 10px
      }
      .doc {
        font-size: 1.04rem
      }
      .doc a {
        color: #7367f0;
        position: relative;
        font-weight: 500
      }
      .doc a::after {
        content: '';
        bottom: -2px;
        left: 0;
        position: absolute;
        background: #7367f0;
        width: 100%;
        height: 0.5px
      }
      
      hr {
        background: #eee;
        margin: 50px 0px
      }
      .body-header {
        font-size: 26px;
        font-weight: 500;
        margin-bottom: 20px
      }
      .bullet {
        font-size: 20px;
        margin-right: 5px
      }
      .link {
        font-size: 16px;
        font-weight: normal;
        /* letter-spacing: 0.7px */
      }
      .link-info {
        margin-left: 21px;
        color: #7367f0;
        font-size: 12px;
        font-weight: 500
      }
      .body-link-group {
        margin-bottom: 10px
      }
      .table-bordered td {
        border: 1px solid #666
      }
      
    </style>

    

@endsection


@section('scripts')
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../app-assets/vendors/js/ui/prism.min.js"></script>
@endsection
