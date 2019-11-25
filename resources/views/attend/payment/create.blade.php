@extends('layouts.app')

@section('content')
<div class="container">
    <div class="center">
      <div class="col-xs-1-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <form method="post" id="payment-form" action="">
                        @csrf
                        <section>
                            <label for="amount">
                                <span class="input-label">Amount</span>
                                <div class="input-wrapper amount-wrapper">
                                    <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="{{ $amount }}" disabled>
                                </div>
                            </label>
    
                            <div class="bt-drop-in-wrapper">
                                <div id="bt-dropin"></div>
                            </div>
                        </section>
    
                        <input id="nonce" name="payment_method_nonce" type="hidden" />
                        <button class="button" type="submit"><span>Enviar</span></button>
                    </form>
                
            </div>
            </div>
          </div>
        </div>
      </div>
 </div>
 
@endsection

@section('script')
<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
<script>
        var button = document.querySelector('#submit-button');
    
        braintree.dropin.create({
          authorization: "{{ Braintree_ClientToken::generate() }}",
          container: '#dropin-container'
        }, function (createErr, instance) {
          button.addEventListener('click', function () {
            instance.requestPaymentMethod(function (err, payload) {
              $.get('{{ route('payment.process') }}', {payload}, function (response) {
                if (response.success) {
                  alert('Payment successfull!');
                } else {
                  alert('Payment failed');
                }
              }, 'json');
            });
          });
        });
      </script>
@endsection
