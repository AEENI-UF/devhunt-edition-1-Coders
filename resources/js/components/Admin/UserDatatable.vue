<template>
    <div>
    <data-table
    :url="url"
    :columns="columns"
    :per-page="perPage">

    <span slot="pagination" slot-scope="{ links, meta }">
        <paginator 
            :meta="meta"
            :links="links"
            @next="updateUrl"
            @prev="updateUrl">
        </paginator>
    </span>
</data-table>
    </div>
</template>
<script>
import ExampleButton from './ExampleButton.vue';
export default {
    data() {
        return {
            url: 'http://vue-datatable.test/ajax',
            perPage: ['10', '25', '50'],
            columns: [
            {
                label: 'ID',
                name: 'id',
                filterable: true,
            },
            {
                label: 'Name',
                 name: 'name',
                filterable: true,
            },
            {
                label: 'Email',
                name: 'email',
                filterable: true,
            },
            {
                label: '',
                name: 'View',
                filterable: false,
                component: ExampleButton,
                event: "click",
                handler: this.alertMe,
                classes: { 
                    'btn': true,
                    'btn-primary': true,
                    'btn-sm': true,
                } 
            },
            ]
        }
    },
    components: {
        ExampleButton,
    },
    methods: {
        alertMe(data) {
            alert("hey");
        }
    },
    mounted(){
        console.log('mandehg')
    }
}
</script>
