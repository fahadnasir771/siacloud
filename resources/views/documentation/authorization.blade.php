<div class="doc">

    <div class="header">Authorization</div>
    <div class="header-info">In order to use the APIs, the request must be authorized with an API token. Each API
        request should have
        <code>Authorization: Bearer {api_token}</code> in their headers as key/value pair.
    </div>
    <br>
    <div class="body-link-group">
        <span class="bullet">&#9679;</span>
        <span class="link"><a class="anchor" href="#login">POST /api/login</a></span>
        <br>
        <span class="link-info">Genrates an API token, valid for 24Hr</span>
    </div>

    <hr>
    <div class="body-header" id="login">Endpoints</div>

    Genrates an API token, valid for 24Hr
    <div class="link"><span style="font-weight: 500">POST /api/login</span></div>
    <br>
    <p class="text-bold-800">Usage:</p>
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
            "token": "Bearer 1|8F6B2gLZTdUgPB3DcKnWAPJa6qTbSNw9ztUA4EKg"
        }
      </code> 
    </pre>


</div>
