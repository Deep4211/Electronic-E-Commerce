@extends('layout')

@section('title')
    Payment
@endsection

@section('style-link')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@endsection

@section('content')

<div>
    <div class="brand_color">
       <div class="container">
          <div class="row">
                <div class="col-md-12">
                   <div class="titlepage">
                      <h2>Payment</h2>
                   </div>
                </div>
          </div>
       </div>
    </div>
 </div>

 <br>

 <div class="container p-0">
    <div class="card px-4">
        <p class="h8 py-3">Payment Options</p>
        <div class="row gx-3">
            <div class="col-12">
                <div class="d-flex flex-column">
                    <fieldset>
                    
                        <label for="cod"> Cash On Delivery <input type="radio" id="cod" value="cod" onchange="hidecard()" name="paymode" ></label>
                            <br>
                        <label for="card"> Card <input type="radio" id="card" value="card" name="paymode" onchange="showcard()" ></label>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
 </div>

<div id="cardpay" class="cardpay" style="visibility:hidden">
<form>
        <div class="container p-0">
            <div class="card px-4">
                <p class="h8 py-3">Payment Details</p>
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Name</p>
                            <input class="form-control mb-3" type="text" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Card Number</p>
                            <input class="form-control mb-3" type="text" placeholder="1234 5678 4356 6635">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Expiry</p>
                            <input class="form-control mb-3" type="text" placeholder="MM/YYYY">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">CVV</p>
                            <input class="form-control mb-3 pt-2 " type="password" placeholder="***">
                        </div>
                    </div>
                    {{-- <div class="col-12">
                        <div class="btn btn-primary mb-3">
                            <span class="ps-3">Pay </span>
                        
                        </div>
                    </div>    --}} 
            </div>
        </div>
    </div>
    
</div>

<div id="placeorder" class="placeorder">
    <center><input type="submit" class='buy' value="Place Order Rs.{{  $amount }}"></center>
</div>
</form>
<br>
<script>
function showcard()
{
    var div = document.getElementById('cardpay');
    div.style.visibility = 'visible';
}
function hidecard()
{
    var div = document.getElementById('cardpay');
    div.style.visibility = 'hidden';
    
}
</script> 
    @endsection