@extends('layouts.default')
@section('default')

@section('titulo','GESTÃO DE FLUXO - Home')
@section('css')
    <link rel="stylesheet" href="../css/cssDefault.css">
@stop

<div class="divHomeTituloPrincipal">
    <h1>
        Gestão de Fluxo
            <br>
        <span>versão 1.0 - Desenvolvido por Kelvin Henrique</span>
    </h1>
</div>

<div class="divHomeAgenda">
    <h1>
        Minha agenda
            <br>
        @php echo date('d / m / Y') @endphp
    </h1>
    <div class="divGridAgenda">
        <a href=""><div>01</div></a>
        <a href=""><div>02</div></a>
        <a href=""><div>03</div></a>
        <a href=""><div>04</div></a>
        <a href=""><div>05</div></a>
        <a href=""><div>06</div></a>
        <a href=""><div>07</div></a>
        <a href=""><div>08</div></a>
        <a href=""><div>09</div></a>
        <a href=""><div>10</div></a>
        <a href=""><div>11</div></a>
        <a href=""><div>12</div></a>
        <a href=""><div>13</div></a>
        <a href=""><div>14</div></a>
        <a href=""><div>15</div></a>
        <a href=""><div>16</div></a>
        <a href=""><div>17</div></a>
        <a href=""><div>18</div></a>
        <a href=""><div>19</div></a>
        <a href=""><div>20</div></a>
        <a href=""><div>21</div></a>
        <a href=""><div>22</div></a>
        <a href=""><div>23</div></a>
        <a href=""><div>24</div></a>
        <a href=""><div>25</div></a>
        <a href=""><div>26</div></a>
        <a href=""><div>27</div></a>
        <a href=""><div>28</div></a>
        <a href=""><div>29</div></a>
        <a href=""><div>30</div></a>
        <a href=""><div>31</div></a>
    </div>
</div>

<div class="divHomeCadastrar">
    <h1>Cadastrar um Fluxo</h1>
    <div class="divCadastrarForm">
        <form action="">
            <label for="dia">Dia</label>
            <input type="number" name="dia" id="dia">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo">
        </form>
    </div>
</div>

<div class="divHomeVisualizarTodosFluxos">
    <h1>Visualizar todos os fluxos cadastrados</h1>
</div>
@endsection