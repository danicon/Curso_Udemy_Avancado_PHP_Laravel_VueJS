<template>

    <div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" v-for="t, key in titulos" :key="key">{{t.titulo}}</th>
                    <th v-if="visualizar.visivel || atualizar || remover.visivel"></th>
                </tr>
            </thead>
            <tbody>

                <tr v-for="obj, chave in dadosFiltrados" :key="chave">
                    <td v-for="valor, chaveValor in obj" :key="chaveValor">
                        <span v-if="titulos[chaveValor].tipo == 'texto'">{{valor}}</span>
                        <span v-if="titulos[chaveValor].tipo == 'data'">{{'...'+valor}}</span>
                        <span v-if="titulos[chaveValor].tipo == 'imagem'">
                            <img :src="'/storage/'+valor" width="30" height="30">
                        </span>
                    </td>
                    <td v-if="visualizar.visivel || atualizar || remover.visivel">
                        <button  v-if="visualizar.visivel" class="btn btn-outline-primary btn-sm" :data-bs-toggle="visualizar.dataToggle" :data-bs-target="visualizar.dataTarget" @click="setStore(obj)">Visualizar</button>
                        <button v-if="atualizar" class="btn btn-outline-primary btn-sm">Atualizar</button>
                        <button v-if="remover.visivel" class="btn btn-outline-danger btn-sm" :data-bs-toggle="remover.dataToggle" :data-bs-target="remover.dataTarget" @click="setStore(obj)">Remover</button>
                    </td>
                </tr>

                <!--
                <tr v-for="obj in dados" :key="obj.id">
                    <td  v-for="valor, chave in filtrarObjeto(obj)" :key="chave">
                       <span v-if="chave == 'imagem'">
                            <img :src="'/storage/'+valor" width="30" height="30">
                       </span>
                       <span v-else>
                            {{valor}}
                       </span>
                    </td>

                    <th scope="row">{{m.id}}</th>
                    <td>{{m.nome}}</td>
                    <td><img :src="'/storage/' + m.imagem" width="30" height="30"></td>
                    
                </tr>
                -->
            </tbody>
        </table>

    </div>

</template>

<script>
    export default {
        props: ['dados', 'titulos', 'atualizar', 'visualizar', 'remover'],
        methods: {
            setStore(obj) {
                this.$store.state.item = obj
                // console.log(obj)
            }
        },
        computed: {
            dadosFiltrados() {

                // console.log(this.dados)
                let campos = Object.keys(this.titulos)
                let dadosFiltrados = []
                // console.log(campos)
                // console.log(this.dados)

                this.dados.map((item, chave) => {
                    // console.log(chave, item)

                    let itemFiltrado = {}
                    campos.forEach(campo => {
                        // console.log(campo)
                        itemFiltrado[campo] = item[campo] //utilizar a sintaxe de array para atribuir valores a objetos
                        // console.log(chave, item, campo)
                    })
                    
                    dadosFiltrados.push(itemFiltrado)
                    
                })

                // console.log(dadosFiltrados)

                return dadosFiltrados //retorne um array de objetos
            }
        }

        // methods: {
        //     filtrarObjeto(obj) {
        //         if (!obj) return {};
        //         return Object.fromEntries(
        //             Object.entries(obj).filter(([chave]) =>
        //             this.titulos.includes(chave)
        //             )
        //         );
        //     }
        // }
    }
</script>