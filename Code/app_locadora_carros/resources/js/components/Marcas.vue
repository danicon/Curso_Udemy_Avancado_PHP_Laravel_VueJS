<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- Inicio do card de busca -->
                <card-component titulo="Busca de marcas">
                    <template v-slot:conteudo>
                        <div class="row">
                            <div class="col mb-3">

                                <input-container-component titulo="ID" id="inputId" id-help="idHelp" texto-ajuda="Opcional. Informe o ID da marca">
                                    <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="ID">
                                </input-container-component>                                      
                                
                            </div>
                            <div class="col mb-3">

                                <input-container-component titulo="Nome da marca" id="inputNome" id-help="nomeHelp" texto-ajuda="Opcional. Informe o nome da marca">
                                    <input type="text" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Nome da marca">
                                </input-container-component>  

                            </div>      
                        </div>
                    </template>

                    <template v-slot:rodape>
                        <button type="submit" class="btn btn-primary btn-sm float-end">Pesquisar</button>
                    </template>
                </card-component>
                <!-- Final do card de busca -->

                <!-- Inicio do card de listagem de marcas -->
                <card-component titulo="Relação de marcas">
                    <template v-slot:conteudo>
                        <table-component></table-component>  
                    </template>

                    <template v-slot:rodape>
                        <button type="button" class="btn btn-primary btn-sm float-end">Adicionar</button>
                    </template>
                </card-component>
                <!-- Fim do card de listagem de marcas -->

            </div>
        </div>
    </div>
</template>

<script>
    
</script>
