@extends('layouts.master')

@section('content')
<div class="col-md-12 ">
    <h1 class="w3-center">@lang('contact.contact_us')</h1>
    <h4 class="w3-center w3-text-green">@lang('contact.contact_message')</h4>

    <!-- Contact Section -->
    <section id="contact">
        <div class=" text-center">

            <!-- form and contact information -->
            <div class="row">
                <div class="col-md-8 col-md-offset-2 w3-round-large w3-padding-32" style="background: rgba(0,0,0,0.2);">
                    <form class="form-horizontal" id="sample_form_wizard2" method="post" enctype="multipart/form-data" action="<?= URL::to(url()->current()) ?>">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <fieldset>
                            <div class="row  ">
                                <div class="col-md-6 col-md-offset-0">
                                    <div>
                                        <input type="text" name="name" id="name" class="form-control w3-padding w3-margin-bottom" placeholder=" @lang('contact.your_name') *" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-offset-0">
                                    <div>
                                        <input type="text" name="email" id="email" class="form-control w3-padding w3-margin-bottom" placeholder="@lang('contact.email_label') *" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row  ">
                                <div class="col-md-12 col-md-offset-0">
                                    <div>
                                        <input type="text" name="subject" id="subject" class="form-control w3-padding w3-margin-bottom" placeholder="@lang('contact.subject_label')">
                                    </div>
                                </div>
                            </div>

                            <div class="row  ">
                                <div class="col-md-12 col-md-offset-0">
                                    <div>

                                        <textarea rows="4" name="message" id="message" class="form-control  w3-margin-bottom w3-padding " placeholder="@lang('contact.msg_label') *" required></textarea>
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
                                        <button type="button" class="send_msg w3-button w3-padding w3-round-large w3-green w3-hover-blue"><i class="fa fa-send"></i> @lang('contact.send_msg_label')

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </form>
                    <div class="alert alert-info send_error" style="display:none;">

                    </div>
                    <div class="alert alert-success send_message" style="display:none;">
                        Message send successfully!
                    </div>
                </div>


            </div>
        </div>


    </section>
    <!-- End Contact Section -->



</div>
@endsection
