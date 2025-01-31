jQuery(document).ready(function ($) {
    $('a.comment-reply-link').addClass('button');

    var dialog_markup = '<div id="modal_reviews" class="pp_pic_holder"> \
    <a class="pp_close" href="#"></a> \
						<div class="pp_content_container"> \
							<div class="pp_left"> \
							<div class="pp_right"> \
								<div class="pp_content"> \
									<div class="pp_loaderIcon"></div> \
									<div class="pp_fade"> \
										<a href="#" class="pp_expand" title="Expand the image">Expand</a> \
										<div id="pp_full_res"></div> \
										<div class="pp_details"> \
											<div class="pp_nav"> \
												<a href="#" class="pp_arrow_previous">Previous</a> \
												<p class="currentTextHolder">0/0</p> \
												<a href="#" class="pp_arrow_next">Next</a> \
											</div> \
											<p class="pp_description"></p> \
										</div> \
									</div> \
								</div> \
							</div> \
							</div> \
						</div> \
						</div>\
					<div class="pp_overlay"></div>';

    // if reply to form is shown, hide it and restore standard review submit form
    function cancel_reply() {
        //  Undo id and name changing
        $('#unvalidated_rating').prop("name", "rating");
        $('#unvalidated_rating').prop("id", "rating");
        //  Show rating and attachments elements
        $('p.comment-form-rating').show();
        $('p.upload_section').show();

        if ($("#cancel-comment-reply-link").is(':visible')) {
            $('#cancel-comment-reply-link').click();
        }
    }

    function show_loader(item) {
        $(item).block({
            message: null,
            overlayCSS: {
                background: "#fff url(" + ywar.loader + ") no-repeat center",
                opacity: .6
            }
        });
    }

    function prepare_data(item) {

        //  get filtered comments based on stars rating
        var product_id = $(item).attr('data-id_product');
        var data_order = $(item).attr('data-order');
        var stars = $(item).attr('data-stars');
        var page = $(item).attr('data-page');
        var is_modal = $(item).attr('data-dialog');

        var data = {
            'action': 'get_ajax_comments',
            'product_id': product_id,
            'stars': stars,
            'order': data_order,
            'data_page': page,
            'is_modal': is_modal,
            '_wpnonce': ywar.nonce_value,
            'return_path': window.location.href
        };

        return data;
    }

    $(document).on('click', "a.ywar_votereview", (function (e) {
        e.preventDefault();
        //  Check if this option is currently selected
        if ($(this).hasClass("ywar_votereview_selected"))
            return;

        var id_review = $(this).attr('data-id_review');
        var review_value = $(this).attr('data-vote_review');

        var data = {
            'action': 'vote_review',
            'id_review': id_review,
            'review_value': review_value,
            '_wpnonce': ywar.nonce_value,
            'return_path': window.location.href
        };

        var id_vote_yes = '#vote_yes_' + id_review;
        var id_vote_no = '#vote_no_' + id_review;
        var parent = $(this).parent();

        parent.block({
            message: null,
            overlayCSS: {
                background: "#fff url(" + ywar.loader + ") no-repeat center",
                opacity: .6
            }
        });

        // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        $.post(woocommerce_params.ajax_url, data, function (response) {
            if (-1 == response.code) {
                top.location.replace(response.value);
            }
            else if (1 == response.code) {
                if (review_value == 1) {
                    $(id_vote_yes).addClass('vote_selected');
                    $(id_vote_no).removeClass('vote_selected');
                }
                else {
                    $(id_vote_no).addClass('vote_selected');
                    $(id_vote_yes).removeClass('vote_selected');
                }

                //  update text info about how many people found this review helful
                parent.children('.ywar_review_helpful').empty().append(response.value);
            }
            parent.unblock();

        });
    }));

    /**
     * Send a segnalation about an inappropriate review
     */
    $(document).on('click', "a.review-inappropriate", (function (e) {
        e.preventDefault();

        var id_review = $(this).attr('data-id_review');

        var data = {
            'action': 'report_inappropriate_review',
            'id_review': id_review,
            '_wpnonce': ywar.nonce_value,
            'return_path': window.location.href
        };

        var parent = $(this).parent();

        parent.block({
            message: null,
            overlayCSS: {
                background: "#fff url(" + ywar.loader + ") no-repeat center",
                opacity: .6
            }
        });

        // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
        $.post(woocommerce_params.ajax_url, data, function (response) {


            //  update text info about how many people found this review helful
            parent.empty().append('<span class="inappropriate-content reported">' + response.value + '</span');
            parent.unblock();
        });
    }));

    $("#reviews #comments>h2").remove();

    $('a[href="#reviews"]').attr('href', '#reviews_summary');

    /**
     * manage click on link for filtering reviews based on users rating
     */
    $('#tab-reviews').on('click', 'a.ywar_filter_reviews', function (e) {
        e.preventDefault();
        cancel_reply();

        var open_in_dialog = $(this).attr('data-dialog');
        if (1 != open_in_dialog) {
            show_loader("#reviews_summary");
        }

        $.post(woocommerce_params.ajax_url, prepare_data($(this)), function (response) {

            if (1 != open_in_dialog) {
                $("#reviews_header").empty().append(response.review_title);
                $("#comments ol.commentlist").empty().append(response.comment_list);
                $("div.ywar_show_more").empty().append(response.load_more);
                $("#reviews_summary").unblock();
            }
            else {
                $("#reviews_dialog").empty().append('<ol class="commentlist">' + response.comment_list + '</ol>');
                $("#reviews_dialog").append('<div class="ywar_show_more">' + response.load_more + '</div>');

                $().prettyPhoto({
                    markup: dialog_markup,
                    default_width: '70%',
                    default_height: '200px',
                    social_tools: false,
                    theme: 'pp_woocommerce',
                    modal: true,
                    callback: function () {
                        $("#reviews_dialog").empty();
                    }
                });
                $.prettyPhoto.open('#reviews_dialog', '', '');
                $("div.pp_pic_holder.pp_woocommerce").appendTo("#comments");
            }

            $('a.comment-reply-link').addClass('button');

        }, 'json');

    });

    $(document).on('click', 'a.ywar_show_more, button.ywar_show_more_container', function (e) {
        e.preventDefault();
        cancel_reply();

        var clicked_item = $(this);
        if (clicked_item.is('button')) {
            clicked_item = clicked_item.children('a.ywar_show_more');
        }

        var open_in_dialog = clicked_item.attr('data-dialog');
        if (1 != open_in_dialog) {
            show_loader(clicked_item);
        }

        $.post(woocommerce_params.ajax_url, prepare_data(clicked_item), function (response) {

            if (1 != open_in_dialog) {
                $("#reviews_header").empty().append(response.review_title);
                $("#reviews ol.commentlist").append(response.comment_list);
                $(clicked_item).unblock();
            }
            else {
                $("#modal_reviews ol.commentlist").append(response.comment_list);
            }
            $("div.ywar_show_more").empty().append(response.load_more);

            $('a.comment-reply-link').addClass('button');

        }, 'json');

    });

    $('#tab-reviews').on('click', 'a.ywar_filter_order', function (e) {
        e.preventDefault();
        cancel_reply();

        show_loader("#reviews_order");
        var clicked_item = $(this);

        $.post(woocommerce_params.ajax_url, prepare_data($(this)), function (response) {
            $("#reviews_header").empty().append(response.review_title);
            $("ol.commentlist").empty().append(response.comment_list);
            $("div.ywar_show_more").empty().append(response.load_more);

            //  Add active class to clicked element(most recent reviews or most helpful reviews) and remove it from the other
            if (clicked_item.attr("id") == "most_recent_reviews") {
                $("#most_recent_reviews").addClass("active");
                $("#most_helpful_reviews").removeClass("active");
            }
            else if (clicked_item.attr("id") == "most_helpful_reviews") {
                $("#most_helpful_reviews").addClass("active");
                $("#most_recent_reviews").removeClass("active");
            }

            $('a.comment-reply-link').addClass('button');

            $("#reviews_order").unblock();

        }, 'json');

    });


    $('#tab-reviews').on('click', 'a.comment-reply-link', function (e) {
        $('select#rating option[value="5"]').prop('selected', true);
        $('p.comment-form-rating').hide();
        $('p.upload_section').hide();
    });

    $(document).on('click', '#cancel-comment-reply-link', function (e) {
        //  Show rating and attachments elements
        $('p.comment-form-rating').show();
        $('p.upload_section').show();
    });
});

