@extends('layouts.default')

{{-- Web site Title --}}
@section('title')
@parent
:: Home
@stop

@section('content')
<div class="page-header">
	<img src="assets/images/wel.jpg">
</div>
<div id="slideshow-wrap">
        <input type="radio" id="button-1" name="controls" checked="checked"/>
        <label for="button-1"></label>
        <input type="radio" id="button-2" name="controls"/>
        <label for="button-2"></label>
        <input type="radio" id="button-3" name="controls"/>
        <label for="button-3"></label>
        <input type="radio" id="button-4" name="controls"/>
        <label for="button-4"></label>
        <input type="radio" id="button-5" name="controls"/>
        <label for="button-5"></label>
        <label for="button-1" class="arrows" id="arrow-1">></label>
        <label for="button-2" class="arrows" id="arrow-2">></label>
        <label for="button-3" class="arrows" id="arrow-3">></label>
        <label for="button-4" class="arrows" id="arrow-4">></label>
        <label for="button-5" class="arrows" id="arrow-5">></label>
        <div id="slideshow-inner">
            <ul>
                <li id="slide1">
                    <img src="/assets/images/gitlogo.png" />
                    <div class="description">
                        <input type="checkbox" id="show-description-1"/>
                        <label for="show-description-1" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Flower power</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li id="slide2">
                    <img src="/assets/images/flow.png" />
                    <div class="description">
                        <input type="checkbox" id="show-description-2"/>
                        <label for="show-description-2" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Golden sunset</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li id="slide3">
                    <img src="/assets/images/gitdad.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-3"/>
                        <label for="show-description-3" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Flower power again</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li id="slide4">
                    <img src="/assets/images/images1.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-4"/>
                        <label for="show-description-4" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Stormy coast</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li id="slide5">
                    <img src="/assets/images/images2.jpg" />
                    <div class="description">
                        <input type="checkbox" id="show-description-5"/>
                        <label for="show-description-5" class="show-description-label">I</label>
                        <div class="description-text">
                            <h2>Splash!</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


@stop
