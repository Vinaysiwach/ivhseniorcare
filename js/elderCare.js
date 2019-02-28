$(document).ready(function () {
    $('[id^=coupon_value]').keypress(validateNumber);

    $('[id^=zipcode]').keypress(validateNumber);

    $('[id^=amt_paid_id]').keypress(validateNumber);

    $('[id^=balance_amt]').keypress(validateNumber);

    $('[id^=camt_paid]').keypress(validateNumber);

    $('[id^=cbalance_amt]').keypress(validateNumber);

    $('[id^=pckAmt]').keypress(validateNumber);

    $(".password_validate").on("keydown", function (e) {
        return e.which !== 32;
    });

    $('#formCoupon_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        if ($('#coupon_code').val() == '') {
            error++;
            errorShow('Please Enter Coupon Code');
        } else if ($('#coupon_description').val() == '') {
            error++;
            errorShow('Please Enter Coupon Description');
        } else if ($('#value_type').val() == '') {
            error++;
            errorShow('Please Enter Coupon Value Type');
        } else if ($('#coupon_value1').val() == '') {
            error++;
            errorShow('Please Enter Coupon Value ');
        } else if ($('#expiry_date').val() == '') {
            error++;
            errorShow('Please Select Date ');
        }
        if (error == 0) {
            var formData = $('#formCoupon').serialize();
            $.ajax({
                url: $("#formCoupon").attr('action'),
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                cache: false,
                success: function (data) {
                    if (data.id > 0) {
                        $('#s_m').show();
                        $('#s_m').fadeOut(20000)
                        location.href = get_full_url('admin/manage_coupon.php');
                    } else {
                        $('#er_m').show();
                        $('#er_m').fadeOut(5000)
                    }

                }
            });
        }
    });

    $('#service_form_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        if ($('#name').val() == '') {
            error++;
            errorShow('Please Enter Service Name');
        } else if ($('#description').val() == '') {
            error++;
            errorShow('Please Enter Service Description');
        }
        if (error == 0) {
            var formData = $('#formService').serialize();
            $.ajax({
                url: $("#formService").attr('action'),
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                cache: false,
                success: function (data) {
                    if (data.id > 0) {
                        $('#s_m').show();
                        $('#s_m').fadeOut(4000)
                        location.href = get_full_url('admin/view_service.php');
                    } else {
                        $('#er_m').show();
                        $('#er_m').fadeOut(5000)
                    }
                }
            });
        }
    });

    $('#admin_user_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        var phoneno = /^\d{10}$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var emailvalid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var Urlpattern = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
        if ($('#fname').val() == '' || $('#fname').val() < 3) {
            error++;
            errorShow('Please Enter First Name at least 3 Characters');
        } else if ($('#lname').val() == '' || $('#lname').val() < 3) {
            error++;
            errorShow('Please Enter Last Name at least 3 Characters');
        } else if ($('#email').val() == '' || !($('#email').val().match(emailvalid)) || $("#email").val().length < 3) {
            error++;
            errorShow('Please Enter a valid Email address');
        } else if ($('#mobile_no').val() == '' || isNaN($('#mobile_no').val()) || $("#mobile_no").val().length < 10 || $("#mobile_no").val().length > 12) {
            error++;
            errorShow('Please Enter a Valid Mobile No');
        } else if ($('#password').val() == '' || $("#password").val().length < 3 || $("#password").val().length > 20) {
            error++;
            errorShow('Please Enter Password');
        } else if ($('#cpassword').val() == '' || $("#cpassword").val().length < 3 || $("#cpassword").val().length > 20) {
            error++;
            errorShow('Please Enter Confirm Password');
        } else if ($('#address1').val() == '' || $('#address1').val() < 3 || $('#address1').val() > 500) {
            error++;
            errorShow('Please Enter Address 1 at least 3 Characters');
        } else if ($('#address2').val() == '' || $('#address2').val() < 3 || $('#address2').val() > 500) {
            error++;
            errorShow('Please Enter Address 2 at least 3 Characters');
        } else if ($('#country_id').val() == '' || $('#country_id').val() == null) {
            error++;
            errorShow('Please Select Country');
        } else if ($('#region_id').val() == '' || $('#region_id').val() == null) {
            error++;
            errorShow('Please Select Region');
        } else if ($('#state_id').val() == '' || $('#state_id').val() == null) {
            error++;
            errorShow('Please Select State');
        } else if ($('#city_id').val() == '' || $('#city_id').val() == null) {
            error++;
            errorShow('Please Select City');
        } else if ($('#zipcode').val() == '' || $('#zipcode').val() == 6) {
            error++;
            errorShow('Please Enter Zipcode Only Numeric');
        }
        if (error == 0) {
            var formData = $('#admin_user').serialize();

            $.ajax({
                url: $('#admin_user').attr('action'),
                method: 'POST',
                data: formData,
                dataType: "JSON",
                cache: false,
                success: function (data) {
                    if (data.id > 0) {
                        $('#success_msg').show();
                        $('#success_msg').fadeOut(20000)
                        location.href = get_full_url('admin/view_admin.php');
                    } else {
                        $('#er_msg').show();
                        $('#er_msg').fadeOut(5000);
                    }
                }

            });
        }
    });

    $('#mPlanForm_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        if ($('#service_id').val() == '') {
            error++;
            errorShow('Please Select Service');
        } else if ($('#name').val() == '') {
            error++;
            errorShow('Please Enter Membership Plan Name');
        } else if ($('#description').val() == '') {
            error++;
            errorShow('Please Enter Membership Plan Description');
        }
        if (error == 0) {
            var formData = $('#mPlanForm').serialize();
            $.ajax({
                url: $("#mPlanForm").attr('action'),
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                cache: false,
                success: function (data) {
                    if (data.id > 0) {
                        $('#s_m').show();
                        $('#s_m').fadeOut(20000)
                        location.href = get_full_url('admin/view_member.php');
                    } else {
                        $('#er_m').show();
                        $('#er_m').fadeOut(5000)
                    }
                }
            });
        }
    });

    $('#regionForm_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        if ($('#name').val() == '') {
            error++;
            errorShow('Please Enter Region Name');
        } else if ($('#description').val() == '') {
            error++;
            errorShow('Please Enter Region Description');
        }
        if (error == 0) {
            var formData = $('#regionForm').serialize();
            $.ajax({
                url: $('#regionForm').attr('action'),
                method: 'POST',
                data: formData,
                dataType: "JSON",
                cache: false,
                success: function (data) {
                    if (data.id > 0) {
                        $('#s_m').show();
                        $('#s_m').fadeOut(20000)
                        location.href = get_full_url('admin/view_region.php');
                    } else {
                        $('#er_m').show();
                        $('#er_m').fadeOut(5000)
                    }
                }
            });
        }
    });

    $('#stateForm_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        if ($('#region_id').val() == '') {
            error++;
            errorShow('Please Select Region');
        } else
        if ($('#name').val() == '') {
            error++;
            errorShow('Please Enter State Name');
        } else if ($('#state_code').val() == '') {
            error++;
            errorShow('Please Enter State Code');
        }
        if (error == 0) {
            var formData = $('#stateForm').serialize();
            $.ajax({
                url: $("#stateForm").attr('action'),
                method: 'POST',
                data: formData,
                dataType: "JSON",
                cache: false,
                success: function (data) {
                    if (data.id > 0) {
                        $('#s_m').show();
                        $('#s_m').fadeOut(20000)
                        location.href = get_full_url('admin/view_state.php');
                    } else {
                        $('#er_m').show();
                        $('#er_m').fadeOut(5000)
                    }
                }
            });
        }
    });

    $('#cityForm_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        if ($('#state_id').val() == '') {
            error++;
            errorShow('Please Select State');
        } else if ($('#name').val() == '') {
            error++;
            errorShow('Please Enter City Name');
        }
        if (error == 0) {
            var formData = $('#cityForm').serialize();
            $.ajax({
                url: $("#cityForm").attr('action'),
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                cache: false,
                success: function (data) {
                    if (data.id > 0) {
                        $('#s_m').show();
                        $('#s_m').fadeOut(20000)
                        location.href = get_full_url('admin/view_city.php');
                    } else {
                        $('#er_m').show();
                        $('#er_m').fadeOut(5000)
                    }
                }
            });
        }
    });

    $('#carebuddy_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        var phoneno = /^\d{10}$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var emailvalid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var Urlpattern = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;
        if ($('#fname').val() == '' || $('#fname').val() < 3) {
            error++;
            errorShow('Please Enter First Name at least 3 Characters');
        } else if ($('#lname').val() == '' || $('#lname').val() < 3) {
            error++;
            errorShow('Please Enter Last Name at least 3 Characters');
        } else if ($('#email').val() == '' || !($('#email').val().match(emailvalid)) || $("#email").val().length < 3) {
            error++;
            errorShow('Please Enter a valid Email address');
        } else if ($('#mobile_no').val() == '' || isNaN($('#mobile_no').val()) || $("#mobile_no").val().length < 10 || $("#mobile_no").val().length > 12) {
            error++;
            errorShow('Please Enter a Valid Mobile No');
        } else if ($('#address1').val() == '' || $('#address1').val() < 3 || $('#address1').val() > 500) {
            error++;
            errorShow('Please Enter Address 1 at least 3 Characters');
        } else if ($('#address2').val() == '' || $('#address2').val() < 3 || $('#address2').val() > 500) {
            error++;
            errorShow('Please Enter  Address 2 at least 3 Characters');
        } else if ($('#country_id').val() == '' || $('#country_id').val() == null) {
            error++;
            errorShow('Please Select Country');
        } else if ($('#state_id').val() == '' || $('#state_id').val() == null) {
            error++;
            errorShow('Please Select State');
        } else if ($('#city_id').val() == '' || $('#city_id').val() == null) {
            error++;
            errorShow('Please Select City');
        } else if ($('#zipcode').val() == '' || $('#zipcode').val() == 6) {
            error++;
            errorShow('Please Enter Zipcode Only Numeric');
        }
        if (error == 0) {
            var form = document.getElementById('careBuddy');
            var formDataFormImage = new FormData(form);
            $.ajax({
                url: $("#careBuddy").attr('action'),
                method: 'POST',
                data: formDataFormImage,
                contentType: false,
                cache: false,
                enctype: 'multipart/form-data',
                processData: false,
                dataType: "JSON",
                success: function (data) {
                    if (data.status == true) {
                        $('#success_msg').show();
                        $('#success_msg').fadeOut(20000)
                        location.href = get_full_url('admin/view_carebuddy.php');
                    } else {
                        $('#er_msg').show();
                        $('#er_msg').fadeOut(5000);
                    }
                }
            });
        }
    });

    $('#webUserForm_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        var phoneno = /^\d{10}$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var emailvalid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var Urlpattern = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;

        if ($('#fname').val() == '' || $('#fname').val() < 3) {
            error++;
            errorShow('Please Enter First Name at least 3 Characters');
        } else if ($('#lname').val() == '' || $('#lname').val() < 3) {
            error++;
            errorShow('Please Enter Last Name at least 3 Characters');
        } else if ($('#email').val() == '' || !($('#email').val().match(emailvalid)) || $("#email").val().length < 3) {
            error++;
            errorShow('Please Enter a valid Email address');
        } else if ($('#phone').val() == '' || isNaN($('#phone').val()) || $("#phone").val().length < 10 || $("#phone").val().length > 12) {
            error++;
            errorShow('Please Enter a Valid Mobile No');
        } else if ($('#password').val() == '' || $("#password").val().length < 3 || $("#password").val().length > 20) {
            error++;
            errorShow('Please Enter Password');
        } else if ($('#cpassword').val() == '' || $("#cpassword").val().length < 3 || $("#cpassword").val().length > 20) {
            error++;
            errorShow('Please Enter Confirm Password');
        } else if ($('#address1').val() == '' || $('#address1').val() < 3 || $('#address1').val() > 500) {
            error++;
            errorShow('Please Enter Address 1 at least 3 Characters');
        } else if ($('#address2').val() == '' || $('#address2').val() < 3 || $('#address2').val() > 500) {
            error++;
            errorShow('Please Enter Address 2 at least 3 Characters');
        } else if ($('#country_id').val() == '' || $('#country_id').val() == null) {
            error++;
            errorShow('Please Select Country');
        } else if ($('#state_id').val() == '' || $('#state_id').val() == null) {
            error++;
            errorShow('Please Select State');
        } else if ($('#city_id').val() == '' || $('#city_id').val() == null) {
            error++;
            errorShow('Please Select City');
        } else if ($('#zipcode').val() == '' || $('#zipcode').val() == 6) {
            error++;
            errorShow('Please Enter Zipcode Only Numeric');
        }
        if (error == 0) {
            var formData = $('#webUserForm').serialize();
            $.ajax({
                url: $("#webUserForm").attr('action'),
                method: 'POST',
                data: formData,
                cache: false,
                dataType: "JSON",
                success: function (data) {
                    if (data.id > 0) {
                        $('#s_m').show();
                        $('#s_m').fadeOut(20000)
                        location.href = get_full_url('admin/view_web.php');
                    } else {
                        $('#er_m').show();
                        $('#er_m').fadeOut(5000)
                    }
                }
            });
        }
    });

    $('.delete_plan').on('click', function () {
        var custom_id = $(this).attr('data-custom_id');
        deletePlan(custom_id)
    });

    $('.delete_service').on('click', function () {
        var custom_id = $(this).attr('data-custom_id');
        deleteService(custom_id)
    });

    $('.delete_region').on('click', function (e) {
        var custom_id = $(this).attr('data-custom_id');
        delete_region(custom_id);
    });

    $('.delete_state').on('click', function (e) {
        var custom_id = $(this).attr('data-custom_id');
        delete_state(custom_id);
    });

    $('.delete_cBuddy').on('click', function (e) {
        var custom_id = $(this).attr('data-custom_id');
        delete_cBuddy(custom_id);
    });

    $('.delete_city').on('click', function (e) {
        var custom_id = $(this).attr('data-custom_id');
        delete_city(custom_id);
    });



    $('.delete_adminUser').on('click', function (e) {
        var custom_id = $(this).attr('data-custom_id');
        delete_AdminUser(custom_id);
    });

    $('.delete_webUser').on('click', function (e) {
        var custom_id = $(this).attr('data-custom_id');
        delete_WebUser(custom_id);
    });

    $('.delete_txn').on('click', function () {
        var custom_id = $(this).attr('data-custom_id');
        deleteTxn(custom_id)
    });


    $('#userForm_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        var phoneno = /^\d{10}$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var emailvalid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var Urlpattern = /^(http|https)?:\/\/[a-zA-Z0-9-\.]+\.[a-z]{2,4}/;


        if ($('#fname').val() == '' || $("#fname").val().length < 3 || $("#fname").val().length > 500)
        {
            error++;
            errorShow('Please enter First Name');
        } else if ($('#lname').val() == '' || $("#lname").val().length < 3 || $("#lname").val().length > 500) {
            error++;
            errorShow('Please enter Last Name');
        } else if ($('#email').val() == '' || !($('#email').val().match(emailvalid)) || $("#email").val().length < 3) {
            error++;
            errorShow('Please enter a valid Email address');
        } else if ($('#phone').val() == '' || isNaN($('#phone').val()) || $("#phone").val().length < 10 || $("#phone").val().length > 12) {
            error++;
            errorShow('Please enter Valid Phone No');
        } else if ($('#password').val() == '' || $("#password").val().length < 3 || $("#password").val().length > 20) {
            error++;
            errorShow('Please Enter Password');
        } else if ($('#cpassword').val() == '' || $("#cpassword").val().length < 3 || $("#cpassword").val().length > 20) {
            error++;
            errorShow('Please Enter Confirm Password');
        } else if ($('#address1').val() == '' || $("#address1").val().length < 3 || $("#address1").val().length > 500) {
            error++;
            errorShow('Please enter Address1');
        } else if ($('#address2').val() == '' || $("#address2").val().length < 3 || $("#address2").val().length > 500) {
            error++;
            errorShow('Please enter  Address2');
        } else if ($('#country').val() == '') {
            error++;
            errorShow('Please enter Country');
        } else if ($('#state').val() == '') {
            error++;
            errorShow('Please enter State');
        } else if ($('#city').val() == '') {
            error++;
            errorShow('Please enter City');
        } else if ($('#zipcode').val() == '' || $("#zipcode").val().length < 3 || $("#zipcode").val().length > 8) {
            error++;
            errorShow('Please enter Zipcode');
        }
        if (error == 0) {
            var formData = $('#userForm').serialize();
            $.ajax({
                url: $("#userForm").attr('action'),
                method: 'POST',
                data: formData,
                cache: false,
                dataType: "JSON",
                success: function (data) {
                    if (data.status == true) {
                        $('#userForm')[0].reset();
                        $('#s_m').show();
                        $('#s_m').fadeOut(20000);
                    } else {
                        $('#er_m').show();
                        $('#er_m').fadeOut(5000);
                    }
                }
            });
        }
    });

    $('.showPreview').on('click', function (e) {
        $('#name').html($(this).parent().siblings('.name').text());
        $('#description').html($(this).parent().siblings('.description').text());
        $('#region_name').html($(this).parent().siblings('.region_name').text());
    });

    $('.show_preview').on('click', function (e) {
        $('#name').html($(this).parents().siblings('.name').text());
        $('#desc').html($(this).parents().siblings('.desc').text());
    });

    $('.showPreview').on('click', function (e) {
        $('#name').html($(this).parent().siblings('.name').text());
        $('#description').html($(this).parent().siblings('.description').text());
    });

    $('.showPreview').on('click', function (e) {
        $('#name').html($(this).parent().siblings('.name').text());
        $('#description').html($(this).parent().siblings('.description').text());
        $('#plan_name').html($(this).parent().siblings('.plan_name').text());
    });

    $('.cityPreview').on('click', function (e) {
        $('#name').html($(this).parent().siblings('.name').text());
        $('#region_name').html($(this).parent().siblings('.region_name').text());
        $('#description').html($(this).parent().siblings('.description').text());
        $('#state_name').html($(this).parent().siblings('.state_name').text());
    });

    $('.adminPreview').on('click', function (e) {
        $('#name').html($(this).parent().siblings('.name').text());
        $('#address1').html($(this).parent().siblings('.address1').text());
        $('#address2').html($(this).parent().siblings('.address2').text());
        $('#email').html($(this).parent().siblings('.email').text());
        $('#mobile_no').html($(this).parent().siblings('.mobile_no').text());
        $('#zipcode').html($(this).parent().siblings('.zipcode').text());
        $('#city_name').html($(this).parent().siblings('.city_name').text());
        $('#state_name').html($(this).parent().siblings('.state_name').text());
        $('#region_name').html($(this).parent().siblings('.region_name').text());
        $('#country_name').html($(this).parent().siblings('.country_name').text());

    });

    $('.careBuddyPreview').on('click', function (e) {
        $('#name').html($(this).parent().siblings('.name').text());
        $('#email').html($(this).parent().siblings('.email').text());
        $('#mobile_no').html($(this).parent().siblings('.mobile_no').text());
        $('#address1').html($(this).parent().siblings('.address1').text());
        $('#address2').html($(this).parent().siblings('.address2').text());
        $('#zipcode').html($(this).parent().siblings('.zipcode').text());
        $('#city_name').html($(this).parent().siblings('.city_name').text());
        $('#state_name').html($(this).parent().siblings('.state_name').text());
        $('#region_name').html($(this).parent().siblings('.region_name').text());
        $('#country_id').html($(this).parent().siblings('.country_id').text());

    });



    $('.showPreview').on('click', function (e) {
        $('#cbuddy_name').html($(this).parent().siblings('.cbuddy_name').text());
        $('#full_name').html($(this).parent().siblings('.full_name').text());
        $('#email').html($(this).parent().siblings('.email').text());
        $('#mobile_no').html($(this).parent().siblings('.mobile_no').text());
        $('#address1').html($(this).parent().siblings('.address1').text());
        $('#address2').html($(this).parent().siblings('.address2').text());
        $('#zipcode').html($(this).parent().siblings('.zipcode').text());
        $('#city').html($(this).parent().siblings('.city').text());
        $('#state').html($(this).parent().siblings('.state').text());
        $('#country').html($(this).parent().siblings('.country').text());
    });

    $('.delete_coupon').on('click', function (e) {
        var custom_id = $(this).attr('data-custom_id');
        delete_coupon(custom_id);
    });

    $('.showPreview').on('click', function () {
        $(".model_value").html('');
        $('#ccode').html($(this).parent().siblings('.ccode').text());
        $('#cdesc').html($(this).parent().siblings('.cdesc').text());
        $('#cvalue').html($(this).parent().siblings('.cval').text());
        $('#cvaluetype').html($(this).parent().siblings('.ctype').text());
        $('#cexp').html($(this).parent().siblings('.cexp_dt').text());
    });

    $('.payment_preview').on('click', function () {
        $('#cname').html($(this).parent().siblings('.cname').text());
        $('#cbuddy').html($(this).parent().siblings('.cbuddy').text());
        $('#pname').html($(this).parent().siblings('.pname').text());
        $('#pduration').html($(this).parent().siblings('.pduration').text());
        $('#pamt').html($(this).parent().siblings('.pamt').text());
        $('#pdate').html($(this).parent().siblings('.pdate').text());
        $('#status').html($(this).parent().siblings('.status').text());
        $('#mode').html($(this).parent().siblings('.mode').text());
        $('#bamt').html($(this).parent().siblings('.bamt').text());
        $('#sdate').html($(this).parent().siblings('.sdate').text());
        $('#edate').html($(this).parent().siblings('.edate').text());

    });


    $('#login_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        var emailvalid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if ($('#email').val() == '' || !($('#email').val().match(emailvalid)) || $("#email").val().length < 3) {
            error++;
            errorShow('Please Enter a valid Email address');
        } else if ($('#password').val() == '') {
            error++;
            errorShow('Please Enter Password');
        }
        if (error == 0) {
            var formData = $('#login_form').serialize();

            $.ajax({
                method: "POST",
                url: $('#login_form').attr('action'),
                data: formData,
                cache: false,
                dataType: 'JSON',
                success: function (data) {
                    if (data.status == true) {
                        $('#success_msg').show();
                        location.href = get_full_url('admin/index.php');
                    } else {
                        $('#er_msg').show();
                        $('#er_msg').fadeOut(5000)
                    }
                }
            });
        }

    });

    $('#add_payment_btn').on('click', function (e) {
        e.preventDefault();
        error = 0;
        var form_id = $('input:radio[name="plan_id"]:checked').val();
        if ($('#invoice_number').val() == '') {
                error++;
                errorShow('Please enter invoice number');
        }else{
         //   alert($('#invoice_number').val());
        }
        if (form_id == 2) {
            if ($('#region_id').val() == '') {
                error++;
                errorShow('Please Select Region');
            } else if ($('#state_id').val() == '') {
                error++;
                errorShow('Please Select State');
            } else if ($('#city_id').val() == '') {
                error++;
                errorShow('Please Select City');
            } else if ($('#client_id').val() == '') {
                error++;
                errorShow('Please Select Client Name');
            } else if ($('#package_id').val() == '') {
                error++;
                errorShow('Please Select Package Name');
            } else if ($('#payment_date').val() == '') {
                error++;
                errorShow('Please Select Payment Date');
            } else if ($('#amt_paid_id').val() == '') {
                error++;
                errorShow('Please Enter Amount Only Numeric');
            } else if ($('#status').val() == '') {
                error++;
                errorShow('Please Select Payment Status');
            } else if ($('#mode').val() == '') {
                error++;
                errorShow('Please Select Payment Mode');
            } else if ($('#balance_amt').val() == '') {
                error++;
                errorShow('Please Enter Balance Amount Only Numeric');
            } else if ($('#start_date').val() == '') {
                error++;
                errorShow('Please Select Package Start Date');
            } else if ($('#end_date').val() == '') {
                error++;
                errorShow('Please Select Package End Date');
            }
        } else if (form_id == 3) {
            if ($('#region_id').val() == '') {
                error++;
                errorShow('Please Select Region');
            } else if ($('#state_id').val() == '') {
                error++;
                errorShow('Please Select State');
            } else if ($('#city_id').val() == '') {
                error++;
                errorShow('Please Select City');
            } else if ($('#client_id').val() == '') {
                error++;
                errorShow('Please Select Client Name');
            } else if ($('#pckAmt').val() == '') {
                error++;
                errorShow('Please Enter Package Amount');
            } else if ($('#cpayment_date').val() == '') {
                error++;
                errorShow('Please Select Payment Date');
            } else if ($('#camt_paid').val() == '') {
                error++;
                errorShow('Please Enter Amount Paid Only Numeric');
            } else if ($('#cstatus').val() == '') {
                error++;
                errorShow('Please Select Payment Status ');
            } else if ($('#cmode').val() == '') {
                error++;
                errorShow('Please Select Payment Mode ');
            } else if ($('#cbalance_amt').val() == '') {
                error++;
                errorShow('Please Enter Balance Amount Only Numeric');
            }
        }

        if (error == 0) {
            var formData = $('#payment_form').serialize();
            $.ajax({
                url: $("#payment_form").attr('action'),
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                cache: false,
                success: function (data) {
                    if (data.status == true) {
                        $('#s_m').show();
                        $('#s_m').fadeOut(20000);
                        location.href = get_full_url('admin/view_payment.php');
                    } else {
                        $('#er_m').show();
                        $('#er_m').fadeOut(10000);
                    }
                }
            });
        }
    });

    $(".show_service").hide();
    /* $('.show_care_service').on('click', function () {
     $(".tab_for_show_service").removeClass("care_service_active");
     $(".show_service").hide();
     $(this).siblings(".care_service").show();
     $(this).addClass("care_service_active");
     });
     
     $('.show_value_service').on('click', function () {
     $(".tab_for_show_service").removeClass("care_service_active");
     $(".show_service").hide();
     $(this).siblings(".value_service").show();
     $(this).addClass("care_service_active");
     });*/

    $('.show_care_service').on('click', function () {
        $(".tab_for_show_service").removeClass("care_service_active");
        $(".show_service").fadeOut();
        $(this).siblings(".care_service").fadeIn(2000);
        $(this).addClass("care_service_active");
    });

    $('.show_value_service').on('click', function () {
        $(".tab_for_show_service").removeClass("care_service_active");
        $(".show_service").fadeOut();
        $(this).siblings(".value_service").fadeIn(2000);
        $(this).addClass("care_service_active");
    });

    $('#mpackage_amountt').on('change', function () {
        updateBalaceAmountCS();
    })

    $('#amt_paid_id').on('change', function () {
        updateBalaceAmountCS();
    })

    $('#pckAmt').on('change', function () {
        updateBalaceAmountMP();
    })


    $('#camt_paid').on('change', function () {
        updateBalaceAmountMP();
    })

});


				