@extends('layouts.master')

@section('content')
<div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
    <h1 class="w3-center">@lang('contact.contact_us')</h1>
    <h4 class="w3-center w3-text-green">@lang('contact.contact_message')</h4>
    <form action="/create/scratch/" id="createForm" method="post" autocomplete="off" role="form" data-message-required="false" data-message-length="350">
        <section class="w3-padding w3-round" style="background: rgba(0, 0, 0, 0.2)">
            <div class="form-group">
                <div class="input-group full-width">
                    <div class="input-group-btn hidden-xs">
                        <a href="#" class="btn btn-xs dropdown-toggle" data-toggle="dropdown" data-tooltip="" title="" data-tooltip-placement="top" data-original-title="Other Products…"><span class="glyphicon glyphicon-th-list"></span></a>
                        <ul class="dropdown-menu book-types" role="menu">
                            <li data-tooltip="" data-tooltip-placement="right" title="With Instagram Photos &amp; Captions by Time and Tag"><a href="/create/instagram/?utm_content=create-option"><span class="icon icon-instagram"></span> Instagram Book »</a></li>
                            <li data-tooltip="" data-tooltip-placement="right" title="With Facebook Photos &amp; Captions by Time"><a href="/create/facebook/profile/?utm_content=create-option"><span class="icon icon-facebook-rect"></span> Facebook Book »</a></li>
                            <li data-tooltip="" data-tooltip-placement="right" title="Facebook and Instagram Year Books"><a href="/create/year/?utm_content=create-option"><span class="icon">★</span> Year Book »</a></li>
                        </ul>
                    </div> 
                    <input type="text" name="title" placeholder="What's the title?" data-placement="bottom" title="" class="tooltip-tip form-control input-lg" maxlength="150" data-original-title="A great title for a great story! You can fine tune it later">
                </div> 
            </div>
            <div class="hidden-xs"><a class="book-options pull-right" data-toggle="collapse" data-target="#bookOptions" href="#" data-tooltip="" title="Relax, you can do this later">Options »</a><br></div>
            <div id="bookOptions" class="collapse">
                <div class="form-group">
                    <textarea data-placement="top" name="description" placeholder="What's your PastBook about? Add a short description (optional)" class="tooltip-tip form-control input-lg" maxlength="1000" rows="3" title="" data-original-title="Don't you find the right words? Easy: leave it empty, you'll get the inspiration later."></textarea>
                </div>
                <div class="clearfix">
                    <div class="row">
                        <div class="col-sm-8 form-group upload">
                        </div>
                        <div class="col-sm-4 form-group cover">
                            <input type="hidden" name="cover">
                            <button type="button" class="btn btn-default icon-picture" data-cover="" data-original-text="Add cover" data-success-text="Update cover">Add cover</button>
                            <button type="button" class="btn btn-link remove-cover inactive" data-remove-cover="">× Remove cover</button>
                        </div>
                    </div>
                </div>
            </div>
            <p>
                <br>
                <button type="submit" class="btn btn-lg btn-success" data-tooltip="" title="" data-original-title="You'll love it! &amp;#10084;"><strong>+</strong> Create your PastBook</button>
            </p>
        </section>


    </form>
</div>
@endsection
