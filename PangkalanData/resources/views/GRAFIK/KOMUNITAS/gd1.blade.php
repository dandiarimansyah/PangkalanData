@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuGrafik')

<div class="isi-konten">
    <div class="judul">
        <th>DATA KOMUNITAS BAHASA DAN SASTRA</th>
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
        text: 'JUMLAH DATA KOMUNITAS BAHASA DAN SASTRA PER TAHUN'
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
        name: 'KOMUNITAS BAHASA DAN SASTRA',
        data: {!!json_encode($total)!!},

    }]
});
    </script>
@endpush