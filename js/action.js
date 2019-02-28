function updateBalaceAmountCS() {
    var balance_amount = parseInt(parseInt($("#mpackage_amountt").val()) - parseInt($("#amt_paid_id").val()));
    $("#balance_amt").val(balance_amount);
}


function updateBalaceAmountMP() {
    var balance_amount = $("#pckAmt").val() - $("#camt_paid").val();
    $("#cbalance_amt").val(balance_amount);
}


function getRandomCoupon() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < 8; i++) {
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    var myElement = document.getElementById("coupon_code")
    myElement.value = text

}

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if (key < 48 || key > 57) {
        return false;
    } else {
        return true;
    }
}

function errorShow(txt) {
    $('#error_msg').show();
    $('#error_msg').html(txt);
}

function checkPasswordMatch() {
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();

    if (password != cpassword) {
        $("#divCheckPasswordMatch").html("Passwords do not match!");
        $("#divCheckPasswordMatch").fadeOut('slow', function () {
            $("#divCheckPasswordMatch").fadeIn();
        });
    } else {
        $("#divCheckPasswordMatch").html("Passwords match.");
        $("#divCheckPasswordMatch").fadeIn('slow', function () {
            $("#divCheckPasswordMatch").fadeOut();
        });
    }
}

function get_server_url() {
    var loc = window.location;
    var url = "" + loc.protocol + "//" + loc.host
    return url;
}

function get_full_url(url_path) {
    var loc = window.location;
    var url = "" + loc.protocol + "//" + loc.host + '/' + url_path;
    return url;
}

