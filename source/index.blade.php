@extends('_layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <a name="projects"></a>
        <h1 class="page-header">Projects
            <small>PHP and JavaScript Web Development</small>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <a href="http://simpligroom.com" target="_blank">
            <img class="img-responsive" src="/images/SimpliGroom700x300.jpg" alt="Screenshot of simpligroom.com">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Simpligroom</h3>
        <h4>Full-Stack Web Development</h4>
        <p>Simpligroom is a web app that allows pet groomers to save client &amp; pet info and schedule appointments. Simpligroom is built with Laravel, Bootstrap, and several JavaScript libraries including: DataTables, FullCalendar, Moment.js, and jQuery Validate.</p>
        <a class="btn btn-primary" href="http://simpligroom.com" target="_blank">Visit Site <span class="fa fa-external-link"></span></a>
        <a class="btn btn-default button-right" href="https://bitbucket.org/jeremy-breidenbach/simpligroom_l5/src" target="_blank">View Project <span class="fa fa-bitbucket"></span></a>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-7">
        <a href="http://nfo-maker.com" target="_blank">
            <img class="img-responsive" src="/images/NFOMaker700x300.jpg" alt="Screenshot of nfo-maker.com">
        </a>
    </div>
    <div class="col-md-5">
        <h3>NFO-Maker</h3>
        <h4>Full-Stack Web Development</h4>
        <p>NFO Maker is a web app that allows users to easily create .nfo (xml) files for adding media to their Kodi (XBMC) libraries. Server-side processing is done in Laravel, the front-end is built with Bootstrap and features two-way data binding via Vue.js.</p>
        <a class="btn btn-primary" href="http://nfo-maker.com" target="_blank">Visit Site <span class="fa fa-external-link"></span></a>
        <a class="btn btn-default button-right" href="https://github.com/jeremy-breidenbach/nfo-maker" target="_blank">View Project <span class="fa fa-github"></span></a>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-7">
        <a href="http://petsitting4paws.com" target="_blank">
            <img class="img-responsive" src="/images/PetSitting4Paws700x300.jpg" alt="Screenshot of petsitting4paws.com">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Pet Sitting 4 Paws</h3>
        <h4>Full-Stack Web Development</h4>
        <p>Pet Sitting 4 Paws is a custom website for a small pet-sitting business. Pet Sitting 4 Paws is made with Laravel &amp; Bootstrap and features a back-end admin section.</p>
        <a class="btn btn-primary" href="http://petsitting4paws.com" target="_blank">Visit Site <span class="fa fa-external-link"></span></a>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-7">
        <a href="http://freight-damage-maps.heroku.com/" target="_blank">
            <img class="img-responsive" src="/images/FreightDamageMaps700x300.jpg" alt="Screenshot of freight-damage-maps.heroku.com">
        </a>
    </div>
    <div class="col-md-5">
        <h3>Freight Damage Maps</h3>
        <h4>Google Maps API</h4>
        <p>Freight Damage Maps is a Google Maps API integration, created to show the distribution of freight damage by carrier. In addition to the Google Maps API, Freight Damage Maps uses two JavaScript libraries (Overlapping Marker Spiderfier and Marker Clusterer) to improve usability.</p>
        <a class="btn btn-primary" href="http://freight-damage-maps.heroku.com/" target="_blank">Visit Site <span class="fa fa-external-link"></span></a>
        <a class="btn btn-default button-right" href="https://github.com/jeremy-breidenbach/FreightDamageMaps" target="_blank">View Project <span class="fa fa-github"></span></a>
    </div>
</div>

<hr>


<div class="row">
    <div class="col-lg-12">
        <a name="contact"></a>
        <h1 class="page-header">Contact</h1>
        <p>Contact me via <a href="mailto:jeremy.breidenbach@gmail.com">email</a></p>
    </div>
</div>
@endsection
