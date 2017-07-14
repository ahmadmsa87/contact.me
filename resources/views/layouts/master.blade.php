<!DOCTYPE html>
<html>
    <head>
        @include('components.head')
    </head>
    <body class="w3-theme-l5" style="background-image: url(/image/book-lights-color.jpg);">

        @include('components.header')

        <!-- Page Container -->
        <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
            <!-- The Grid -->
            <div class="w3-row">

                @if ($errors->any())
                <div class='col-md-8 col-md-offset-2'>
                    <!-- Alert Box -->
                    <div  class="w3-container w3-display-container w3-round w3-border w3-theme-border w3-margin-bottom  w3-red">
                        <span onclick="this.parentElement.style.display = 'none'" class="w3-button  w3-display-topright">
                            <i class="fa fa-remove"></i>
                        </span>
                        <br>
                        <p><strong>Error !</strong></p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                @if(Session::has('message'))

                <div class='col-md-8 col-md-offset-2'>
                    <!-- Alert Box -->
                    <div  class="w3-container w3-display-container w3-round  w3-border w3-theme-border w3-margin-bottom  w3-green">
                        <span onclick="this.parentElement.style.display = 'none'" class="w3-button w3-display-topright">
                            <i class="fa fa-remove"></i>
                        </span>
                        <br>
                        <p><strong>Message !</strong></p>
                        <p> {{ Session::get('message') }} </p>
                    </div>
                </div>
                @endif
                <?php Session::forget('message'); ?>
            </div>
            <div class="w3-row">
                <!-- Main Column -->
                <div class="w3-col m3">
                    <!-- Profile -->
                    <div class="w3-card-2 w3-round w3-text-white">

                        @yield('content')

                    </div>
                    <br>
                    <br>

                </div>
                <!-- End main Column -->

            </div>
            <!-- End Grid -->

        </div>
        <!-- End Page Container -->
        <br>

        <!-- Footer -->
        @include('components.footer')
        <!-- End Footer -->

    </body>
</html> 