function deletePlan(custom_id) {
    var plan = confirm('Are you sure to Delete it?')
    if (plan == true) {
        var formdata = {
            m_Plan_id: custom_id
        };
        $.ajax({
            type: "POST",
            url: 'process/delete.php',
            data: formdata,
            dataType: "JSON",
            cache: false,
            success: function (data) {
                if (data.id > 0) {
                    $('#delete_plan_' + custom_id).closest('.odd, .even').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            },
        });
    }
}

function deleteService(custom_id) {
    var service = confirm('Are you sure to Delete it?')
    if (service == true) {
        var formdata = {
            serviceID: custom_id
        };
        $.ajax({
            type: "POST",
            url: 'process/delete.php',
            data: formdata,
            dataType: "JSON",
            cache: false,
            success: function (data) {
                if (data.id > 0) {
                    $('#delete_service_' + custom_id).closest('.odd, .even').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            },
        });
    }
}

function getStateCityList(custom_id, flag, load_data) {
    var formData = {
        flag: flag,
        custom_id: custom_id
    };
    $.ajax({
        type: 'POST',
        url: 'process/get_state_by_region.php',
        data: formData,
        success: function (data) {
            $('#' + load_data).html(data);
            if (flag == 'STATE_BY_REGION') {
                getStateCityList($('#state_id').val(), 'CITY_BY_STATE', 'city_id');
            }
            if (flag == 'CITY_BY_STATE') {
                getStateCityList($('#city_id').val(), 'CLIENT_BY_CITY', 'client_id');
            }
            if (flag == 'CLIENT_BY_CITY') {
                getStateCityList($('#client_id').val(), 'CLIENT_DATA', 'client_data');
            }
            if (flag == 'CLIENT_DATA') {
                $('#client_data').html(data);
            }
        }
    });

}

function delete_region(custom_id) {
    var region = confirm('Are you sure to Delete it?')
    if (region == true) {
        var formData = {
            regionID: custom_id
        }
        $.ajax({
            type: "POST",
            url: 'process/delete.php',
            data: formData,
            dataType: "JSON",
            success: function (data) {
                if (data.status == true) {
                    $('#delete_region_' + custom_id).closest('.odd', '.even').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            }
        });
    }
}

function delete_state(custom_id) {
    var state = confirm('Are you sure to Delete it?')
    if (state == true) {
        var formData = {
            stateID: custom_id
        }
        $.ajax({
            method: 'POST',
            url: 'process/delete.php',
            data: formData,
            dataType: 'JSON',
            cache: false,
            success: function (data) {
                if (data.status == true) {
                    $('#delete_state_' + custom_id).closest('.even').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            }
        });

    }
}

function delete_cBuddy(custom_id) {
    var cBuddy = confirm('Are you sure to Delete it?')
    if (cBuddy == true) {
        var formData = {
            cBuddyID: custom_id
        }
        $.ajax({
            type: "POST",
            url: 'process/delete.php',
            data: formData,
            dataType: "JSON",
            success: function (data) {
                if (data.status == true) {
                    $('#delete_cBuddy_' + custom_id).closest('.odd', '.even').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            }
        });
    }
}

function delete_city(custom_id) {
    var city = confirm('Are you sure to Delete it?')
    if (city == true) {
        var formData = {
            cityID: custom_id
        }
        $.ajax({
            method: 'POST',
            url: 'process/delete.php',
            data: formData,
            dataType: 'JSON',
            cache: false,
            success: function (data) {
                if (data.status == true) {
                    $('#delete_city_' + custom_id).closest('.even').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            }
        });
    }
}

function delete_coupon(custom_id) {
    var coupon = confirm('Are you sure to Delete it?')
    if (coupon == true) {
        var formData = {
            couponID: custom_id
        }
        $.ajax({
            method: 'POST',
            url: 'process/delete.php',
            data: formData,
            dataType: 'JSON',
            cache: false,
            success: function (data) {
                if (data.status == true) {
                    $('#delete_coupon_' + custom_id).closest('.even').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            }
        });
    }
}

function delete_AdminUser(custom_id) {
    var coupon = confirm('Are you sure to Delete it?')
    if (coupon == true) {
        var formData = {
            userID: custom_id
        }
        $.ajax({
            method: 'POST',
            url: 'process/delete.php',
            data: formData,
            dataType: 'JSON',
            cache: false,
            success: function (data) {
                if (data.status == true) {
                    $('#delete_adminUser_' + custom_id).closest('.odd').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            }
        });
    }
}

function delete_WebUser(custom_id) {
    var coupon = confirm('Are you sure to Delete it?')
    if (coupon == true) {
        var formData = {
            webUserID: custom_id
        }
        $.ajax({
            method: 'POST',
            url: 'process/delete.php',
            data: formData,
            dataType: 'JSON',
            cache: false,
            success: function (data) {
                if (data.status == true) {
                    $('#delete_webUser_' + custom_id).closest('.odd', '.even').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            }
        });
    }
}

function getCityListForFront(custom_id) {
    var formData = {
        custom_id: custom_id
    };
    $.ajax({
        type: 'POST',
        url: 'process/get_City_by_State.php',
        data: formData,
        success: function (data) {
            $('#city').html(data);
        }
    });
}

function paginationForWebUser(pageNum) {

    var city_id = $("#city_id").val();
    var state_id = $("#state_id").val();
    var region_id = $("#region_id").val();
    var search_id = $('#search_id').val();

    var formData = {
        pageNum: pageNum,
        city_id: city_id,
        state_id: state_id,
        region_id: region_id,
        search_id: search_id
    }

    $.ajax({
        method: 'GET',
        url: 'partial/webUser_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}

function paginationForAdminUser(pageNum) {
    var city_id = $("#city_id").val();
    var state_id = $("#state_id").val();
    var region_id = $("#region_id").val();
    var search_id = $('#search_id').val();

    var formData = {
        pageNum: pageNum,
        city_id: city_id,
        state_id: state_id,
        region_id: region_id,
        search_id: search_id
    }
    $.ajax({
        method: 'GET',
        url: 'partial/adminUser_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}

function paginationForcareBuddy(pageNum) {
    var city_id = $("#city_id").val();
    var state_id = $("#state_id").val();
    var region_id = $("#region_id").val();
    var search_id = $('#search_id').val();

    var formData = {
        pageNum: pageNum,
        city_id: city_id,
        state_id: state_id,
        region_id: region_id,
        search_id: search_id
    }
    $.ajax({
        method: 'GET',
        url: 'partial/cbuddy_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}


function paginationForcareBuddyStatus(pageNum) {
    var city_id = $("#city_id").val();
    var state_id = $("#state_id").val();
    var region_id = $("#region_id").val();
    var search_id = $("#search_id").val();

    var formData = {
        pageNum: pageNum,
        city_id: city_id,
        state_id: state_id,
        region_id: region_id,
        search_id: search_id
    }
    $.ajax({
        method: 'GET',
        url: 'partial/cbuddyStatus_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}

function paginationForCoupon(pageNum) {
    var startDate = $('#startDate').val();
    var endDate = $('#endDate').val();
    var search_id = $('#search_id').val();

    var formData = {
        pageNum: pageNum,
        startDate: startDate,
        endDate: endDate,
        search_id: search_id
    }

    $.ajax({
        method: 'GET',
        url: 'partial/coupon_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}

function paginationPaymentStatus(pageNum) {
    var city_id = $("#city_id").val();
    var state_id = $("#state_id").val();
    var region_id = $("#region_id").val();
    var search_id = $('#search_id').val();

    var formData = {
        pageNum: pageNum,
        city_id: city_id,
        state_id: state_id,
        region_id: region_id,
        search_id: search_id
    }
    $.ajax({
        method: 'GET',
        url: 'partial/paymentStatus_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}


function paginationForCity(pageNum) {
    var region_id = $('#region_id').val();
    var state_id = $('#state_id').val();
    var search_id = $('#search_id').val();

    var formData = {
        pageNum: pageNum,
        region_id: region_id,
        state_id: state_id,
        search_id: search_id
    }
    $.ajax({
        method: 'GET',
        url: 'partial/city_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}

function paginationForState(pageNum) {
    var region_id = $('#region_id').val();
    var search_id = $('#search_id').val();


    var formData = {
        pageNum: pageNum,
        region_id: region_id,
        search_id: search_id
    }
    $.ajax({
        method: 'GET',
        url: 'partial/state_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}


function paginationForClientRatio(pageNum) {
    var city_id = $("#city_id").val();
    var state_id = $("#state_id").val();
    var region_id = $("#region_id").val();
    var search_id = $('#search_id').val();

    var formData = {
        pageNum: pageNum,
        city_id: city_id,
        state_id: state_id,
        region_id: region_id,
        search_id: search_id
    }
    $.ajax({
        method: 'GET',
        url: 'partial/carebuddyRatio_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}

function getStateForFilter(custom_id, flag, load_data) {
    var formData = {
        flag: flag,
        custom_id: custom_id
    };
    $.ajax({
        type: 'POST',
        url: 'process/getStateCityForFilter.php',
        data: formData,
        success: function (data) {
            $('#' + load_data).html(data);
            if (flag == 'STATE_BY_REGION') {
                getStateCityList($('#state_id').val(), 'CITY_BY_STATE', 'city_id');
            }
            if (flag == 'CITY_BY_STATE') {
                $('#city_id').html(data);
            }

        }
    });
}

function getPlanList(custom_id, flag) {
    var formData = {
        flag: flag,
        custom_id: custom_id
    };
    $.ajax({
        type: 'POST',
        url: 'process/get_state_by_region.php',
        data: formData,
        success: function (data) {
            var data = jQuery.parseJSON(data);
            if (flag = 'PLAN_DATA') {
//                $('#plan_data').html(data);
                $("#mpackage_amountt").val(data.amt);
                $("#pkgdu").val(data.pd);

            }
        }
    });
}

function deleteTxn(custom_id) {
    var state = confirm('Are you sure to Delete it?')
    if (state == true) {
        var formData = {
            TxnID: custom_id
        }
        $.ajax({
            method: 'POST',
            url: 'process/delete.php',
            data: formData,
            dataType: 'JSON',
            cache: false,
            success: function (data) {
                if (data.status == true) {
                    $('#delete_txn' + custom_id).closest('.odd').remove();
                    $('#s_msg').show();
                    $('#s_msg').fadeOut(4000)
                }
            }
        });

    }
}

function paginationForPayment(pageNum) {

    var city_id = $("#city_id").val();
    var state_id = $("#state_id").val();
    var region_id = $("#region_id").val();
    var search_id = $('#search_id').val();

    var formData = {
        pageNum: pageNum,
        city_id: city_id,
        state_id: state_id,
        region_id: region_id,
        search_id: search_id
    }

    $.ajax({
        method: 'GET',
        url: 'partial/payment_paging_partial.php',
        data: formData,
        cache: false,
        beforeSend: function () {
            $('.loader').show();
        },
        success: function (data) {
            $('#load_data').html(data);
            $('.loader').hide();
        }
    });
}