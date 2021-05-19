<div class="doc">
  <div class="header">Price Rules</div>
  <div class="header-info">You can use the PriceRule resource to create discounts using conditions. You can then associate the conditions with a discount code by using the DiscountCode resource. Merchants can distribute the discount codes to their customers. <br><br>
    Using the PriceRule resource, you can create discounts that specify a discount as a percentage, a fixed amount, or free shipping. You use entitlements and prerequisites to dynamically build these discounts. <br><br>
    To learn about how to associate a price rule with a discount code, see the <a href="?mode=discount_codes">DiscountCode</a> resource.
    <hr>

    <div class="header">Create a price rule</div>
    You can create price rules with entitlements and prerequisites. Entitlements describe the designated resources that a discount applies to, such as specific products, variants, or collections. Prerequisites describe the requirements that must be met in order for the discount to apply to the entitled resources. For example, you might want a discount to apply only to a certain shipping price range, or a certain subtotal range.
    <br><br>
    You can use entitlements, prereqisites, and other conditions to create discounts, such as the following examples:
    <br><br>
    <ul>
      <li>$10 off the buyer's order if the total exceeds $40</li>
      <li>15% off certain collections</li>
      <li>free shipping on orders over $100.00 for Canadian buyers, redeemable up to 20 times</li>
    </ul>

  </div>
  <hr>
  <div class="body-header">
      What you can do with Price Rules
  </div>
  <div class="body-link">
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#all">GET /api/store/{store_id}/price-rule/all</a></span>
          <br>
          <span class="link-info">Retrieves a list of all the price rules</span>
      </div>

      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#product_price_rules">GET /api/store/{store_id}/price-rule/product/{product_id}</a></span>
          <br>
          <span class="link-info">Retrieves a list of all the price rules with specific entitled Product id</span>
      </div>

      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#one">GET /api/store/{store_id}/price-rule/{price_rule_id}</a></span>
          <br>
          <span class="link-info">Retrieves a single price rule</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#store">POST /api/store/{store_id}/price-rule</a></span>
          <br>
          <span class="link-info">Creates a price rule</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#update">POST
                  /api/store/{store_id}/price-rule/{price_rule_id}</a></span>
          <br>
          <span class="link-info">Updates an existing price rule</span>
      </div>
      <div class="body-link-group">
          <span class="bullet">&#9679;</span>
          <span class="link"><a class="anchor" href="#delete">DELETE
                  /api/store/{store_id}/price_rule/{price_rule_id}</a></span>
          <br>
          <span class="link-info">Deletes a price rule</span>
      </div>
  </div>
  <hr>
  <div class="body-header">
      Category properties
  </div>
  
  <table class="table table-bordered">

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">allocation_method <br> 
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"allocation_method": "each" </span>
          <br><br>
          The allocation method of the price rule. Valid values:
          <br><br>
          <ul style="padding-left: 15px;">
              <li><b>each:</b> The discount is applied to each of the entitled items. For example, for a price rule that takes $15 off, each entitled line item in a checkout will be discounted by $15.</li>
              <li><b>across:</b> The calculated discount amount will be applied across the entitled items. For example, for a price rule that takes $15 off, the discount will be applied across all the entitled items.</li>
          </ul>
          When the value of target_type is shipping_line, then this value must be each.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">created_at <br> <b style="color: #7367f0">Read
              Only</b>
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"created_at": "2008-02-01T19:00:00-05:00" </span>
          <br>
          The date and time (ISO 8601 format) when the price rule was created.
      </td>
    </tr>
    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">updated_at <br> <b style="color: #7367f0">Read
              Only</b>
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"updated_at": "2008-02-01T19:00:00-05:00" </span>
          <br>
          The date and time (ISO 8601 format) when the price rule was updated.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">customer_selection <br> 
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"customer_selection": "prerequisite" </span>
          <br><br>
          The customer selection for the price rule. Valid values:
          <br><br>
          <ul style="padding-left: 15px;">
              <li><b>all:</b> The price rule is valid for all customers.</li>
              <li><b>prerequisite:</b> The customer must either belong to one of the customer saved searches specified by prerequisite_saved_search_ids, or be one of the customers specified by prerequisite_customer_ids.</li>
          </ul>
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">ends_at <br> 
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"ends_at": "2008-02-01T19:00:00-05:00" </span>
          <br>
          The date and time (ISO 8601 format) when the price rule ends. Must be after starts_at.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">entitled_collection_ids </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"entitled_collection_ids": [
  4564654869,
  8979761006
]  </pre>
          </span>
        
          A list of IDs of collections whose products will be eligible to the discount. It can be used only with target_type set to line_item and target_selection set to entitled. It can't be used in combination with entitled_product_ids or entitled_variant_ids.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">entitled_country_ids </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"entitled_country_ids": [
  7897987023,
  3569053679
]  </pre>
          </span>
        
          A list of IDs of shipping countries that will be entitled to the discount. It can be used only with target_type set to shipping_line and target_selection set to entitled.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">entitled_product_ids </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"entitled_product_ids": [
  7897397755,
  42382368242
]  </pre>
          </span>
        
          A list of IDs of products that will be entitled to the discount. It can be used only with target_type set to line_item and target_selection set to entitled.
          <br><br>
          If a product variant is included in entitled_variant_ids, then entitled_product_ids can't include the ID of the product associated with that variant.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">entitled_variant_ids </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"entitled_variant_ids": [
  7897397755,
  42382368242
]  </pre>
          </span>
        
          A list of IDs of product variants that will be entitled to the discount. It can be used only with target_type set to line_item and target_selection set to entitled.
          <br><br>
          If a product is included in entitled_product_ids, then entitled_variant_ids can't include the ID of any variants associated with that product.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">id <br> <b style="color: #7367f0">Read Only</b> </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"id": 534891672409</span>
          <br>
          The ID for the price rule.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">once_per_customer <br> 
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"once_per_customer": true</span>
          <br>
          Whether the generated discount code will be valid only for a single use per customer. This is tracked using customer ID.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_customer_ids </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"prerequisite_customer_ids": [
  7897397755,
  42382368242
]  </pre>
          </span>
        
          A list of customer IDs. For the price rule to be applicable, the customer must match one of the specified customers.
          <br><br>
          If prerequisite_customer_ids is populated, then prerequisite_saved_search_ids must be empty.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_quantity_range </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"prerequisite_quantity_range":{
  "greater_than_or_equal_to": 2
}  </pre>
          </span>
        
          The minimum number of items for the price rule to be applicable. It has the following property:
          <br><br>
          <b>greater_than_or_equal_to:</b> The quantity of an entitled cart item must be greater than or equal to this value.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_saved_search_ids </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"prerequisite_saved_search_ids":[
  1123452345,
  43535363636
]  </pre>
          </span>
        
          A list of customer saved search IDs. For the price rule to be applicable, the customer must be in the group of customers matching a customer saved search.
          <br><br>
          If prerequisite_saved_search_ids is populated, then prerequisite_customer_ids must be empty.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_shipping_price_range </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"prerequisite_shipping_price_range":{
  "less_than_or_equal_to": "10.0"
}  </pre>
          </span>
        
          The maximum shipping price for the price rule to be applicable. It has the following property:
          <br><br>
          <b>less_than_or_equal_to:</b> The shipping price must be less than or equal to this value.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_subtotal_range </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"prerequisite_subtotal_range":{
  "greater_than_or_equal_to": "40.0"
}  </pre>
          </span>
        
          The minimum subtotal for the price rule to be applicable. It has the following property:
          <br><br>
          <b>greater_than_or_equal_to:</b> The subtotal of the entitled cart items must be greater than or equal to this value for the discount to apply.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_to_entitlement_purchase </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"prerequisite_to_entitlement_purchase":{
  "prerequisite_amount": "80.00"
}  </pre>
          </span>
        
          The prerequisite purchase for a Buy X Get Y discount. It has the following property:
          <br><br>
          <b>prerequisite_amount:</b> The minimum purchase amount required to be entitled to the discount.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">starts_at </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">
              <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"starts_at": "2017-01-19T17:59:10Z"  </pre>
          </span>
        
          The date and time (ISO 8601 format) when the price rule starts.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">target_selection <br> 
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"target_selection": "entitled" </span>
          <br><br>The target selection method of the price rule. Valid values:
          <br><br>
          <ul style="padding-left: 15px;">
              <li><b>all:</b> The price rule applies the discount to all line items in the checkout.</li>
              <li><b>entitled:</b> The price rule applies the discount to selected entitlements only.</li>
          </ul>
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">target_type <br> 
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"target_type": "line_item" </span>
          <br><br>The target type that the price rule applies to. Valid values:
          <br><br>
          <ul style="padding-left: 15px;">
              <li><b>line_item:</b> The price rule applies to the cart's line items.</li>
              <li><b>shipping_line:</b> The price rule applies to the cart's shipping lines.</li>
          </ul>
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">title 
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"title": "SUMMERSALE10OFF" </span>
          <br>
          The title of the price rule. This is used by the Shopify admin search to retrieve discounts. It is also displayed on the Discounts page of the Shopify admin for bulk discounts. <br><br>
          For non-bulk discounts, the discount code is displayed on the admin.
          <br><br>
          For a consistent search experience, use the same value for title as the code property of the associated discount code.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">usage_limit 
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"usage_limit": 10 </span>
          <br>
          The maximum number of times the price rule can be used, per discount code.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_product_ids <br> 
      </td>
      <td>
        <span style="color: #dc3545;font-weight: 500;">
          <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"prerequisite_product_ids":[
  7897397755,
  42382368242
]  </pre>
      </span>
          <br><br>
          List of product ids that will be a prerequisites for a Buy X Get Y type discount. The prerequisite_product_ids can be used only with:
          <br><br>
          <ul style="padding-left: 15px;">
            <li>target_type set to line_item,</li>
            <li>target_selection set to entitled,</li>
            <li>allocation_method set to each and</li>
            <li>prerequisite_to_entitlement_quantity_ratio defined.</li>
          </ul>
          If a product variant is included in prerequisite_variant_ids, then prerequisite_product_ids can't include the ID of the product associated with that variant.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_variant_ids <br> 
      </td>
      <td>
        <span style="color: #dc3545;font-weight: 500;">
          <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
	
