<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cloak Fields Feature</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	</head>
    <body>
	    <div class="container" style="margin-top: 20px;">
	    	<div class="row text-center" style="margin-bottom: 20px;">
	    		<h2>Cloak Field Names for added layer of protection</h2>
	    		<p><a href="https://github.com/nelsonmelecio/cloak" class="btn btn-info" role="button">https://github.com/nelsonmelecio/cloak</a></p>
	    	</div>
	    	<div class="row">
				<form method="post" class="form-horizontal" role="form" action="{{ URL('/new') }}" accept-charset="UTF-8">
					<fieldset>
						 {{ csrf_field() }}
					  <legend>Sample Credit Card Payment</legend>
					  <div class="form-group">
					    <label class="col-sm-3 control-label" for="{{ FormHelper::cloak('card_holder_name') }}"">Name on Card</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="{{ FormHelper::cloak('card_holder_name') }}" placeholder="Card Holder's Name" >
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-3 control-label" for="{{ FormHelper::cloak('card_number') }}"">Card Number</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" name="{{ FormHelper::cloak('card_number') }}" placeholder="Debit/Credit Card Number" >
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-3 control-label" for="{{ FormHelper::cloak('expiry_month') }}">Expiration Date</label>
					    <div class="col-sm-9">
					      <div class="row">
					        <div class="col-xs-3">
					          <select class="form-control col-sm-2" name="{{ FormHelper::cloak('expiry_month') }}">
					            <option>Month</option>
					            <option value="1">Jan</option>
					            <option value="2">Feb</option>
					            <option value="3">Mar</option>
					            <option value="4">Apr</option>
					            <option value="5">May</option>
					            <option value="6">June</option>
					            <option value="7">July</option>
					            <option value="8">Aug</option>
					            <option value="9">Sep</option>
					            <option value="10">Oct</option>
					            <option value="11">Nov</option>
					            <option value="12">Dec</option>
					          </select>
					        </div>
					        <div class="col-xs-3">
					          <select class="form-control" name="{{ FormHelper::cloak('expiry_year') }}">
					            <option value="18">2018</option>
					            <option value="19">2019</option>
					            <option value="20">2020</option>
					            <option value="21">2021</option>
					            <option value="22">2022</option>
					            <option value="23">2023</option>
					            <option value="14">2024</option>
					            <option value="15">2025</option>
					            <option value="16">2026</option>
					            <option value="17">2027</option>
					          </select>
					        </div>
					      </div>
					    </div>
					  </div>
					  <div class="form-group">
					    <label class="col-sm-3 control-label" for="{{ FormHelper::cloak('cvv') }}">CVV</label>
					    <div class="col-sm-3">
					      <input type="text" class="form-control" name="{{ FormHelper::cloak('cvv') }}" placeholder="Security Code" >
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-3 col-sm-9">
					      <button type="submit" class="btn btn-success">Test Request & Validation</button>
					    </div>
					  </div>
					</fieldset>
				</form>
			</div>
			<div class="row" style="margin-top: 20px;">
				@if(!empty($cloaked_inputs))
					<div>
						<legend>Cloaked Inputs - Dynamic field names are generated to hide the exact field names for security purposes.</legend>
						<pre> {!! json_encode($cloaked_inputs, JSON_PRETTY_PRINT) !!} </pre>
					</div>
					<div>
						<legend>Uncloaked Inputs - Available only in the backend.</legend>
						<pre> {{ json_encode($new_inputs, JSON_PRETTY_PRINT) }} </pre>
					</div>
				@endif
			</div>
		</div>
    </body>
</html>        

