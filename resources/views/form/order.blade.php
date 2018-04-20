@extends('layouts.master')

@section('box1')
<section class="content-section-b">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                 <h2>OverSeas</h2>
             </div>
         </div>
    </div>
 </section>
@endsection

@section('box2')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('book') }}/{{ $room->id }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="card" class="col-md-4 col-form-label text-md-right">{{ __('Credit Card') }}</label>

                            <div class="col-md-6">
                                <input id="card" value="" type="text" class="form-control{{ $errors->has('card') ? ' is-invalid' : '' }}" name="card" value="{{ old('card') }}" required>

                                @if ($errors->has('card'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('card') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" disabled>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!--
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" disabled>
                            </div>
                        </div>
-->
                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
                            <div class="col-md-6">
                                <?php echo $p = number_format(round($room->price / 100,2),2); ?>
								<input type="hidden" name="amount" value="{{ $p*100 }}" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fees" class="col-md-4 col-form-label text-md-right">{{ __('Fees') }}</label>
                            <div class="col-md-6">
                                <?php echo $f = number_format(round($room->fee / 100,2),2); ?>
								<input type="hidden" name="fees" value="{{ $f*100 }}" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="taxes" class="col-md-4 col-form-label text-md-right">{{ __('Taxes') }}</label>
                            <div class="col-md-6">
                                <?php echo $x = number_format(round($room->price * $hotel->tax / 10000,2),2); ?>
								<input type="hidden" name="taxes" value="{{ $x*100 }}" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
                            <div class="col-md-6">
                                <?php echo $t = (float)$p + (float)$f + (float)$x; ?>
								<input type="hidden" name="total" value="{{ $t*100 }}" />
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Book') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
				<div class="row">
					<div class="col-md-offset-3 col-md-6">
						@include('layouts.errors')
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection
