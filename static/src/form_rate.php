<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <style>
        fieldset,
        label {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 20px;
        }

        h1 {
            font-size: 1.5em;
            margin: 10px;
        }

        /****** Style Star Rating Widget *****/

        .rating {
            border: none;
            float: left;
        }

        .rating>input {
            display: none;
        }

        .rating>label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        .rating>.half:before {
            content: "\f089";
            position: absolute;
        }

        .rating>label {
            color: #ddd;
            float: right;
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating>input:checked~label,
        /* show gold star when clicked */
        .rating:not(:checked)>label:hover,
        /* hover current star */
        .rating:not(:checked)>label:hover~label {
            color: #ffd700;
        }

        /* hover previous stars in list */

        .rating>input:checked+label:hover,
        /* hover current star when changing rating */
        .rating>input:checked~label:hover,
        .rating>label:hover~input:checked~label,
        /* lighten current selection */
        .rating>input:checked~label:hover~label {
            color: #ffed85;
        }

        /* --- */
        .start_EvB {
            display: flex;
            align-items: center;
        }

        .comments {
            margin: 0 30px;
        }

        .comment {
            width: 100%;
        }

        .comment_1 h1 {
            padding-top: 30px;
        }
    </style>
</head>

<body>
    <div class="comments">
        <div class="comment_1">
            <h1>Bình luận</h1>
        </div>
        <textarea name="comment" class="comment"></textarea><br>
        <div class="start_EvB">
            <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" class="vote" /><label class="full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4.5" class="vote" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" class="vote" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3.5" class="vote" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" class="vote" /><label class="full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2.5" class="vote" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" class="vote" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1.5" class="vote" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" class="vote" /><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="0.5" class="vote" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            <button class="btn-rating-product" data-id='<?php echo $_GET['id'] ?>'>
                Đánh giá
            </button>
        </div>
    </div>

    <!-- Include jQuery first -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include jQuery Notify plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.btn-rating-product').click(function() {
                let id = $(this).data('id');
                let rating = $('input[name="rating"]:checked').val();
                let comment = $('.comment').val();

                if (rating && comment) {
                    $.ajax({
                        type: "GET",
                        url: "rate.php",
                        data: {
                            id: id,
                            rating: rating,
                            comment: comment
                        },
                        success: function(data) {

                            $.notify("Cảm ơn bạn đã đóng góp ý kiến", "success");
                    });
                } else {
                    $.notify("Vui lòng chọn đánh giá và nhập bình luận", "error");
                }
            });
        });
    </script>


</body>

</html>