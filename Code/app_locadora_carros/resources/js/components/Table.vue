<template>

    <div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" v-for="t, key in titulos" :key="key" class="text-uppercase">{{t}}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="obj in dados" :key="obj.id">
                    <td  v-for="valor, chave in filtrarObjeto(obj)" :key="chave">
                       <span v-if="chave == 'imagem'">
                            <img :src="'/storage/'+valor" width="30" height="30">
                       </span>
                       <span v-else>
                            {{valor}}
                       </span>
                    </td>

                    <!--
                    <th scope="row">{{m.id}}</th>
                    <td>{{m.nome}}</td>
                    <td><img :src="'/storage/' + m.imagem" width="30" height="30"></td>
                    -->
                </tr>
            </tbody>
        </table>

    </div>

</template>

<script>
    export default {
        props: ['dados', 'titulos'],
        methods: {
            filtrarObjeto(obj) {
                if (!obj) return {};
                return Object.fromEntries(
                    Object.entries(obj).filter(([chave]) =>
                    this.titulos.includes(chave)
                    )
                );
            }
        }
    }
</script>