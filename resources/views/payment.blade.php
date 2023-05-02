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
 <form method="post" action="{{ route('placeorder') }}">
    @csrf
 <div class="container p-0">
    <div class="card px-4">
        <p class="h8 py-3">Address Options</p>
        <div class="row gx-3">
            <div class="col-12">
                <div class="d-flex flex-column">
                    <fieldset>
                        <input type="radio" id="def" value="def" onchange="hideaddr()" name="addr" ><label for="def"><h3><b>Default Address</b></h3> </label>
                            <br>
                            <input type="radio" id="def" value="nw" name="addr" onchange="showaddr()" ><label for="nw"><h3><b>New Address</b></h3></label>
                    </fieldset>
                    <div class="addre"  id="addre" style="visibility:hidden">
                        <div class="container p-0">
                            <div class="card px-4">
                                <div class="row gx-3">
                                    <div class="col-12">
                                        <div class="d-flex flex-column">
                                            <textarea class="form-control mb-3" placeholder="Address" name="newaddr"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
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

                        <input type="radio" id="cod" value="cod" onchange="hidecard()" name="paymode" ><label for="cod"> <h3><b>Cash On Delivery</b></h3></label>
                            <br>
                            <input type="radio" id="card" value="card" name="paymode" onchange="showcard()" ><label for="card"> <h3><b>Card</b></h3> </label>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
 </div>

<div id="cardpay" class="cardpay" style="visibility:hidden">

        <div class="container p-0">
            <div class="card px-4">
                <p class="h8 py-3">Payment Details</p>
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Name</p>
                            <input class="form-control mb-3" name="name" type="text" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Card Number</p>
                            <input class="form-control mb-3" name="cardnumber" type="text" placeholder="1234 5678 4356 6635">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Expiry</p>
                            <input class="form-control mb-3" name="expirydate" type="text" placeholder="MM/YYYY">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">CVV</p>
                            <input class="form-control mb-3 pt-2 " name="cvv" type="password" placeholder="***">
                        </div>
                    </div>
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
function showaddr()
{
    var div = document.getElementById('addre');
    div.style.visibility = 'visible';
}
function hideaddr()
{
    var div = document.getElementById('addre');
    div.style.visibility = 'hidden';
}
</script>
    @endsection
