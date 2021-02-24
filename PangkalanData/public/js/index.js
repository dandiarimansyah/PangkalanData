$('.icon').click(function(){
$('span').toggleClass("cancel");
});

//DATE Format
// $("#date").on("change", function() {
//     this.setAttribute(
//         "data-date",
//         moment(this.value, "YYYY-MM-DD")
//         .format( this.getAttribute("data-date-format") )
//     )
//     }).trigger("change")

//Import Data
$(document).on('click','#import_data',function(){
    var link = $(this).attr('href');
    var loc = $(this).attr('loc');
    
    $('#import_form').attr('action', '' + link);
    $('#template_excel').attr('href', '' + loc);
})

//Tombol Kembali
function back() {
    window.history.back();
}

$('#valid').click(function() {
    if ($(this).prop('checked')) {
        $('.check').prop('checked', true);
    } else {
        $('.check').prop('checked', false);
    }
});

$(document).ready(function () {
    var table = $('#datatable').DataTable();
})

$(document).on('click', '#pesan', function(e){
    e.preventDefault();
    var link = $(this).attr('href');
    
    Swal.fire({
        title: 'Yakin Dihapus?',
        text: "Data akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = link;
        }
    })
})


//Validasi Confirmation
// $(document).on('click','#tombol_validasi',function(e){
//     e.preventDefault();
//     let url = $(this).attr('href');
    
//     Swal.fire({
//         title: 'Validasi Data?',
//         text: "Data yang telah dicentang akan divalidasi!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#028B40',
//         cancelButtonColor: '#d33',
//         cancelButtonText: 'Batal',
//         confirmButtonText: 'Validasi',
//         reverseButtons: true
//         }).then((result) => {
//         if (result.isConfirmed) {
//             let data = []
//             $(".check:checked").each((i, e) => data.push(e.getAttribute('data-id')))
    
//             $.ajax({
//                 type: "post",
//                 url: url,
//                 data: {_token:'{{ csrf_token() }}', id: data},
//                 dataType:"json",
//                 complete: function(){
//                     console.log("halo");
//                     location.reload();
//                 }
//             });
//         }
//     })
// })
  

var flash = $('#flash').data('flash');
var url = $('#flash').data('url');
if(flash){
    Swal.fire({
        icon: 'success',
        html: '<a href="' + url + '" class="btn btn-success" style="display:inline-block">Klik untuk Lihat Data</a> ',
        title: 'Sukses',
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3500,
        timerProgressBar: true,
        text: flash,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
}

$(document).on('click', '#hapus_media', function(e){
    e.preventDefault();
    var link = $(this).attr('href');
    
    Swal.fire({
        title: 'Yakin Dihapus?',
        text: "Media akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Hapus',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = link;
        }
    })
})

function jenis_lain(val){
    var element=document.getElementById('jenis_buku_2');
    var element2=document.getElementById('a');
    if(val=='Lain'){
        element.style.display='block';
        element2.style.display='none';
    }
    else {
        element.style.display='none';
        element2.style.display='block';
    }
}

function number_format (number, decimals, dec_point, thousands_sep) {
    // Strip all characters but numerical ones.
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

$(document).ready(function () {  

    $(".rupiah").each(function(i, e) {
        e = "Rp. " + number_format(e.getAttribute('data-nilai'), 0, ',' , '.'); 
        $(this).html(e);
    })
})

