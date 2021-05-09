<div class="doc">
    <div class="header">Categories</div>
    <div class="header-info">A category is a grouping of products that a merchant can create to make their store easier
        to browse. The merchant creates a category and then selects the products that will go into it.
        <br><br>
        <img src="{{ asset('resources/collect.png') }}"
            style="left:50%; position:relative; transform: translateX(-50%)" alt="">
        <br><br>
        The <a href="?mode=collects">Collect</a> resource is used to connect a product to a category.
    </div>
    <hr>
    <div class="body-header">
        What you can do with Category
    </div>
    <div class="body-link">
        <div class="body-link-group">
            <span class="bullet">&#9679;</span>
            <span class="link"><a class="anchor" href="#all">GET /api/store/{store_id}/category/all</a></span>
            <br>
            <span class="link-info">Retrieves a list of all the categories</span>
        </div>
        <div class="body-link-group">
            <span class="bullet">&#9679;</span>
            <span class="link"><a class="anchor" href="#one">GET /api/store/{store_id}/category/{category_id}</a></span>
            <br>
            <span class="link-info">Retrieves a single category</span>
        </div>
        <div class="body-link-group">
            <span class="bullet">&#9679;</span>
            <span class="link"><a class="anchor" href="#store">POST /api/store/{store_id}/category</a></span>
            <br>
            <span class="link-info">Creates a category</span>
        </div>
        <div class="body-link-group">
            <span class="bullet">&#9679;</span>
            <span class="link"><a class="anchor" href="#update">POST
                    /api/store/{store_id}/category/{category_id}</a></span>
            <br>
            <span class="link-info">Updates an existing category</span>
        </div>
        <div class="body-link-group">
            <span class="bullet">&#9679;</span>
            <span class="link"><a class="anchor" href="#delete">DELETE
                    /api/store/{store_id}/category/{category_id}</a></span>
            <br>
            <span class="link-info">Deletes a category</span>
        </div>
    </div>
    <hr>
    <div class="body-header">
        Category properties
    </div>
    <table class="table table-bordered">
        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">body_html <b </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"body_html": "&lt;p&gt;The best selling iPods
                    ever&lt;/p&gt;"</span>
                <br>
                The description of the category, complete with HTML markup. Many templates display this on their
                category pages.
            </td>
        </tr>

        <tr>
          <td style="width: 150px; color: #333;font-weight: 500">handle </td>
          <td>
              <span style="color: #dc3545;font-weight: 500;">"handle": "ipod-nano" </span>
              <br>
              A unique human-friendly string for the product. Automatically generated from the product's title. Used by the Liquid templating language to refer to objects.
          </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">image </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">
                    <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"image": {
    "src": "http://static.shopify.com/categorys/ipod.jpg?0",
    "alt": "iPods",
    "width": 500,
    "height": 488,
    "created_at": "2018-04-19T09:34:47-04:00"
}
                  </pre>
                </span>
                Image associated with the category. Valid values are:
                <br><br>
                <ul>
                    <li><b>attachment: </b> An image attached to a category returned as Base64-encoded binary data.</li>
                    <li><b>src:</b> The source URL that specifies the location of the image.</li>
                    <li><b>alt:</b> Alternative text that describes the category image.</li>
                    <li><b>created_at:</b> The time and date (ISO 8601 format) when the image was added to the
                        category.</li>
                    <li><b>width:</b> The width of the image in pixels.</li>
                    <li><b>height:</b> The height of the image in pixels.</li>
                </ul>
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">id <br> <b style="color: #7367f0">Read Only</b> </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"id": "534891672409"</span>
                <br>
                The ID for the category.
            </td>
        </tr>
        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">published </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"published": true</span>
                <br>
                Whether the category is published to the Online Store channel.
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">published_at <br> <b style="color: #7367f0">Read
                    Only</b></td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"published_at": "2008-02-01T19:00:00-05:00" </span>
                <br>
                The time and date (ISO 8601 format) when the category was made visible. Returns null for a hidden
                category.
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">published_scope <br> <b style="color: #7367f0">Read
                    Only</b>
            </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"published_scope": "global" </span>
                <br><br>
                <ul style="padding-left: 15px;">
                    <li><b>web:</b> The category is published to the Online Store channel but not published to the Point
                        of Sale channel.</li>
                    <li><b>global:</b> The category is published to both the Online Store channel and the Point of Sale
                        channel.</li>
                </ul>
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">sort_order</td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"sort_order": "manual" </span>
                <br><br>
                The order in which products in the category appear. Valid values:
                <br><br>
                <ul>
                    <li><b>alpha-asc:</b> Alphabetically, in ascending order (A - Z).</li>
                    <li><b>alpha-desc</b>: Alphabetically, in descending order (Z - A).</li>
                    <li><b>best-selling:</b> By best-selling products.</li>
                    <li><b>created:</b> By date created, in ascending order (oldest - newest).</li>
                    <li><b>created-desc:</b> By date created, in descending order (newest - oldest).</li>
                    <li><b>manual:</b> Order created by the shop owner.</li>
                    <li><b>price-asc:</b> By price, in ascending order (lowest - highest).</li>
                    <li><b>price-desc:</b> By price, in descending order (highest - lowest).</li>
                </ul>

            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">template_suffix
            </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"template_suffix": "custom" </span>
                <br>
                The suffix of the liquid template being used. For example, if the value is custom, then the category
                is using the collection.custom.liquid template. If the value is null, then the category is using the
                default collection.liquid.
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">title <br> <b style="color: #7367f0">Required</b>
            </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"title": "Ipods" </span>
                <br>
                The name of the category. (limit: 255 characters)
            </td>
        </tr>

        <tr>
            <td style="width: 150px; color: #333;font-weight: 500">updated_at <br> <b style="color: #7367f0">Read
                    Only</b>
            </td>
            <td>
                <span style="color: #dc3545;font-weight: 500;">"updated_at": "2008-02-01T19:00:00-05:00" </span>
                <br>
                The date and time (ISO 8601 format) when the custom category was last modified.
            </td>
        </tr>


        </tr>
    </table>

    <hr>
    <div class="body-header">Endpoints</div>
    <table class="table table-bordered">
        <tr>
            <td id="all">
                Retreivea a list of all the Categories:
                <div class="link"><span style="font-weight: 500">GET /api/store/{store_id}/category/all</span></div>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
              "categories": [
                  {
                      "id": 266900177093,
                      "handle": "1",
                      "updated_at": "2021-05-06T01:29:53+05:00",
                      "published_at": "2021-05-06T01:29:33+05:00",
                      "sort_order": "best-selling",
                      "template_suffix": "",
                      "published_scope": "web",
                      "title": "1",
                      "body_html": "",
                      "admin_graphql_api_id": "gid://shopify/category/266900177093"
                  }, ...
              ]
          }
          </code> 
        </pre>

            </td>

        </tr>
        <tr>
            <td id="one">
                Retreive a single Category:
                <div class="link"><span style="font-weight: 500">GET /api/store/{store_id}/category/{category_id}</span>
                </div>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
              "category": {
                  "id": 266900177093,
                  "handle": "1",
                  "updated_at": "2021-05-06T01:29:53+05:00",
                  "published_at": "2021-05-06T01:29:33+05:00",
                  "sort_order": "best-selling",
                  "template_suffix": "",
                  "products_count": 1,
                  "published_scope": "web",
                  "title": "1",
                  "body_html": "",
                  "admin_graphql_api_id": "gid://shopify/category/266900177093"
              }
          }
          </code> 
        </pre>

            </td>

        </tr>
        <tr>
            <td id="store">
                Creates a Category:
                <div class="link"><span style="font-weight: 500">POST /api/store/{store_id}/category</span></div>
                <br>
                <p class="text-bold-800">Usage:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
                "custom_category": {
                    "title": "Macbooks"
                }
            }
          </code> 
        </pre>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
              "category": {
                  "id": 266932584645,
                  "handle": "macbooks",
                  "updated_at": "2021-05-06T15:10:53+05:00",
                  "published_at": "2021-05-06T15:10:53+05:00",
                  "sort_order": "best-selling",
                  "template_suffix": null,
                  "published_scope": "web",
                  "title": "Macbooks",
                  "body_html": null,
                  "admin_graphql_api_id": "gid://shopify/category/266932584645"
              }
          }
          </code> 
        </pre>

            </td>

        </tr>
        <tr>
            <td id="update">
                Updates an existing Category:
                <div class="link"><span style="font-weight: 500">POST
                        /api/store/{store_id}/category/{category_id}</span></div>
                <br>
                <p class="text-bold-800">Usage:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
              "custom_category": {
                "id": 266883727557,
                "title": "Updated Category"
              }
            }
          </code> 
        </pre>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
              "category": {
                  "id": 266932584645,
                  "handle": "macbooks",
                  "updated_at": "2021-05-06T15:20:33+05:00",
                  "published_at": "2021-05-06T15:10:53+05:00",
                  "sort_order": "best-selling",
                  "template_suffix": null,
                  "published_scope": "web",
                  "title": "Updated Category",
                  "body_html": null,
                  "admin_graphql_api_id": "gid://shopify/category/266932584645"
              }
          }
          </code> 
        </pre>

            </td>

        </tr>
        <tr>
            <td id="delete">
                Deletes a Category:
                <div class="link"><span style="font-weight: 500">DELETE
                        /api/store/{store_id}/category/{category_id}</span></div>


            </td>

        </tr>
    </table>



    <br><br><br><br><br><br><br><br><br><br><br>


</div>
