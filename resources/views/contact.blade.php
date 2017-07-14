@extends('layouts.master')

@section('content')
<div class="col-md-12 ">
    <h1 class="w3-center gray-shadow">@lang('contact.contact_us')</h1>
    <h4 class="w3-center w3-text-green green-shadow">@lang('contact.contact_message')</h4>

    <!-- Contact Section -->
    <section id="contact">
        <div class=" text-center">

            <!-- form and contact information -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 w3-round-large w3-padding-32" style="background: rgba(0,0,0,0.2);">
                    <form  name="contactForm"class="form-horizontal" id="sample_form_wizard2" method="post"  onsubmit="return validateRecaptchaForm();" enctype="multipart/form-data" action="{{ url('contact') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <fieldset>
                            <div class="row  ">
                                <div class="col-md-6 col-md-offset-0">
                                    <div>
                                        <input type="text" name="name" id="name" value="{{ ($errors->any()) ? old('name'):'' }}" class="form-control w3-padding w3-margin-bottom" placeholder=" @lang('contact.your_name') *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-0">
                                    <div>
                                        <input type="email" name="email" id="email" value="{{  ($errors->any()) ? old('email'):'' }}" class="form-control w3-padding w3-margin-bottom" placeholder="@lang('contact.email_label') *" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row  ">
                                <div class="col-md-12 col-md-offset-0">
                                    <div>
                                        <input type="text" name="subject" id="subject" value="{{  ($errors->any()) ?old('subject'):'' }}" class="form-control w3-padding w3-margin-bottom" placeholder="@lang('contact.subject_label')">
                                    </div>
                                </div>
                            </div>

                            <div class="row  ">
                                <div class="col-md-12 col-md-offset-0">
                                    <div>

                                        <textarea rows="4" name="message" id="message" class="form-control  w3-margin-bottom w3-padding " placeholder="@lang('contact.msg_label') *" required>{{ ($errors->any()) ? old('message'):'' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row  ">
                                <div class="col-md-6 col-md-offset-0">
                                    <div>
                                        <div class="g-recaptcha" data-sitekey="6Ld9BSkUAAAAALxQPzeeol10tyS07Lm8VgHeMUJo"></div>
                                    </div>
                                </div>
                               
                                <div class="col-md-6 col-md-offset-0 w3-padding-32">
                                    <div>
                                        <button type="submit" class="send_msg w3-button w3-padding w3-round-large w3-green w3-hover-blue"><i class="fa fa-send"></i> @lang('contact.send_msg_label')

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </form>

                </div>


            </div>
        </div>


    </section>
    <!-- End Contact Section -->

</div>
@endsection
