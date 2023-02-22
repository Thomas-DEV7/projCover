<style>
    .image{
        height: 300px;
        width: 200px;
        background-color: #ccc;
    }
    main{
        display: flex;
        gap: 15px;
    }
</style>

<!-- RENDERIZAÇÃO CONDICIONAL (ID NA URL) -->
<h1>Editar documento</h1><hr>
@if($id == 1)
    <!-- Renderiza o modelo 1 -->
    <main>
        <div class="model">
            <h2>Modelo 1</h2>
            <div class="image"></div>
        </div>
        <div class="edit">
            <form action="">
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="20" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="30" rows="3"></textarea>
            </div>
            <input type="submit" value="Gerar Documento">
        </div>
    </form>
            
    </main>
    
@elseif($id == 2)
    <!-- renderiza o modelo 2 -->
    <main>
    <div class="model">
        <h2>Modelo 2</h2>
        <div class="image"></div>
    </div>
    <div class="edit">
        <form action="/model/enviar" method="post">
        @csrf

            <div class="edit-line">
                <p>Data:</p>
                <input name="data" id="" cols="20" rows="3"/>
            </div>
            <div class="edit-line">
                <p>Peticionário:</p>
                <input name="peticionario" id="" cols="20" rows="3"/>
            </div>
            <div class="edit-line">
                <p>Natureza:</p>
                <input name="natureza" id="" cols="20" rows="3"/>
            </div>
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="20" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 2:</p>
                <textarea name="linha2" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 3:</p>
                <textarea name="linha3" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 4:</p>
                <textarea name="linha4" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 5:</p>
                <textarea name="linha5" id="" cols="30" rows="3"></textarea>
            </div>
            <input type="submit" value="Gerar Documento">

    </div>
    </form>
    
</main>

@elseif($id == 3)
<main>
    <div class="model">
        <h2>Modelo 3</h2>
        <div class="image"></div>
    </div>
    <div class="edit">
        <form action="">
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="20" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="edit-line">
                <p>Linha 1:</p>
                <textarea name="linha1" id="" cols="30" rows="3"></textarea>
            </div>
            <input type="submit" value="Gerar Documento">
    </div>
    </form>

</main>

@endif