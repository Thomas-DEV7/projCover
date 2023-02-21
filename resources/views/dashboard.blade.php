<style>
    h1{
        text-align: center;
    }
    .models-container{
        display: flex;
        width: 100%;
        justify-content: space-around;
        padding: 100px;
        text-align: center;
    }
    .models{
        display: flex;
        flex-direction: column;
    }
    .image{
        height: 250px;
        width: 200px;
        background-color: #fff;
    }
    .models-container a{
        background-color: steelblue;
        padding: 5px;
        color: #fff;
        text-align: center;
    }
</style>
<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <h1>Escolha um modelo para ser editado:</h1>
    <div class="models-container">
        <div class="models">
            <p>modelo 1</p>
            <div class="image"></div>
            <a href="/model/1">Editar modelo</a>
        </div>
        <div class="models">
            <p>modelo 2</p>
            <div class="image"></div>
            <a href="/model/2">editar modelo</a>
        </div>
        <div class="models">
            <p>modelo 3</p>
            <div class="image"></div>
            <a href="/model/2">editar modelo</a>
        </div>
    </div>
</x-app-layout>