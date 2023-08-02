/*---------------------------------------------
Template name :  DWT
Version       :  1.0
Author        :  Duc Minh Vu
Author url    :  https://publicsite.pro


** Custom Repeater JS

----------------------------------------------*/

$(function () {
    'use strict';

    $(document).ready(function () {
        $('.repeater-hopPhongBan').repeater({
            show: function () {
                $(this).slideDown();
            },
            // hide: function (e) {
            //     confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            // },
            hide: function (e) {
                $('#xoaThuocTinh').modal('show');
                $('#deleteRowElement').on('click', function() {
                    $(this).fadeOut(500, function() {
                        $(this).remove();
                    });
                    $('#xoaThuocTinh').modal('hide');
                });
            },
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.repeater').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.repeater-edit').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.repeater-datGiaTriKinhDoanh').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.repeater-dsViTri').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });


    $(document).ready(function () {
        $('.report-task-kpi-keys-repeater').repeater({
            show: function () {
                $(this).slideDown();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });

    $(document).ready(function () {
        $('.PMTP_repeater').repeater({
            show: function () {
                // Find the highest STT value among existing rows
                var sttValues = $(this).closest('.PMTP_repeater').find('[scope="row"]').map(function () {
                    return parseInt($(this).text());
                }).get();
                var maxStt = Math.max.apply(null, sttValues);
    
                // Set the new STT value to the next number
                var sttColumn = $(this).find('[scope="row"]');
                var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });


    $(document).ready(function () {
        $('.YCMS_repeater').repeater({
            show: function () {
                // Find the highest STT value among existing rows
                var sttValues = $(this).closest('.YCMS_repeater').find('[scope="row"]').map(function () {
                    return parseInt($(this).text());
                }).get();
                var maxStt = Math.max.apply(null, sttValues);
    
                // Set the new STT value to the next number
                var sttColumn = $(this).find('[scope="row"]');
                var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });

    $(document).ready(function () {
        $('.DNTU_repeater').repeater({
            show: function () {
                // Find the highest STT value among existing rows
                var sttValues = $(this).closest('.DNTU_repeater').find('[scope="row"]').map(function () {
                    return parseInt($(this).text());
                }).get();
                var maxStt = Math.max.apply(null, sttValues);
    
                // Set the new STT value to the next number
                var sttColumn = $(this).find('[scope="row"]');
                var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).fadeIn(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.DNTT_repeater').repeater({
            show: function () {
                // Find the highest STT value among existing rows
                var sttValues = $(this).closest('.DNTT_repeater').find('[scope="row"]').map(function () {
                    return parseInt($(this).text());
                }).get();
                var maxStt = Math.max.apply(null, sttValues);
    
                // Set the new STT value to the next number
                var sttColumn = $(this).find('[scope="row"]');
                var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).fadeIn(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.YCTK_repeater').repeater({
            show: function () {
                $(this).find('.datePickerRanger').daterangepicker({
                    singleDatePicker: false,
                    timePicker: false,
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                });
                // Find the highest STT value among existing rows
                var sttValues = $(this).closest('.YCTK_repeater').find('[scope="row"]').map(function () {
                    return parseInt($(this).text());
                }).get();
                var maxStt = Math.max.apply(null, sttValues);
    
                // Set the new STT value to the next number
                var sttColumn = $(this).find('[scope="row"]');
                var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).fadeIn(e);
            },
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.QTTU_repeater').repeater({
            show: function () {
                $(this).find('.datePicker').daterangepicker({
                    singleDatePicker: true,
                    timePicker: false,
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                });
                // Find the highest STT value among existing rows
                var sttValues = $(this).closest('.YCMS_repeater_2').find('[scope="row"]').map(function () {
                    return parseInt($(this).text());
                }).get();
                var maxStt = Math.max.apply(null, sttValues);
    
                // Set the new STT value to the next number
                var sttColumn = $(this).find('[scope="row"]');
                var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).fadeIn(e);
            },
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.QTTU_repeater_2').repeater({
            show: function () {
                $(this).find('.datePicker').daterangepicker({
                    singleDatePicker: true,
                    timePicker: false,
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                });
                // Find the highest STT value among existing rows
                var sttValues = $(this).closest('.YCMS_repeater_2').find('[scope="row"]').map(function () {
                    return parseInt($(this).text());
                }).get();
                var maxStt = Math.max.apply(null, sttValues);
    
                // Set the new STT value to the next number
                var sttColumn = $(this).find('[scope="row"]');
                var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).fadeIn(e);
            },
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });

    $(document).ready(function () {
        $('.repeater_DonNghi').repeater({
            show: function () {
                $(this).find('.datePicker').daterangepicker({
                    singleDatePicker: true,
                    timePicker: false,
                    startDate: new Date(),
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                });
                // var sttValues = $(this).closest('.YCMS_repeater_2').find('[scope="row"]').map(function () {
                //     return parseInt($(this).text());
                // }).get();
                // var maxStt = Math.max.apply(null, sttValues);
    
                // var sttColumn = $(this).find('[scope="row"]');
                // var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                // sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).fadeIn(e);
            },
            // update: function () {
            //     myRepeater.repeater('setIndexes');
            // },
        });
    });

    $(document).ready(function () {
        $('.MTCV1_repeater').repeater({
            show: function () {
                // Find the highest STT value among existing rows
                var sttValues = $(this).closest('.MTCV1_repeater').find('[scope="row"]').map(function () {
                    return parseInt($(this).text());
                }).get();
                var maxStt = Math.max.apply(null, sttValues);
    
                // Set the new STT value to the next number
                var sttColumn = $(this).find('[scope="row"]');
                var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
    $(document).ready(function () {
        $('.DN_repeater').repeater({
            show: function () {
                // Find the highest STT value among existing rows
                var sttValues = $(this).closest('.DN_repeater').find('[scope="row"]').map(function () {
                    return parseInt($(this).text());
                }).get();
                var maxStt = Math.max.apply(null, sttValues);
    
                // Set the new STT value to the next number
                var sttColumn = $(this).find('[scope="row"]');
                var sttValue = isNaN(maxStt) ? 1 : maxStt + 1;
                sttColumn.text(sttValue);
    
                $(this).fadeIn();
            },
            hide: function (e) {
                confirm('Bạn có chắc chắn muốn xóa phần tử này không?') && $(this).slideUp(e);
            },
            
            update: function () {
                myRepeater.repeater('setIndexes');
            },
        });
    });
});
