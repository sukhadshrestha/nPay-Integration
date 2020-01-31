@extends('layouts.payment-app')

@section('content')

    <div class="container">
        <div class="row justify-content-md-start" style="padding-top: 20px">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Please fill this form to proceed to payment') }}</div>
                        <div class="card-body">
                            <form method="GET" action="{{ route('payment') }}">
                                @csrf

                                    <h1>Payer Information</h1>
                                    <div class="form-group row">
                                        <label for="payer_name"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="payer_name" type="text"
                                                   class="form-control @error('payer_name') is-invalid @enderror"
                                                   name="payer_name" value="Andrew" required autocomplete="payer_name" autofocus>

                                            @error('payer_name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="payer_email"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                        <div class="col-md-6">
                                            <input id="payer_email" type="text"
                                                   class="form-control @error('payer_email') is-invalid @enderror"
                                                   name="payer_email" value="Andrew@gmail.com"required autocomplete="payer_email" autofocus>

                                            @error('payer_email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="payer_phone"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                                        <div class="col-md-6">
                                            <input id="payer_phone" type="text"
                                                   class="form-control @error('payer_phone') is-invalid @enderror"
                                                   name="payer_phone" value="9841613191"required autocomplete="payer_phone" autofocus>

                                            @error('payer_phone')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="order_id"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Order ID') }}</label>

                                        <div class="col-md-6">
                                            <input id="order_id" type="text"
                                                   class="form-control @error('order_id') is-invalid @enderror"
                                                   name="order_id" value="1094" required autocomplete="order_id" autofocus >

                                            @error('order_id')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                <div class="form-group row">
                                    <label for="order_id"
                                           class="col-md-4 col-form-label text-md-right">{{ __('TIN') }}</label>

                                    <div class="col-md-6">
                                        <input id="order_id" type="text"
                                               class="form-control @error('order_id') is-invalid @enderror"
                                               name="order_id" value="893" required autocomplete="order_id" autofocus >

                                        @error('order_id')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <label for="payment_detail"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Payment Detail') }}</label>

                                        <div class="col-md-6">
                                            <input id="payment_detail" type="text"
                                                   class="form-control @error('payment_detail') is-invalid @enderror"
                                                   name="payment_detail" value="Test" required autocomplete="payment_detail" autofocus >

                                            @error('payment_detail')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="due_amount"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Payment Amount') }}</label>

                                        <div class="col-md-6">
                                            <input id="due_amount" type="text"
                                                   class="form-control @error('due_amount') is-invalid @enderror"
                                                   name="due_amount" value="25" required autocomplete="due_amount" autofocus >

                                            @error('due_amount')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="bank_code"
                                               class="col-md-4 col-form-label text-md-right">{{ __('Select Merchant') }}</label>

                                        <div class="col-md-6">
                                            <input id="bank_code" type="text"
                                                   class="form-control @error('bank_code') is-invalid @enderror"
                                                   name="bank_code" value="M-Bank" required autofocus>

                                            @error('bank_code')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{
                                        $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit') }}
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>



    </div>

@endsection