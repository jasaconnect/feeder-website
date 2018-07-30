$(document).ready(function () {
    function setTabValue(s) {
        $("#action_type_id").val(s);
    }
    $(".tab-pilihan").click(function () {
        var x = $(this).attr("alt");
        setTabValue(x);
    });

    $('.reset-form').click(function ()
    {
        window.location.reload(true);
    });


    $("#searchInit").on("submit", function (e) {
        e.preventDefault();
        if ($(this).valid()) {
            var formData = new FormData();
            var data = $("#searchInit").serializeArray();
            $.each(data, function (key, input) {
                formData.append(input.name, input.value);
            });

            var submit = $("#searchInit").find(".btn-submit-search").text();
            $("#searchInit").find(".btn-submit-search").html("<img src='/img/loader.gif' style='padding: 0 40px;'>").prop('disabled', true);

            $.ajax({
                method: 'post',
                url: $("#searchInit").attr('action'),
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function (data) {

                    console.log(data);
                    if (data.status == "success") {
                        $("#searchInit").find(".btn-submit-search").empty().text(submit).prop('disabled', false);
                        document.getElementById('searchInit').reset();
                        swal({
                            title: "Success!",
                            text: data.message,
                            type: data.type,
                            showLoaderOnConfirm: true,
                            showCancelButton: false,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Ok",
                            closeOnConfirm: false,
                            closeOnCancel: false,
                        },
                                function () {
                                    location.reload(true)
                                });


                    } else if (data.status == "double-request") {
                        $("#searchInit").find(".btn-submit-search").empty().text(submit).prop('disabled', false);
                        swal({
                            title: data.title,
                            text: data.message,
                            type: data.type,
                            showLoaderOnConfirm: true,
                            showCancelButton: false,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Ok",
                            closeOnConfirm: false,
                            closeOnCancel: true,
                        },
                                function () {
                                    swal.close();
                                    location.reload(true);
                                });
                    } else if (data.status == "email_already_registered") {

                        $("#searchInit").find(".btn-submit-search").empty().text(submit).prop('disabled', false);

                        swal(data.title, data.message, data.type);
                    } else {
                        $("#searchInit").find(".btn-submit-search").empty().text(submit).prop('disabled', false);
                        swal("Error!", "Maaf siste kami sedang penuh. Mohon tunggu beberapa saat lagi.", "error");
                    }
                },
                error: function (data) {
                    $("#searchInit").find(".btn-submit-search").empty().text(submit).prop('disabled', false);
                    swal("Error!", "Maaf siste kami sedang penuh. Mohon tunggu beberapa saat lagi.", "error");
                }
            });
        }
    })
            .validate({
                rules: {
                    /*
                     date: {
                     required: true
                     },
                     date_end: {
                     required: true
                     },
                     start_time: {
                     required: true
                     },
                     end_time: {
                     required: true
                     },*/
                    alamat_jalan: {
                        required: {
                            depends: function (element) {
                                if ($("#allow_detect_user_location").is(':checked')) {
                                    return false;
                                } else {
                                    return true;
                                }
                            }
                        }
                    },
                    alamat_kel: {
                        required: {
                            depends: function (element) {
                                if ($("#allow_detect_user_location").is(':checked')) {
                                    return false;
                                } else {
                                    return true;
                                }
                            }
                        }
                    },
                    alamat_kec: {
                        required: {
                            depends: function (element) {
                                if ($("#allow_detect_user_location").is(':checked')) {
                                    return false;
                                } else {
                                    return true;
                                }
                            }
                        }
                    },
                    alamat_kota: {
                        required: {
                            depends: function (element) {
                                if ($("#allow_detect_user_location").is(':checked')) {
                                    return false;
                                } else {
                                    return true;
                                }
                            }
                        }
                    },
                    daterange: {
                        required: true
                    },
                    location: {
                        required: true
                    }
                },
                messages: {
                    /*
                     date: {
                     required: "Please fill out the starting date of project",
                     },
                     date_end: {
                     required: "Please fill out the estimation finish date of project",
                     },
                     start_time: {
                     required: "Please fill out the starting time of project",
                     },
                     end_time: {
                     required: "Please fill out the estimation finish time of project",
                     },*/
                    daterange: {
                        required: "Please fill out the date of project",
                    },
                    location: {
                        required: "Isi detail lokasi!"
                    }
                },
                errorPlacement: function (error, element) {
                    var placement = $(element).data('error');
                    var blackbox = $(element).data('popup');
                    var msg = $(element).data('msg');
                    if (placement) {
                        $(placement).append(error)
                    } else if (blackbox) {
                        console.log(error);
                        swal(blackbox, msg, "warning");
                    } else {
                        error.insertAfter(element);
                    }
                }
            });
    var longval = "#hidLong";
    var latval = "#hidLat";
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -6.211544, lng: 106.84517200000005},
            zoom: 13
        });
        var input = document.getElementById('pac-input');

        var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function () {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                // User entered the name of a Place that was not suggested and
                // pressed the Enter key, or the Place Details request failed.
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);  // Why 17? Because it looks good.
                console.log(place.geometry.location);
            }
            marker.setIcon(/** @type {google.maps.Icon} */({
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(35, 35)
            }));
            marker.setPosition(place.geometry.location);
            console.log(marker.getPosition().lat());
            console.log(marker.getPosition().lng());
            $(latval).val(marker.getPosition().lat());
            $(longval).val(marker.getPosition().lng());
            marker.setVisible(true);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            $("#user_address").val(place.name + ', ' + address);
            infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
            infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
            var radioButton = document.getElementById(id);
            radioButton.addEventListener('click', function () {
                autocomplete.setTypes(types);
            });
        }

        setupClickListener('changetype-all', []);
    }
    initMap();

    var dateToday = new Date();
    var dates = $(".jdatepicker").datepicker({
        defaultDate: "+1m",
        changeMonth: true,
        numberOfMonths: 3,
        minDate: dateToday,
        onSelect: function (selectedDate) {
            var option = this.id == "from" ? "minDate" : "maxDate",
                    instance = $(this).data("datepicker"),
                    date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
            dates.not(this).datepicker("option", option, date);
        }
    });


    function set_klien_area() {
        var x = $("#area-kabupaten").val();
        $("#client-kabupaten").val(x).trigger("change");
    }

    function set_beda_alamat() {

        if ($("#alamat_beda").is(":checked") == true) {
            $("#client-kabupaten").val('').focus();
            $("#user_address").val();
            $("#beda-alamat-div").show(500);
        } else {
            $("#beda-alamat-div").hide(500);
        }
    }

    $("body").on("click", "#alamat_beda", function () {
        set_beda_alamat();
    });

    set_beda_alamat();
    set_klien_area();


    $("body").on("click", "#samakan_alamat", function () {

        if ($(this).is(":checked") == true) {
            var kab = $("#client-kabupaten").val();
            var user_address = $("#user_address").val();
            $("#area-kabupaten").val(kab).trigger("change");
            $("#addressProject").val(user_address);

            console.log(kab);
            console.log(user_address);

        } else {
            $("#addressProject").val('').focus();
        }
    });
});

