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
        <span class="link-info">Genrates an API token, valid for {{ config('sanctum.expiration') }}Hr &nbsp;&nbsp;&nbsp;<a data-toggle="modal" data-target="#myModal" href="javascript:void(0)" style="color:green">You can set the token expiry here</a> </span>
    </div>

    <hr>
    <div class="body-header" id="login">Endpoints</div>

    Genrates an API token, valid for {{ config('sanctum.expiration') }}Hr
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

 <!-- Modal -->
<div class="modal fade text-left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">API Token Config</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('token_expiry') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <label for="">Set Token Expiry (Hr)</label>
                    <input type="number" name="expiry" class="form-control" value="{{Auth::user()->token_expiry}}">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
