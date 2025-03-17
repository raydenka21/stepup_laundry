<div class="card card-style">
    <div class="content mb-0">
        <div id="timed-2"
             class="menu menu-box-modal rounded-m"
             data-menu-hide="1000"
             data-menu-width="220"
             data-menu-height="160">
            <h1 class="text-center fa-5x mt-2 pt-3 pb-2"><i class="fa fa-times-circle color-red-dark"></i></h1>
            <h2 id="message" class="text-center">Task Failed</h2>
        </div>


        <form action="#" id="booking_form">
            <div class="pb-3"></div>

            <div class="input-style input-style-always-active no-borders has-icon validate-field mb-4">
                <i class="fa fa-spray-can-sparkles color-highlight"></i>
                <select name="service" id="form5a">
                    <option value="" disabled>Select a Service</option>
                    <option value="fast" @if($service=="fast") selected @endif>Fast Clean -
                        {{PRICELIST['fast']['price']}}
                    </option>
                    <option value="deep" @if($service=="deep") selected @endif>Deep Clean -
                        {{PRICELIST['deep']['price']}}
                    </option>
                    <option value="unyellowing" @if($service=="unyellowing") selected @endif>Unyellowing -
                        {{PRICELIST['unyellowing']['price']}}
                    </option>
                </select>
                <label for="form1ac" class="color-highlight text-uppercase font-700 font-10">Service</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
            </div>
            <div class="input-style input-style-always-active no-borders has-icon validate-field mb-4">
                <i class="fa fa-plus color-highlight"></i>
                <label for="form1ac" class="color-highlight text-uppercase font-700 font-10">Number Of Shoes</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
            </div>
            <br>
            <div class=" row">
                <div class="col-6">
                    <div class="mx-auto">
                        <div class="stepper rounded-s float-start">
                            <a href="#" class="stepper-sub"><i class="fa fa-minus color-theme opacity-40"></i></a>
                            <input name="qty" type="number" min="1" max="99" value="1">
                            <a href="#" class="stepper-add"><i class="fa fa-plus color-theme opacity-40"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="input-style input-style-always-active no-borders has-icon validate-field mb-4">
                <i class="fa fa-user color-highlight"></i>
                <input type="text" name="name" autocomplete="off" class="form-control validate-name" id="input-name">
                <label for="input-name" class="color-highlight text-uppercase font-700 font-10">Name</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>

            <div class="input-style input-style-always-active no-borders has-icon validate-field mb-4">
                <i class="fa fa-at color-highlight"></i>
                <input type="mail" name="email" autocomplete="off" class="form-control validate-name" id="input-email">
                <label for="input-email" class="color-highlight text-uppercase font-700 font-10">Email</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>

            <div class="input-style input-style-always-active no-borders has-icon validate-field mb-4">
                <i class="fa fa-phone color-highlight"></i>
                <input type="number" name="phone" autocomplete="off" class="form-control validate-name" id="input-phone">
                <label for="input-phone" class="color-highlight text-uppercase font-700 font-10">Phone</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            <!--            <div class="input-style input-style-always-active no-borders has-icon validate-field mb-4">-->
            <!--                <i class="fa fa-calendar color-highlight"></i>-->
            <!--                <input type="date" class="form-control" name="date" value="{{date('Y-m-d')}}" autocomplete="off" id="input-date"  min="{{date('Y-m-d')}}">-->
            <!--                <label for="input-address" class="color-highlight text-uppercase font-700 font-10">Date</label>-->
            <!--            </div>-->
            <div class="input-style input-style-always-active no-borders has-icon validate-field mb-4">
                <i class="fa fa-home color-highlight"></i>
                <textarea id="input-address" name="address" autocomplete="off"></textarea>
                <label for="input-address" class="color-highlight text-uppercase font-700 font-10">Address</label>
                <i class="fa fa-times disabled invalid color-red-dark"></i>
                <i class="fa fa-check disabled valid color-green-dark"></i>
                <em>(required)</em>
            </div>
            @include('components.free-pickup')
            <div class="pb-3"></div>
            <a href="#" class="btn btn-full btn-m rounded-sm font-13 font-600 gradient-highlight mb-4"
               onclick="sendForm()">Booking</a>
        </form>
    </div>
</div>



<script>
    function timeoutMessage() {
        $("#timed-2").removeClass( "menu-active" );
    }

    function sendForm() {
        var formRequest = $("#booking_form").serialize();
        console.log(formRequest);
        $.ajax({
            type: "POST",
            cache: false,
            url: "{{ route('booking.create').'?_token='.csrf_token() }}",
            data: formRequest,
            success: function (response) {
                console.log(response);
                if(response.status == 'success'){
                    window.location.href = response.data;
                }else{
                    $("#timed-2").addClass( "menu-active" );

                    $('#message').text(response.message);
                    setTimeout(timeoutMessage, 1000);
                }
                return false;
            },
            error: function (data) {
                console.log('aaa');
                $("#timed-2").addClass( "menu-active" );

                console.log(data);
                return false;
            }
        });
        return false;
    }
</script>