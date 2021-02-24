@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuGrafik')

<div class="isi-konten">

    <div class="judul">
        <th>DATA KAMUS/ENSIKLOPEDIA/TESAURUS/GLOSARIUM/LEMA</th>
    </div>

    <div style="display: flex; justify-content:center">
        <div id="container" style="width:90%; height:450px;"></div>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'JUMLAH DATA KAMUS/ESIKLOPEDIA/TESAURUS/GLOSAURUM/LEMA PER TAHUN'
    },

    xAxis: {
        categories: {!!json_encode($tahun)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Banyak Data'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 1
        }
    },
    series: [{
        name: 'KAMUS',
        data: {!!json_encode($KAMUS_T)!!},

    }, {
        name: 'ENSIKLOPEDIA',
        data: {!!json_encode($ENSIKLOPEDIA_T)!!},

    }, {
        name: 'TESAURUS',
        data: {!!json_encode($TESAURUS_T)!!},

    }, {
        name: 'GLOSAURUM',
        data: {!!json_encode($GLOSARIUM_T)!!},

    }, {
        name: 'LEMA',
        data: {!!json_encode($LEMA_T)!!},

    }]
});
    </script>
@endpush