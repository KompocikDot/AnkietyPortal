@extends('layouts.dashboard')

@section('single_stat')
    <br>
    <div class="container">
        <div class="row">
            @for ($i = 0; $i < 6; $i+=2)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="myChart{{ $i }}"></canvas>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
        <br>
        <div class="row">
            @for ($i = 1; $i < 6; $i+=2)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <canvas id="myChart{{ $i }}"></canvas>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
    <script>
        @for ($i = 0; $i < 6 ; $i++)
        const labels{{$i}} = [
            'Odpowiedz A',
            'Odpowiedz B',
            'Odpowiedz C',
            'Odpowiedz D',
        ];
        const data{{$i}} = {
            labels: labels{{$i}},
            datasets: [
            
            {
                    backgroundColor: ['rgb(252, 186, 3)', 'rgb(7, 252, 3)', 'rgb(3, 186, 252)', 'rgb(252, 3, 140)'],
                    borderColor: 'rgb(255, 255, 255)',
                    data: [{{ $counted_array[$i] }}],
                    },
            
            ]
        };
        const config{{$i}} = {
            type: 'pie',
            data: data{{$i}},
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Liczba odpowiedzi na pytanie: {{ $i+1 }}'
                    }
                },
                responsive: true,
            }
        };

        
        const myChart{{$i}} = new Chart(
            document.getElementById('myChart{{$i}}'),
            config{{$i}}
        );
        @endfor
    </script>
@endsection