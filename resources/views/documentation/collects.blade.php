<div class="doc">

  <div class="header">Collects</div>
    <div class="header-info">The Collect resource connects a product to a category.
        <br><br>
        <img src="{{ asset('resources/collect2.png') }}"
            style="left:50%; position:relative; transform: translateX(-50%)" alt="">
        <br><br>
        Collects are meant for managing the relationship between products and category. For every product in a category there is a collect that tracks the ID of both the product and the category. A product can be in more than one category, and will have a collect connecting it to each category.
    </div>
    <hr>
    <div class="body-header">
        What you can do with Collect
    </div>
    <div class="body-link">
        <div class="body-link-group">
            <span class="bullet">&#9679;</span>
            <span class="link"><a class="anchor" href="#all">GET /api/store/{store_id}/collect/all</a></span>
            <br>
            <span class="link-info">Retrieves a list of all the collects</span>
        </div>
        <div class="body-link-group">
            <span class="bullet">&#9679;</span>
            <span class="link"><a class="anchor" href="#one">GET /api/store/{store_id}/collect/{collect_id}</a></span>
            <br>
            <span class="link-info">Retrieves a single collect</span>
        </div>
        <div class="body-link-group">
            <span class="bullet">&#9679;</span>
            <span class="link"><a class="anchor" href="#store">POST /api/store/{store_id}/collect</a></span>
            <br>
            <span class="link-info">Creates a collect</span>
        </div>
        
        <div class="body-link-group">
            <span class="bullet">&#9679;</span>
            <span class="link"><a class="anchor" href="#delete">DELETE
                    /api/store/{store_id}/collect/{collect_id}</a></span>
            <br>
            <span class="link-info">Deletes a collect</span>
        </div>
    </div>
    <hr>
    <div class="body-header">
        Collect properties
    </div>

    <table class="table table-bordered">

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">collection_id <b </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"collection_id": 658934725</span>
                <br>
                The ID of the custom collection containing the product.
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">created_at <br> <b style="color: #7367f0">Read
                    Only</b>
            </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"created_at": "2008-02-01T19:00:00-05:00" </span>
                <br>
                The date and time (ISO 8601 format) when the collect was created.
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">id <br> <b style="color: #7367f0">Read Only</b> </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"id": "534891672409"</span>
                <br>
                A unique numeric identifier for the collect.
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">position </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"position": 2</span>
                <br>
                The position of this product in a manually sorted custom collection. The first position is 1. This value is applied only when the custom collection is sorted manually.
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">product_id </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"product_id": 632910392</span>
                <br>
                The unique numeric identifier for the product in the custom collection.
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">sort_value </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"sort_value": "0000000002"</span>
                <br>
                This is the same value as position but padded with leading zeroes to make it alphanumeric-sortable. This value is applied only when the custom collection is sorted manually.
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">updated_at <br> <b style="color: #7367f0">Read
                    Only</b>
            </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"updated_at": "2008-02-01T19:00:00-05:00" </span>
                <br>
                The date and time (ISO 8601 format) when the collect was last updated.
            </td>
        </tr>

        
    </table>
    <hr>
    <div class="body-header">Endpoints</div>

    <table class="table table-bordered">

        <tr>
            <td id="all">
                Retreivea a list of all the Collects:
                <div class="link"><span style="font-weight: 500">GET /api/store/{store_id}/collect/all</span></div>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
                "collects": [
                    {
                        "id": 28803494904005,
                        "collection_id": 266900177093,
                        "product_id": 6656072384709,
                        "created_at": "2021-05-06T01:29:53+05:00",
                        "updated_at": "2021-05-06T01:29:53+05:00",
                        "position": 1,
                        "sort_value": "0000000001"
                    }, ...
                ]
            }
          </code> 
        </pre>

            </td>

        </tr>

        <tr>
            <td id="one">
                Retreive a single Collect:
                <div class="link"><span style="font-weight: 500">GET /api/store/{store_id}/collect/{collect_id}</span>
                </div>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
                "collect": {
                    "id": 28803494904005,
                    "collection_id": 266900177093,
                    "product_id": 6656072384709,
                    "created_at": "2021-05-06T01:29:53+05:00",
                    "updated_at": "2021-05-06T01:29:53+05:00",
                    "position": 1,
                    "sort_value": "0000000001"
                }
            }
          </code> 
        </pre>

            </td>

        </tr>



        <tr>
            <td id="store">
                Creates a Collect:
                <div class="link"><span style="font-weight: 500">POST /api/store/{store_id}/collect</span></div>
                <br>
                <p class="text-bold-800">Usage:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
                "collect": {
                  "product_id": 6656072384709,
                  "collection_id": 266900996293
                }
            }
          </code> 
        </pre>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
                "collect": {
                    "id": 28807691436229,
                    "collection_id": 266900996293,
                    "product_id": 6656072384709,
                    "created_at": "2021-05-06T17:45:10+05:00",
                    "updated_at": "2021-05-06T17:45:10+05:00",
                    "position": 1,
                    "sort_value": "0000000001"
                }
            }
          </code> 
        </pre>

            </td>

        </tr>

        <tr>
            <td id="delete">
                Deletes a Collect:
                <div class="link"><span style="font-weight: 500">DELETE
                        /api/store/{store_id}/collect/{collect_id}</span></div>


            </td>

        </tr>

    </table>


</div>