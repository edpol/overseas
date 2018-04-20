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
<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-1"> </div>
            <div class="col-sm-10 panel-group">
                {{ $room->name }} <br />
                hotel name address cc # date <br />

            </div>
        </div>
    </div>
</section>
@endsection
