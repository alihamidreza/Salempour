<style>
    /* Rating Star Widgets Style */
    .rating-stars ul {
        direction: ltr !important;
        list-style-type:none;
        padding:0;
        -moz-user-select:none;
        -webkit-user-select:none;
    }
    .rating-stars ul > li.star {
        display:inline-block;
    }

    /* Idle State of the stars */
    .rating-stars ul > li.star > i.fa {
        font-size:2.5em; /* Change the size of the stars */
        color:#ccc; /* Color on idle state */

    }

    /* Hover state of the stars */
    .rating-stars ul > li.star.hover > i.fa {
        color:#FFCC36;
    }

    /* Selected state of the stars */
    .rating-stars ul > li.star.selected > i.fa {
        color:#FF912C;
    }

</style>

<div class="col-md-9 direction comment">
    <br>
    <div class="border p-3 white">
        <p class="flex-center">
            <span class="font-weight-bold">لطفا دیدگاه خود را برای این صفحه بیان کنید.</span>
        </p>
        <!-- Rating Stars Box -->
        <div class='rating-stars text-center'>
            <ul id='stars'>
                <li class='star' data-value='1' id="star1">
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' data-value='2' id="star2">
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' data-value='3' id="star3">
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' data-value='4' id="star4">
                    <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' data-value='5' id="star5">
                    <i class='fa fa-star fa-fw'></i>
                </li>
            </ul>
        </div>

        <div class="mt-5" id="bodyComment">
            <div class="alert alert-danger" id="validate"></div>
            <form method="post" id="sendcomment">
                {{ csrf_field() }}
                <input type="hidden" name="parent_id" id="parent_id" value="0">
                <input type="hidden" name="commentable_id" id="commentable_id" value="{{ $subject->id }}">
                <input type="hidden" name="commentable_type" id="commentable_type" value="{{ get_class($subject) }}">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="email">ایمیل:</label>
                        <input type="email" class="form-control font-small" id="email" aria-describedby="emailHelp"
                               placeholder="ایمیل خود را وارد کنید">
                        <small id="emailHelp" class="form-text text-muted">جواب دیدگاه شما به ایمیل شما نیز ارسال
                            میگردد.
                        </small>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">نام:</label>
                        <input type="text" class="form-control font-small" id="name" placeholder="نام خود را وارد کنید">
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control font-small" id="comment" name="comment"
                              placeholder="دیدگاه خود را بنویسید" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">ارسال نظر</button>
            </form>
        </div>
    </div>
    {{--comments--}}
    <br>
    @if(count($comments) > 0)
        <div class="flex-center">
        <span class="p-3 white border flex-center font-weight-bold"
              style="border-bottom: none !important;border-radius: 20px 20px 0 0;width: 173px;">
            نظرات کاربران
        </span>
        </div>
    @endif
    @foreach($comments as $comment)

        <div class="card border znone" @if(! $loop->last) style="border-bottom: none !important;" @endif>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                    </div>
                    <div class="col-md-10">
                        <p>
                            <small class="float-left position-absolute mb-2" style="left: 15px;">{{ jdate($comment->created_at)->ago() }}</small>
                        <p>
                            <strong class="float-right">{{ $comment->name }}</strong>
                        <?php $i = 1; ?>
                            @for($i > 0 ; $i <= $comment->point ; $i++)
                                <span class="float-left"><i class="text-warning fa fa-star"></i></span>
                            @endfor
                        </p>
                        <div class="clearfix"></div>
                        <p class="mt-2 font-small">{!! $comment->comment  !!}</p>
                        <p>
                            <a class="float-left btn btn-primary btn-sm ml-2 znone" data-toggle="modal"
                               data-target="#answerModal" data-parent="{{ $comment->id }}"> <i class="fa fa-reply"></i>
                                پاسخ</a>
                        </p>
                    </div>
                </div>
                @if(count($comment->comments) > 0)

                    @foreach($comment->comments as $childComment)

                        <div class="card card-inner border mt-2" style="background-color: #f1f1f1">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                             class="img img-rounded img-fluid" style="border-radius: 50%"/>
                                    </div>
                                    <div class="col-md-10">
                                        <p>
                                            <strong>{{ $childComment->name }}</strong>
                                            <small class="float-left">{{ jdate($childComment->created_at)->ago() }}</small>
                                        </p>
                                        <p class="font-small">{!! $childComment->comment !!} </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endif
            </div>
        </div>

    @endforeach
</div>

