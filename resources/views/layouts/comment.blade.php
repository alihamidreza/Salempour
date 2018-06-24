<div class="col-md-9 direction comment">
    <br>
    <div class="border p-3 white">
        <p class="flex-center">
        <div class="alert alert-success" style="text-align: center">با نظرات سازنده خودتون در بهبود کیفیت به ما را
            همراهی کنید.
            <i class="fa fa-arrow-down" style="vertical-align: middle"></i>
        </div>
        </p>
        <!-- Rating Stars Box -->
        <div class='rating-stars text-center'>
            <ul id='stars'>
                <li class='star' data-value='1'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' data-value='2'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' data-value='3'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' data-value='4'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' data-value='5'>
                    <i class='fa fa-star fa-fw'></i>
                </li>
            </ul>
        </div>

        <div class="mt-5" id="bodyComment">
            <form>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">ایمیل:</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="ایمیل خود را وارد کنید">
                        <small id="emailHelp" class="form-text text-muted">جواب دیدگاه شما به ایمیل شما نیز ارسال میگردد.</small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="username">نام:</label>
                        <input type="text" class="form-control" id="username" placeholder="نام خود را وارد کنید">
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="comment" name="comment" placeholder="دیدگاه خود را بنویسید" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">ارسال نظر</button>
            </form>
        </div>
    </div>
    <br>
    <div class="flex-center">
        <span class="p-3 white border flex-center font-weight-bold" style="border-bottom: none !important;border-radius: 20px 20px 0 0;width: 173px;">
            نظرات کاربران
        </span>
    </div>
    <div class="card border znone">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                </div>
                <div class="col-md-10">
                    <p>
                        <strong class="float-right">Maniruzzaman Akash</strong>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-left"><i class="text-warning fa fa-star"></i></span>

                    </p>
                    <div class="clearfix"></div>
                    <p class="mt-2 font-small">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                        باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان ج</p>
                    <p>
                        <a class="float-right btn btn-primary btn-sm ml-2 znone"> <i class="fa fa-reply"></i>
                            پاسخ</a>
                    </p>
                </div>
            </div>
            <div class="card card-inner border mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                 class="img img-rounded img-fluid"/>
                        </div>
                        <div class="col-md-10">
                            <strong>Maniruzzaman
                                Akash</strong></p>
                            <p class="font-small">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از
                                طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله باشد. کتابهای زیادی در شصت و سه
                                درصد گذشته، حال و آینده شناخت فراوان ج</p>
                            <p>
                                <a class="float-right btn btn-primary btn-sm ml-2 znone"> <i class="fa fa-reply"></i>
                                    پاسخ</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--sending COMMENT--}}


@section('script')

    <script>
        $(document).ready(function(){
            $('#bodyComment').hide();
            /* 1. Visualizing things on Hover - See next part for action on click */
            $('#stars li').on('mouseover', function(){
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function(e){
                    if (e < onStar) {
                        $(this).addClass('hover');
                    }
                    else {
                        $(this).removeClass('hover');
                    }
                });

            }).on('mouseout', function(){
                $(this).parent().children('li.star').each(function(e){
                    $(this).removeClass('hover');
                });
            });


            /* 2. Action to perform on click */
            $('#stars li').on('click', function(){
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                var stars = $(this).parent().children('li.star');

                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }

                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }

                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                var msg = "";
                if (ratingValue > 1) {
                    msg = "Thanks! You rated this " + ratingValue + " stars.";
                }
                else {
                    msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
                }
                responseMessage(msg);

            });


        });


        function responseMessage(msg) {
            $('.success-box').fadeIn(200);
            $('.success-box div.text-message').html("<span>" + msg + "</span>");
        }

        $('.star').click(function () {
            $('#bodyComment').slideDown('slow');
        })

    </script>

@endsection