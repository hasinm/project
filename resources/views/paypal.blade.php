
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="payment_method_paypal text-center">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="hasinmelepat@gmail.com">

<?php $count=0; ?>
@foreach(Cart::content() as $row)
<?php $count++; ?>
<input type="hidden" name="item_name_{{$count}}" value="{{$row->name}}">
<input type="hidden" name="amount_{{$count}}" value="{{$row->price}}">
<input type="hidden" name="shipping_{{$count}}" value="0.00">
@endforeach
<ul class="payment_methods methods">
<center>        <li class="payment_method_bacs">
                                                &emsp;&emsp;<input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                <label for="payment_method_bacs">Direct Bank Transfer </label>
                                                <div class="payment_box payment_method_bacs">
                                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </li>
                                            <li class="payment_method_cheque">
                                                &nbsp;&nbsp;<input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                <label for="payment_method_cheque">Cash on Delivery </label>
                                                <div style="display:none;" class="payment_box payment_method_cheque">
                                                    <p>Get your product at your doorstep with our extremely reliable and secure COD Services.</p>
                                                </div>
                                            </li>
											<li class="payment_method_cheque">
                                                <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                <label for="payment_method_cheque">Pay via Paypal </label>
                                                <div style="display:none;" class="payment_box payment_method_cheque">
                                                    <p></p>
                                                    
                                                </div>
                                            </li>
                                            <div class="payment_box payment_method_paypal">
                                                    <p>Pay via <input type="submit" value="PayPal"> you can pay with your credit card if you don’t have a PayPal account.</p>
                                                </div>
                                                </form>
                                            </center>
@yield('content')
<center>
<a href="{{ url('placed')}}"><button>PLACE MY ORDER</button></a>

</center>

