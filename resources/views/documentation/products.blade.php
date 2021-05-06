<div class="doc">
  <div class="header">Products</div>
    <div class="header-info">The Product resource lets you update and create products in a merchant's store. You can use product variants with the Product resource to create or update different versions of the same product. You can also add or update product images.</div>


    <hr>
    <div class="body-header">
        What you can do with Product
    </div>
    <div class="body-link">
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#all">GET /api/store/{store_id}/product/all</a></span>
          <br>
          <span class="link-info">Retrieves a list of all the products</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#one">GET /api/store/{store_id}/product/{product_id}</a></span>
          <br>
          <span class="link-info">Retrieves a single product</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#store">POST /api/store/{store_id}/product</a></span>
          <br>
          <span class="link-info">Creates a product</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#update">POST
                  /api/store/{store_id}/product/{product_id}</a></span>
          <br>
          <span class="link-info">Updates an existing product</span>
      </div>
      <div class="body-link-group">
        <span class="bullet">&#9679;</span>
        <span class="link"><a class="anchor" href="#update_variant">POST
                /api/store/4/product/{product_id}/variant/{variant_id}</a></span>
        <br>
        <span class="link-info">Updates variants of an existing product</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#delete">DELETE
                  /api/store/{store_id}/product/{product_id}</a></span>
          <br>
          <span class="link-info">Deletes a product</span>
      </div>
    </div>

    <hr>
    <div class="body-header">
        Product properties
    </div>
    <table class="table table-bordered">

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">body_html <b </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">"body_html": "&lt;p&gt;It's the small iPod with a big idea&lt;/p&gt;"</span>
            <br>
            A description of the product. Supports HTML formatting.
        </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">created_at <br> <b style="color: #7367f0">Read
              Only</b></td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"created_at": "2008-02-01T19:00:00-05:00" </span>
          <br>
          The date and time (ISO 8601 format) when the product was created.
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
      <td style="width: 150px; color: #333;font-weight: 500">id <br> <b style="color: #7367f0">Read
        Only</b></td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"id": 785902934 </span>
          <br>
          An unsigned 64-bit integer that's used as a unique identifier for the product. Each id is unique across the Shopify system. No two products will have the same id, even if they're from different shops.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">images </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"images": [
    {
        "id": 850703190,
        "product_id": 632910392,
        "position": 1,
        "created_at": "2018-01-08T12:34:47-05:00",
        "updated_at": "2018-01-08T12:34:47-05:00",
        "width": 110,
        "height": 140,
        "src": "http://example.com/burton.jpg",
        "variant_ids": [
            {}
        ]
    }
]

            </pre>
            
          </span>
          A list of product image objects, each one representing an image associated with the product.
          
      </td>

    <tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">options </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">
                <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"options": [
    {
      "name": "Title"
    }
]
              </pre>
              
            </span>
            The custom product property names like Size, Color, and Material. You can add up to 3 options of up to 255 characters each.
            
        </td>
  
      <tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">product_type </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">"product_type": "Cult Products" </span>
            <br>
            A categorization for the product used for filtering and searching products.
        </td>
      </tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">published_at</td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">"published_at": "2008-02-01T19:00:00-05:00" </span>
            <br>
            The date and time (ISO 8601 format) when the product was published. Can be set to null to unpublish the product from the Online Store channel.
        </td>
      </tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">published_scope</b>
        </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">"published_scope": "global" </span>
            <br><br>
            <ul style="padding-left: 15px;">
                <li><b>web:</b> The product is published to the Online Store channel but not published to the Point of Sale channel.</li>
                <li><b>global:</b> The product is published to both the Online Store channel and the Point of Sale channel.</li>
            </ul>
        </td>
      </tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">status</b>
        </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">"status": "active" </span>
            <br><br>
            <ul style="padding-left: 15px;">
                <li><b>active:</b> The product is ready to sell and is available to customers on the online store, sales channels, and apps. By default, existing products are set to active.</li>
                <li><b>archived:</b> The product is no longer being sold and isn't available to customers on sales channels and apps.</li>
                <li><b>draft:</b> The product isn't ready to sell and is unavailable to customers on sales channels and apps. By default, duplicated and unarchived products are set to draft.</li>
            </ul>
        </td>
      </tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">tags</b>
        </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">"tags": "Emotive, Flash Memory, MP3, Music" </span>
            <br>
            A string of comma-separated tags that are used for filtering and search. A product can have up to 250 tags. Each tag can have up to 255 characters.
        </td>
      </tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">template_suffix
        </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">"template_suffix": "special" </span>
            <br>
            The suffix of the Liquid template used for the product page. If this property is specified, then the product page uses a template called "product.suffix.liquid", where "suffix" is the value of this property. If this property is "" or null, then the product page uses the default template "product.liquid". (default: null)
        </td>
      </tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">title <br> <b style="color: #7367f0">Required</b>
        </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">"title": "IPod Nano - 8GB" </span>
            <br>
            The name of the product.
        </td>
      </tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">updated_at <br> <b style="color: #7367f0">Read
                Only</b>
        </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">"updated_at": "2008-02-01T19:00:00-05:00" </span>
            <br>
            The date and time (ISO 8601 format) when the product was last modified. A product's updated_at value can change for different reasons. For example, if an order is placed for a product that has inventory tracking set up, then the inventory adjustment is counted as an update.
        </td>
      </tr>

      <tr>
        <td style="width: 150px; color: #333;font-weight: 500">options </td>
        <td>
            <span style="color: #dc3545;font-weight: 500;">
                <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"variants": [
    {
        "barcode": "1234_pink",
        "compare_at_price": null,
        "created_at": "2012-08-24T14:01:47-04:00",
        "fulfillment_service": "manual",
        "grams": 567,
        "weight": 0.2,
        "weight_unit": "kg",
        "id": 808950810,
        "inventory_item_id": 341629,
        "inventory_management": "shopify",
        "inventory_policy": "continue",
        "inventory_quantity": 10,
        "option1": "Pink",
        "position": 1,
        "price": 199.99,
        "presentment_prices": [
          {
            "price": {
              "currency_code": "USD",
              "amount": "199.99"
            },
            "compare_at_price": null
          },
          {
            "price": {
              "currency_code": "EUR",
              "amount": "158.95"
            },
            "compare_at_price": null
          }, ...
          
        ],
        "product_id": 632910392,
        "requires_shipping": true,
        "sku": "IPOD2008PINK",
        "taxable": true,
        "title": "Pink",
        "updated_at": "2012-08-24T14:01:47-04:00"
    }
]
              </pre>
              
            </span>
            A list of product variants, each representing a different version of the product.
            <br><br>
            The position property is read-only. The position of variants is indicated by the order in which they are listed.
            <br><br>
            To retrieve the presentment_prices property on a variant, include the request header 'X-Shopify-Api-Features': 'include-presentment-prices'.
            
        </td>
  
      <tr>

        <tr>
          <td style="width: 150px; color: #333;font-weight: 500">vendor <br> <b style="color: #7367f0">Read
                  Only</b>
          </td>
          <td>
              <span style="color: #dc3545;font-weight: 500;">"vendor": "Apple" </span>
              <br>
              The name of the product's vendor.
          </td>
        </tr>

    </table>

    <hr>
    <div class="body-header">Endpoints</div>

    <table class="table table-bordered">
      <tr>
          <td id="all">
              Retreives a list of all the products:
              <div class="link"><span style="font-weight: 500">GET /api/store/{store_id}/product/all</span></div>
              <br>
              <p class="text-bold-800">Response:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
{
  "products": [
      {
          "id": 6656072384709,
          "title": "1",
          "body_html": "",
          "vendor": "900123412",
          "product_type": "",
          "created_at": "2021-05-06T01:09:10+05:00",
          "handle": "1",
          "updated_at": "2021-05-06T01:29:53+05:00",
          "published_at": "2021-05-06T01:09:20+05:00",
          "template_suffix": "",
          "status": "active",
          "published_scope": "web",
          "tags": "",
          "admin_graphql_api_id": "gid://shopify/Product/6656072384709",
          "variants": [
              {
                  "id": 39712478396613,
                  "product_id": 6656072384709,
                  "title": "Default Title",
                  "price": "0.00",
                  "sku": "",
                  "position": 1,
                  "inventory_policy": "deny",
                  "compare_at_price": null,
                  "fulfillment_service": "manual",
                  "inventory_management": "shopify",
                  "option1": "Default Title",
                  "option2": null,
                  "option3": null,
                  "created_at": "2021-05-06T01:09:10+05:00",
                  "updated_at": "2021-05-06T01:29:53+05:00",
                  "taxable": true,
                  "barcode": "",
                  "grams": 0,
                  "image_id": null,
                  "weight": 0,
                  "weight_unit": "kg",
                  "inventory_item_id": 41807253569733,
                  "inventory_quantity": 0,
                  "old_inventory_quantity": 0,
                  "requires_shipping": true,
                  "admin_graphql_api_id": "gid://shopify/ProductVariant/39712478396613"
              }
          ],
          "options": [
              {
                  "id": 8556085182661,
                  "product_id": 6656072384709,
                  "name": "Title",
                  "position": 1,
                  "values": [
                      "Default Title"
                  ]
              }
          ],
          "images": [],
          "image": null
      }
  ]
}
        </code> 
      </pre>

          </td>

      </tr>
      <tr>
          <td id="one">
              Retreive a single product:
              <div class="link"><span style="font-weight: 500">GET /api/store/{store_id}/product/{product_id}</span>
              </div>
              <br>
              <p class="text-bold-800">Response:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
{
    "product": {
        "id": 6656072384709,
        "title": "1",
        "body_html": "",
        "vendor": "900123412",
        "product_type": "",
        "created_at": "2021-05-06T01:09:10+05:00",
        "handle": "1",
        "updated_at": "2021-05-06T01:29:53+05:00",
        "published_at": "2021-05-06T01:09:20+05:00",
        "template_suffix": "",
        "status": "active",
        "published_scope": "web",
        "tags": "",
        "admin_graphql_api_id": "gid://shopify/Product/6656072384709",
        "variants": [
            {
                "id": 39712478396613,
                "product_id": 6656072384709,
                "title": "Default Title",
                "price": "0.00",
                "sku": "",
                "position": 1,
                "inventory_policy": "deny",
                "compare_at_price": null,
                "fulfillment_service": "manual",
                "inventory_management": "shopify",
                "option1": "Default Title",
                "option2": null,
                "option3": null,
                "created_at": "2021-05-06T01:09:10+05:00",
                "updated_at": "2021-05-06T01:29:53+05:00",
                "taxable": true,
                "barcode": "",
                "grams": 0,
                "image_id": null,
                "weight": 0,
                "weight_unit": "kg",
                "inventory_item_id": 41807253569733,
                "inventory_quantity": 0,
                "old_inventory_quantity": 0,
                "requires_shipping": true,
                "admin_graphql_api_id": "gid://shopify/ProductVariant/39712478396613"
            }
        ],
        "options": [
            {
                "id": 8556085182661,
                "product_id": 6656072384709,
                "name": "Title",
                "position": 1,
                "values": [
                    "Default Title"
                ]
            }
        ],
        "images": [],
        "image": null
    }
}
        </code> 
      </pre>

          </td>

      </tr>
      <tr>
          <td id="store">
              Creates a product:
              <div class="link"><span style="font-weight: 500">POST /api/store/{store_id}/product</span></div>
              <br>
              <p class="text-bold-800">Usage:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          {
            "product": {
              "title": "Burton Custom Freestyle 151",
              "body_html": "<strong>Good snowboard!</strong>",
              "vendor": "Burton",
              "product_type": "Snowboard",
              "tags": [
                "Barnes & Noble",
                "John's Fav",
                "Big Air"
              ]
            }
          }
        </code> 
      </pre>
              <br>
              <p class="text-bold-800">Response:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          {
            "product": {
                "id": 6656864911557,
                "title": "Burton Custom Freestyle 151",
                "body_html": "<strong>Good snowboard!</strong>",
                "vendor": "Burton",
                "product_type": "Snowboard",
                "created_at": "2021-05-06T16:47:30+05:00",
                "handle": "burton-custom-freestyle-151",
                "updated_at": "2021-05-06T16:47:31+05:00",
                "published_at": "2021-05-06T16:47:30+05:00",
                "template_suffix": null,
                "status": "active",
                "published_scope": "web",
                "tags": "Barnes & Noble, Big Air, John's Fav",
                "admin_graphql_api_id": "gid://shopify/Product/6656864911557",
                "variants": [
                    {
                        "id": 39715998499013,
                        "product_id": 6656864911557,
                        "title": "Default Title",
                        "price": "0.00",
                        "sku": "",
                        "position": 1,
                        "inventory_policy": "deny",
                        "compare_at_price": null,
                        "fulfillment_service": "manual",
                        "inventory_management": null,
                        "option1": "Default Title",
                        "option2": null,
                        "option3": null,
                        "created_at": "2021-05-06T16:47:31+05:00",
                        "updated_at": "2021-05-06T16:47:31+05:00",
                        "taxable": true,
                        "barcode": null,
                        "grams": 0,
                        "image_id": null,
                        "weight": 0,
                        "weight_unit": "kg",
                        "inventory_item_id": 41810815418565,
                        "inventory_quantity": 0,
                        "old_inventory_quantity": 0,
                        "requires_shipping": true,
                        "admin_graphql_api_id": "gid://shopify/ProductVariant/39715998499013"
                    }
                ],
                "options": [
                    {
                        "id": 8557123961029,
                        "product_id": 6656864911557,
                        "name": "Title",
                        "position": 1,
                        "values": [
                            "Default Title"
                        ]
                    }
                ],
                "images": [],
                "image": null
            }
        }
        </code> 
      </pre>

          </td>

      </tr>
      <tr>
          <td id="update">
              Updates an existing product:
              <div class="link"><span style="font-weight: 500">POST
                      /api/store/{store_id}/product/{product_id}</span></div>
              <br>
              <p class="text-bold-800">Usage:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          { 
            "product": {
              "id": 6655896977605,
              "title": "Updated Product Title"
              
            }
          }
        </code> 
      </pre>
              <br>
              <p class="text-bold-800">Response:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          {
            "product": {
                "id": 6656864911557,
                "title": "Updated Product Title",
                "body_html": "<strong>Good snowboard!</strong>",
                "vendor": "Burton",
                "product_type": "Snowboard",
                "created_at": "2021-05-06T16:47:30+05:00",
                "handle": "burton-custom-freestyle-151",
                "updated_at": "2021-05-06T16:48:40+05:00",
                "published_at": "2021-05-06T16:47:30+05:00",
                "template_suffix": null,
                "status": "active",
                "published_scope": "web",
                "tags": "Barnes & Noble, Big Air, John's Fav",
                "admin_graphql_api_id": "gid://shopify/Product/6656864911557",
                "variants": [
                    {
                        "id": 39715998499013,
                        "product_id": 6656864911557,
                        "title": "Default Title",
                        "price": "0.00",
                        "sku": "",
                        "position": 1,
                        "inventory_policy": "deny",
                        "compare_at_price": null,
                        "fulfillment_service": "manual",
                        "inventory_management": null,
                        "option1": "Default Title",
                        "option2": null,
                        "option3": null,
                        "created_at": "2021-05-06T16:47:31+05:00",
                        "updated_at": "2021-05-06T16:47:31+05:00",
                        "taxable": true,
                        "barcode": null,
                        "grams": 0,
                        "image_id": null,
                        "weight": 0,
                        "weight_unit": "kg",
                        "inventory_item_id": 41810815418565,
                        "inventory_quantity": 0,
                        "old_inventory_quantity": 0,
                        "requires_shipping": true,
                        "admin_graphql_api_id": "gid://shopify/ProductVariant/39715998499013"
                    }
                ],
                "options": [
                    {
                        "id": 8557123961029,
                        "product_id": 6656864911557,
                        "name": "Title",
                        "position": 1,
                        "values": [
                            "Default Title"
                        ]
                    }
                ],
                "images": [],
                "image": null
            }
        }
        </code> 
      </pre>

          </td>

      </tr>

      <tr>
        <td id="update_variant">
            Updates variants of an existing product:
            <div class="link"><span style="font-weight: 500">POST
              /api/store/4/product/{product_id}/variant/{variant_id}</span></div>
            <br>
            <p class="text-bold-800">Usage:</p>
            <pre class="line-numbers">
      <code class="language-json"> 
        {
            "product": {
                "id": 6656072384709,
                "variants": [
                  {
                      "id": 39712478396613,
                      "inventory_quantity": "2000"
                  }
                ]
            }
        }
      </code> 
    </pre>
            <br>
            <p class="text-bold-800">Response:</p>
            <pre class="line-numbers">
      <code class="language-json"> 
        {
          "product": {
              "id": 6656072384709,
              "title": "1",
              "body_html": "",
              "vendor": "900123412",
              "product_type": "",
              "created_at": "2021-05-06T01:09:10+05:00",
              "handle": "1",
              "updated_at": "2021-05-06T17:04:34+05:00",
              "published_at": "2021-05-06T01:09:20+05:00",
              "template_suffix": "",
              "status": "active",
              "published_scope": "web",
              "tags": "",
              "admin_graphql_api_id": "gid://shopify/Product/6656072384709",
              "variants": [
                  {
                      "id": 39712478396613,
                      "product_id": 6656072384709,
                      "title": "Default Title",
                      "price": "0.00",
                      "sku": "",
                      "position": 1,
                      "inventory_policy": "deny",
                      "compare_at_price": null,
                      "fulfillment_service": "manual",
                      "inventory_management": "shopify",
                      "option1": "Default Title",
                      "option2": null,
                      "option3": null,
                      "created_at": "2021-05-06T01:09:10+05:00",
                      "updated_at": "2021-05-06T17:04:34+05:00",
                      "taxable": true,
                      "barcode": "",
                      "grams": 0,
                      "image_id": null,
                      "weight": 0,
                      "weight_unit": "kg",
                      "inventory_item_id": 41807253569733,
                      "inventory_quantity": 2000,
                      "old_inventory_quantity": 2000,
                      "requires_shipping": true,
                      "admin_graphql_api_id": "gid://shopify/ProductVariant/39712478396613"
                  }
              ],
              "options": [
                  {
                      "id": 8556085182661,
                      "product_id": 6656072384709,
                      "name": "Title",
                      "position": 1,
                      "values": [
                          "Default Title"
                      ]
                  }
              ],
              "images": [],
              "image": null
          }
      }
      </code> 
    </pre>

        </td>

    </tr>


      <tr>
          <td id="delete">
              Deletes a product:
              <div class="link"><span style="font-weight: 500">DELETE
                      /api/store/{store_id}/product/{product_id}</span></div>


          </td>

      </tr>
  </table>



  <br><br><br><br><br><br><br><br><br><br><br>



</div>