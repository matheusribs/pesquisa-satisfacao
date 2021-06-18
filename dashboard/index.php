<!DOCTYPE html>
<html>
<head>
<title></title>

<style type="text/css">
body {
    width: 550px;
}

#chart-container {
    width: 100%;
    height: auto;
}
#divPrincipal{
    width: 2000px;
    margin-left: 20px;
    margin-top: 20px;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>

<body>

    <div id="divPrincipal" class="container-md">
    <div class="row">

        <div class="col-sm-6">
            <h6>SATISFAÇÃO COM RELAÇÃO AO NOSSO ATENDIMENTO?</h6>
            <div id="chart-container">
                <canvas id="graphCanvas"></canvas>
            </div>
        </div>

        <div class="col-sm-6">
            <h6>REPASSE DE INFORMAÇÕES SOBRE PRODUTOS?</h6>
            <div id="chart-container">
                <canvas id="graphCanvas2"></canvas>
            </div>
        </div>

        <div class="col-sm-6" style="margin-top: 40px">
            <h6>PRAZO DE ENTREGA DOS PRODUTOS?</h6>
            <div id="chart-container">
                <canvas id="graphCanvas3"></canvas>
            </div>
        </div>

        <div class="col-sm-6" style="margin-top: 40px">
            <h6>TEMPO PARA ATENDER SUAS SOLICITAÇÕES DE ORÇAMENTOS, CONSULTAS SOBRE PRODUTOS OU RESOLUÇÃO DE PENDÊNCIAS?</h6>
            <div id="chart-container">
                <canvas id="graphCanvas4"></canvas>
            </div>
        </div>


        <div class="col-sm-6" style="margin-top: 40px">
            <h6>EM UMA ESCALA DE 0 A 10 QUAL A PROBABILIDADE DE VOCÊ INDICAR A GMI?</h6>
            <div id="chart-container">
                <canvas id="graphCanvas5"></canvas>
            </div>
        </div>


    </div>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
            showGraph2();
            showGraph3();
            showGraph4();
            showGraph5();

        });

        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                        var name = ['Péssimo','Insatisfeito','Médio', 'Satisfeito', 'Muito Satisfeito'];
                        var p1 = [];
                        var p2 = [];
                        var p3 = [];
                        var p4 = [];
                        var p5 = [];

                    for (var i in data) {
                        //name.push(data[i].name);
                        p1.push(data[i].p1);
                        p2.push(data[i].p2);
                        p3.push(data[i].p3);
                        p4.push(data[i].p4);
                        p5.push(data[i].p5);

                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Dados Coletados',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [p1,p2,p3,p4,p5]
                            }
                        ]                        
                    };

                    var graphTarget = $("#graphCanvas");


                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }

        function showGraph2()
        {
            {
                $.post("data2.php",
                function (data)
                {
                    console.log(data);
                        var name = ['Péssimo','Insatisfeito','Médio', 'Satisfeito', 'Muito Satisfeito'];
                        var p1 = [];
                        var p2 = [];
                        var p3 = [];
                        var p4 = [];
                        var p5 = [];

                    for (var i in data) {
                        //name.push(data[i].name);
                        p1.push(data[i].p1);
                        p2.push(data[i].p2);
                        p3.push(data[i].p3);
                        p4.push(data[i].p4);
                        p5.push(data[i].p5);

                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Dados Coletados',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [p1,p2,p3,p4,p5]
                            }
                        ]                        
                    };

                    var graphTarget = $("#graphCanvas2");


                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }

        function showGraph3()
        {
            {
                $.post("data3.php",
                function (data)
                {
                    console.log(data);
                        var name = ['Péssimo','Insatisfeito','Médio', 'Satisfeito', 'Muito Satisfeito'];
                        var p1 = [];
                        var p2 = [];
                        var p3 = [];
                        var p4 = [];
                        var p5 = [];

                    for (var i in data) {
                        //name.push(data[i].name);
                        p1.push(data[i].p1);
                        p2.push(data[i].p2);
                        p3.push(data[i].p3);
                        p4.push(data[i].p4);
                        p5.push(data[i].p5);

                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Dados Coletados',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [p1,p2,p3,p4,p5]
                            }
                        ]                        
                    };

                    var graphTarget = $("#graphCanvas3");


                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }

        function showGraph4()
        {
            {
                $.post("data4.php",
                function (data)
                {
                    console.log(data);
                        var name = ['Péssimo','Insatisfeito','Médio', 'Satisfeito', 'Muito Satisfeito'];
                        var p1 = [];
                        var p2 = [];
                        var p3 = [];
                        var p4 = [];
                        var p5 = [];

                    for (var i in data) {
                        //name.push(data[i].name);
                        p1.push(data[i].p1);
                        p2.push(data[i].p2);
                        p3.push(data[i].p3);
                        p4.push(data[i].p4);
                        p5.push(data[i].p5);

                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Dados Coletados',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [p1,p2,p3,p4,p5]
                            }
                        ]                        
                    };

                    var graphTarget = $("#graphCanvas4");


                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }

        function showGraph5()
        {
            {
                $.post("data5.php",
                function (data)
                {
                    console.log(data);
                        var name = ['1','2','3','4','5','6','7','8','9','10'];
                        var p1 = [];
                        var p2 = [];
                        var p3 = [];
                        var p4 = [];
                        var p5 = [];
                        var p6 = [];
                        var p7 = [];
                        var p8 = [];
                        var p9 = [];
                        var p10 = [];


                    for (var i in data) {
                        //name.push(data[i].name);
                        p1.push(data[i].p1);
                        p2.push(data[i].p2);
                        p3.push(data[i].p3);
                        p4.push(data[i].p4);
                        p5.push(data[i].p5);
                        p6.push(data[i].p6);
                        p7.push(data[i].p7);
                        p8.push(data[i].p8);
                        p9.push(data[i].p9);
                        p10.push(data[i].p10);

                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Dados Coletados',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [p1,p2,p3,p4,p5,p6,p7,p8,p9,p10]
                            }
                        ]                        
                    };

                    var graphTarget = $("#graphCanvas5");


                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>