"prerequisite_variant_ids": [
  6798798798,
  5675765905
]  </pre>
      </span>
          <br><br>
          List of variant ids that will be a prerequisites for a Buy X Get Y type discount. The entitled_variant_ids can be used only with:
          <br><br>
          <ul style="padding-left: 15px;">
            <li>target_type set to line_item,</li>
            <li>target_selection set to entitled,</li>
            <li>allocation_method set to each and</li>
            <li>prerequisite_to_entitlement_quantity_ratio defined.</li>
          </ul>
          If a product is included in prerequisite_product_ids, then prerequisite_variant_ids can't include the ID of any variants associated with that product.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_collection_ids <br> 
      </td>
      <td>
        <span style="color: #dc3545;font-weight: 500;">
          <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
	
"prerequisite_collection_ids": [
  6798798798,
  5675765905
]  </pre>
      </span>
          <br><br>
          List of variant ids that will be a prerequisites for a Buy X Get Y type discount. The entitled_variant_ids can be used only with:
          <br><br>
          <ul style="padding-left: 15px;">
            <li>target_type set to line_item,</li>
            <li>target_selection set to entitled,</li>
            <li>allocation_method set to each and</li>
            <li>prerequisite_to_entitlement_quantity_ratio defined.</li>
          </ul>
          Cannot be used in combination with prerequisite_product_ids or prerequisite_variant_ids.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">value 
      </td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"value": -35 </span>
          <br>
          The value of the price rule. If if the value of target_type is shipping_line, then only -100 is accepted. The value must be negative.
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">value_type</td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"value_type": "fixed_amount" </span>
          <br><br>The value type of the price rule. Valid values:
          <br><br>
          <ul>
            <li><b>fixed_amount:</b> Applies a discount of value as a unit of the store's currency. For example, if value is -30 and the store's currency is USD, then $30 USD is deducted when the discount is applied.</li>
            <li><b>percentage:</b> Applies a percentage discount of value. For example, if value is -30, then 30% will be deducted when the discount is applied.</li>
          </ul>
          If target_type is shipping_line, then only percentage is accepted.

      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">prerequisite_to_entitlement_quantity_ratio <br> 
      </td>
      <td>
        <span style="color: #dc3545;font-weight: 500;">
          <pre style="color: #dc3545;font-weight: 500;background: #fff;font-size: 15px">
