<div class="doc">

  <div class="header">DiscountCode</div>
    <div class="header-info">You can use the PriceRule DiscountCode resource to create discount codes that enable specific discounts to be redeemed. Merchants can distribute discount codes to their customers using a variety of means, such as an email or URL, and customers can apply these codes at checkout.
      <br><br>
      Each discount code belongs to a price rule, which holds the logic for the discount. For more information, see the <a href="?mode=price_rules">PriceRule</a> resource.

      <br><br>
      To create multiple discount codes that use the same price rule logic, use the batch endpoint. For example, you might allow merchants to create a batch of discount codes that belong to the same price rule but are each personalized for a different customer.
    </div>
    <hr>
    <div class="body-header">
      What you can do with DiscountCode
    </div>

    <div class="body-link">
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#all">GET /api/store/{store_id}/price-rule/{price_rule_id}/discount-code/all</a></span>
          <br>
          <span class="link-info">Retrieves a list of all the dicount codes</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#one">GET /api/store/{store_id}/price-rule/{price_rule_id}/discount-code/{discount_code_id}</a></span>
          <br>
          <span class="link-info">Retrieves a single discount code</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#store">POST /api/store/{store_id}/price-rule/{price_rule_id}/discount-code</a></span>
          <br>
          <span class="link-info">Creates a discount code</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#update">POST
            /api/store/{store_id}/price-rule/{price_rule_id}/discount-code/{discount_code_id}</a></span>
          <br>
          <span class="link-info">Updates an existing discount code</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#delete">DELETE
            /api/store/{store_id}/price-rule/{price_rule_id}/discount-code/{discount_code_id}</a></span>
          <br>
          <span class="link-info">Deletes a discount code</span>
      </div>
  </div>
  <hr>
    <div class="body-header">
        Category properties
    </div>
  
  <table class="table table-bordered">

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">code <br> <b style="color: #7367f0">Required</b>
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"code": "SUMMERSALE10OFF" </span>
          <br>
          The case-insensitive discount code that customers use at checkout. (maximum: 255 characters), Use the same value for code as the title property of the associated price rule.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">created_at <br> <b style="color: #7367f0">Read Only</b>
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"created_at": "2017-03-13T16:09:54-04:00" </span>
          <br>
          The date and time (ISO 8601 format) when the discount code was created.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">updated_at <br> <b style="color: #7367f0">Read Only</b>
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"updated_at": "2017-03-13T16:09:54-04:00" </span>
          <br>
          The date and time (ISO 8601 format) when the discount code was updated.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">id <br> <b style="color: #7367f0">Read Only</b>
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"id": 9808080986 </span>
          <br>
          The ID for the discount code.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">price_rule_id <br> <b style="color: #7367f0">Read Only</b>
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"price_rule_id": 423748927342 </span>
          <br>
          The ID for the price rule that this discount code belongs to.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">usage_count <br> <b style="color: #7367f0">Read Only</b>
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"usage_count": 3 </span>
          <br>
          The number of times that the discount code has been redeemed.
      </td>
    </tr>

  </table>

  <hr>
    <div class="body-header">Endpoints</div>
    <table class="table table-bordered">
        <tr>
            <td id="all">
              Retrieves a list of all the dicount codes
                <div class="link"><span style="font-weight: 500"> GET /api/store/{store_id}/price-rule/{price_rule_id}/discount-code/all</span></div>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
              "discount_codes": [
                  {
                      "id": 11217121050821,
                      "price_rule_id": 946768773317,
                      "code": "DISCOUNT_CODE",
                      "usage_count": 0,
                      "created_at": "2021-05-09T05:19:57+05:00",
                      "updated_at": "2021-05-09T05:19:57+05:00"
                  }
              ]
            }
          </code> 
        </pre>

            </td>

        </tr>
        <tr>
            <td id="one">
                Retrieves a single discount code:
                <div class="link"><span style="font-weight: 500">GET /api/store/{store_id}/price-rule/{price_rule_id}/discount-code/{discount_code_id}</span>
                </div>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
              "discount_codes": [
                  {
                      "id": 11217121050821,
                      "price_rule_id": 946768773317,
                      "code": "DISCOUNT_CODE",
                      "usage_count": 0,
                      "created_at": "2021-05-09T05:19:57+05:00",
                      "updated_at": "2021-05-09T05:19:57+05:00"
                  }
              ]
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
                "discount_code": {
                    "code": "DISCOUNT_CODE"
                }
            }
          </code> 
        </pre>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
                "discount_code": {
                    "id": 11217121050821,
                    "price_rule_id": 946768773317,
                    "code": "DISCOUNT_CODE",
                    "usage_count": 0,
                    "created_at": "2021-05-09T05:19:57+05:00",
                    "updated_at": "2021-05-09T05:19:57+05:00"
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
                "discount_code": {
                    "id": 11209010643141,
                    "code": "Updated DISCOUNT_CODE"
                }
            }
          </code> 
        </pre>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
                "discount_code": {
                    "id": 11217121050821,
                    "price_rule_id": 946768773317,
                    "code": "Updated DISCOUNT_CODE",
                    "usage_count": 0,
                    "created_at": "2021-05-09T05:19:57+05:00",
                    "updated_at": "2021-05-09T05:20:29+05:00"
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


</div>