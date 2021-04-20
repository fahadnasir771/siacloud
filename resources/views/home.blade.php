@extends('layouts.admin')

@section('styles')

<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
@endsection


@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Documentation</h2>
                            <div class="breadcrumb-wrapper col-12">
                                {{-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Content</a>
                                    </li>
                                    <li class="breadcrumb-item active">Syntax Highlighter
                                    </li>
                                </ol> --}}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="content-body">
                
                <style>
                  .url{
                    font-weight: 500;
                    font-size: 16px;
                    margin-left: 20px
                  }
                </style>
                <style>
                  .points {
                    padding-left: 5px;
                    list-style: none;
                  }
                  .points li::before {
                    content: "\2B24";
                    font-weight: bold;
                    display: inline-block; 
                    width: 1em;
                    margin-left: -1em;
                    font-size: 7px;
                    margin-right: 10px;
                    position: relative;
                    top: -2px
                  }
                  .points .domain-bullet::before {
                    color: gray;
                  }
                  .points .path-bullet::before {
                    color: purple;
                  }
                  .points .id-bullet::before {
                    color: blue;
                  }
                </style>

                <!-- Categories -->
                <section id="line-numbers" class="row">
                  <div class=" col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title title-card" style="font-size: 24px;">Authorization</h4>
                          </div>
                          <style>
                            .title-card {
                              position: relative;
                              width: 100%
                            }
                            .title-card::after{
                              content: '';
                              position: absolute;
                              bottom: -15px;
                              left: -21px;
                              height: 0.8px;
                              width: 103%;
                              background: #2c2c2c79
                            }
                          </style>
                          <br>
                          <div class="card-content">
                              <div class="card-body">
                                <div class="module"> 
                                  <div class="details">
                                    <h4><b>Authorize Request (GET)</b></h4>
                                    <br>
                                    <div class="url">
                                      <span style="color: gray">{{ env('APP_URL') }}</span><span 
                                      style="color: purple">api/login</span>
                                    </div>
                                    <br>
                                    <div>
                                      <ul class="points" style="color: #000; font-weight: 500">
                                        <li class=" point domain-bullet">Domain address of the API resource</li>
                                        <li class=" point path-bullet">Endpoint for the resource</li>
                                      </ul>
                                      <p><b>GET</b> method will be used with this API. <br> You have to send admin credentials in application/json format. <br> The API will return the API token which will be valid for only <b>24 hours</b>. <br> You have to use that API token in the header of each resource API request you made. <code>Authorization: Bearer 1|24eEcA9gmeRDNEdMG3SKi3r1lwFRv87uBvLHNWyY</code> <br> <b>Authorization</b> is the key and the token will be the value for the header</p>
                                      
                                      
                                      
                                    </div>
                                  </div>
                                  <br>
                                  <p class="text-bold-800">Usage (application/json):</p>
                                  <pre class="line-numbers"> 
                                    <code class="language-json"> 
                                      {
                                          "email": "admin@demo.com",
                                          "password": "12345678"
                                      }
                                    </code> 
                                  </pre>
                                  <br>
                                  <p class="text-bold-800">Response:</p>
                                  <pre class="line-numbers"> 
                                    <code class="language-json"> 
                                      {
                                          "token": "Bearer 1|24eEcA9gmeRDNEdMG3SKi3r1lwFRv87uBvLHNWyY"
                                      }
                                    </code> 
                                  </pre>
                                </div>
                                <br>
                                  
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <!--/ Categories -->

                <!-- Categories -->
                <section id="line-numbers" class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title title-card" style="font-size: 24px;">Category Module</h4>
                            </div>
                            <style>
                              .title-card {
                                position: relative;
                                width: 100%
                              }
                              .title-card::after{
                                content: '';
                                position: absolute;
                                bottom: -15px;
                                left: -21px;
                                height: 0.8px;
                                width: 103%;
                                background: #2c2c2c79
                              }
                            </style>
                            <br>
                            <div class="card-content">
                                <div class="card-body">
                                  <div class="module"> 
                                    <div class="details">
                                      <h4><b>Showing All Categories (GET)</b></h4>
                                      <br>
                                      <div class="url">
                                        <span style="color: gray">{{ env('APP_URL') }}</span><span 
                                        style="color: purple">api/store/</span><span 
                                        style="color: blue">1</span><span 
                                        style="color: purple">/categories</span>
                                      </div>
                                      <br>
                                      <div>
                                        <ul class="points" style="color: #000; font-weight: 500">
                                          <li class=" point domain-bullet">Domain address of the API resource</li>
                                          <li class=" point path-bullet">Endpoint for the resource</li>
                                          <li class=" point id-bullet">Store id of the store</li>
                                        </ul>
                                        <p><b>GET</b> method will be used with this API. <br> This API will return an array of all the categories from the respective store.</p>
                                        
                                        
                                        
                                      </div>
                                    </div>
                                    
                                    <br>
                                    <p class="text-bold-800">Response:</p>
                                    <pre class="line-numbers"> 
                                      <code class="language-json"> 
                                        {
                                            "categories": [
                                                {
                                                    "id": 266086678707,
                                                    "updated_at": "2021-04-16T01:13:00+05:00",
                                                    "published_at": "2021-04-15T21:35:20+05:00",
                                                    "title": "Collection",
                                                    "provider": "Shopify",
                                                    "provider_id": 1,
                                                    "resource": "Showing All Categories"
                                                },
                                        }
                                      </code> 
                                    </pre>
                                  </div>
                                  <br>
                                  <hr style="background: #2c2c2c1a">
                                  <br> 

                                  <div class="module"> 
                                    <div class="details">
                                      <h4><b>Show Category By Category Id (GET)</b></h4>
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
                                        <p><b>GET</b> method will be used with this API. <br> This API will return an object of the category from the respective store.</p>
                                        
                                        
                                        
                                      </div>
                                    </div>
                                    
                                    <br>
                                    <p class="text-bold-800">Response:</p>
                                    <pre class="line-numbers"> 
                                      <code class="language-json"> 
                                        {
                                            "category": {
                                                "id": 266086678707,
                                                "updated_at": "2021-04-16T01:13:00+05:00",
                                                "published_at": "2021-04-15T21:35:20+05:00",
                                                "title": "Collection",
                                                "provider": "Shopify",
                                                "provider_id": 1,
                                                "resource": "Show Category By Category Id"
                                            }
                                        }
                                      </code> 
                                    </pre>
                                  </div>
                                  <br>
                                  <hr style="background: #2c2c2c1a">
                                  <br> 

                                  <div class="module"> 
                                    <div class="details">
                                      <h4><b>Creating Category (POST)</b></h4>
                                      <br>
                                      <div class="url">
                                        <span style="color: gray">{{ env('APP_URL') }}</span><span 
                                        style="color: purple">api/store/</span><span 
                                        style="color: blue">4</span><span 
                                        style="color: purple">/category</span>
                                      </div>
                                      <br>
                                      <div>
                                        <ul class="points" style="color: #000; font-weight: 500">
                                          <li class=" point domain-bullet">Domain address of the API resource</li>
                                          <li class=" point path-bullet">Endpoint for the resource</li>
                                          <li class=" point id-bullet">Store id of the store</li>
                                        </ul>
                                        <p><b>POST</b> method will be used with this API. <br> The title field is required as a form-data for this API. <br>The response contains the details of the category created.</p>
                                        
                                        
                                        
                                      </div>
                                    </div>
                                    
                                    <br>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="line-numbers"> 
                                      <code class="language-html"> 
                                        &lt;form action="{{ env('APP_URL') }}api/store/4/category" method="POST"&gt;
                                            &lt;input type="text" name="title" value="New Collection" required /&gt;
                                            &lt;input type="submit" /&gt;
                                        &lt;/form&gt;
                                      </code> 
                                    </pre>
                                    <br>
                                    <p class="text-bold-800">Response:</p>
                                    <pre class="line-numbers"> 
                                      <code class="language-json"> 
                                        {
                                            "category": {
                                                "id": 266373562547,
                                                "updated_at": "2021-04-19T20:55:37+05:00",
                                                "published_at": "2021-04-19T20:55:37+05:00",
                                                "title": "New Collection",
                                                "Message": "Category Created Succesfully",
                                                "Success": true,
                                                "provider": "Shopify",
                                                "provider_id": 1,
                                                "resource": "Creating Category"
                                            }
                                        }
                                      </code> 
                                    </pre>
                                  </div>
                                  <br>
                                  <hr style="background: #2c2c2c1a">
                                  <br>

                                  <div class="module"> 
                                    <div class="details">
                                      <h4><b>Updating Category (POST)</b></h4>
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
                                        <p><b>POST</b> method will be used with this API. <br> The title and id fields are required as a form-data for this API. <br>The response contains the details of the category updated.</p>
                                        
                                        
                                        
                                      </div>
                                    </div>
                                    
                                    <br>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="line-numbers"> 
                                      <code class="language-html"> 
                                        &lt;form action="{{ env('APP_URL') }}api/store/4/category/266086678707" method="POST"&gt;
                                            &lt;input type="text" name="id" value="266086678707" required /&gt;
                                            &lt;input type="text" name="title" value="Updated Collection" required /&gt;
                                            &lt;input type="submit" /&gt;
                                        &lt;/form&gt;
                                      </code> 
                                    </pre>
                                    <br>
                                    <p class="text-bold-800">Response:</p>
                                    <pre class="line-numbers"> 
                                      <code class="language-json"> 
                                        {
                                            "cartegory": {
                                                "id": 266373562547,
                                                "updated_at": "2021-04-19T20:57:12+05:00",
                                                "published_at": "2021-04-19T20:55:37+05:00",
                                                "title": "Updated Collection",
                                                "Message": "Category Updated Succesfully",
                                                "Success": true,
                                                "provider": "Shopify",
                                                "provider_id": 1,
                                                "resource": "Updating Category"
                                            }
                                        }
                                      </code> 
                                    </pre>
                                  </div>
                                  <br>
                                  <hr style="background: #2c2c2c1a">
                                  <br>

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
    </div>
    <!-- END: Content-->

@endsection


@section('scripts')
<script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="../../../app-assets/vendors/js/ui/prism.min.js"></script>
@endsection
