@extends('layouts.admin')

@section('styles')

    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
@endsection


@section('content')

    <!-- BEGIN: Content-->
    {{-- <div class="app-content content">
        <
        

                          
                         
                                  
                          
                                

                                  <div class="module"> 
                                    <div class="details">
                                      <h4><b>Deleteing Category (DELETE)</b></h4>
                                      <br>
                                      <div class="url">
                                        <span style="color: gray">{{ env('APP_URL') }}</span><span 
                                        style="color: purple">api/store/</span><span 
                                        style="color: blue">4</span><span 
                                        style="color: purple">/category/</span><span 
                                        style="color: blue">266086678707</span>
                                      </div>
                                      <br>
                                      <div>
                                        <ul class="points" style="color: #000; font-weight: 500">
                                          <li class=" point domain-bullet">Domain address of the API resource</li>
                                          <li class=" point path-bullet">Endpoint for the resource</li>
                                          <li class=" point id-bullet">Store id of the store and its category id respectively</li>
                                        </ul>
                                        <p><b>DELETE</b> method will be used with this API. <br> You just need to call the request with categpry id to perform the delete action for category. <br>The response contains the status. </p>
                                        
                                        
                                        
                                      </div>
                                    </div>
                                    
                                    <br>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="line-numbers"> 
                                      <code class="language-html"> 
                                        &lt;a href="{{ env('APP_URL') }}api/store/4/category/266179772595"&gt;Delete Category&lt;/a&gt;
                                      </code> 
                                    </pre>
                                    <br>
                                    <p class="text-bold-800">Response:</p>
                                    <pre class="line-numbers"> 
                                      <code class="language-json"> 
                                        {
                                            "response": {
                                                "Message": "Category Deleted Succesfully",
                                                "Success": true,
                                                "provider": "Shopify",
                                                "provider_id": 1,
                                                "resource": "Deleting Category"
                                            }
                                        } 
                                      </code> 
                                    </pre>
                                  </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Categories -->
                

            </div>
        </div>
    </div> --}}
    <!-- END: Content-->
    

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
