<!DOCTYPE html>
<html>
    <head>
        @include('components.head')
    </head>
    <body class="w3-theme-l5" style="background-image: url(/image/book-lights-color.jpg)">

       @include('components.header')
      
        <!-- Page Container -->
        <div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
            <!-- The Grid -->
            <div class="w3-row">


                @if(Session::has('message'))
                <!-- Alert Box -->
                <div  class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
                    <span onclick="this.parentElement.style.display = 'none'" class="w3-button w3-theme-l3 w3-display-topright">
                        <i class="fa fa-remove"></i>
                    </span>
                    <br>
                    <p><strong>Message !</strong></p>
                    <p> {{ Session::get('message') }} </p>
                </div>
                @endif
                <?php Session::forget('message'); ?>
                <!-- Main Column -->
                <div class="w3-col m3">
                    <!-- Profile -->
                    <div class="w3-card-2 w3-round w3-text-white">
                        

                            @yield('content')
                        
                    </div>
                    <br>
                    <br>

                    <!-- End main Column -->
                </div>

                <!-- End Grid -->
            </div>

            <!-- End Page Container -->
        </div>
        <br>

        <!-- Footer -->
        @include('components.footer')
       

    </body>
</html> 
