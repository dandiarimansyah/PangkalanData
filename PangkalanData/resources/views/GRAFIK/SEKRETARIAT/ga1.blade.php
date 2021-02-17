{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')
{{-- @extends('PARTIAL.indexV') --}}

@section('content')

@include('PARTIAL.MenuGrafik')

<?php
    $koneksi    = mysqli_connect("localhost", "root", "", "pangkalan_data");
    $nilai_anggaran  = mysqli_query($koneksi, "SELECT nilai_anggaran FROM anggaran order by ID asc");
    $tahun_anggraran       = mysqli_query($koneksi, "SELECT tahun_anggraran FROM anggaran order by ID asc");
?>

<script src="{{ asset ('js/Chart.js') }}"></script>

<div class="isi-konten">

    <div class="judul">
        <th>DATA ANGGARAN</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Jumlah: (ISIAN) Data</th>
    </div>

    <div class="panel">
        <div id="chartTahun"></div>
    </div>



</div>

<script src="https://code.highcharts.com/highcharts.js"></script>

<script>

Highcharts.chart('chartTahun', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Anggaran'
    },
    // subtitle: {
    //     text: 'Source: WorldClimate.com'
    // },
    xAxis: {
        categories: {!!json_encode($categories)!!}
        
        // [ 
        //     '2000',
        //     '2001',
        //     '2002',
        //     '2003',
        //     '2004',
        //     '2005',
        //     '2006',
        //     '2007',
        //     '2008',
        //     '2009',
        //     '2010',
        //     '2011',
        //     '2012',
        //     '2013',
        //     '2014',
        //     '2015',
        //     '2016',
        //     '2017',
        //     '2018',
        //     '2019',
        //     '2020',
        //     '2021'
        // ]
        
        ,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Data'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Data Anggaran',
        data: [1,2]
        // [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21]

    }]
});
         

</script>

@endsection