"prerequisite_to_entitlement_quantity_ratio": {
  "prerequisite_quantity": 2,
  "entitled_quantity": 1
}  </pre>
      </span>
          <br><br>
          Buy/Get ratio for a Buy X Get Y discount. prerequisite_quantity defines the necessary 'buy' quantity and entitled_quantity the offered 'get' quantity.
          <br><br>
          The prerequisite_to_entitlement_quantity_ratio can be used only with:
          <br><br>
          <ul style="padding-left: 15px;">
            <li>value_type set to percentage,</li>
            <li>target_type set to line_item,</li>
            <li>target_selection set to entitled,</li>
            <li>allocation_method set to each,</li>
            <li>prerequisite_product_ids or prerequisite_variant_ids or prerequisite_collection_ids defined and</li>
            <li>entitled_product_ids or entitled_variant_ids or entitled_collection_ids defined.</li>
          </ul>
          Cannot be used in combination with prerequisite_subtotal_range, prerequisite_quantity_range or prerequisite_shipping_price_range. 
      </td>
    </tr>

    <tr>
      <td style="width: 150px; color: #333;font-weight: 500">allocation_limit</td>
      <td>
          <span style="color: #dc3545;font-weight: 500;">"allocation_limit": 3 </span>
          <br><br>
          The number of times the discount can be allocated on the cart - if eligible. For example a Buy 1 hat Get 1 hat for free discount can be applied 3 times on a cart having more than 6 hats, where maximum of 3 hats get discounted - if the allocation_limit is 3. Empty (null) allocation_limit means unlimited number of allocations.
          <br><br>
          allocation_limit is only working with Buy X Get Y discount. The default value on creation will be null (unlimited).

      </td>
    </tr>

  </table>

  <hr>
  <div class="body-header">Endpoints</div>
  <table class="table table-bordered">
      <tr>
          <td id="all">
              Retrieves a list of all the price rules:
              <div class="link"><span style="font-weight: 500">GET /api/store/{store_id}/price-rule/all</span></div>
              <br>
              <p class="text-bold-800">Response:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          {
            "price_rules": [
                {
                    "id": 946768773317,
                    "value_type": "fixed_amount",
                    "value": "-10.0",
                    "customer_selection": "all",
                    "target_type": "line_item",
                    "target_selection": "all",
                    "allocation_method": "across",
                    "allocation_limit": null,
                    "once_per_customer": false,
                    "usage_limit": null,
                    "starts_at": "2017-01-19T22:59:10+05:00",
                    "ends_at": null,
                    "created_at": "2021-05-09T05:00:48+05:00",
                    "updated_at": "2021-05-09T05:00:48+05:00",
                    "entitled_product_ids": [],
                    "entitled_variant_ids": [],
                    "entitled_collection_ids": [],
                    "entitled_country_ids": [],
                    "prerequisite_product_ids": [],
                    "prerequisite_variant_ids": [],
                    "prerequisite_collection_ids": [],
                    "prerequisite_saved_search_ids": [],
                    "prerequisite_customer_ids": [],
                    "prerequisite_subtotal_range": null,
                    "prerequisite_quantity_range": null,
                    "prerequisite_shipping_price_range": null,
                    "prerequisite_to_entitlement_quantity_ratio": {
                        "prerequisite_quantity": null,
                        "entitled_quantity": null
                    },
                    "prerequisite_to_entitlement_purchase": {
                        "prerequisite_amount": null
                    },
                    "title": "Price Rule Title",
                    "admin_graphql_api_id": "gid://shopify/PriceRule/946768773317"
                },
                {
                    "id": 945311088837,
                    "value_type": "fixed_amount",
                    "value": "-10.0",
                    "customer_selection": "all",
                    "target_type": "line_item",
                    "target_selection": "all",
                    "allocation_method": "across",
                    "allocation_limit": null,
                    "once_per_customer": false,
                    "usage_limit": null,
                    "starts_at": "2017-01-19T22:59:10+05:00",
                    "ends_at": null,
                    "created_at": "2021-05-06T04:34:15+05:00",
                    "updated_at": "2021-05-06T04:59:25+05:00",
                    "entitled_product_ids": [],
                    "entitled_variant_ids": [],
                    "entitled_collection_ids": [],
                    "entitled_country_ids": [],
                    "prerequisite_product_ids": [],
                    "prerequisite_variant_ids": [],
                    "prerequisite_collection_ids": [],
                    "prerequisite_saved_search_ids": [],
                    "prerequisite_customer_ids": [],
                    "prerequisite_subtotal_range": null,
                    "prerequisite_quantity_range": null,
                    "prerequisite_shipping_price_range": null,
                    "prerequisite_to_entitlement_quantity_ratio": {
                        "prerequisite_quantity": null,
                        "entitled_quantity": null
                    },
                    "prerequisite_to_entitlement_purchase": {
                        "prerequisite_amount": null
                    },
                    "title": "WINTER SALE",
                    "admin_graphql_api_id": "gid://shopify/PriceRule/945311088837"
                }, ...
            ]
        }
        </code> 
      </pre>

          </td>

      </tr>

      <tr>
            <td id="product_price_rules">
                Retrieves a list of all the price rules with specific entitled Product id:
                <div class="link"><span style="font-weight: 500">GET /api/store/{store_id}/price-rule/product/{product_id}</span></div>
                <br>
                <p class="text-bold-800">Response:</p>
                <pre class="line-numbers">
          <code class="language-json"> 
            {
              "price_rules": [
                  {
                      "id": 936587886760,
                      "value_type": "fixed_amount",
                      "value": "-10.0",
                      "customer_selection": "all",
                      "target_type": "line_item",
                      "target_selection": "entitled",
                      "allocation_method": "across",
                      "allocation_limit": null,
                      "once_per_customer": false,
                      "usage_limit": null,
                      "starts_at": "2017-01-12T22:59:10+05:00",
                      "ends_at": null,
                      "created_at": "2021-05-12T15:27:14+05:00",
                      "updated_at": "2021-05-12T15:36:12+05:00",
                      "entitled_product_ids": [
                          6745759842472,
                          6745777242280
                      ],
                      "entitled_variant_ids": [],
                      "entitled_collection_ids": [],
                      "entitled_country_ids": [],
                      "prerequisite_product_ids": [],
                      "prerequisite_variant_ids": [],
                      "prerequisite_collection_ids": [],
                      "prerequisite_saved_search_ids": [],
                      "prerequisite_customer_ids": [],
                      "prerequisite_subtotal_range": null,
                      "prerequisite_quantity_range": null,
                      "prerequisite_shipping_price_range": null,
                      "prerequisite_to_entitlement_quantity_ratio": {
                          "prerequisite_quantity": null,
                          "entitled_quantity": null
                      },
                      "prerequisite_to_entitlement_purchase": {
                          "prerequisite_amount": null
                      },
                      "title": "Updated Price Rule",
                      "admin_graphql_api_id": "gid://shopify/PriceRule/936587886760"
                  }, ...
              ]
          }
          </code> 
        </pre>

            </td>

        </tr>



      <tr>
          <td id="one">
              Retrieves a single price rule
              <div class="link"><span style="font-weight: 500"> GET /api/store/{store_id}/price-rule/{price_rule_id}</span>
              </div>
              <br>
              <p class="text-bold-800">Response:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          {
            "price_rule": {
                "id": 946768773317,
                "value_type": "fixed_amount",
                "value": "-10.0",
                "customer_selection": "all",
                "target_type": "line_item",
                "target_selection": "all",
                "allocation_method": "across",
                "allocation_limit": null,
                "once_per_customer": false,
                "usage_limit": null,
                "starts_at": "2017-01-19T22:59:10+05:00",
                "ends_at": null,
                "created_at": "2021-05-09T05:00:48+05:00",
                "updated_at": "2021-05-09T05:00:48+05:00",
                "entitled_product_ids": [],
                "entitled_variant_ids": [],
                "entitled_collection_ids": [],
                "entitled_country_ids": [],
                "prerequisite_product_ids": [],
                "prerequisite_variant_ids": [],
                "prerequisite_collection_ids": [],
                "prerequisite_saved_search_ids": [],
                "prerequisite_customer_ids": [],
                "prerequisite_subtotal_range": null,
                "prerequisite_quantity_range": null,
                "prerequisite_shipping_price_range": null,
                "prerequisite_to_entitlement_quantity_ratio": {
                    "prerequisite_quantity": null,
                    "entitled_quantity": null
                },
                "prerequisite_to_entitlement_purchase": {
                    "prerequisite_amount": null
                },
                "title": "Price Rule Title",
                "admin_graphql_api_id": "gid://shopify/PriceRule/946768773317"
            }
        }
        </code> 
      </pre>

          </td>

      </tr>
      <tr>
          <td id="store">
            Creates a price rule:
              <div class="link"><span style="font-weight: 500"> POST /api/store/{store_id}/price-rule</span></div>
              <br>
              <p class="text-bold-800">Usage:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          {
            "price_rule": {
              "title": "Price Rule Title",
              "target_type": "line_item",
              "target_selection": "all",
              "allocation_method": "across",
              "value_type": "fixed_amount",
              "value": "-10.0",
              "customer_selection": "all",
              "starts_at": "2017-01-19T17:59:10Z"
            }
          }
        </code> 
      </pre>
              <br>
              <p class="text-bold-800">Response:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          {
            "price_rule": {
                "id": 946768773317,
                "value_type": "fixed_amount",
                "value": "-10.0",
                "customer_selection": "all",
                "target_type": "line_item",
                "target_selection": "all",
                "allocation_method": "across",
                "allocation_limit": null,
                "once_per_customer": false,
                "usage_limit": null,
                "starts_at": "2017-01-19T22:59:10+05:00",
                "ends_at": null,
                "created_at": "2021-05-09T05:00:48+05:00",
                "updated_at": "2021-05-09T05:00:48+05:00",
                "entitled_product_ids": [],
                "entitled_variant_ids": [],
                "entitled_collection_ids": [],
                "entitled_country_ids": [],
                "prerequisite_product_ids": [],
                "prerequisite_variant_ids": [],
                "prerequisite_collection_ids": [],
                "prerequisite_saved_search_ids": [],
                "prerequisite_customer_ids": [],
                "prerequisite_subtotal_range": null,
                "prerequisite_quantity_range": null,
                "prerequisite_shipping_price_range": null,
                "prerequisite_to_entitlement_quantity_ratio": {
                    "prerequisite_quantity": null,
                    "entitled_quantity": null
                },
                "prerequisite_to_entitlement_purchase": {
                    "prerequisite_amount": null
                },
                "title": "Price Rule Title",
                "admin_graphql_api_id": "gid://shopify/PriceRule/946768773317"
            }
        }
        </code> 
      </pre>

          </td>

      </tr>
      <tr>
          <td id="update">
            Updates an existing price rule
              <div class="link"><span style="font-weight: 500">POST /api/store/{store_id}/price-rule/{price_rule_id}</span></div>
              <br>
              <p class="text-bold-800">Usage:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          {
            "price_rule": {
              "id": 946768773317,
              "title": "Updated Price Rule"
            }
          }
        </code> 
      </pre>
              <br>
              <p class="text-bold-800">Response:</p>
              <pre class="line-numbers">
        <code class="language-json"> 
          {
            "price_rule": {
                "id": 946768773317,
                "value_type": "fixed_amount",
                "value": "-10.0",
                "customer_selection": "all",
                "target_type": "line_item",
                "target_selection": "all",
                "allocation_method": "across",
                "allocation_limit": null,
                "once_per_customer": false,
                "usage_limit": null,
                "starts_at": "2017-01-19T22:59:10+05:00",
                "ends_at": null,
                "created_at": "2021-05-09T05:00:48+05:00",
                "updated_at": "2021-05-09T05:02:10+05:00",
                "entitled_product_ids": [],
                "entitled_variant_ids": [],
                "entitled_collection_ids": [],
                "entitled_country_ids": [],
                "prerequisite_product_ids": [],
                "prerequisite_variant_ids": [],
                "prerequisite_collection_ids": [],
                "prerequisite_saved_search_ids": [],
                "prerequisite_customer_ids": [],
                "prerequisite_subtotal_range": null,
                "prerequisite_quantity_range": null,
                "prerequisite_shipping_price_range": null,
                "prerequisite_to_entitlement_quantity_ratio": {
                    "prerequisite_quantity": null,
                    "entitled_quantity": null
                },
                "prerequisite_to_entitlement_purchase": {
                    "prerequisite_amount": null
                },
                "title": "Updated Price Rule",
                "admin_graphql_api_id": "gid://shopify/PriceRule/946768773317"
            }
        }
        </code> 
      </pre>

          </td>

      </tr>
      <tr>
          <td id="delete">
            Deletes a price rule:
              <div class="link"><span style="font-weight: 500"> DELETE /api/store/{store_id}/price_rule/{price_rule_id}</span></div>


          </td>

      </tr>
  </table>



  <br><br><br><br><br><br><br><br><br><br><br>


</div>
