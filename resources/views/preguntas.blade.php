
@extends('layouts.layoutForms')

@section('content')
    <div class="ui center aligned grid">
        <div class="column">
            <div class="ui segment">
                <h4 id="sem">¿Tienes dudas?</h4>
                    <div class="ui secondary segment">
                        <h4 id="sem">Selecciona un asunto</h4>
                        <div class="ui vertical segment">
                            <i class="money bill alternate outline icon"></i>
                            <a id="asunto" href="">Compra Ticket</a>
                        </div>
                        <div class="ui vertical segment">
                            <i class="credit card outline icon"></i>
                            <a id="asunto" href="">Medios de Pago</a>
                        </div>
                        <div class="ui vertical segment">
                            <i class="cart arrow down icon"></i>
                            <a id="asunto" href="">Productos</a>
                        </div>
                        <br>
                        <h4 id="sem">Las preguntas más frecuentes</h4>
                        <div class="ui list">
                                <a class="item">¿Cómo compro boletos?</a>
                                <a class="item">¿Cómo puedo pagar los boletos?</a>
                                <a class="item">¿Cuál es el limite de boletos por persona?</a>
                                <a class="item">¿Cómo puedo cambiar el método de entrega que elegí en mi compra?</a>
                                <a class="item">¿Cómo recibir o retirar el producto?</a>
                                <a class="item">¿Cómo se realizan los envios?</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>

@endsection
