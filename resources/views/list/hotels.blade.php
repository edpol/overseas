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
<!--
        <div class="row">
            <div class="col-sm-5" style="background-color:#dde;"> &nbsp; </div>
            <div class="col-sm-7" style="background-color:#dea;">
                <div class="row">
                    <div class="col-sm-1" style="background-color:#ded;"> 1 </div>
                    <div class="col-sm-1" style="background-color:#edd;"> 2</div>
                    <div class="col-sm-1" style="background-color:#dee;"> 3</div>
                    <div class="col-sm-1" style="background-color:#ede;"> 4</div>
                    <div class="col-sm-1" style="background-color:#ded;"> 5</div>
                    <div class="col-sm-1" style="background-color:#edd;"> 6</div>
                    <div class="col-sm-1" style="background-color:#dee;"> 7</div>
                    <div class="col-sm-1" style="background-color:#ede;"> 8</div>
                    <div class="col-sm-1" style="background-color:#ded;"> 9</div>
                    <div class="col-sm-1" style="background-color:#edd;"> 10</div>
                    <div class="col-sm-1" style="background-color:#dee;"> 11</div>
                    <div class="col-sm-1" style="background-color:#ede;"> 12</div>
                </div>
            </div>
        </div>
-->
        <div class="row">

            <div class="col-sm-1"> </div>
            <div class="col-sm-10 panel-group" id="accordion"  style="background-color:#ddd; padding:12px;"> <!-- accordion 1 -->

			@foreach ($hotels as $hotel)
                    <div class="panel bg-white" style="padding:12px; margin-bottom:12px;">
                        <h4 class="panel-title"> <!-- title 1 -->
                            <div class="f6"><img src="img/{{ $hotel->image }}" align="left" class="img-shrink"/></div>
                            <div class="f6">
                                <span class="text-info font-weight-bold">{{ $hotel->name }}</span> | {!! stars($hotel->stars) !!} <br />
                                <small>{{ $hotel->address }}</small><br /><br />
                                <a valign="bottom" data-toggle="collapse" data-parent="#accordion" href="#accordion{{$hotel->id}}">
                                    <button class="btn-sm btn-orange">Rooms / Availability</button>
                                </a>
                            </div>
                            <div style="float:right; border-top:solid 8px red;">
                                <h6 style="padding-top:10px; text-align: right;" class="text-xs">
                                     <p style='background-image: url("img/tag.png"); height:73px; background-repeat:no-repeat; color:white; padding:6px;'>
                                            starting at<br />
                                            USD <span class="font-weight-bold text-large">{{App\Room::lowest_price($hotel)}}</span><br />
                                            per room / night<br />
                                    </p>
                                    <span style="color:#999;">* Taxes Not Included</span>
                                </h6>
                            </div>
                            <br clear="all" />
                        </h4>

                        <!-- panel body -->
                        <div id="accordion{{$hotel->id}}" class="panel-collapse collapse">
                            <div class="panel-body">
@foreach($hotel->rooms as $room) 
                                <hr style="padding:0;margin:4px 0;"/>
                                <div class="row">
                                    <div class="col-sm-5">
                                        {{ $room->name }} 
{!! $room->promotions($room) !!}
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <div class="col-sm-3 font-weight-bold orange">
                                                {{ $room->availability }} 
                                            </div>
                                            <div class="col-sm-3 text-info font-weight-bold">
                                                <a valign="bottom" data-toggle="collapse" data-parent="#accordion" href="#accordion{{$hotel->id}}{{$room->id}}">&#x25BC; DETAILS</a> 
                                            </div>
                                            <div class="col-sm-4" style="text-align:right;">
                                                <?= number_format($room->price/100, 2, '.', ','); ?><small style="color:#aaa;"> USD per night</small>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="/request/{{$room->id}}">REQUEST</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="accordion{{$hotel->id}}{{$room->id}}" class="panel-collapse collapse text-muted">
                                    <div class="float-right text-right">
                                        <br />
                                        <?= $p = number_format($room->price/100, 2, '.', ','); ?> USD<br />
                                        <?= $t = number_format($hotel->tax*$room->price/10000, 2, '.', ','); ?> USD<br />
                                        0.00 USD<br />
                                        <?= floatval($p) + floatval($t); ?> USD<br />
                                    </div>
                                    <div class="float-right text-right" style="padding-right:8px;">
                                        <br />
                                        Price:<br />
                                        Tax {{$hotel->tax}}%:<br />
                                        Fees:<br />
                                        Total:<br />
                                    </div>
                                    <div class="float-left text-left" style="padding-right:8px;">
                                        <div style="width:120px; text-align:center">
                                            <?= date("D, M j"); ?><hr style="padding:0;margin:0;border-color:#5095CF" />
                                            <span style="color:red"><?= number_format($room->price/100, 0, '.', ','); ?></span> <span style="color:#aaa;">USD</span><br />
                                        </div>
                                        <br />
                                        Conditions and Offers:<br />
                                        <ul><li>Meal Plan: Breakfast Included</li></ul>

                                        Cancellation Policy:<br />
                                        <ul><li class="text-danger">Penalty of 1  booked night(s) when cancelling after Nov 25m 2016 04:00 PM</li></ul>
                                    </div>
                                    <br clear="all" />
                                </div>
@endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