<div class="modal fade" id="answerModal" tabindex="-1" role="dialog" aria-labelledby="answerModalLable" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">پاسخ به دیدگاه</h5>
                <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br>
            <div class="alert alert-danger" style="text-align: center" id="validate2"></div>
            <div class="modal-body">
                <form method="post" id="answercomment">
                    {{ csrf_field() }}
                    <input type="hidden" name="parent" id="parent_id2" value="0">
                    <input type="hidden" name="commentable_id" id="commentable_id2" value="{{ $subject->id }}">
                    <input type="hidden" name="commentable_type" id="commentable_type2"
                           value="{{ get_class($subject) }}">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="email" class="float-right">ایمیل:</label>
                            <input type="email" class="form-control font-small" id="email2" aria-describedby="emailHelp"
                                   placeholder="ایمیل خود را وارد کنید">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name" class="float-right">نام:</label>
                            <input type="text" class="form-control font-small" id="name2"
                                   placeholder="نام خود را وارد کنید">
                        </div>
                    </div>
                    <div class="form-group">
                    <textarea class="form-control font-small" id="comment2" name="comment"
                              placeholder="پاسخ خود را بنویسید" rows="6"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">لغو</button>
                        <button type="submit" class="btn btn-primary btn-sm">ارسال پاسخ</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
{{--sending COMMENT--}}


@section('script')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>

        $(document).ready(function () {
            $('#bodyComment').hide();
            /* 1. Visualizing things on Hover - See next part for action on click */
            $('#stars li').on('mouseover', function () {
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function (e) {
                    if (e < onStar) {
                        $(this).addClass('hover');
                    }
                    else {
                        $(this).removeClass('hover');
                    }
                });

            }).on('mouseout', function () {
                $(this).parent().children('li.star').each(function (e) {
                    $(this).removeClass('hover');
                });
            });
            /* 2. Action to perform on click */
            $('#stars li').on('click', function () {
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
            $('#validate').hide();
            $('#validate2').hide();

            $('#answerModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var parentId = button.data('parent');
                var modal = $(this);
                modal.find('.modal-body #parent_id2').val(parentId);
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.star').click(function () {
                var point = $(this).attr('data-value');
                $('#sendcomment').submit(function (e) {
                    e.preventDefault();
                    var parent_id = $('#parent_id').val();
                    var commentable_id = $('#commentable_id').val();
                    var commentable_type = $('#commentable_type').val();
                    var email = $('#email').val();
                    var name = $('#name').val();
                    var comment = $('#comment').val();
                    if (email.length > 3 && name.length > 2 && comment.length > 5) {
                        $('#validate').hide();
                        $.ajax({
                            method: 'POST',
                            url: "{{ route('send.comment') }}",
                            dataType: "json",
                            data: {
                                point: point,
                                parent_id: parent_id,
                                commentable_id: commentable_id,
                                commentable_type: commentable_type,
                                email: email,
                                name: name,
                                comment: comment,
                            }
                        }).done(function (msg) {
                            if (msg['error'] === false) {
                                swal({
                                    text: msg['text'],
                                    title: msg['title'],
                                    icon: msg['icon'],
                                    confirmButtonText: msg['button'],
                                    confirmButtonColor: "#AEDEF4"
                                });
                                $('#bodyComment').remove();
                            }
                        else {
                                swal({
                                    text: msg['text'],
                                    title: msg['title'],
                                    icon: msg['icon'],
                                    confirmButtonText: msg['button'],
                                    confirmButtonColor: "#AEDEF4"
                                });
                            }
                        });
                    }
                    else {
                        $('#validate').show();
                        $('#validate').text('لطفا اطلاعات را کامل وارد کنید!');
                    }
                })
            });

            $('#answercomment').submit(function (e) {
                e.preventDefault();
                var parent_id = $('#parent_id2').val();
                var commentable_id = $('#commentable_id2').val();
                var commentable_type = $('#commentable_type2').val();
                var email = $('#email2').val();
                var name = $('#name2').val();
                var comment = $('#comment2').val();
                if (email.length > 3 && name.length > 2 && comment.length > 5) {
                    $('#validate2').hide();
                    $.ajax({
                        method: 'POST',
                        url: "{{ route('answer.comment') }}",
                        dataType: "json",
                        data: {
                            parent_id: parent_id,
                            commentable_id: commentable_id,
                            commentable_type: commentable_type,
                            email: email,
                            name: name,
                            comment: comment,
                        }
                    }).done(function (msg) {
                        if (msg['error'] === false) {
                            $('#answerModal').remove();
                            $('.modal-backdrop').remove();
                            swal({
                                text: msg['text'],
                                title: msg['title'],
                                icon: msg['icon'],
                                confirmButtonText: msg['button'],
                                confirmButtonColor: "#AEDEF4"
                            });
                        }
                        else {
                            swal({
                                text: msg['text'],
                                title: msg['title'],
                                icon: msg['icon'],
                                confirmButtonText: msg['button'],
                                confirmButtonColor: "#AEDEF4"
                            });
                        }
                    });
                }
                else {
                    $('#validate2').show();
                    $('#validate2').text('لطفا اطلاعات را کامل وارد کنید!');
                }
            })
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