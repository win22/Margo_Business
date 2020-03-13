@extends('site.layout')
@section('content')
<section class="tg-haslayout">
    <div
        style="padding-bottom: 0px  !important;background-color: #ffb400 !important; background-image: url( {{ asset('site/images/allhome/electrician_19.png') }} ); "
        class="tg-contactus">
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="tg-address tg-sectionspace">
                        <li>
                            <i class="icon-chat"></i>
                            <h2>Entrer En Contact</h2>
                            <span style="color: #1a1c1e">Telephone:
                            +221 33 820 99 79​
                            </span>
                            <span style="color: #1a1c1e">Mobile:   +221 77 144 10 47</span>
                            <a style="color: black; font-family: 'Manjari Bold'">contact@margobusiness.com</a>
                        </li>
                        <li>
                            <i class="icon-map-marker"></i>
                            <h2>Visitez Notre Emplacement</h2>
                            <span style="color: #1a1c1e">205, Ouest-Foire (en Face Cices) Dakar, Sénegal​</span>
                            <a style="color: black; font-family: 'Manjari Bold'">Get Directions</a>
                        </li>
                        <li>
                            <i class="icon-toolbox"></i>
                            <h2>Vous Cherchez un Projet?</h2>
                            <span style="color: #1a1c1e">perspiciatis unde omnis iste natus error sit</span>
                            <span style="color: #1a1c1e">voluptatem accusantium.</span>
                            <a style="color: black; font-family: 'Manjari Bold'">contact@margobusiness.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tg-mapprojectarea tg-bgwhite">
            <div class="row no-gutters">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-left">
                    <div id="tg-locationmap" class="tg-map"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right">
                    <div class="tg-startyourwork">
                        <div class="tg-title tg-titlevone">
                            <h3><span>Let’s work together</span>Start your Project</h3>
                        </div>
                        <form class="tg-formtheme tg-formstartproject">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="usermail" class="form-control"
                                           placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group">
												<span class="tg-select">
													<select>
														<option>$400  -  $1500</option>
														<option>$600  -  $1600</option>
														<option>$700  -  $1700</option>
														<option>$800  -  $1800</option>
														<option>$900  -  $1900</option>
														<option>$1000  -  $2000</option>
													</select>
												</span>
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="tg-btn" type="submit"><span>send message</span></button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
