@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuGrafik')


<div class="isi-konten">

    <div class="judul">
        <th>GRAFIK DATA ANGGARAN</th>
        <form action="" method="GET">
            @csrf
            <div class="berdasarkan">
                <h1>Berdasarkan Tahun</h1>
                <p>
                    <span><input class="input_tahun ml-2" name="awal" type="text" value="{{$tahun_awal}}"></span> 
                    -
                    <span><input class="input_tahun" name="akhir" type="text" value="{{$tahun_akhir}}"></span>  
                    <button class="btn btn-success btn-sm ml-2" type="submit">Tampilkan</button>
                </p>
            </div>
        </form>
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
        text: 'BESAR DANA ANGGARAN PER TAHUN'
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
        name: 'ANGGARAN',
        data: {!!json_encode($total)!!},

    }]
});
    </script>
@endpush
        
